<?php

    $conexao = new PDO("mysql:host=localhost;dbname=tarefas", "root", "");

    if(isset($_POST['tarefa'])){
        $tarefa = $_POST['tarefa'];

        $query = 'INSERT INTO tarefas (descricao, concluida) VALUES (:descricao, 0);
        ';
        $stmt = $conexao->prepare($query);
        $stmt->bindParam('descricao', $tarefa);
        $stmt->execute();
        header('location: http://localhost/ToDoList/index.php');
    }
    
    if(isset($_GET['excluir'])){
        $id = $_GET['excluir'];
        $query = 'DELETE FROM tarefas WHERE id = :id';
        $stmt = $conexao->prepare($query);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        header('location: http://localhost/ToDoList/index.php');
    }

    if(isset($_GET['concluir'])){
        $id = $_GET['concluir'];
        $query = 'UPDATE tarefas SET concluida=1 WHERE id = :id';
        $stmt = $conexao->prepare($query);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        header('location: http://localhost/ToDoList/index.php');
    }
    if(isset($_GET['reabrir'])){
        $id = $_GET['reabrir'];
        $query = 'UPDATE tarefas SET concluida=0 WHERE id = :id';
        $stmt = $conexao->prepare($query);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        header('location: http://localhost/ToDoList/index.php');
    }

    $query = "SELECT id,descricao,concluida FROM tarefas";
    $lista = $conexao->query($query)->fetchAll();

    
?>