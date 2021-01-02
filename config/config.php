<?php

// --local
// define('URL', 'http://localhost/tienda-camarena-web-app/');
// define('HOST', 'localhost');
// define('DB', 'tienda_camarena');
// define('USER', 'root');
// define('PASSWORD', "");
// define('CHARSET', 'utf8mb4');
 
// --deployed
if (isset($_ENV["HOST"])){
    define('URL', 'https://tienda-camarena-new.herokuapp.com/');
    define('HOST', $_ENV["HOST"]);
    define('DB', $_ENV["DB"]);
    define('USER', $_ENV["USER"]);
    define('PASSWORD', $_ENV["PASSWORD"]);
}else{
    define('URL', 'http://localhost/tienda-camarena-web-app/');
    define('HOST', "localhost");
    define('DB', "tienda_camarena");
    define('USER', "root");
    define('PASSWORD', "");
}
define('CHARSET', 'utf8mb4');
 ?>
<script>
url = "<?php echo constant('URL')?>";
</script>