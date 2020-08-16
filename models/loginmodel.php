<?php 

require_once 'models/cliente.php';
require_once 'models/empleado.php';

class LoginModel extends Model{
    
    public function __construct(){
        parent::__construct();
    }

    public function getByCredentials($username, $password){
        $cliente = new Cliente();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM cliente WHERE cliente_id = :cliente_id and dni = :dni');

            $query->execute(['cliente_id' => $username, 'dni' => $password ]);
            if($query->rowCount() == 1){
                while($row = $query->fetch()){
                    $cliente->cliente_id = $row['cliente_id'];
                    $cliente->nombre    = $row['nombre'];
                    $cliente->apellido  = $row['apellido'];
                    $cliente->dni  = $row['dni'];
                    $cliente->telefono  = $row['telefono'];
                    $cliente->edad  = $row['edad'];
                    $cliente->email  = $row['email'];
                    $cliente->distrito  = $row['distrito'];
                }
                return $cliente;   
            }
        }catch(PDOException $e){
            //no es cliente
            echo $e;
        }

        $empleado = new Empleado();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM empleado WHERE usuario = :usuario and contraseña = :contrasenia');

            $query->execute(['usuario' => $username, 'contrasenia' => $password ]);
            if($query->rowCount() == 0){
                return null;
            }
            while($row = $query->fetch()){
                $empleado->empleado_id = $row['empleado_id'];
                $empleado->rol    = $row['rol'];
                $empleado->usuario    = $row['usuario'];
                $empleado->contraseña    = $row['contraseña'];
            }
            return $empleado;
        }catch(PDOException $e){
            //no es empleado
            echo $e;
        }
    }

}
 ?>

