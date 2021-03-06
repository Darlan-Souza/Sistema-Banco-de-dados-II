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
    $sql = "INSERT INTO professor (nome_professor,sobrenome_professor,email_professor, data_nasc, rua_professor, numero, cidade_professor, estado_professor, salario) VALUES (:nome_professor,:sobrenome_professor,:email_professor, :data_nasc, :rua_professor, :numero, :cidade_professor, :estado_professor, :salario)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters to statement
    $stmt->bindParam(':nome_professor', $_REQUEST['nome_professor']);
    $stmt->bindParam(':sobrenome_professor', $_REQUEST['sobrenome_professor']);
    $stmt->bindParam(':email_professor', $_REQUEST['email_professor']);
    $stmt->bindParam(':data_nasc', $_REQUEST['data_nasc']);
    $stmt->bindParam(':rua_professor', $_REQUEST['rua_professor']);
    $stmt->bindParam(':numero', $_REQUEST['numero']);
    $stmt->bindParam(':cidade_professor', $_REQUEST['cidade_professor']);
    $stmt->bindParam(':estado_professor', $_REQUEST['estado_professor']);
    $stmt->bindParam(':salario', $_REQUEST['salario']);
    // Execute the prepared statement
    $stmt->execute();

    echo "<script type=text/javascript>alert('Operação realizada com sucesso!');window.location='addProfessor.php'</script>";
} catch (PDOException $e) {
    //die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    echo "<script type=text/javascript>alert('Operação NÃO realizada!');window.location='addProfessor.php'</script>";
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>