<?php

require_once 'models/cliente.php';

class CrudClienteModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO CLIENTE (cliente_id, nombre, apellido, dni, telefono, edad, email, distrito) VALUES(:cliente_id, :nombre, :apellido, :dni, :telefono, :edad, :email, :distrito)');
        try{
            $query->execute([
                'cliente_id' => $datos['cliente_id'],
                'nombre' => $datos['nombre'],
                'apellido' => $datos['apellido'],
                'dni' => $datos['dni'],
                'telefono' => $datos['telefono'],
                'edad' => $datos['edad'],
                'email' => $datos['email'],
                'distrito' => $datos['distrito'],
                // 'direccion' => $datos['direccion'],
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    
    public function get(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM cliente');
            
            while($row = $query->fetch()){
                $item = new Cliente();
                $item->cliente_id = $row['cliente_id'];
                $item->nombre    = $row['nombre'];
                $item->apellido  = $row['apellido'];
                $item->dni  = $row['dni'];
                $item->telefono  = $row['telefono'];
                $item->edad  = $row['edad'];
                $item->email  = $row['email'];
                $item->distrito  = $row['distrito'];
                // var_dump($item);
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item = new Cliente();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM cliente WHERE cliente_id = :id');

            $query->execute(['id' => $id]);
            
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

    public function update($item){
        $query = $this->db->connect()->prepare('UPDATE cliente SET nombre = :nombre, apellido = :apellido, dni = :dni, telefono = :telefono, edad = :edad, email = :email, distrito = :distrito WHERE cliente_id = :cliente_id');
        try{
            $query->execute([
                'cliente_id' => $item['cliente_id'],
                'nombre' => $item['nombre'],
                'apellido' => $item['apellido'],
                'dni'  => $item['dni'],
                'telefono'  => $item['telefono'],
                'edad' => $item['edad'],
                'email' => $item['email'],
                'distrito' => $item['distrito'],
                // 'direccion' => $item['direccion']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM cliente WHERE cliente_id = :cliente_id');
        try{
            $query->execute([
                'cliente_id' => $id
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>