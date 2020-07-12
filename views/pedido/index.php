<!DOCTYPE html>
<html lang="en">
<style>
  * {
  text-align: center;
}
h2{
  text-align: left;
}

.pedido-cabecera{
  display: flex;
  justify-content: space-between;
}


.pedido-detalle-container{
  display: flex;
}

.pedido-detalle{
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
  <h2><i class="fas fa-user"></i><span class="clienteId">MARIA VILLANUEVA</span></h2>
  <div class="pedido-cabecera">
    <div style="text-align: left;">
      <p>NRO. CUENTA: **********1</p>
      <p>SALDO DISPONIBLE S/. 250</p>
    </div>
    <div style="text-align: right;">
      <p>NRO. VENTA: 0001</p>
      <p>FECHA: 17/02/2019 <i class="far fa-calendar-alt"></i></p>
    </div>
  </div>
  <hr>
  <div id="pedido-pre-detalle">
    CÓDIGO: <input type="text"><i class="fas fa-barcode"></i>
    CANTIDAD: <input type="number">
    <button><i class="fas fa-plus-circle"></i></button>AÑADIR
    <button><i class="fas fa-gift"></i></button>PROMOCIONES
  </div>
  <div class="pedido-detalle-container">
    <div class="pedido-detalle">
      <table>
        <tr>
          <th>Código</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Costo unit S/.</th>
          <th>Cantidad</th>
          <th>Total S/.</th>
        </tr>
        <tr>
          <td>P001</td>
          <td>AGUA SAN MATEO</td>
          <td>DISTRIBUIDORA BACKUS</td>
          <td>15</td>
          <td>2</td>
          <td>3.0</td>
        </tr>
        <tr>
          <td>P002</td>
          <td>2x1 LECHE GLORIA</td>
          <td>TARRO</td>
          <td>3.2</td>
          <td>1</td>
          <td>3.2</td>
        </tr>
        <tr>
          <td>P003</td>
          <td>ACEITE PRIMOR</td>
          <td>BOTELLA</td>
          <td>6.8</td>
          <td>1</td>
          <td>6.8</td>
        </tr>
      </table>
      <p style="text-align: right;">TOTAL A PAGAR: <span id="totalAPagar">S/.13.0</span></p>
      <p style="text-align: right;">SALDO: <span id="totalAPagar">S/.237</span></p>
    </div>
    <div>
      <p>
        <button><i class="fas fa-times-circle"></i>ELIMINAR</button>
      </p>
      <p>
        <button><i class="fas fa-edit"></i>EDITAR</button>
      </p>
    </div>
  </div>
  <button><i class="fas fa-credit-card"></i><br />PAGAR</button>
  <button><i class="fas fa-ban"></i></button>
  <button><i class="fas fa-home"></i></button>
</body>

</html>