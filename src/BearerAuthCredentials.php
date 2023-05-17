<?php

namespace Contifico;

interface BearerAuthCredentials {
	public function getAccessToken(): string;

	public function equals( string $accessToken ): bool;
}
