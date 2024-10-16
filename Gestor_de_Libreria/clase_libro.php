<link rel="stylesheet" href="clase_libro.css">

<?php
class Libro {
    const IVA = 0.21;

  //atributos
    private string $ibsn;
    private string $titulo;  // para acceder a esots atributos hay que nombrar la clase de la siguiente forma Libro($titulo)
    public string $autor; //este atributo se puede acceder directamente
    private float $precio;
    private int $stock;

  //métodos
  public function __construct($ibsn, $titulo, $autor, $precio, $stock) {
    $this->ibsn = $ibsn;
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->precio = $precio;
    $this->stock = $stock;
    echo 'Se ha creado una instancia de <mark><b>Libro</b></mark> con título: 
    <b>' . $titulo . '</b>';
  }

  public function __getPrecio() {
    return $this->precio;
  }

  public function __setPrecio($precio) {
    $this->precio = $precio;
  }

  public function __toString() {
    $mostrar  = '<table>';
    $mostrar .= '<caption>Información sobre el Libro</caption>';
    $mostrar .= '<tr>';
    $mostrar .= '<tr><th>IBSN:</th>' . '<td>' . $this->ibsn . '</td></tr>';
    $mostrar .= '<tr><th>Título:</th>' . '<td>' . $this->titulo . '</td></tr>';
    $mostrar .= '<tr><th>Autor:</th>' . '<td>' . $this->autor . '</td></tr>';
    $mostrar .= '<tr><th>Precio:</th>' . '<td>€';
    $mostrar .=  number_format($this->precio, 2, ',', '.') . '</td></tr>';
    $mostrar .= '<tr><th>Stock:</th>' . '<td>' . $this->stock . '</td></tr>';
    $mostrar .= '</table>';
    return $mostrar;
  }

  public function precioConIva() {
    return $this->precio * (1 + self::IVA);
  }

}
