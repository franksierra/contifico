<?php

declare( strict_types=1 );

namespace Contifico\Apis;

use Core\ApiCall;
use Core\Client;
use Core\Request\RequestBuilder;
use Core\Response\ResponseHandler;

/**
 * Base controller
 */
class BaseApi {
	/**
	 * Client instance
	 *
	 * @var Client
	 */
	private $client;

	public function __construct( Client $client ) {
		$this->client = $client;
	}

	/**
	 * @throws \Contifico\Exceptions\ApiException Thrown if API call fails
	 */
	protected function execute( RequestBuilder $requestBuilder, ?ResponseHandler $responseHandler = null ) {
		return ( new ApiCall( $this->client ) )
			->requestBuilder( $requestBuilder )
			->responseHandler( $responseHandler ?? $this->responseHandler() )
			->execute();
	}

	protected function responseHandler(): ResponseHandler {
		return $this->client->getGlobalResponseHandler();
	}

	protected function requestBuilder( string $requestMethod, string $path ): RequestBuilder {
		return new RequestBuilder( $requestMethod, $path );
	}
}
