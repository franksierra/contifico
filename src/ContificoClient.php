<?php

namespace Contifico;

use Contifico\Apis\LocationsApi;
use Contifico\Utils\CompatibilityConverter;
use Core\Client;
use Core\ClientBuilder;
use Core\Request\Parameters\AdditionalHeaderParams;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\TemplateParam;
use Core\Utils\CoreHelper;
use Unirest\Configuration;
use Unirest\HttpClient;

class ContificoClient implements ConfigurationInterface {


	private const ENVIRONMENT_MAP = [
		Environment::PRODUCTION => [ Server::DEFAULT_ => 'https://api.contifico.com/sistema/api' ],
		Environment::SANDBOX    => [ Server::DEFAULT_ => 'https://api.contifico.com/sistema/api' ],
		Environment::CUSTOM     => [ Server::DEFAULT_ => '{custom_url}' ]
	];
	private array $config;
	private BearerAuthManager $bearerAuthManager;
	private Client $client;
	private LocationsApi $locations;

	public function __construct( array $config = [] ) {
		$this->config            = array_merge( ConfigurationDefaults::_ALL, CoreHelper::clone( $config ) );
		$this->bearerAuthManager = new BearerAuthManager(
			$this->config['accessToken'] ?? ConfigurationDefaults::ACCESS_TOKEN
		);
		$this->validateConfig();
		$this->client = ClientBuilder::init( new HttpClient( Configuration::init( $this ) ) )
		                             ->converter( new CompatibilityConverter() )
		                             ->jsonHelper( ApiHelper::getJsonHelper() )
		                             ->apiCallback( $this->config['httpCallback'] ?? null )
		                             ->userAgent(
			                             'Contifico-PHP-SDK/1.0.0 ({api-version}) {engine}/{engine-version} ({os-' .
			                             'info}) {detail}'
		                             )
		                             ->userAgentConfig(
			                             [
				                             '{api-version}' => $this->getContificoVersion(),
				                             '{detail}'      => rawurlencode( $this->getUserAgentDetail() )
			                             ]
		                             )
		                             ->globalConfig( $this->getGlobalConfiguration() )
		                             ->globalRuntimeParam( AdditionalHeaderParams::init( $this->getAdditionalHeaders() ) )
		                             ->serverUrls( self::ENVIRONMENT_MAP[ $this->getEnvironment() ], Server::DEFAULT_ )
		                             ->authManagers( [ 'global' => $this->bearerAuthManager ] )
		                             ->build();
	}

	private function validateConfig(): void {
		ContificoClientBuilder::init()
		                      ->additionalHeaders( $this->getAdditionalHeaders() )
		                      ->userAgentDetail( $this->getUserAgentDetail() );
	}

	public function getAdditionalHeaders(): array {
		return $this->config['additionalHeaders'] ?? ConfigurationDefaults::ADDITIONAL_HEADERS;
	}

	public function getUserAgentDetail(): string {
		return $this->config['userAgentDetail'] ?? ConfigurationDefaults::USER_AGENT_DETAIL;
	}

	public function getContificoVersion(): string {
		return $this->config['contificoVersion'] ?? ConfigurationDefaults::CONTIFICO_VERSION;
	}

	private function getGlobalConfiguration(): array {
		return [
			TemplateParam::init( 'custom_url', $this->getCustomUrl() )->dontEncode(),
			HeaderParam::init( 'Contifico-Version', $this->getContificoVersion() )
		];
	}

	public function getCustomUrl(): string {
		return $this->config['customUrl'] ?? ConfigurationDefaults::CUSTOM_URL;
	}

	public function getEnvironment(): string {
		return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
	}

	public function getConfiguration(): array {
		return $this->toBuilder()->getConfiguration();
	}

	public function toBuilder(): ContificoClientBuilder {
		return ContificoClientBuilder::init()
		                             ->timeout( $this->getTimeout() )
		                             ->enableRetries( $this->shouldEnableRetries() )
		                             ->numberOfRetries( $this->getNumberOfRetries() )
		                             ->retryInterval( $this->getRetryInterval() )
		                             ->backOffFactor( $this->getBackOffFactor() )
		                             ->maximumRetryWaitTime( $this->getMaximumRetryWaitTime() )
		                             ->retryOnTimeout( $this->shouldRetryOnTimeout() )
		                             ->httpStatusCodesToRetry( $this->getHttpStatusCodesToRetry() )
		                             ->httpMethodsToRetry( $this->getHttpMethodsToRetry() )
		                             ->contificoVersion( $this->getContificoVersion() )
		                             ->additionalHeaders( $this->getAdditionalHeaders() )
		                             ->userAgentDetail( $this->getUserAgentDetail() )
		                             ->environment( $this->getEnvironment() )
		                             ->customUrl( $this->getCustomUrl() )
		                             ->accessToken( $this->bearerAuthManager->getAccessToken() )
		                             ->httpCallback( $this->config['httpCallback'] ?? null );
	}

	public function getTimeout(): int {
		return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
	}

	public function shouldEnableRetries(): bool {
		return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
	}

	public function getNumberOfRetries(): int {
		return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
	}

	public function getRetryInterval(): float {
		return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
	}

	public function getBackOffFactor(): float {
		return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
	}

	public function getMaximumRetryWaitTime(): int {
		return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
	}

	public function shouldRetryOnTimeout(): bool {
		return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
	}

	public function getHttpStatusCodesToRetry(): array {
		return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
	}

	public function getHttpMethodsToRetry(): array {
		return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
	}

	public function getBearerAuthCredentials(): ?BearerAuthCredentials {
		return $this->bearerAuthManager;
	}

	public function getBaseUri( string $server = Server::DEFAULT_ ): string {
		return $this->client->getGlobalRequest( $server )->getQueryUrl();
	}

	public function getLocationsApi() {
		if ( empty( $this->locations ) ) {
			$this->locations = new LocationsApi( $this->client );
		}

		return $this->locations;
	}
}
