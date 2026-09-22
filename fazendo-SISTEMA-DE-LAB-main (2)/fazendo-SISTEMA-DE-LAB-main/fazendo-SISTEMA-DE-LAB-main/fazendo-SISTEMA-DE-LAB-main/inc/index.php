<?php 
require_once ("conexao.php");   // ou o caminho correto

// Agora pode usar a variável $conexao
$sql = "SELECT * FROM labs";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>ID Lab</th>
            <th>Número do Lab</th>
          </tr>";

    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $linha['id_lab'] . "</td>";
        echo "<td>" . $linha['nr_lab'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nenhum laboratório encontrado.";
}
?>


