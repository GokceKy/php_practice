<?php
session_start();

// Kullanıcı dizisi yoksa oluştur
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array();
}

$message = "";

if (isset($_POST['register'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Aynı kullanıcı var mı kontrol
    if (isset($_SESSION['users'][$username])) {
        $message = "Bu kullanıcı zaten kayıtlı!";
    } else {

        // Şifreyi hashle
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Dizide sakla
        $_SESSION['users'][$username] = $hashedPassword;

        $message = "Kayıt başarılı! Giriş sayfasına gidin.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Ol</title>
</head>
<body>

<h2>Kayıt Ol</h2>

<form method="post">
    <input type="text" name="username" placeholder="Kullanıcı Adı" required><br><br>
    <input type="password" name="password" placeholder="Şifre" required><br><br>
    <button type="submit" name="register">Kayıt Ol</button>
</form>

<p><?php echo $message; ?></p>

<a href="login.php">Giriş Yap</a>

</body>
</html>