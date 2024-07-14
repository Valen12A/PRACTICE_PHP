<?php
require_once('Figura.php');

class Cuadrado extends Figura{
    private $base;
    private $altura;

    public function __construct(int $base, int $altura) {
        parent::__construct(4, 'Cuadrado');
        $this->base = $base;
        $this->altura = $altura;
    }

    public function get_base(): int {
        return $this->base;
    }

    public function get_altura(): int {
        return $this->altura;
    }

    public function set_base(int $base): void {
        $this->base = $base;
    }

    public function set_altura(int $altura): void {
        $this->altura = $altura;
    }

    public function calcular_area(): int {
        return $this->base * $this->altura;
    }
}

$cuadrado1 = new Cuadrado(5, 5);
echo 'El área del cuadrado es: ' . $cuadrado1->calcular_area();
?>
