<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ADICIONAR CLIENTE</title>
    </head>
    <body>
        <?php
       if (isset($_POST ['nomCli'])){
           require 'classes/Cliente.php';
           $cli = new Cliente();
           $cli->adicionar($_POST ['nomCli'], $_POST ['endCli'],$_POST ['telCli']);
           
       }
        ?>
        <h2>Novo Cliente</h2>
        
        <form action="adicionar.php" method="post">
            <label for="nomCli">Nome</label>
            <input id="nomCli" name="nomCli" type="text" maxlength="120"/>
            <br/><br/>
            
            <label for="endCli">Endereço</label>
            <input id="endCli" name="endCli" type="text" maxlength="120"/>
            <br/><br/>
            
            <label for="telCli">Telefone</label>
            <input id="telCli" name="telCli" type="text" maxlength="15"/>
            <br/><br/>
            
            <button type="submit">Adicionar </button>
                
        </form>
        
    </body>
</html>
