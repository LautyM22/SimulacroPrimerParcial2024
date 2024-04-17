<?php

class Cliente {
    private $nombre;
    private $apellido;
    private $dadoBaja;
    private $tipoDocumento;
    private $numeroDocumento;

    public function __construct($nombre, $apellido, $dadoBaja, $tipoDocumento, $numeroDocumento) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dadoBaja = $dadoBaja;
        $this->tipoDocumento = $tipoDocumento;
        $this->numeroDocumento = $numeroDocumento;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getDadoBaja() {
        return $this->dadoBaja;
    }

    public function getTipoDocumento() {
        return $this->tipoDocumento;
    }

    public function getNumeroDocumento() {
        return $this->numeroDocumento;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido =  $apellido;
    }

    public function setDadoBaja($dadoBaja) {
        $this->dadoBaja = $dadoBaja;
    }

    public function setTipoDocumento($tipoDocumento) {
        $this->tipoDocumento = $tipoDocumento;
    }

    public function setNumeroDocumento($numeroDocumento) {
        $this->numeroDocumento = $numeroDocumento;
    }

    public function __toString() {
        return "Cliente: ".$this->getNombre().$this->getApellido(). 
        "\nDocumento: ".$this->getTipoDocumento().$this->getNumeroDocumento().
        "\nDado de baja: ".$this->getDadoBaja();
    }
}
?>