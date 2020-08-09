<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tienda Camarena</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <!--CDN Bootstrap (CSS)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        
        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>

        <!-- Nuestros css-->
        <link rel="stylesheet" type="text/css" href="public/css/index.css" th:href="@{/css/index.css}">
        <link rel="stylesheet" type="text/css" href="public/css/user_admin.css" th:href="@{/css/user_admin.css}">
        <link rel="stylesheet" type="text/css" href="public/css/main.css" th:href="@{/css/main.css}">
    </head>
	<body>
	<?php require_once 'views/header.php'; ?>
	<main>
    <div id="main">
        <h1 class="center">No estas logueado, logueate!</h1>
    </div>
  </main>

<?php require_once 'views/footer.php'; ?>

</body>
</html>