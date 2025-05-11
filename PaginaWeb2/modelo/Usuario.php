<?php
require_once 'configuracion.php';

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
   public function agregra(){
    $Conexion = new Conexion();
    $conn = $Conexion->conectar();
    $conn->query("INSERT INTO usuarios_registrados (nombre, apellido, contrasena, rol) VALUES ('$this->nombre', '$this->apellido', '$this->contrasena', '$this->esEscritor')");
    $data = $conn->query("SELECT nombre, apellido, rol, numero_articulo from usuarios_registrados");

   }
    public function guardar() {
    $Conexion = new Conexion();
    $conn = $Conexion->conectar();

    $stmt = $conn->prepare("INSERT INTO usuarios_registrados (nombre, apellido, contrasena, rol) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $this->nombre, $this->apellido, $this->contrasena, $this->esEscritor);
    $stmt->execute();


    $stmt->close();
    $conn->close();

    }
}
public function mostrar() {
    $Conexion = new Conexion();
    $conn = $Conexion->conectar();

   $result = $conn->query("SELECT nombre, apellido, rol, numero_articulo FROM usuarios_registrados");

    while ($row = $result->fetch_assoc()) {
        echo "Nombre: " . $row["nombre"] . ", Apellido: " . $row["apellido"] . ", Rol: " . $row["rol"] . ", Artículos: " . $row["numero_articulo"] . "<br>";
}
?>
