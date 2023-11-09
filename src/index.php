<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto BackEnd</title>
</head>
<body>
    <h1>Projeto Php Com Monolog e Slim</h1>
    <?php
    include_once("conexao.php");
    if(isset($_POST['email']) or isset($_POST['senha'])) {
        if(strlen($_POST['email']) == 0) {
            echo "Preenche o seu email.";
        } else if(strlen($_POST['senha']) == 0) {
            echo "Preencha a sua senha";
        } else {
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {

                $usuario = $sql_query->fetch_assoc();
                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['username'] = $usuario['username'];
                //Sessão continua válida mesmo quando ele troca de página
                //Post = enviado por um formulário
                header("Location: teste.php");
                //Redirecionando o usuário

            } else {
                "Falha ao logar! E-mail ou senha incorretos";
            }

        }
    }
    ?>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p><p>    
            <label>Senha</label>
            <input type="password" name="senha">
        </p><p>
            <button type="submit">Login</button>
        </p>
    </form>
</body>
</html>