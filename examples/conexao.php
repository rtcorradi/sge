<?php
    try {
        $pdo = new PDO("mysql:dbname=sgebd;host=localhost","root","")
    } 
    catch ( PDOException $e) {
        echo "Erro com o banco de Dados: ".$e->getMessage();
    }
    catch (Exception $e) {
        echo "Erro genérico: ".$e->getMessage();
    }


?>