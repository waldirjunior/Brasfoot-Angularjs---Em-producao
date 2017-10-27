<?php 
  $response = array();
  $posts = array();

  $posts[] = array('title'=> "teste", 'url'=> "dois");


  $response['posts'] = $posts;

  $fp = fopen('teste.json', 'w');
  fwrite($fp, json_encode($response));
  fclose($fp);


?> 