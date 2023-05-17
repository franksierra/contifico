<?php

namespace Contifico\Exceptions;

use Contifico\Http\HttpRequest;
use Contifico\Http\HttpResponse;
use CoreInterfaces\Sdk\ExceptionInterface;

class ApiException extends \Exception implements ExceptionInterface {
	/**
	 * HTTP request
	 *
	 * @var HttpRequest
	 */
	private $request;

	/**
	 * HTTP response
	 *
	 * @var HttpResponse|null
	 */
	private $response;

	/**
	 * @param string $reason the reason for raising an exception
	 * @param HttpRequest $request
	 */
	public function __construct( string $reason, HttpRequest $request, ?HttpResponse $response = null ) {
		parent::__construct( $reason, \is_null( $response ) ? 0 : $response->getStatusCode() );
		$this->request  = $request;
		$this->response = $response;
	}

	/**
	 * Returns the HTTP request
	 */
	public function getHttpRequest(): HttpRequest {
		return $this->request;
	}

	/**
	 * Returns the HTTP response
	 */
	public function getHttpResponse(): ?HttpResponse {
		return $this->response;
	}

	/**
	 * Is the response available?
	 */
	public function hasResponse(): bool {
		return ! \is_null( $this->response );
	}
}
