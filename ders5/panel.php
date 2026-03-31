<?php
session_start();

// Giriş yapılmamışsa geri gönder
if (!isset($_SESSION['activeUser'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel</title>
</head>
<body>

<h2>Hoşgeldiniz, <?php echo $_SESSION['activeUser']; ?> 👋</h2>

<h3>Kayıtlı Kullanıcılar</h3>

<?php
foreach ($_SESSION['users'] as $username => $password) {
    echo "Kullanıcı: $username <br>";
    echo "Şifre (hash): $password <br>";
    echo "------------------<br>";
}
?>

<br>

<form method="post" action="logout.php">
    <button type="submit">Çıkış Yap</button>
</form>

</body>
</html>