<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mini Market Camarena</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">       
        <!--CDN Bootstrap (CSS)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        <!-- Los iconos tipo Solid de Fontawesome--> 
        <link rel="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>  
        <!-- Nuestros css-->
        <link rel="icon" href="<?php echo constant('URL'); ?>public/img/logo.png" sizes="32x32">
        <link rel="stylesheet" type="text/css" href="public/css/head-foot.css" th:href="@{/css/head-foot.css}">
        <link rel="stylesheet" type="text/css" href="public/css/main.css" th:href="@{/css/main.css}">
        <link rel="stylesheet" type="text/css" href="public/css/index.css" th:href="@{/css/index.css}">
    </head>
    <body style="display: flex;min-height: 100vh;flex-wrap: wrap;">
    	<?php require 'views/header.php'; ?>
    	<div class="container">
            <div class="d-flex justify-content-center" style="padding-top: 100px">
                <h2><strong>BYE BYE</strong></h2>
            </div>
        </div>
    	<?php require 'views/footer.php'; ?>
        <!--Iconos-->
        <script src="https://kit.fontawesome.com/27d40e429f.js" crossorigin="anonymous"></script>
    </body>
</html>