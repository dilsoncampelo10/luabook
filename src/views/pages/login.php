<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LuaBook</title>
    <link rel="stylesheet" href="<?=$base?>/assets/css/login.css">
</head>
<body>
    <div class="top">
        <img src="<?=$base?>/assets/images/luabook-logo.png" alt="logo luabook">
    </div>
    <section class="section-form">
        <form action="" method="post">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha">
            <input type="submit" value="Fazer login">
        </form>
      
            <a href="<?=$base?>/register">Não tem conta? Cadastre-se</a>
     
    </section>
</body>
</html>