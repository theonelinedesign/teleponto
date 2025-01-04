<?php
if (isset($_FILES['file'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "Ficheiro carregado com sucesso.";
    } else {
        echo "Erro ao carregar o ficheiro.";
    }
} else {
    echo "Nenhum ficheiro enviado.";
}
?>