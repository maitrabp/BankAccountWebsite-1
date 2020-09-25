<?php
define('DB_SERVER', 'us-cdbr-east-02.cleardb.com');
define('DB_USERNAME', 'b9e3936e2f703f');
define('DB_PASSWORD', '9e11b5b8');
define('DB_DATABASE', 'heroku_cdb43a852bcdbe9');
try{
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
}
catch(Exception $e){
    echo $e->errorMessage();
}

?>