<?php

// --local
// define('URL', 'http://localhost/tienda-camarena-web-app/');
// define('HOST', 'localhost');
// define('DB', 'tienda_camarena');
// define('USER', 'root');
// define('PASSWORD', "");
// define('CHARSET', 'utf8mb4');
 
// --deployed
if (isset($_ENV["DB_HOST"])){
    echo("YES");
    define('URL', 'https://tienda-camarena-new.herokuapp.com/');
    define('HOST', $_ENV["DB_HOST"]);
    define('DB', $_ENV["DB"]);
    define('USER', $_ENV["DB_USER"]);
    define('PASSWORD', $_ENV["DB_PASSWORD"]);
}else{
    echo("NO");
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