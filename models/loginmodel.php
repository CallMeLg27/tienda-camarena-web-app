<?php 

require_once 'models/cliente.php';

class LoginModel extends Model{
    
    public function __construct(){
        parent::__construct();
    }

    public function getByCredentials($username, $password){
        $item = new Cliente();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM cliente WHERE cliente_id = :cliente_id and dni = :dni');

            $query->execute(['cliente_id' => $username, 'dni' => $password ]);
            if($query->rowCount() == 0){
                return null;
            }
            while($row = $query->fetch()){
                
                $item->cliente_id = $row['cliente_id'];
                $item->nombre    = $row['nombre'];
                $item->apellido  = $row['apellido'];
                $item->dni  = $row['dni'];
                $item->telefono  = $row['telefono'];
                $item->edad  = $row['edad'];
                $item->email  = $row['email'];
                $item->distrito  = $row['distrito'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

}
 ?>

