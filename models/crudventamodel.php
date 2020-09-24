<?php

require_once 'models/venta.php';

class CrudVentaModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO VENTA (venta_id, pedido_id, descripcion, monto, fecha) VALUES(:venta_id, :pedido_id, :descripcion, :monto, :fecha)');
        try{
            $query->execute([
                'venta_id' => $datos['venta_id'],
                'pedido_id' => $datos['pedido_id'],
                'descripcion' => $datos['descripcion'],
                'monto' => $datos['monto'],
                'fecha' => $datos['fecha']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    
    public function get(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM venta');
            
            while($row = $query->fetch()){
                $item = new Venta();
                $item->venta_id = $row['venta_id'];
                $item->pedido_id    = $row['pedido_id'];
                $item->descripcion  = $row['descripcion'];
                $item->monto  = $row['monto'];
                $item->fecha  = $row['fecha'];
                // var_dump($item);
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item = new Venta();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM venta WHERE venta_id = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                
                $item->venta_id = $row['venta_id'];
                $item->pedido_id    = $row['pedido_id'];
                $item->descripcion  = $row['descripcion'];
                $item->monto  = $row['monto'];
                $item->fecha  = $row['fecha'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

    public function getVentaDePedido($pedido_id){
        $item = new Venta();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM venta WHERE pedido_id = :pedido_id');

            $query->execute(['pedido_id' => $pedido_id]);
            
            while($row = $query->fetch()){
                
                $item->venta_id = $row['venta_id'];
                $item->pedido_id    = $row['pedido_id'];
                $item->descripcion  = $row['descripcion'];
                $item->monto  = $row['monto'];
                $item->fecha  = $row['fecha'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

    public function update($item){
        // var_dump($item);
        $query = $this->db->connect()->prepare('UPDATE venta SET pedido_id = :pedido_id, descripcion = :descripcion, monto = :monto, fecha = :fecha WHERE venta_id = :venta_id');
        try{
            $query->execute([
                'venta_id' => $item['venta_id'],
                'pedido_id' => $item['pedido_id'],
                'descripcion' => $item['descripcion'],
                'monto'  => $item['monto'],
                'fecha'  => $item['fecha']
            ]);
            return true;
        }catch(PDOException $e){
            //echo $e;
            return false;
        }
    }

    public function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM venta WHERE venta_id = :venta_id');
        try{
            $query->execute([
                'venta_id' => $id
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>