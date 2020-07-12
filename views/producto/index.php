<!DOCTYPE html>
<html>
<style>
  * {
  text-align: center;
}
h2{
  text-align: left;
}

.CRUD-interface{
  margin: 0 auto;
  display: flex;
  width: 50%;
  justify-content: space-between;
}

.productos-detalle-container{
  display: flex;
}

.productos-detalle{
  margin: 0 auto;
  width: 60%;
}

table{
  margin: 0 auto;
}

</style>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mini Market Camarena</title>
  <script src="https://kit.fontawesome.com/27d40e429f.js" crossorigin="anonymous"></script>
</head>

<body>
  <h1><i class="fas fa-shopping-cart"></i>
    MINI MARKET "CAMARENA"
  </h1>
  <h2>
    <i class="fas fa-warehouse"></i> <span class="clienteId">PRODUCTO
  </h2>
  <div class="CRUD-interface">
    <div>
      <p>CÓDIGO: <input type="text"> <i class="fas fa-barcode"></i></p>
      <p>NOMBRE: <input type="text"></p>
      <p>COSTO: <input type="number"></p>
    </div>
    <div>
      <p>DESCRIPCIÓN: <input type="text"></p>
      <p>CANTIDAD: <input type="number"></p>
    </div>
    <div class="CRUD-buttons">
      <p>
        <button><i class="fas fa-plus-circle"></i> AÑADIR</button>
      </p>
      <p>
        <button><i class="fas fa-times-circle"></i> ELIMINAR</button>
      </p>
      <p>
        <button><i class="fas fa-edit"></i> EDITAR</button>
      </p>
      <p>
        <button><i class="fas fa-search"></i> BUSCAR</button>
      </p>
    </div>
  </div>
  <div class="productos-detalle-container">
    <div class="productos-detalle">
      <table>
        <tr>
          <th>Código</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Costo S/.</th>
          <th>Cantidad</th>
        </tr>
        <tr>
          <td>P001</td>
          <td>AGUA SAN MATEO 600ML</td>
          <td>DISTRIBUIDORA BACKUS</td>
          <td>15</td>
          <td>200</td>
        </tr>
        <tr>
          <td>P002</td>
          <td>LECHE GLORIA CHICA</td>
          <td>TARRO</td>
          <td>3.2</td>
          <td>300</td>
        </tr>
        <tr>
          <td>P003</td>
          <td>ACEITE PRIMOR GRANDE</td>
          <td>BOTELLA</td>
          <td>6.8</td>
          <td>150</td>
        </tr>
      </table>
    </div>
  </div>
  <button><i class="fas fa-ban"></i> CANCELAR</button>
</body>

</html>