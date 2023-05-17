<?php

declare( strict_types=1 );

namespace Contifico\Models;

use stdClass;

class Location implements \JsonSerializable {
	/**
	 * @var string|null
	 */
	private $id;

	/**
	 * @var string|null
	 */
	private $codigo;

	/**
	 * @var string|null
	 */
	private $nombre;

	/**
	 * @var bool|null
	 */
	private $compra;

	/**
	 * @var bool|null
	 */
	private $produccion;

	/**
	 * @var bool|null
	 */
	private $venta;

	/**
	 * @return string|null
	 */
	public function getId(): ?string {
		return $this->id;
	}

	/**
	 * @param string|null $id
	 */
	public function setId( ?string $id ): void {
		$this->id = $id;
	}

	/**
	 * @return string|null
	 */
	public function getCodigo(): ?string {
		return $this->codigo;
	}

	/**
	 * @param string|null $codigo
	 */
	public function setCodigo( ?string $codigo ): void {
		$this->codigo = $codigo;
	}

	/**
	 * @return string|null
	 */
	public function getNombre(): ?string {
		return $this->nombre;
	}

	/**
	 * @param string|null $nombre
	 */
	public function setNombre( ?string $nombre ): void {
		$this->nombre = $nombre;
	}

	/**
	 * @return bool|null
	 */
	public function getCompra(): ?bool {
		return $this->compra;
	}

	/**
	 * @param bool|null $compra
	 */
	public function setCompra( ?bool $compra ): void {
		$this->compra = $compra;
	}

	/**
	 * @return bool|null
	 */
	public function getProduccion(): ?bool {
		return $this->produccion;
	}

	/**
	 * @param bool|null $produccion
	 */
	public function setProduccion( ?bool $produccion ): void {
		$this->produccion = $produccion;
	}

	/**
	 * @return bool|null
	 */
	public function getVenta(): ?bool {
		return $this->venta;
	}

	/**
	 * @param bool|null $venta
	 */
	public function setVenta( ?bool $venta ): void {
		$this->venta = $venta;
	}


	/**
	 * Encode this object to JSON
	 *
	 * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
	 *        are set. (default: false)
	 *
	 * @return array|stdClass
	 */
	#[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
	public function jsonSerialize(
		bool $asArrayWhenEmpty = false
	) {
		$json = [];
		if ( isset( $this->id ) ) {
			$json['id'] = $this->id;
		}
		if ( ! empty( $this->codigo ) ) {
			$json['codigo'] = $this->codigo;
		}
		if ( isset( $this->nombre ) ) {
			$json['nombre'] = $this->nombre;
		}
		if ( ! empty( $this->compra ) ) {
			$json['compra'] = $this->compra;
		}
		if ( isset( $this->produccion ) ) {
			$json['produccion'] = $this->produccion;
		}
		if ( isset( $this->venta ) ) {
			$json['venta'] = $this->venta;
		}
		$json = array_filter( $json, function ( $val ) {
			return $val !== null;
		} );

		return ( ! $asArrayWhenEmpty && empty( $json ) ) ? new stdClass() : $json;
	}
}
