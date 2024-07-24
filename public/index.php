<?php

require_once(dirname(__FILE__,2) . '/src/config/config.php');
require_once(dirname(__FILE__,2) . '/src/models/User.php');

$user = new User(['name' => 'Pedro', 'email' => 'pedro@gmail.com']);

echo User::getSelect(['id' => 1], 'name','email');
echo '<br>';
echo User::getSelect(['name' => 'Chaves','email' => 'chaves@cod3r.com.br']);


