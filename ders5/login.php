<?php
session_start();

$message = "";

if (isset($_POST['login'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Kullanıcı var mı?
    if (isset($_SESSION['users'][$username])) {

        // Şifre doğru mu?
        if (password_verify($password, $_SESSION['users'][$username])) {

            $_SESSION['activeUser'] = $username;

            // Panel sayfasına yönlendir
            header("Location: panel.php");
            exit();

        } else {
            $message = "Şifre yanlış!";
        }

    } else {
        $message = "Kullanıcı bulunamadı!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
</head>
<body>

<h2>Giriş Yap</h2>

<form method="post">
    <input type="text" name="username" placeholder="Kullanıcı Adı" required><br><br>
    <input type="password" name="password" placeholder="Şifre" required><br><br>
    <button type="submit" name="login">Giriş Yap</button>
</form>

<p><?php echo $message; ?></p>

<a href="register.php">Kayıt Ol</a>

</body>
</html>