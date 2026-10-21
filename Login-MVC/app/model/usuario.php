<?php
require_once __DIR__ . '/../config/database.php';
 
class Usuario{
private $conn;

    public function __construct(){
 $db = new Database();
 $this->conn = $db->conectar();
       }

       public function buscarEm(){

$sql = "SELECT * FROM usuarios where email = ?";
$stmt = $this->conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
return $resultado->fetch_assoc();

       }
}



























?>