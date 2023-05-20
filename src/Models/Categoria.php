<?php

namespace Contifico\Models;

class Categoria implements \JsonSerializable {
	/**
	 * @var string|null
	 */
	private $id;
	/**
	 * @var string|null
	 */
	private $padre_id;
	/**
	 * @var string|null
	 */
	private $nombre;
	/**
	 * @var bool|null
	 */
	private $agrupar;
	/**
	 * @var string|null
	 */
	private $tipo_producto;
	/**
	 * @var string|null
	 */
	private $cuenta_compra;
	/**
	 * @var string|null
	 */
	private $cuenta_venta;
	/**
	 * @var string|null
	 */
	private $cuenta_inventario;
	/**
	 * @var bool|null
	 */
	private $para_supereasy;
	/**
	 * @var bool|null
	 */
	private $para_comisariato;

	/**
	 * @return string|null
	 */
	public function getId(): ?string {
		return $this->id;
	}

	/**
	 * @param string|null $id
	 *
	 * @return Categoria
	 */
	public function setId( ?string $id ): Categoria {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPadreId(): ?string {
		return $this->padre_id;
	}

	/**
	 * @param string|null $padre_id
	 *
	 * @return Categoria
	 */
	public function setPadreId( ?string $padre_id ): Categoria {
		$this->padre_id = $padre_id;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getNombre(): ?string {
		return $this->nombre;
	}

	/**
	 * @param string|null $nombre
	 *
	 * @return Categoria
	 */
	public function setNombre( ?string $nombre ): Categoria {
		$this->nombre = $nombre;

		return $this;
	}

	/**
	 * @return bool|null
	 */
	public function getAgrupar(): ?bool {
		return $this->agrupar;
	}

	/**
	 * @param bool|null $agrupar
	 *
	 * @return Categoria
	 */
	public function setAgrupar( ?bool $agrupar ): Categoria {
		$this->agrupar = $agrupar;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getTipoProducto(): ?string {
		return $this->tipo_producto;
	}

	/**
	 * @param string|null $tipo_producto
	 *
	 * @return Categoria
	 */
	public function setTipoProducto( ?string $tipo_producto ): Categoria {
		$this->tipo_producto = $tipo_producto;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getCuentaCompra(): ?string {
		return $this->cuenta_compra;
	}

	/**
	 * @param string|null $cuenta_compra
	 *
	 * @return Categoria
	 */
	public function setCuentaCompra( ?string $cuenta_compra ): Categoria {
		$this->cuenta_compra = $cuenta_compra;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getCuentaVenta(): ?string {
		return $this->cuenta_venta;
	}

	/**
	 * @param string|null $cuenta_venta
	 *
	 * @return Categoria
	 */
	public function setCuentaVenta( ?string $cuenta_venta ): Categoria {
		$this->cuenta_venta = $cuenta_venta;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getCuentaInventario(): ?string {
		return $this->cuenta_inventario;
	}

	/**
	 * @param string|null $cuenta_inventario
	 *
	 * @return Categoria
	 */
	public function setCuentaInventario( ?string $cuenta_inventario ): Categoria {
		$this->cuenta_inventario = $cuenta_inventario;

		return $this;
	}

	/**
	 * @return bool|null
	 */
	public function getParaSupereasy(): ?bool {
		return $this->para_supereasy;
	}

	/**
	 * @param bool|null $para_supereasy
	 *
	 * @return Categoria
	 */
	public function setParaSupereasy( ?bool $para_supereasy ): Categoria {
		$this->para_supereasy = $para_supereasy;

		return $this;
	}

	/**
	 * @return bool|null
	 */
	public function getParaComisariato(): ?bool {
		return $this->para_comisariato;
	}

	/**
	 * @param bool|null $para_comisariato
	 *
	 * @return Categoria
	 */
	public function setParaComisariato( ?bool $para_comisariato ): Categoria {
		$this->para_comisariato = $para_comisariato;

		return $this;
	}

	#[ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
	public function jsonSerialize(
		bool $asArrayWhenEmpty = false
	) {
		$json = [];
		if ( isset( $this->id ) ) {
			$json['id'] = $this->id;
		}
		if ( isset( $this->padre_id ) ) {
			$json['padre_id'] = $this->padre_id;
		}
		if ( isset( $this->nombre ) ) {
			$json['nombre'] = $this->nombre;
		}
		if ( isset( $this->agrupar ) ) {
			$json['agrupar'] = $this->agrupar;
		}
		if ( isset( $this->tipo_producto ) ) {
			$json['tipo_producto'] = $this->tipo_producto;
		}
		if ( isset( $this->cuenta_compra ) ) {
			$json['cuenta_compra'] = $this->cuenta_compra;
		}
		if ( isset( $this->cuenta_venta ) ) {
			$json['cuenta_venta'] = $this->cuenta_venta;
		}
		if ( isset( $this->cuenta_inventario ) ) {
			$json['cuenta_inventario'] = $this->cuenta_inventario;
		}
		if ( isset( $this->para_supereasy ) ) {
			$json['para_supereasy'] = $this->para_supereasy;
		}
		if ( isset( $this->para_comisariato ) ) {
			$json['para_comisariato'] = $this->para_comisariato;
		}

		$json = array_filter( $json, function ( $val ) {
			return $val !== null;
		} );

		return ( ! $asArrayWhenEmpty && empty( $json ) ) ? new \stdClass() : $json;
	}
}
