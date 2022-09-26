<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuaBook</title>
    <link rel="stylesheet" href="<?= $base ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar-content">
                <a href="<?= $base ?>"><img src="<?= $base ?>/assets/images/luabook-logo.png" alt="logo luabook" class="logo"></a>

                <form action="" method="get">
                    <input type="search" name="search" id="search" placeholder="Pesquisar">
                </form>
            </div>
            <ul class="navbar-content">

                <li><a href=""><img src="<?= $base ?>/assets/images/user.png" alt="perfil"> <?= $user->getName() ?></a></li>
                <li><a href="<?= $base ?>/sair">Sair</a></li>
            </ul>
        </nav>
    </header>