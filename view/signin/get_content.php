<?php
if (@$user) {
    $url='/';
    die($view->redirect($url));
}
?>
<form class="form-signin" method="post" action="/signin">
    <?php
    if (@$errors) {
        ?>
        <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Erro</h4>
            Dados incorretos
        </div>
        <?php
    }
    ?>
    <h2 class="form-signin-heading"><?php print $title; ?></h2>
    <input type="email" class="input-block-level" placeholder="Email" name="email">
    <input type="password" class="input-block-level" placeholder="Senha" name="password">
    <button class="btn btn-large btn-primary" type="submit"><?php print $title; ?></button>
</form>
