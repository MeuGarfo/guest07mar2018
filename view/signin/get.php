<?php
$data['title']='Entrar';
$data['content']=$view->view('signin/get_content', $data, false);
$view->view('layout', $data);
