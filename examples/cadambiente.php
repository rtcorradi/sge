<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação do Cadastro</title>
</head>
<body>
    <?php   
        $nomeamb = $_POST["nomeamb"];
        $tipoamb = $_POST["tipoamb"];
        $capacidade = $_POST["capacidade"];
        $descricao = $_POST["descricao"];
 
        $db = new PDO("mysql:host=localhost;dbname=sgebd;charset=utf8","root","");
        $db->query("INSERT INTO ambiente (nomeamb, tipoamb, capacidade, descricao) VALUES ('$nomeamb','$tipoamb','$capacidade','$descricao')");
 
        echo  "<script>alert('Cadastrado com Sucesso!');</script>";

        header('Location:ambiente.html');
 
    ?>
</body>
</html>