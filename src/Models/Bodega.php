<?php

namespace Contifico\Models;

class Bodega implements \JsonSerializable {
	/**
	 * Indica si la bodega está marcada para la venta.
	 * @var bool
	 */
	private $venta;

	/**
	 * Indica si la bodega está marcada para producción.
	 * @var bool
	 */
	private $produccion;

	/**
	 * Indica si la bodega está marcada para la compra.
	 * @var bool
	 */
	private $compra;

	/**
	 * Nombre de la bodega.
	 * @var string
	 */
	private $nombre;

	/**
	 * Código de la bodega.
	 * @var string
	 */
	private $codigo;

	/**
	 * Identificador de la bodega en el sistema.
	 * @var string
	 */
	private $id;

	/**
	 * @return bool
	 */
	public function isVenta(): bool {
		return $this->venta;
	}

	/**
	 * @param bool $venta
	 *
	 * @return Bodega
	 */
	public function setVenta( bool $venta ): Bodega {
		$this->venta = $venta;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isProduccion(): bool {
		return $this->produccion;
	}

	/**
	 * @param bool $produccion
	 *
	 * @return Bodega
	 */
	public function setProduccion( bool $produccion ): Bodega {
		$this->produccion = $produccion;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isCompra(): bool {
		return $this->compra;
	}

	/**
	 * @param bool $compra
	 *
	 * @return Bodega
	 */
	public function setCompra( bool $compra ): Bodega {
		$this->compra = $compra;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getNombre(): string {
		return $this->nombre;
	}

	/**
	 * @param string $nombre
	 *
	 * @return Bodega
	 */
	public function setNombre( string $nombre ): Bodega {
		$this->nombre = $nombre;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCodigo(): string {
		return $this->codigo;
	}

	/**
	 * @param string $codigo
	 *
	 * @return Bodega
	 */
	public function setCodigo( string $codigo ): Bodega {
		$this->codigo = $codigo;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getId(): string {
		return $this->id;
	}

	/**
	 * @param string $id
	 *
	 * @return Bodega
	 */
	public function setId( string $id ): Bodega {
		$this->id = $id;

		return $this;
	}


	public function jsonSerialize( bool $asArrayWhenEmpty = false ) {
		$json = [];
		if ( isset( $this->id ) ) {
			$json['venta'] = $this->venta;
		}
		if ( isset( $this->id ) ) {
			$json['produccion'] = $this->produccion;
		}
		if ( isset( $this->id ) ) {
			$json['compra'] = $this->compra;
		}
		if ( isset( $this->id ) ) {
			$json['nombre'] = $this->nombre;
		}
		if ( isset( $this->id ) ) {
			$json['codigo'] = $this->codigo;
		}
		if ( isset( $this->id ) ) {
			$json['id'] = $this->id;
		}
		$json = array_filter( $json, function ( $val ) {
			return $val !== null;
		} );

		return ( ! $asArrayWhenEmpty && empty( $json ) ) ? new \stdClass() : $json;
	}
}
