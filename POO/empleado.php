<?php

class Empleado{
    //definir atributos y metodos
    //modificador de acceso
    /**
     * public: acceso dentro de la clase, fuera de la clase, clases hijas
     * protected: acceso dentro de la clase y clases hijas
     * private: acceso dentro de la clase
     */
    protected string $nombre; 
    protected string $dni;
    protected string $genero;
    private float $salario; //get y set
    protected string $cargo;

    //constructor: Es un metodo que nos permite inicializar un objeto
    /**
     * constructor por defecto / vacio
     * constructor parametrizado: conlleva a tener parametros
     */
    public function __construct($nombre, $dni, $genero, $salario, $cargo)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->genero = $genero;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function calcularSalario(){
        return "Salario de los empleados";
    }

    //cuando queremos imprimir el dato
    public function getSalario(){
        return $this->salario;
    }

    //captura y actualiza el atributo
    public function setSalario($salario){
        $this->salario = $salario;
    }
}

//crear objetos -> instanciar (new)
$empleada_luz = new Empleado("Luz Vasquez","009567-9","femenino",980,"Desarrolladora");
// $empleada_luz->nombre = "Jose Maria";
// $empleada_luz->dni = "";
print_r($empleada_luz);
echo "<br>";
echo $empleada_luz->calcularSalario();
echo "<br>";
$empleada_luz->setSalario(1000);
echo "Luz gana $" . $empleada_luz->getSalario();
echo "<br>";
print_r($empleada_luz);

//extends
class Desarrollador extends Empleado{
    public string $lenguaje_programacion;
    protected array $proyectos = [];

    //creando un constructor para la clase hija
    public function __construct($nombre, $dni, $genero, $salario, $cargo, $lenguaje)
    {
        //heredar el constructor del padre
        parent::__construct($nombre, $dni, $genero, $salario, $cargo);
        $this->lenguaje_programacion = $lenguaje;
    }

    public function verProyectos(){
        return "Proyectos por desarrollador";
    }

    // //sobreescritura de metodos
    // public function calcularSalario()
    // {
    //     $renta = 0.10;
    //     return "A todos los desarrolladores se le descuenta la renta: $renta";
    // }

    //sobrecarga de metodos
    public function calcularSalario($salario = null, $bono = null) //java
    {
        $salario_neto = $salario + $bono;
        return "Tu salario neto recibe un bono extra $bono, salario neto: $salario_neto";
    }
}

class Administrador extends Empleado{

    //sobrecarga de
    public function calcularSalario()
    {
        //salario neto
    }
}

echo "<br>";
$desarrollador = new Desarrollador("Carlos Martinez","008646-8","Masculino","820","Programador Web","javascript y python");
print_r($desarrollador);