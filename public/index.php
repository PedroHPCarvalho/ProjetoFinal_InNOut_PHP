<?php

require_once(dirname(__FILE__, 2) . '/src/config/database.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

// $sql = 'SELECT * FROM users';
// $result = Database::getResultFromQuery();

// while($rom = $result->fetch_assoc()){
//     print_r($rows);
//     echo '<br>';
// }

$user = new User(['name' => 'Lucas', 'email' => 'lucassla@gmail.com.br']);
print_r($user);
echo 'Fim';