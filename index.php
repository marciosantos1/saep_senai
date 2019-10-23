<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ok</title>
    </head>
    <body>
         <?php
        require 'classes/Cliente.php';
        $cli = new Cliente();
        $clientes = $cli->listar();
     
        if (isset($_GET['delCli'])) {
            $cod=$_GET['delCli'];
            $cliDel = new Cliente();
            $cliDel->eliminar($cod);
            header('Location: index.php');
            unset($delCli);
        }
        ?>
        <a href="adicionar.php">Novo Cliente</a>
        

        <table>
            <thead>
                <tr>
                    <td>Cód</td>
                    <td>Nome</td>    
                    <td>Endereco</td>
                    <td>Telefone</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $c){?>
                
                <tr>
                    <td><?php echo $c ['codCli']; ?></td>
                    <td><?php echo $c ['nomCli']; ?></td>
                    <td><?php echo $c ['endCli']; ?></td>
                    <td><?php echo $c ['telCli']; ?></td>
                    
                    <td>
                        <button><a href="editar.php?cod=<?php echo $c['codCli'] ?>">Editar</a></button>
                            <button><a href="index.php?delCli=<?php echo $c['codCli'] ?>">Excluir</a></button>

                    </td>
                </tr>
                        <?php }?>
                
            </tbody>
        </table>
    </body>
</html>
