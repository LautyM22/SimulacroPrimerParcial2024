<?php

class Venta {
    private $numero;
    private $fecha;
    private $cliente;
    private $motos;
    private $precioFinal;

    public function __construct($numero, $fecha, $cliente) {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->cliente = $cliente;
        $this->motos = [];
        $this->precioFinal = 0;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getMotos() {
        return $this->motos;
    }

    public function getPrecioFinal() {
        return $this->precioFinal;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setMotos($motos) {
        $this->motos = $motos;
    }

    public function setPrecioFinal($precioFinal) {
        $this->precioFinal = $precioFinal;
    }

    public function incorporarMoto($objMoto) {
        if ($objMoto->getActiva()) {
            $this->motos[] = $objMoto;
            $this->precioFinal += $objMoto->darPrecioVenta();
        }
    }

    public function __toString() {
        $motosInfo = "";
        foreach ($this->motos as $moto) {
            $motosInfo .= $moto . "\n";
        }
        return "Venta número: ".$this->getNumero(). 
                "\nFecha: ".$this->getFecha(). 
                "\nCliente: ".$this->getCliente(). 
                "\nPrecio Final: ".$this->getPrecioFinal().
                "\nMotos:\n{$motosInfo}";
    }
}
?>