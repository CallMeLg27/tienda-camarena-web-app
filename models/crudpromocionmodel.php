<?php

require_once 'models/promocion.php';

class CrudPromocionModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO PROMOCION (promocion_id, NOMBRE, descripcion, cantidad, producto_id, costo) VALUES(:promocion_id, :nombre, :descripcion, :cantidad, :producto_id, :costo)');
        try{
            $query->execute([
                'promocion_id' => $datos['promocion_id'],
                'nombre' => $datos['nombre'],
                'descripcion' => $datos['descripcion'],
                'cantidad' => $datos['cantidad'],
                'producto_id' => $datos['producto_id'],
                'costo' => $datos['costo']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    
    public function get(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM promocion');
            
            while($row = $query->fetch()){
                $item = new Promocion();
                $item->promocion_id = $row['promocion_id'];
                $item->nombre    = $row['nombre'];
                $item->descripcion  = $row['descripcion'];
                $item->cantidad  = $row['cantidad'];
                $item->producto_id  = $row['producto_id'];
                $item->costo  = $row['costo'];
                // var_dump($item);
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item = new Promocion();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM promocion WHERE promocion_id = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                
                $item->promocion_id = $row['promocion_id'];
                $item->nombre    = $row['nombre'];
                $item->descripcion  = $row['descripcion'];
                $item->cantidad  = $row['cantidad'];
                $item->producto_id  = $row['producto_id'];
                $item->costo  = $row['costo'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

    public function update($item){
        $query = $this->db->connect()->prepare('UPDATE promocion SET nombre = :nombre, descripcion = :descripcion, cantidad = :cantidad, producto_id = :producto_id, costo = :costo WHERE promocion_id = :promocion_id');
        try{
            $query->execute([
                'promocion_id' => $item['promocion_id'],
                'nombre' => $item['nombre'],
                'descripcion' => $item['descripcion'],
                'cantidad'  => $item['cantidad'],
                'producto_id'  => $item['producto_id'],
                'costo' => $datos['costo']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM promocion WHERE promocion_id = :promocion_id');
        try{
            $query->execute([
                'promocion_id' => $id
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>