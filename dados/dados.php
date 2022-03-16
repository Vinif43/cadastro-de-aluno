<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Alunos</title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="dados.css">
</head>
<body>
    <?php 

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $matricula = $_POST["matricula"];
            $nota1 = (float)$_POST["nota1"];
            $nota2 = (float)$_POST["nota2"];
            $media = (float) ($nota1 + $nota2) / 2;

            $arquivo = fopen("dados.txt", "a");
            if(filesize("dados.txt") == 0){
                fwrite($arquivo, "$nome");
            }
            else{
                fwrite($arquivo, "\n$nome");
            }
            fwrite($arquivo, "\n$matricula");
            fwrite($arquivo, "\n$nota1");
            fwrite($arquivo, "\n$nota2");
            fwrite($arquivo, "\n$media");
            fclose($arquivo);
        }
        ?>

        <?php 
            $dados = [];
            $dado = [];

                $arquivo = fopen("dados.txt", "r");
                while(!feof($arquivo)){
                    $produto["nome"] = fgets($arquivo);
                    $produto["matricula"] = (int) fgets($arquivo);
                    $produto["nota1"] = (float) fgets($arquivo);
                    $produto["nota2"] = (float) fgets($arquivo);
                    $produto["media"] = (float) fgets($arquivo);
                    
                    $dados[] = $produto;
                }
                fclose($arquivo);
        ?>

    

    <div class="card">

       <a class="return" href="../cadastro/cadastro.html"><ion-icon name="arrow-undo-outline"></ion-icon></a>

        <table id="vai">    
            <tr>
                <th>Nome</th>
                <th>Matrícula</td>
                <th>Primeira Nota</th>
                <th>Segunda Nota</th>
                <th>Média</th>
                
            </tr>
                <?php foreach($dados as $dado){ ?>
                        <td><?=$dado["nome"]?></td>
                        <td><?=$dado["matricula"]?></td>
                        <td><?=$dado["nota1"]?></td>
                        <td><?=$dado["nota2"]?></td>
                        <td><?=$dado["media"]?></td>
                    </tr>
                    <?php } ?>
        </table>
    </div>    

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>