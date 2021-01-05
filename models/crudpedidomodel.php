<?php

require_once 'models/pedido.php';
require_once 'models/producto.php';

class CrudPedidoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO pedido (pedido_id, cliente_id) VALUES(:pedido_id, :cliente_id');
        try{
            $query->execute([
                'pedido_id' => $datos['pedido_id'],
                'cliente_id' => $datos['cliente_id'],
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    
    public function get(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM pedido');
            
            while($row = $query->fetch()){
                $item = new Pedido();
                $item->pedido_id = $row['pedido_id'];
                $item->cliente_id    = $row['cliente_id'];

                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item = new Pedido();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM pedido WHERE pedido_id = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                
                $item->pedido_id = $row['pedido_id'];
                $item->cliente_id    = $row['cliente_id'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }


    public function getProductoById($producto_id){
        $item = new Producto();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM producto WHERE producto_id = :producto_id');

            $query->execute(['producto_id' => $producto_id]);
            
            while($row = $query->fetch()){
                
                $item->producto_id = $row['producto_id'];
                $item->nombre    = $row['nombre'];
                $item->descripcion  = $row['descripcion'];
                $item->cantidad  = $row['cantidad'];
                $item->costo  = $row['costo'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

    public function update($item){
        $query = $this->db->connect()->prepare('UPDATE pedido SET cliente_id = :cliente_id WHERE pedido_id = :pedido_id');
        try{
            $query->execute([
                'pedido_id' => $item['pedido_id'],
                'cliente_id' => $item['cliente_id']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM pedido WHERE pedido_id = :pedido_id');
        try{
            $query->execute([
                'pedido_id' => $id
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>