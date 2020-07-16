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
 <div class="container d-flex flex-row-reverse" style="padding-top:100px">
    <section class="row">    
        <div class="form-row " > 
            <div class="col-md-8">
                 <input type="text" class="form-control" placeholder="Buscar...">
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-primary btn-block">BUSCAR</button>
            </div>
         </div>
    </section>
  </div>               

        <div class="d-flex justify-content-center">
            <h2 style="color:##09ea1a"><strong>Registra tus productos</strong></h2>
        </div>
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
                        <p><strong>NOMBRE:</strong></p>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Ingrese su nombre...">
                    </div>
                </div>
                <div class="form-row py-2">
                    <div class="col-md-4">
                        <p><strong>COSTO:</strong></p>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Ingrese el costo...">
                    </div>
                </div>
                <div class="form-row py-2">
                    <div class="col-md-4">
                        <p><strong>DESCRIPCIÓN:</strong></p>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Descripción...">
                    </div>
                </div>
                <div class="form-row py-2">
                    <div class="col-md-4">
                        <p><strong>CANTIDAD:</strong></p>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Ingrese la cantidad...">
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
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">P001</th>
                            <td>AGUA SAN MATEO 600ML</td>
                            <td>DISTRIBUIDORA BACKUS</td>
                            <td>15</td>
                            <td>200</td>
                            <td>
                                <div role="group" class="mb-2 btn-group-md btn-group">
                                    <button class="btn-shadow btn-hover-shine btn btn-success btn-md btn-pill pl-3" title="Editar" ">
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
                            <td>300</td>
                            <td>
                                <div role="group" class="mb-2 btn-group-md btn-group">
                                    <button class="btn-shadow btn-hover-shine btn btn-success btn-md btn-pill pl-3" title="Editar" ">
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>