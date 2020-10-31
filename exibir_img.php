<?php
require_once('bd.php');

$consulta = $pdo->query("SELECT id, caminho_foto, destino_foto FROM caminho_fotos WHERE id > 0");


while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "ID:{$linha['id']} - NOME FOTO: {$linha['caminho_foto']} - FOTO: <img src={$linha['destino_foto']} width='100px' height='100px'> </img>";
    echo '<br> <br>';
}
