<b>Opções</b>
<?php
if (@$user) {
    ?>
    <ul>
        <li><a href="/logout">Sair</a></li>
    </ul>
    <?php
} else {
        ?>
    <ul>
        <li><a href="/signin">Entrar</a></li>
    </ul>
    <?php
    }
?>
