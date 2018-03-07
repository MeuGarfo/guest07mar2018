<?php
$data['title']=$_ENV['site_name'];
$data['content']=$view->view('home/get_content', $data, false);
$data['right']=$view->view('home/get_right', $data, false);
$view->view('layout', $data);
