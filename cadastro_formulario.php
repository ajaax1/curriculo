<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="arquivos/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <main>
        <header>
        <div><img id="foto" src="<?php echo $_POST['fotos']?>"></div>
            <div id="nome_email">
                <h1>Nome: <?php echo $_POST['nome'] ?></h1>
                <h1>Email: <?php echo $_POST['email'] ?></p></h1>
            </div>
        </header>
        
        <div id="main_dois">
        <div class="titulo_style">
             <span class="material-symbols-outlined">feed</span>
            <h1> Dados</h1>
        </div>
            <footer class="flex">
                <p>CPF:<?php echo $_POST['cpf'] ?> </p>
                <p>CEP:<?php echo $_POST['cep'] ?></p>
                <p>DATA:<?php echo $_POST['data'] ?></p>
            </footer>
            <div class="titulo_style">
            <span class="material-symbols-outlined">badge</span> 
                <h1>Experiência Profissional</h1>
            </div>
            
            <footer>
                <p><?php echo $_POST['experiencia'] ?></p>
                <p><?php echo  $_POST['outra_experiencia'] ?></p>
            </footer>
            <div class="titulo_style">
            <span class="material-symbols-outlined">business_center</span>
                <h1>Objetivo</h1>
            </div>
            <footer>
                <p><?php echo $_POST['objetivo'] ?></p>
            </footer>
            <div class="titulo_style">
            <span class="material-symbols-outlined">school</span>
                <h1>Formação</h1>
            </div>
            <footer>
                <p><?php  echo  $_POST['formaçao'] ?></p>
                <p><?php echo  $_POST['outra_formaçao'] ?></p>
            </footer>
            <div id="copy">
                <p>©<?php echo date("Y"); ?>- Ruan Higor, Todos os direitos reservados</p>
            </div>
            
        </div>
        
    </main>
</body>

</html>