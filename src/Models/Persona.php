<?php

namespace Contifico\Models;

use JsonSerializable;
use stdClass;

class Persona implements JsonSerializable {
	/**
	 * Identificador de la cuenta en el sistema.
	 * @var string
	 */
	private $id;

	/**
	 * Informacion adicional del cliente.
	 * @var string
	 */
	private $adicionales_cliente;

	/**
	 * Identificador de la persona asociada a la persona actual.
	 * @var string
	 */
	private $personaasociada_id;

	/**
	 * Direccion de la persona.
	 * @var string
	 */
	private $direccion;

	/**
	 * Rol vendedor de la persona.
	 * @var bool
	 */
	private $es_vendedor;

	/**
	 * Tipo de persona (N:Natural J:Juridica I:SinId P:Placa).
	 * @var string
	 */
	private $tipo;

	/**
	 * Razon social de la persona.
	 * @var string
	 */
	private $razon_social;

	/**
	 * Nombre comercial de la persona.
	 * @var string
	 */
	private $nombre_comercial;

	/**
	 * Rol corporativo de la persona.
	 * @var bool
	 */
	private $es_corporativo;

	/**
	 * Descuento de tipo cliente (2 decimales Max).
	 * @var float
	 */
	private $porcentaje_descuento;

	/**
	 * Tipo de POS desde el cual se registro.
	 * @var string
	 */
	private $origen;

	/**
	 * Ruc de la persona.
	 * @var string
	 */
	private $ruc;

	/**
	 * Codigo de banco asociado a la persona.
	 * @var string
	 */
	private $banco_codigo_id;

	/**
	 * Correo de la persona.
	 * @var string
	 */
	private $email;

	/**
	 * Rol vendedor de la persona.
	 * @var bool
	 */
	private $es_cliente;

	/**
	 * Informacion adicional del proveedor.
	 * @var string
	 */
	private $adicionales_proveedor;

	/**
	 * Numero de tarjeta de la persona.
	 * @var string
	 */
	private $numero_tarjeta;

	/**
	 * Verificador de personas extranjeras.
	 * @var bool
	 */
	private $es_extranjero;

	/**
	 * Rol empleado de la persona.
	 * @var bool
	 */
	private $es_empleado;

	/**
	 * Rol proveedor de la persona.
	 * @var bool
	 */
	private $es_proveedor;

	/**
	 * Verificador si la persona tiene un cupo maximo como cliente.
	 * @var bool
	 */
	private $aplicar_cupo;

	/**
	 * Telefono de la persona.
	 * @var string
	 */
	private $telefonos;

	/**
	 * tipo de la cuenta contable asociada.
	 * @var string
	 */
	private $tipo_cuenta;

	/**
	 * Placa de la persona si es de tipo placa.
	 * @var string
	 */
	private $placa;

	/**
	 * Cedula de la persona.
	 * @var string
	 */
	private $cedula;

	/**
	 * Identificador de la categoria persona en el sistema.
	 * @var string
	 */
	private $id_categoria;

	/**
	 * Nombre de la categoria asociada a la persona.
	 * @var string
	 */
	private $categoria_nombre;

	/**
	 * @return string
	 */
	public function getId(): string {
		return $this->id;
	}

