<?php $render('header',['user'=>$user]); ?>

<section class="content-main">
    <div>
        Horizonal
    </div>
    <div>
        <form action="">
            <img src="<?= $base ?>/assets/images/user.png" alt="perfil">
            <textarea name="post" class="feed-editor" placeholder="O que você está pensando, <?=$user->getName()?>? "></textarea>
            <input type="submit" value="Confirmar">
        </form>
        <div class="post">
            <div class="container">
                <div class="post-header">
                    <img src="<?= $base ?>/assets/images/user.png" alt="perfil">
                    <span><?= $user->getName() ?></span> <span>Fez um post</span> <span><?=$user->getBirthdate()?></span>
                </div>
                <div class="content-post">
                    Aqui vem o conteúdo
                </div>
                <div class="information-post">
                    0 Curtidas
                    0 Comentários
                </div>
                <div class="comments-post">
                    <h3>Comentários (5)</h3>
                    <img src="<?= $base ?>/assets/images/user.png" alt="perfil">
                    <input type="text" name="comment" id="comment" placeholder="Escreva um comentário">
                </div>
            </div>
        </div>
    </div>
    <div>
        Sugestões
    </div>
</section>