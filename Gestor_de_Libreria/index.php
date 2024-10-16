<?php
  include 'clase_libro.php';
  include 'clase_persona.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>clase Libro</title>
</head>
<body>
  <h1>Probamos la clase Libro</h1>;
    
  <?php  
      $book1 = new Libro('8420412147', 
                        'Don Quijote de la Mancha', 
                        'Miguel de Cervantes', 
                          17, 
                          25);
      echo '<pre>';
      print_r($book1);
      echo '</pre>';
  ?>
  <h2>La función __toString()</h2>
  <p>La función <b>__toString()</b> permite redefinir la forma en que se muestra un objeto al ser mostrado en pantalla con la instrucción <b>echo</b>. Ejemplo:</p>

  <!-- forma corta de hacer un echo en php -->
  <?= $book1; ?>

  <h2>Las funciones __get<em>Atributo</em>() y __set<em>Atributo</em>()</h2>
  <ul>
    <li>__get<em>Atributo</em>(), permite obtener el valor de un atributo <span>(generalmente definido como <b>private</b>)</span></li>
    <li>__set<em>Atributo</em>(), permite cambiar el valor de un atributo <span>(generalmente definido como <b>private</b>)</span></li>
  </ul>

  <p>Ejemplos: <span>(mira el codigo de este documento)</span></p>
  <p>Mostramos, cambiamos precio y volvemos a mostrar:</p>
  
  <?php
    echo $book1->__getPrecio();
    $book1->__setPrecio(20);
    echo $book1->__getPrecio();
  ?>
  
  <p>En cambio el atributo <b>$autor</b> que está definido como público se puede cambiar directamente <span>(mira el codigo de este documento)</span></p>

  <?php
    $book1->autor = 'Don Miguel de Cervantes';
    echo $book1->autor;
  ?>

  <h2>Constantes en clases de PHP</h2>

  <p>Es posible definir valores constantes en una clase de PHP. Las constantes se definen con la palabra <b>const</b> su nombre se escribe en mayúsculas (sin el símbolo de $ a la izquierda) y se acceden con el operador <b>::</b>. Dentro de la clase este operador va precedido por la palabra <b>self</b>, mientras que fuera de la clase, se utiliza el nombre de la clase. <span>Mira en el código la función precioConIVA() y luego mira la forma de obtener el valor del IVA desde este documento.</span></p>

  <ul>
  <?php
    echo '<li>Precio del libro: €' . number_format($book1->__getPrecio(), 2, ',', '.') .'</li>';
    echo '<li>Valor del IVA : ' . Libro::IVA * 100 . '%</li>';
    echo '<li>Precio con IVA: €' . number_format($book1->precioConIVA(), 2, ',', '.') .'</li>';
  ?>
  </ul>

  <h2><mark>Ahora tú...</mark></h2>
  <p>Crear una clase denominada <b>Persona</b>. La clase deberá tener los siguientes atributos privados: <b>dni, nombre, apellidoPaterno, apellidoMaterno, sexo y edad. </b>Como métodos, crea los <b>getters</b> y <b>setters</b> a todos los atributos, además de la función <b>__toString</b> la cual deberá mostrar los datos del objeto en forma de tabla HTML:</p>
  <ul>
    <li><b>nombreCompleto:</b> Muestra concatenados el nombre y los dos apellidos de la persona</li>
    <li><b>esMayorDeEdad:</b> Indica si la persona es mayor o menor de edad según el atributo <b>edad</b>.</li>
    <li><b>dniCorrecto:</b> Deberá revisar si la letra del dni es correcta o no. Para ello, la clase puede contener una constante (de tipo string) con las letras del DNI. Puedes ayudarte con las funciones <a href="https://www.php.net/manual/es/function.substr.php" target="_blank" rel="noopener noreferrer">substr</a>, <a href="https://www.w3schools.com/php/php_casting.asp" target="_blank" rel="noopener noreferrer">(int)</a> y <a href="https://www.php.net/manual/es/function.strpos.php" target="_blank" rel="noopener noreferrer">strpos</a> de PHP.</li>
  </ul>
  <p>Prueba la clase creando dos personas y mostrándolas. Asimismo prueba los métodos que has creado para ver su funcionan adecuadamente. <span>Puedes guiarte con este ejercicio</span>.</p> 
  <hr>

  <h2>Tabla clase Persona</h2>

  <?php 
    // A continuación creo varias instancias de la clase Persona.
    $persona1 = new Persona('12345678Z', 'Paco', 'Gimenez', 'Castro', 'M', 53);
    $persona2 = new Persona('34599922D', 'Gines', 'Martinez', 'Losada', 'M', 68);
    $persona3 = new Persona('46421782P', 'Noelia', 'Salas', 'Contreras', 'F', 49);
    $persona4 = new Persona('25024418Q', 'Karina', 'Montes', 'Salcedo', 'F', 12);
    // Mostrar las instancias en formato tabla.
    echo '<br>';
    echo $persona1;
    echo '<br><br>';
    echo $persona2;
    echo '<br><br>';
    echo $persona3;
    echo '<br><br>';
    echo $persona4;


  ?>
</body>
</html>
  