<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Resto do cabeçalho -->
</head>
<body>
    <h1>Painel de Controle</h1>
    <p>Seja bem-vindo <?php echo $email; ?></p>

    <?php
    if (isset($_SESSION['mensagem'])) {
        echo "<p>" . $_SESSION['mensagem'] . "</p>";
        unset($_SESSION['mensagem']); 
    }
    ?>

    <a href="logout.php">Sair</a>
</body>
</html>
