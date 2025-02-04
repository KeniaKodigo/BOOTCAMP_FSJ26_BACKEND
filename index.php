<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Sintaxis PHP</title>
</head>
<body>
    <h1>Introduccion a PHP</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, corrupti?</p>

    <?php 
        //comentando en php
        /**
         * comentarios largos
         */
        # comentando otra vez (debilmente tipado)

        #Variables y constantes
        $saludo;
        $saludo = "Buenas Tardes!"; //string
        $numero = 34; //int
        $decimal = 56.7; //double / float
        $booleano = true; 
        $booleano2 = FALSE;
        $datos = null;

        define("PI", 3.1416);
        PI;
        const BOOTCAMP = "FSJ26";
        BOOTCAMP;

        #Impresion de datos (variable, mensajes, constantes..)
        //echo
        echo PI;
        echo "<br>";
        //concatenando
        echo "Bienvenido a PHP, " . BOOTCAMP;
        echo "<br>";
        echo "El numero de la suerte es: $numero";
        // echo 'El numero de la suerte es: $numero';
        echo "<br>";
        //arreglos
        $frutas = ['manzana','uva','mandarina'];
        $verduras = array("tomates","cebollas","ajo");
        #imprime el valor y la posicion
        print_r($frutas);
        echo "<br>";
        #imprime el valor, posicion, tipo de dato
        var_dump($frutas);
        echo "<br>";
        echo "<p class='parrafo'>No me gustan las ". $verduras[1] . "</p>";

        #objetos => crear clases
        $objeto = new stdClass();
        $objeto->color = "Morado";
        $objeto->nombre = "Lapiz";

        $persona = new stdClass();
        $persona->nombre = "Juan Perez";
        $persona->hobbies = ["ver tele","jugar"];

        #clase personalizadas
        class Animal{
            //definis atributos
            public $nombre;
            public $edad;
            public $tipo;

        }

        $pancho = new Animal();
        $pancho->nombre = "Pancho";
        $pancho->tipo = "Gato";
        var_dump($pancho);

        //uso de funciones
        function sumar(){
            return 5 + 8;
        }

        echo "<br>La suma es: " . sumar() . "<br>";

        function dividir($a, $b){
            $results = $a / $b;
            return $results;
        }
        echo dividir(100, 5);


        //uso del map
        $array_numeros = [1,2,3,4,5]; //=> [5,10,15,20,25]
        $nuevo = array_map(function($numero){
            return $numero * 5;
        }, $array_numeros);

        print_r($nuevo);


        function test(){
            
        }
    ?>
</body>
<script src="./index.js"></script>
<script>
    let animal = {
        nombre: "Pancho",
        tipo: "Gato",
        edad: 3,
        color: "Amarillo"
    }

    let animal2 = {
        nombre: "Goku",
        tipo: "Gato",
        edad: 1,
        color: "Gris"
    }

    let array_numeros = [1,2,3,4,5];
    let nuevo = array_numeros.map(numero => {
        return numero * 5
    });

    console.log(nuevo);
    
</script>
</html>
