<?php 

Class Moto{
    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $incrementoAnual;
    private $activa;

    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $incrementoAnual, $activa) {
        $this->codigo = $codigo;
        $this->costo = $costo;
        $this->anioFabricacion = $anioFabricacion;
        $this->descripcion = $descripcion;
        $this->incrementoAnual = $incrementoAnual;
        $this->activa = $activa;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getCosto() {
        return $this->costo;
    }

    public function getAnioFabricacion() {
        return $this->anioFabricacion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getIncrementoAnual() {
        return $this->incrementoAnual;
    }

    public function getActiva() {
        return $this->activa;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setCosto($costo) {
        $this->costo = $costo ; ;
    }

    public function setAnioFabricacion($anioFabricacion) {
        $this->anioFabricacion = $anioFabricacion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setIncrementoAnual($incrementoAnual) {
        $this->incrementoAnual = $incrementoAnual;
    }

    public function setActiva($activa) {
        $this->activa = $activa;
    }

    public function darPrecioVenta() {
        if (!$this->activa) {
            return -1;
        } else {
            $anioActual = date('Y');
            $aniosTranscurridos = $anioActual - $this->anioFabricacion;
            return $this->costo + $this->costo * ($aniosTranscurridos * $this->incrementoAnual);
        }
    }

    public function __toString() {
        return "Moto: ".$this->getDescripcion().
        "\nCódigo: ".$this->getCodigo().
        "\nCosto: ".$this->getCosto().
        "\nAño de fabricación: ".$this->getAnioFabricacion().
        "\nActiva: ".$this->getActiva();
    }
}

?>