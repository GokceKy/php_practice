<?php
// ----------------------------------------
// 1️⃣ SESSION başlatıyoruz
// ----------------------------------------
// Session, sayfa yenilense bile PHP'nin
// hafızasında bilgiyi tutmamızı sağlar.
session_start();

// ----------------------------------------
// 2️⃣ Kullanıcıları saklamak için bir dizi oluşturuyoruz
// ----------------------------------------
// Diziyi session içinde tutuyoruz. Başlangıçta boş
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array();
}

// Mesaj değişkeni (Hoşgeldiniz / Hatalı şifre / Kayıt yapıldı)
$message = "";

// ----------------------------------------
// 3️⃣ Form gönderildiğinde (kullanıcı butona bastığında)
// ----------------------------------------
if (isset($_POST['login'])) {

    // Kullanıcı adı ve şifreyi formdan alıyoruz
    $username = trim($_POST['username']); // trim: baştaki ve sondaki boşlukları temizler
    $password = trim($_POST['password']);

    // ----------------------------------------
    // 4️⃣ Kullanıcı var mı kontrol edelim
    // ----------------------------------------
    if (isset($_SESSION['users'][$username])) {
        // Kullanıcı dizide varsa şifre kontrolü
        if ($_SESSION['users'][$username] == $password) {
            $message = "Giriş başarılı! Hoşgeldiniz, $username!";
        } else {
            $message = "Hatalı şifre!";
        }
    } else {
        // Kullanıcı yoksa dizimize kaydediyoruz
        $_SESSION['users'][$username] = $password;
        $message = "Yeni kullanıcı kaydedildi! Hoşgeldiniz, $username!";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Basit Giriş Ekranı</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-box {
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        input {
            display:block;
            width:100%;
            padding:10px;
            margin-bottom:15px;
            border-radius:5px;
            border:1px solid #ccc;
        }

        button {
            padding:10px 20px;
            border:none;
            background-color:#333;
            color:#fff;
            border-radius:5px;
            cursor:pointer;
        }

        .message {
            margin-top:15px;
            color: green;
        }

        .user-list {
            margin-top:20px;
            padding:10px;
            background:#eee;
            border-radius:5px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Giriş Yap / Kayıt Ol</h2>

    <!-- Kullanıcı adı ve şifre formu -->
    <form method="post">
        <input type="text" name="username" placeholder="Kullanıcı Adı" required>
        <input type="password" name="password" placeholder="Şifre" required>
        <button type="submit" name="login">Giriş / Kayıt</button>
    </form>

    <!-- Giriş veya kayıt mesajını göster -->
    <?php
    if ($message != "") {
        echo "<div class='message'>$message</div>";
    }
    ?>

    <!-- Giriş yapıldıysa dizideki tüm kullanıcıları göster -->
    <?php
    if (isset($_SESSION['users']) && !empty($_SESSION['users'])) {
        echo "<div class='user-list'>";
        echo "<strong>Mevcut Kullanıcılar:</strong><br>";

        // Dizideki her kullanıcıyı tek tek yazdırıyoruz
        foreach ($_SESSION['users'] as $user => $pass) {
            echo "Kullanıcı Adı: $user | Şifre: $pass <br>";
        }

        echo "</div>";
    }
    ?>
</div>

</body>
</html>