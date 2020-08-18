<?php

require_once 'models/recarga.php';

class CrudRecargaModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO RECARGA (recarga_id, nombre, apellido, dni, telefono, edad, email, distrito, direccion, estado) VALUES(:recarga_id, :nombre, :apellido, :dni, :telefono, :edad, :email, :distrito, :direccion, :estado)');
        try{
            $query->execute([
                'recarga_id' => $datos['recarga_id'],
                'nombre' => $datos['nombre'],
                'apellido' => $datos['apellido'],
                'dni' => $datos['dni'],
                'telefono' => $datos['telefono'],
                'edad' => $datos['edad'],
                'email' => $datos['email'],
                'distrito' => $datos['distrito'],
                'direccion' => $datos['direccion'],
                'estado' => $datos['estado'],
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    
    public function get(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM recarga');
            
            while($row = $query->fetch()){
                $item = new Recarga();
                $item->recarga_id = $row['recarga_id'];
                $item->nombre    = $row['nombre'];
                $item->apellido  = $row['apellido'];
                $item->dni  = $row['dni'];
                $item->telefono  = $row['telefono'];
                $item->edad  = $row['edad'];
                $item->email  = $row['email'];
                $item->distrito  = $row['distrito'];
                $item->direccion  = $row['direccion'];
                $item->estado  = $row['estado'];
                // var_dump($item);
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item = new Recarga();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM recarga WHERE recarga_id = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                
                $item->recarga_id = $row['recarga_id'];
                $item->nombre    = $row['nombre'];
                $item->apellido  = $row['apellido'];
                $item->dni  = $row['dni'];
                $item->telefono  = $row['telefono'];
                $item->edad  = $row['edad'];
                $item->email  = $row['email'];
                $item->distrito  = $row['distrito'];
                $item->direccion  = $row['direccion'];
                $item->estado  = $row['estado'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

    public function update($item){
        // var_dump($item);
        $query = $this->db->connect()->prepare('UPDATE recarga SET nombre = :nombre, apellido = :apellido, dni = :dni, telefono = :telefono, edad = :edad, email = :email, distrito = :distrito, direccion = :direccion, estado = :estado WHERE recarga_id = :recarga_id');
        try{
            $query->execute([
                'recarga_id' => $item['recarga_id'],
                'nombre' => $item['nombre'],
                'apellido' => $item['apellido'],
                'dni'  => $item['dni'],
                'telefono'  => $item['telefono'],
                'edad' => $item['edad'],
                'email' => $item['email'],
                'distrito' => $item['distrito'],
                'direccion' => $item['direccion'],
                'estado' => $item['estado'],
            ]);
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

    public function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM recarga WHERE recarga_id = :recarga_id');
        try{
            $query->execute([
                'recarga_id' => $id
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>