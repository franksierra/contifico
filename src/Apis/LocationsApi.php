<?php

namespace Contifico\Apis;

use Contifico\Http\ApiResponse;
use CoreInterfaces\Core\Request\RequestMethod;

class LocationsApi extends BaseApi {

	public function listLocations(): ApiResponse {
		$_reqBuilder = $this->requestBuilder( RequestMethod::GET, '/v1/bodega' )->auth( 'global' );

		$_resHandler = $this->responseHandler()->typeGroup(
			"anyOf(Location)[]"
		)->returnApiResponse();

//		$_resHandler = $this->responseHandler()->type( Location::class, 1)->returnApiResponse();

		return $this->execute( $_reqBuilder, $_resHandler );
	}
}
