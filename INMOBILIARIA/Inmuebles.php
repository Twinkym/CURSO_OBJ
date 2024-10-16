<link rel="stylesheet" href="inmuebles.css">
<?php

abstract class Inmueble {  
  protected string $refCatastral;
  protected string $planta;
  protected string $escalera;
  protected string $numero;
  protected float $tamanyoM2; 
  protected float $alicuota;
  protected float $precioEstimadoAlquiler;
  protected string $comentarios;

  function __construct($refCatastral, $planta, $escalera, $numero, $tamanyoM2, $alicuota, $precioEstimadoAlquiler) 
  {
    $this->refCatastral = $refCatastral;
    $this->planta = $planta;
    $this->escalera = $escalera;
    $this->numero = $numero;
    $this->tamanyoM2 = $tamanyoM2;
    $this->alicuota = $alicuota;
    $this->precioEstimadoAlquiler = $precioEstimadoAlquiler;
    
  }

  protected function __getComentarios($comentarios) {
    return $this->comentarios = $comentarios;
  }

  protected function __setComentarios($comentarios) {
    $this->comentarios = $comentarios; 
  }

  protected function verPrecioAlquiler() {
    return '€ ' . number_format($this->precioEstimadoAlquiler, 2, ',', '.');
  }

  protected function pctgAlicuota() {
    return $this->alicuota*100 .'%';
  }

  function __toString() {
    $mostrar = ''
    . '<table>'
    . '<tr><th>Referencia Catastral</th><td>' . $this->refCatastral. '</td></tr>'
    . '<tr><th>Planta</th><td>' . $this->planta. '</td></tr>'
    . '<tr><th>Escalera</th><td>' . $this->escalera. '</td></tr>'
    . '<tr><th>Número</th><td>' . $this->numero. '</td></tr>'
    . '<tr><th>Tamaño en m<sup>2</sup></th><td>' . $this->tamanyoM2. '</td></tr>'
    . '<tr><th>Alicuota</th><td>' . $this->pctgAlicuota() . '</td></tr>'
    . '<tr><th>Precio estimado de alquiler €</th><td>' . $this->verPrecioAlquiler(). '</td></tr>';
    return $mostrar;
  }
 
}


class Local extends Inmueble {
  static public $numeroLocales=0;
  public int $ambientes;
  public int $aseos;
  public bool $salidaHumos; 
  public bool $cedulaHabitabilidad;

  public function __construct($refCatastral, $planta, $escalera, $numero, $tamanyoM2, $alicuota, $precioEstimadoAlquiler, $ambientes, $aseos, $salidaHumos, $cedulaHabitabilidad) {
    parent::__construct($refCatastral, $planta, $escalera, $numero, $tamanyoM2, $alicuota, $precioEstimadoAlquiler);
    $this->ambientes=$ambientes; 
    $this->aseos=$aseos; 
    $this->salidaHumos=$salidaHumos; 
    $this->cedulaHabitabilidad=$cedulaHabitabilidad;
    self::$numeroLocales++;
    echo '<p>Locales creados: ' . self::$numeroLocales . '</p><hr>';
  }

  public function tieneSalidaDeHumos() {
    return ($this->salidaHumos == true) ? "Sí" : "No";
  }

  public function tieneCedulaHabitabilidad() {
    return ($this->cedulaHabitabilidad == true) ? "Sí" : "No";
  }


  public function __toString() {
    $mostrar = parent::__toString()

    . '<tr><td>Ambientes: </td><td>' . $this->ambientes . '</td></tr>'
    . '<tr><td>Aseos: </td><td>'. $this->aseos .'</td></tr>'
    . '<tr><td>Salida de Humos: </td><td>' . $this->tieneSalidaDeHumos() . '</td></tr>'
    . '<tr><td>Cédula de Habitabilidad:</td><td>'.$this->tieneCedulaHabitabilidad().'</td></tr>'

    . '<caption>Datos del '. self::class .'</caption></table>';
    return $mostrar;
  }
}

class Piso extends Inmueble {
  public int $ambientes;
  public int $habitaciones;
  public int $aseos;
  public int $banyos;
  public int $terrazas;
  public int $balcones;
  public int $patios;
  public string $orientacion;
  public string $certificadoEnergetico;

  public function __construct($refCatastral, $planta, $escalera, $numero, $tamanyoM2, $alicuota, $precioEstimadoAlquiler, $ambientes, $habitaciones, $aseos, $banyos, $terrazas, $balcones, $patios, $orientacion, $certificadoEnergetico) {
    parent::__construct($refCatastral, $planta, $escalera, $numero, $tamanyoM2, $alicuota, $precioEstimadoAlquiler);
    $this->ambientes=$ambientes; 
    $this->habitaciones=$habitaciones; 
    $this->aseos=$aseos; 
    $this->banyos=$banyos; 
    $this->terrazas=$terrazas; 
    $this->balcones=$balcones; 
    $this->patios=$patios; 
    $this->orientacion=$orientacion; 
    $this->certificadoEnergetico=$certificadoEnergetico;
  }

  public function __toString() {
    $mostrar = parent::__toString()

    . '<tr><td>Ambientes: </td><td>' . $this->ambientes . '</td></tr>'
    . '<tr><td>Habitaciones: </td><td>' . $this->habitaciones . '</td></tr>'
    . '<tr><td>Aseos: </td><td>'. $this->aseos .'</td></tr>'
    . '<tr><td>Baños: </td><td>'. $this->banyos .'</td></tr>'
    . '<tr><td>Terrazas: </td><td>'. $this->terrazas .'</td></tr>'
    . '<tr><td>Balcones: </td><td>'. $this->balcones .'</td></tr>'
    . '<tr><td>Patios: </td><td>'. $this->patios .'</td></tr>'
    . '<tr><td>Orientación: </td><td>'. $this->orientacion .'</td></tr>'
    . '<tr><td>Certificado Energético:</td><td>'.$this->certificadoEnergetico .'</td></tr>'

    . '<caption>Datos del '. self::class .'</caption></table>';
    return $mostrar;
  }
}


?>