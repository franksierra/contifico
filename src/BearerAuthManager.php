<?php

namespace Contifico;

use Core\Authentication\CoreAuth;
use Core\Request\Parameters\HeaderParam;

class BearerAuthManager extends CoreAuth implements BearerAuthCredentials {
	private $accessToken;

	public function __construct( string $accessToken ) {
//		parent::__construct( HeaderParam::init( 'Authorization', 'Bearer ' . $accessToken )->required() );
		parent::__construct( HeaderParam::init( 'Authorization', '' . $accessToken )->required() );
		$this->accessToken = $accessToken;
	}
	public function getAccessToken(): string {
		return $this->accessToken;
	}

	public function equals( string $accessToken ): bool {
		return $accessToken == $this->accessToken;
	}
}
