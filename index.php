<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>
</head>

<body>
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Giriş Yap</h1>
            </div>
            <form action="islem.php" method="post">
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    <div class="control-group">
                        <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
                        <label class="login-field-icon fui-user" for="login-pass"></label>
                    </div>
                    <div class="buttons">
                        <a href="index.php" class="btn btn-primary btn-large btn-block">Giriş Yap</a>
                        <a href="register.php" class="btn btn-primary btn-large btn-block">Kayıt Ol</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>