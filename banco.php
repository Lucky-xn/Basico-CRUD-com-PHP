<?php

$pdo = new PDO('mysql:host=localhost;dbname=pessoas', 'root', '');


function salvar(PDO $pdo)
{

    if (isset($_POST['id']) && $_POST['id'] != '') {
        $sql = $pdo->prepare('UPDATE pessoas SET nome = :nome WHERE id = :id');
        $sql->bindParam(':nome', $_POST['nome']);
        $sql->bindParam(':id', $_POST['id']);
        $sql->execute();
    } else {
        $sql = $pdo->prepare('INSERT INTO pessoas VALUES (null,?)');
        $sql->execute([$_POST['nome']]);
    }
    echo "<script>location.href='index.php';</script>";
}

function ler(PDO $pdo)
{
    $sql = $pdo->prepare("SELECT * FROM pessoas ORDER BY nome ASC");
    $sql->execute();
    $nomes = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $nomes;
}

function delete(PDO $pdo)
{
    $sql = $pdo->prepare("DELETE FROM pessoas WHERE id = ?");
    $sql->execute([$_POST["id"]]);
    echo "<script>location.href='index.php';</script>";
}