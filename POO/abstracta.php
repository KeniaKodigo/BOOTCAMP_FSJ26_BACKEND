<?php

//primer requisito
abstract class Empleados{
    //atributos
    protected string $nombre; 
    protected string $dni;
    protected string $genero;
    private float $salario; //get y set
    protected string $cargo;

    //metodos
    public function __construct($nombre, $dni, $genero, $salario, $cargo)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->genero = $genero;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function getSalario(){
        return $this->salario;
    }

    //captura y actualiza el atributo
    public function setSalario($salario){
        $this->salario = $salario;
    }

    //metodo abstracto: metodos que no tienen comportamiento
    public abstract function calcularSalario(); //clases hijas son las que tiene la obligacion de ponerle un comportamiento

}

class Programador extends Empleados{

    public function calcularSalario()
    {
        //bono = 10%
    }
}   


class Admin extends Empleados{
    public function calcularSalario()
    {
        //precio * hora
    }
}

// $programador = new Programador("juanito");

// $admin = new Admin("karlita");