	/**
	 * @param string $id
	 *
	 * @return Persona
	 */
	public function setId( string $id ): Persona {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAdicionalesCliente(): string {
		return $this->adicionales_cliente;
	}

	/**
	 * @param string $adicionales_cliente
	 *
	 * @return Persona
	 */
	public function setAdicionalesCliente( string $adicionales_cliente ): Persona {
		$this->adicionales_cliente = $adicionales_cliente;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPersonaasociadaId(): string {
		return $this->personaasociada_id;
	}

	/**
	 * @param string $personaasociada_id
	 *
	 * @return Persona
	 */
	public function setPersonaasociadaId( string $personaasociada_id ): Persona {
		$this->personaasociada_id = $personaasociada_id;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDireccion(): string {
		return $this->direccion;
	}

	/**
	 * @param string $direccion
	 *
	 * @return Persona
	 */
	public function setDireccion( string $direccion ): Persona {
		$this->direccion = $direccion;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isEsVendedor(): bool {
		return $this->es_vendedor;
	}

	/**
	 * @param bool $es_vendedor
	 *
	 * @return Persona
	 */
	public function setEsVendedor( bool $es_vendedor ): Persona {
		$this->es_vendedor = $es_vendedor;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTipo(): string {
		return $this->tipo;
	}

	/**
	 * @param string $tipo
	 *
	 * @return Persona
	 */
	public function setTipo( string $tipo ): Persona {
		$this->tipo = $tipo;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRazonSocial(): string {
		return $this->razon_social;
	}

	/**
	 * @param string $razon_social
	 *
	 * @return Persona
	 */
	public function setRazonSocial( string $razon_social ): Persona {
		$this->razon_social = $razon_social;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getNombreComercial(): string {
		return $this->nombre_comercial;
	}

	/**
	 * @param string $nombre_comercial
	 *
	 * @return Persona
	 */
	public function setNombreComercial( string $nombre_comercial ): Persona {
		$this->nombre_comercial = $nombre_comercial;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isEsCorporativo(): bool {
		return $this->es_corporativo;
	}

	/**
	 * @param bool $es_corporativo
	 *
	 * @return Persona
	 */
	public function setEsCorporativo( bool $es_corporativo ): Persona {
		$this->es_corporativo = $es_corporativo;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getPorcentajeDescuento(): float {
		return $this->porcentaje_descuento;
	}

	/**
	 * @param float $porcentaje_descuento
	 *
	 * @return Persona
	 */
	public function setPorcentajeDescuento( float $porcentaje_descuento ): Persona {
		$this->porcentaje_descuento = $porcentaje_descuento;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOrigen(): string {
		return $this->origen;
	}

	/**
	 * @param string $origen
	 *
	 * @return Persona
	 */
	public function setOrigen( string $origen ): Persona {
		$this->origen = $origen;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRuc(): string {
		return $this->ruc;
	}

	/**
	 * @param string $ruc
	 *
	 * @return Persona
	 */
	public function setRuc( string $ruc ): Persona {
		$this->ruc = $ruc;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBancoCodigoId(): string {
		return $this->banco_codigo_id;
	}

	/**
	 * @param string $banco_codigo_id
	 *
	 * @return Persona
	 */
	public function setBancoCodigoId( string $banco_codigo_id ): Persona {
		$this->banco_codigo_id = $banco_codigo_id;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string {
		return $this->email;
	}

	/**
	 * @param string $email
	 *
	 * @return Persona
	 */
	public function setEmail( string $email ): Persona {
		$this->email = $email;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isEsCliente(): bool {
		return $this->es_cliente;
	}

	/**
	 * @param bool $es_cliente
	 *
	 * @return Persona
	 */
	public function setEsCliente( bool $es_cliente ): Persona {
		$this->es_cliente = $es_cliente;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAdicionalesProveedor(): string {
		return $this->adicionales_proveedor;
	}

	/**
	 * @param string $adicionales_proveedor
	 *
	 * @return Persona
	 */
	public function setAdicionalesProveedor( string $adicionales_proveedor ): Persona {
		$this->adicionales_proveedor = $adicionales_proveedor;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getNumeroTarjeta(): string {
		return $this->numero_tarjeta;
	}

	/**
	 * @param string $numero_tarjeta
	 *
	 * @return Persona
	 */
	public function setNumeroTarjeta( string $numero_tarjeta ): Persona {
		$this->numero_tarjeta = $numero_tarjeta;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isEsExtranjero(): bool {
		return $this->es_extranjero;
	}

	/**
	 * @param bool $es_extranjero
	 *
	 * @return Persona
	 */
	public function setEsExtranjero( bool $es_extranjero ): Persona {
		$this->es_extranjero = $es_extranjero;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isEsEmpleado(): bool {
		return $this->es_empleado;
	}

	/**
	 * @param bool $es_empleado
	 *
	 * @return Persona
	 */
	public function setEsEmpleado( bool $es_empleado ): Persona {
		$this->es_empleado = $es_empleado;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isEsProveedor(): bool {
		return $this->es_proveedor;
	}

	/**
	 * @param bool $es_proveedor
	 *
	 * @return Persona
	 */
	public function setEsProveedor( bool $es_proveedor ): Persona {
		$this->es_proveedor = $es_proveedor;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isAplicarCupo(): bool {
		return $this->aplicar_cupo;
	}

	/**
	 * @param bool $aplicar_cupo
	 *
	 * @return Persona
	 */
	public function setAplicarCupo( bool $aplicar_cupo ): Persona {
		$this->aplicar_cupo = $aplicar_cupo;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTelefonos(): string {
		return $this->telefonos;
	}

	/**
	 * @param string $telefonos
	 *
	 * @return Persona
	 */
	public function setTelefonos( string $telefonos ): Persona {
		$this->telefonos = $telefonos;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTipoCuenta(): string {
		return $this->tipo_cuenta;
	}

	/**
	 * @param string $tipo_cuenta
	 *
	 * @return Persona
	 */
	public function setTipoCuenta( string $tipo_cuenta ): Persona {
		$this->tipo_cuenta = $tipo_cuenta;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPlaca(): string {
		return $this->placa;
	}

	/**
	 * @param string $placa
	 *
	 * @return Persona
	 */
	public function setPlaca( string $placa ): Persona {
		$this->placa = $placa;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCedula(): string {
		return $this->cedula;
	}

	/**
	 * @param string $cedula
	 *
	 * @return Persona
	 */
	public function setCedula( string $cedula ): Persona {
		$this->cedula = $cedula;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getIdCategoria(): string {
		return $this->id_categoria;
	}

	/**
	 * @param string $id_categoria
	 *
	 * @return Persona
	 */
	public function setIdCategoria( string $id_categoria ): Persona {
		$this->id_categoria = $id_categoria;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCategoriaNombre(): string {
		return $this->categoria_nombre;
	}

	/**
	 * @param string $categoria_nombre
	 *
	 * @return Persona
	 */
	public function setCategoriaNombre( string $categoria_nombre ): Persona {
		$this->categoria_nombre = $categoria_nombre;

		return $this;
	}

	public function jsonSerialize( bool $asArrayWhenEmpty = false ) {
		$json = [];
		if ( isset( $this->id ) ) {
			$json['id'] = $this->id;
		}
		if ( isset( $this->id ) ) {
			$json['adicionales_cliente'] = $this->adicionales_cliente;
		}
		if ( isset( $this->id ) ) {
			$json['personaasociada_id'] = $this->personaasociada_id;
		}
		if ( isset( $this->id ) ) {
			$json['direccion'] = $this->direccion;
		}
		if ( isset( $this->id ) ) {
			$json['es_vendedor'] = $this->es_vendedor;
		}
		if ( isset( $this->id ) ) {
			$json['tipo'] = $this->tipo;
		}
		if ( isset( $this->id ) ) {
			$json['razon_social'] = $this->razon_social;
		}
		if ( isset( $this->id ) ) {
			$json['nombre_comercial'] = $this->nombre_comercial;
		}
		if ( isset( $this->id ) ) {
			$json['es_corporativo'] = $this->es_corporativo;
		}
		if ( isset( $this->id ) ) {
			$json['porcentaje_descuento'] = $this->porcentaje_descuento;
		}
		if ( isset( $this->id ) ) {
			$json['origen'] = $this->origen;
		}
		if ( isset( $this->id ) ) {
			$json['ruc'] = $this->ruc;
		}
		if ( isset( $this->id ) ) {
			$json['banco_codigo_id'] = $this->banco_codigo_id;
		}
		if ( isset( $this->id ) ) {
			$json['email'] = $this->email;
		}
		if ( isset( $this->id ) ) {
			$json['es_cliente'] = $this->es_cliente;
		}
		if ( isset( $this->id ) ) {
			$json['adicionales_proveedor'] = $this->adicionales_proveedor;
		}
		if ( isset( $this->id ) ) {
			$json['numero_tarjeta'] = $this->numero_tarjeta;
		}
		if ( isset( $this->id ) ) {
			$json['es_extranjero'] = $this->es_extranjero;
		}
		if ( isset( $this->id ) ) {
			$json['es_empleado'] = $this->es_empleado;
		}
		if ( isset( $this->id ) ) {
			$json['es_proveedor'] = $this->es_proveedor;
		}
		if ( isset( $this->id ) ) {
			$json['aplicar_cupo'] = $this->aplicar_cupo;
		}
		if ( isset( $this->id ) ) {
			$json['telefonos'] = $this->telefonos;
		}
		if ( isset( $this->id ) ) {
			$json['tipo_cuenta'] = $this->tipo_cuenta;
		}
		if ( isset( $this->id ) ) {
			$json['placa'] = $this->placa;
		}
		if ( isset( $this->id ) ) {
			$json['cedula'] = $this->cedula;
		}
		if ( isset( $this->id ) ) {
			$json['id_categoria'] = $this->id_categoria;
		}
		if ( isset( $this->id ) ) {
			$json['categoria_nombre'] = $this->categoria_nombre;
		}
		$json = array_filter( $json, function ( $val ) {
			return $val !== null;
		} );

		return ( ! $asArrayWhenEmpty && empty( $json ) ) ? new stdClass() : $json;
	}
}
