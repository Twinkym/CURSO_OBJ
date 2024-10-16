<?php 

require_once 'Persona.php';

// Creo instancias de Home y Dona.
$persona1 = new Home("José", "Perez", 80, 175, 2);
$persona2 = new Home("Juan", "García", 85, 190, 1);
$persona3 = new Home("José", "Perez", 65, 165, 3);

// Agrego Hobbies.
$persona2->AgregarHobby("Ciclisme");
$persona3->AgregarHobby("Lectura");
$persona3->AgregarHobby("Cuina");

// Mostrar las persones.
echo $persona1;
echo $persona2;
echo $persona3;
