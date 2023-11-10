<form action="" method="post">
    <p>Nome de Usuário<input type="text" name="txtusu"></p>
    <p>Comentário<input type="text" name="txtcom"></p>
    <p><input type="submit" name="btn" value="Enviar"></p>
</form>

<?php
 require_once("conecta.php"); // Ajuste o caminho conforme a estrutura real do seu projeto

 $conexao = con(); // Armazena a conexão em uma variável

 
 if (isset($_POST['btn'])) {
   
    $id_comentario = $_POST['txtusu'];
    $comentario = $_POST['txtcom'];
    $sql = "
        INSERT INTO tb_comentarios
        (id_comentario, comentario)
        VALUES ('$id_comentario', '$comentario')
    ";

    $res = mysqli_query($conexao, $sql); // Executa a consulta usando a conexão armazenada
}

    $sql2 = "
        SELECT * FROM tb_comentarios
        ORDER BY datahora DESC
    ";
    $res2 = mysqli_query($conexao, $sql2);
    echo "
        <table border='1'>
            <tr>
            <th>ID#</th><th>Comentário</th><th>Data Hora</th>
            </tr>
    ";
    while($linha = mysqli_fetch_array($res2, 2)) {
        echo "
            <tr>
            <td>$linha[0]</td><td>$linha[1]</td><td>$linha[2]</td>
            </tr>
        ";
    }
    echo "</table>"
?>
