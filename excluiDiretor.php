<?php
session_start();
include_once './valida_login.php';
/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
include_once './mysql.php';

include_once './topo.php';


// Attempt insert query execution
try {
    // Create prepared statement
    $id = $_POST['id_diretor'];

    $sql = "DELETE FROM diretor WHERE id_diretor = $id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    
    echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='removeDiretor.php'</script>";
} catch (PDOException $e) {
    //die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    echo "<script type=text/javascript>alert('Operação NÃO realizada!');window.location='removeDiretor.php'</script>";
}




// Close connection
unset($pdo);
include_once './rodape.php';
?>

