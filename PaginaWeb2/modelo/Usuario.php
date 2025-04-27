<?php
class Usuario {
    public $nombre;
    public $apellido;
    public $contrasena;
    public $esEscritor;
    public $articulo;

    public function __construct($nombre, $apellido, $contrasena, $rol) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->contrasena = $contrasena;
        $this->esEscritor = ($rol === '');
    }

    public function guardar() {
        $linea = "Nombre: $this->nombre, Apellido: $this->apellido, Contraseña: $this->contrasena, Escritor: " . ($this->esEscritor ? 'true' : 'false') . "\n";
        file_put_contents(__DIR__ . 'http://localhost/PaginaWeb2/datos.txt', $linea, FILE_APPEND);
    }
}
?>