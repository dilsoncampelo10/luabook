<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - LuaBook</title>
    <link rel="stylesheet" href="<?=$base?>/assets/css/login.css">
</head>
<body>
    <div class="top">
        <img src="<?=$base?>/assets/images/luabook-logo.png" alt="logo luabook">
    </div>
    <section class="section-form">
        <form action="" method="post">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Digite seu nome completo">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
            <label for="email">Nascimento</label>
            <input type="date" name="birthdate" id="birthdate">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha">
            
        </form>
      
            <a href="<?=$base?>/login">Já possui conta? Faça login</a>
     
    </section>
</body>
</html>