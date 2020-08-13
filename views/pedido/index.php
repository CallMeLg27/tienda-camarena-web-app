<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mini Market Camarena</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!--CDN Bootstrap (CSS)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!--CDN JQuery,Popper,Bootstrap (JS)-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/27d40e429f.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#0bad65">
        <a class="navbar-brand" href="">
            <h1>
                <i class="fas fa-shopping-cart"></i>
                CAMARENA
            </h1>
        </a>
    </nav>
               

        <div class="d-flex justify-content-center" style="padding-top:100px">
            <h2 style="color:##09ea1a"><strong>Registra tu pedido</strong></h2>
        </div>
        <form>
        <div class="container">
            <div class="col-md-12" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto">
                <div class="d-flex">
                    <h3 style="color:##09ea1a"><i class="fas fa-user-circle pr-2"></i><strong>MARIA VILLANUEVA</strong></h3>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-row ">
                            <div class="col-md-4">
                                <p><strong>NRO CUENTA:</strong></p>
                            </div>
                            <div class="col-md-8">
                                <p>************1</p>
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="col-md-4">
                                <p><strong>SALDO DISPONIBLE:</strong></p>
                            </div>
                            <div class="col-md-8">
                                <p>s/. 250</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-row ">
                            <div class="col-md-4">
                                <p><strong>NRO VENTA:</strong></p>
                            </div>
                            <div class="col-md-8">
                                <p>0001</p>
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="col-md-4">
                                <p><strong>FECHA</strong></p>
                            </div>
                            <div class="col-md-8">
                                <p>17/02/2014</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><hr>
        </div>
        </form>
        
        <form>
            <div class="col-md-6" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto">
                <div class="form-row py-2">
                    <div class="col-md-4">
                        <p><strong>CÓDIGO:</strong></p>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Ingrese su código...">
                    </div>
                </div>
                <div class="form-row py-2">
                    <div class="col-md-4">
                        <p><strong>CANTIDAD:</strong></p>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Ingrese cantidad...">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center mt-4">
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary btn-block"><i class="fas fa-plus-circle"></i> AÑADIR</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <center>
        <div class="container mt-4">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Costo S/.</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Total S/.</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">P001</th>
                            <td>AGUA SAN MATEO 600ML</td>
                            <td>DISTRIBUIDORA BACKUS</td>
                            <td>1.5</td>
                            <td>2</td>
                            <td>3.0</td>
                            <td>
                                <div role="group" class="mb-2 btn-group-md btn-group">
                                    <button class="btn-shadow btn-hover-shine btn btn-success btn-md btn-pill pl-3" title="Editar">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn-shadow btn-hover-shine btn btn-danger btn-md btn-pill pr-3" title="Eliminar">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">P002</th>
                            <td>LECHE GLORIA CHICA</td>
                            <td>TARRO</td>
                            <td>3.2</td>
                            <td>1</td>
                            <td>3.2</td>
                            <td>
                                <div role="group" class="mb-2 btn-group-md btn-group">
                                    <button class="btn-shadow btn-hover-shine btn btn-success btn-md btn-pill pl-3" title="Editar" >
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn-shadow btn-hover-shine btn btn-danger btn-md btn-pill pr-3" title="Eliminar">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </center>   
    <div class="container d-flex flex-row-reverse">
        <div class="col-md-4">
            <div class="form-row ">
                <div class="col-md-4">
                        <p><strong>TOTAL A PAGAR:</strong></p>
                    </div>
                    <div class="col-md-1">
                        <p><strong>6.4</strong></p>
                    </div>
            </div>
            <div class="form-row ">
                <div class="col-md-4">
                    <p><strong>SALDO:</strong></p>
                </div>
                <div class="col-md-2">
                        <p><strong>2222</strong></p>
                    </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row justify-content-center mt-2">
        <div class="col-md-2">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle"></i> PAGAR</button>
         </div>
    </div>
    <br>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-circle pr-2"></i><strong>MARIA VILLANUEVA</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-row ">
                                        <div class="col-md-6">
                                            <p><strong>NRO CUENTA:</strong></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>************1</p>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="col-md-6">
                                            <p><strong>SALDO DISPONIBLE:</strong></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>s/. 250</p>
                                        </div>
                                    </div>
                                
                                <hr>
                                    <div class="form-row ">
                                        <div class="col-md-6">
                                            <p><strong>NRO VENTA:</strong></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>0001</p>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="col-md-6">
                                            <p><strong>FECHA</strong></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>17/02/2014</p>
                                        </div>
                                    </div>
                                <hr>
                                    <div class="form-row ">
                                        <div class="col-md-6">
                                            <p><strong>TOTAL A PAGAR:</strong></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>S/. 13.0</p>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="col-md-6">
                                            <p><strong>SALDO</strong></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>237</p>
                                        </div>
                                    </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-primary">ACEPTAR</button>
          </div>
        </div>
      </div>
    </div>
</body>

</html>