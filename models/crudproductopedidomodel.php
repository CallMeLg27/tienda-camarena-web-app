<?php

require_once 'models/productopedido.php';

class CrudProductopedidoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar
        echo "-before prepare-";
        $query = $this->db->connect()->prepare('INSERT INTO productopedido (producto_id, pedido_id, cantidad) VALUES(:producto_id, :pedido_id, :cantidad)');
        echo "-after prepare-";
        try{
            $query->execute([
                'producto_id' => $datos['producto_id'],
                'pedido_id' => $datos['pedido_id'],
                'cantidad' => $datos['cantidad']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    
    public function get(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM productopedido');
            
            while($row = $query->fetch()){
                $item = new Productopedido();
                $item->producto_id = $row['producto_id'];
                $item->pedido_id    = $row['pedido_id'];
                $item->cantidad  = $row['cantidad'];
                // var_dump($item);
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getProductopedidoDePedido($pedido_id){
        $items = [];
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM productopedido WHERE pedido_id = :pedido_id');

            $query->execute(['pedido_id' => $pedido_id]);
            
            while($row = $query->fetch()){
                $item = new Productopedido();
                $item->producto_id = $row['producto_id'];
                $item->pedido_id    = $row['pedido_id'];
                $item->cantidad  = $row['cantidad'];
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return null;
        }
    }


    public function getById($id){
        $item = new Productopedido();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM productopedido WHERE producto_id = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                
                $item->producto_id = $row['producto_id'];
                $item->pedido_id    = $row['pedido_id'];
                $item->cantidad  = $row['cantidad'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

    public function update($item){
        // var_dump($item);
        $query = $this->db->connect()->prepare('UPDATE productopedido SET pedido_id = :pedido_id, cantidad = :cantidad, dni = :dni, telefono = :telefono, edad = :edad, email = :email, distrito = :distrito, direccion = :direccion, estado = :estado WHERE producto_id = :producto_id');
        try{
            $query->execute([
                'producto_id' => $item['producto_id'],
                'pedido_id' => $item['pedido_id'],
                'cantidad' => $item['cantidad'],
            ]);
            return true;
        }catch(PDOException $e){
            //echo $e;
            return false;
        }
    }

    public function delete($producto_id, $pedido_id){
        $query = $this->db->connect()->prepare('DELETE FROM productopedido WHERE producto_id = :producto_id AND pedido_id = :pedido_id');
        try{
            $query->execute([
                'producto_id' => $producto_id,
                'pedido_id' => $pedido_id
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>