<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:grades10.database.windows.net,1433; Database = Grades", "bijoy", "CRicket10");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

$id = $_GET["id"];
$grades = $_GET["grades"];

$sql = $conn->prepare ("INSERT INTO dbo.table1 (id,grade) VALUES ($id,$grades)");
$sql->execute();
 echo "New record added successfully";
?>