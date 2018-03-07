<form class="" action="/message" method="post">
    <fieldset>
        <legend>Mensagens</legend>
        <label for="message">Escreva sua mensagem</label>
        <textarea id="message" class="input-block-level" name="message" rows="3" cols="80"></textarea>
        <button type="submit" class="btn btn-large btn-primary" >
            Enviar mensagem
        </button>
    </fieldset>
</form>
<hr>
<?php
use Jenssegers\Date\Date;

if (count($messages)>0) {
    foreach ($messages as $message) {
        Date::setLocale('pt', 'America/Sao_Paulo');
        $created_at=$message['created_at'];
        $created_at=Date::createFromFormat('U', $created_at);
        $created_at=$created_at->sub('3 hour');
        $format='l, j F Y H:i:s';
        $created_at=$created_at->format($format);
        $created_at=ucwords($created_at);
        $name=$message['name'];
        print '<h5>'.$name.'<br><small>'.$created_at.'</small></h5>';
        print $view->e($message['message']).'<hr>';
    }
} else {
    print 'Nenhuma mensagem para ser exibida.';
}
?>
