<?php

require_once 'models/tarjeta.php';

class CrudTarjetaModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO TARJETA (tarjeta_id, cliente_id, fechavencimiento, saldo) VALUES(:tarjeta_id, :cliente_id, :fechavencimiento, :saldo)');
        try{
            $query->execute([
                'tarjeta_id' => $datos['tarjeta_id'],
                'cliente_id' => $datos['cliente_id'],
                'fechavencimiento' => $datos['fechavencimiento'],
                'saldo' => $datos['saldo'],
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    
    public function get(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM tarjeta');
            
            while($row = $query->fetch()){
                $item = new Tarjeta();
                $item->tarjeta_id = $row['tarjeta_id'];
                $item->cliente_id    = $row['cliente_id'];
                $item->fechavencimiento  = $row['fechavencimiento'];
                $item->saldo  = $row['saldo'];
                // var_dump($item);
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getTarjetasDeCliente($cliente_id){
        $items = [];
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM tarjeta WHERE cliente_id = :cliente_id');
            
            $query->execute(['cliente_id' => $cliente_id]);

            while($row = $query->fetch()){
                $item = new Tarjeta();
                $item->tarjeta_id = $row['tarjeta_id'];
                $item->cliente_id = $row['cliente_id'];
                $item->fechavencimiento = $row['fechavencimiento'];
                $item->saldo  = $row['saldo'];
                // var_dump($item);
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item = new Tarjeta();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM tarjeta WHERE tarjeta_id = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                
                $item->tarjeta_id = $row['tarjeta_id'];
                $item->cliente_id    = $row['cliente_id'];
                $item->fechavencimiento  = $row['fechavencimiento'];
                $item->saldo  = $row['saldo'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

    public function update($item){
        // var_dump($item);
        $query = $this->db->connect()->prepare('UPDATE tarjeta SET cliente_id = :cliente_id, fechavencimiento = :fechavencimiento, saldo = :saldo WHERE tarjeta_id = :tarjeta_id');
        try{
            $query->execute([
                'tarjeta_id' => $item['tarjeta_id'],
                'cliente_id' => $item['cliente_id'],
                'fechavencimiento' => $item['fechavencimiento'],
                'saldo'  => $item['saldo'],
            ]);
            return true;
        }catch(PDOException $e){
            //echo $e;
            return false;
        }
    }

    public function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM tarjeta WHERE tarjeta_id = :tarjeta_id');
        try{
            $query->execute([
                'tarjeta_id' => $id
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>