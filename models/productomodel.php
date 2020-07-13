<?php



class ProductoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO PRODUCTO (producto_id, NOMBRE, descripcion, cantidad, costo) VALUES(:producto_id, :nombre, :descripcion, :cantidad, :costo)');
        try{
            $query->execute([
                'producto_id' => $datos['producto_id'],
                'nombre' => $datos['nombre'],
                'descripcion' => $datos['descripcion'],
                'cantidad' => $datos['cantidad'],
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
            $query = $this->db->connect()->query('SELECT * FROM producto');
            
            while($row = $query->fetch()){
                $item = new Producto();
                $item->producto_id = $row['producto_id'];
                $item->nombre    = $row['nombre'];
                $item->descripcion  = $row['descripcion'];
                $item->cantidad  = $row['cantidad'];
                $item->costo  = $row['costo'];

                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item = new Producto();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM producto WHERE producto_id = :id');

            $query->execute(['id' => $id]);
            
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
        $query = $this->db->connect()->prepare('UPDATE producto SET nombre = :nombre, descripcion = :descripcion, cantidad = :cantidad, costo = :costo WHERE producto_id = :producto_id');
        try{
            $query->execute([
                'producto_id' => $item['producto_id'],
                'nombre' => $item['nombre'],
                'descripcion' => $item['descripcion'],
                'cantidad'  => $row['cantidad'],
                'costo'  => $row['costo']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM producto WHERE producto_id = :producto_id');
        try{
            $query->execute([
                'producto_id' => $id
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>