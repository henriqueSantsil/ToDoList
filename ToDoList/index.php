<?php

    require('conect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="">Bem vindo a lista de a fazeres</h1>
        
        <form method="post" class="">
            Nova tarefa: <input type="text" name="tarefa" placeholder="Insira uma tarefa">
            <input type="submit" value="enviar">
        </form>
        
        <div class="lista">
            <ul>
                <?php foreach($lista as $item): ?>
                    <li <?= $item['concluida']?'class="concluida"': ''; ?>>
                        
                    <?=$item['descricao'];?>

                    <?php if(!$item['concluida']): ?>
                        <a class="link-concluir" href="?concluir=<?= $item['id']?>">Concluir</a>
                        <?php else: ?>
                            <a class="link-reabrir" href="?reabrir=<?= $item['id']?>">Reabrir</a>
                    <?php endif;?>

                    <a class="link-excluir" href="?excluir=<?= $item['id']?>">Excluir</a>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

