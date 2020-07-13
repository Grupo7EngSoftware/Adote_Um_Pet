<html>
    <head>
    <?php require "sidebar.php"; ?>
        <meta charset="UTF-8">
        <title>Alterar</title>
        <link rel="styleshhet" href="estilo/estilo.css"/>
        <?php
            $id = filter_input(INPUT_GET, "id");
            $nome = filter_input(INPUT_GET, "nome");
            $porte = filter_input(INPUT_GET,"porte");
            $descricao = filter_input(INPUT_GET,"descricao");
        ?>
    </head>
    <body>
        <div cpf="conteudo">
            <h1>Alterar dados</h1>
            <p>
                <form action="alterar_animal.php">
                    Nome <input type="text" name="nome" value="<?php echo $nome?>"/><br><br>
                    Porte <input type="text" name="porte" value="<?php echo $porte?>"/><br><br>
                    Descricao <input type="text" name="descricao" value="<?php echo $descricao?>"/><br><br>
                    <input type="submit"value="Alterar"/>
                </form>
            </input>
        </div>
    </body>
</html>
<form action="tela_admin.php">
    <input type="submit" value="Voltar">
</form>
