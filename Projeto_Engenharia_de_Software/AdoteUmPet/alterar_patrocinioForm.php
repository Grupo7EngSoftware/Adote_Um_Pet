<html>
    <head>
    <?php require "sidebar.php"; ?>
        <meta charset="UTF-8">
        <title>Alterar</title>
        <link rel="styleshhet" href="estilo/estilo.css"/>
        <?php
    
            $nome = filter_input(INPUT_GET, "nome");
            $cnpj = filter_input(INPUT_GET,"cnpj");
            $endereco = filter_input(INPUT_GET,"endereco");
            $email = filter_input(INPUT_GET,"email");
            $logo = filter_input(INPUT_GET,"logo");
        ?>

    </head>
    <body>
        <div cnpj="conteudo">
            <h1>Alterar dados</h1>
            <p>
                <form action="alterar_patrocinio.php">
                    Nome <input type="text" name="nome" value="<?php echo $nome?>"/><br><br>
                    CNPJ <input type="text" name="cnpj" value="<?php echo $cnpj?>"/><br><br>
                    Endereco <input type="text" name="endereco" value="<?php echo $endereco?>"/><br><br>
                    Email <input type="text" name="email" value="<?php echo $email?>"/><br><br>
                    Logo <input type="file" name="logo" value="<?php echo $logo?>"/><br><br>
                    <input type="submit"value="Alterar"/>
                </form>
            </input>
        </div>
    </body>
</html>
<form action="consultar_patrocinioForm.php">
    <input type="submit" value="Pesquisar novamente">
</form>
