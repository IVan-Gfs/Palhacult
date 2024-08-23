<?php
include '../conn.php';

// Obtendo dados do formulário
$nome = $_POST['titulo'];
$categoria = $_POST['categoria'];
$duracao = $_POST['duracao'];
$etaria = $_POST['etaria'];
$municipio = $_POST['municipio'];
$endereco = $_POST['endereco'];
$modalidade = $_POST['modalidade'];
$tipoEvento = $_POST['tipo'];
$dataInicio = $_POST['data'];
$dataFim = $_POST['dataFim'];
$horario = $_POST['horario'];
$localEvento = $_POST['localEvento'];
$descricao = $_POST['text'];

// Verificar se o arquivo foi carregado e definir o caminho da imagem
if (isset($_FILES['Imagem']) && $_FILES['Imagem']['error'] == UPLOAD_ERR_OK) {
    $imgEvento = 'uploads/' . basename($_FILES['Imagem']['name']);
    move_uploaded_file($_FILES['Imagem']['tmp_name'], '../uploads/' . basename($_FILES['Imagem']['name']));
} else {
    // Defina uma imagem padrão ou trate o erro conforme necessário
    $imgEvento = 'uploads/default.png';
}

// Preparar e executar a consulta
$stmt = $conn->prepare("INSERT INTO evento (nome, categoria, duracao, classificacao, endereco, cidade, modalidade, tipoEvento, dataInicio, dataFim, horario, localEvento, imgEvento, descricao) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssssss", $nome, $categoria, $duracao, $etaria, $municipio, $endereco, $modalidade, $tipoEvento, $dataInicio, $dataFim, $horario, $localEvento, $imgEvento, $descricao);

if ($stmt->execute()) {
    // Redirecionar para a página de confirmação
    header("Location: confirmacao.php");
    exit();
} else {
    echo "Erro ao adicionar o evento: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
