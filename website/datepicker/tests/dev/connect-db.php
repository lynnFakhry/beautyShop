
<?php






try{
    $db = new \PDO("mysql:host=localhost; dbname=beautyshopphp", "root", "", [
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
}catch(\PDOException $e){
    echo $e->getMessage();
}

?>