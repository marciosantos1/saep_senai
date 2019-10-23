<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Adicionar Cliente</title>
    </head>
    <body>

        <?php
        require 'classes/Cliente.php';
        $cod = $_GET['cod'];
        $cli = new Cliente();
        $cliente = $cli->listarFiltro($cod);
        ?>

        <?php
        if (isset($_POST ['nomCli'])) {
            header('Location: index.php');
            $cliEdi = new Cliente();
            $cliEdi->editar($_POST ['codCli'], $_POST ['nomCli'], $_POST ['endCli'], $_POST ['telCli']);
            
        }
        ?>

        <h2>Novo Cliente</h2>
        <form action="editar.php?cod=<?php echo $cliente ['codCli']; ?>" method="post">
            <label for="codCli">Codigo</label>
            <input id="codCli" name="codCli" type="text" maxlength="60" value="<?php echo $cliente ['codCli']; ?>"/>
            <br/><br/>
            <label for="nomCli">Nome</label>
            <input id="nomCli" name="nomCli" type="text" maxlength="60" value="<?php echo $cliente ['nomCli']; ?>"/>
            <br/><br/>
            <label for="endCli">Endereço</label>
            <input id="endCli" name="endCli" type="text" maxlength="120" value="<?php echo $cliente ['endCli']; ?>"/> 
            <br/><br/>
            <label for="telCli">Telefone</label>
            <input id="telCli" name="telCli" type="text" maxlength="15" value="<?php echo $cliente ['telCli']; ?>"/>    
            <br/><br/>
            <button type="submit">Editar</button>
        </form>
    </body>
</html>
