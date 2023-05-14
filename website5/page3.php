<?php 
    $user = ['name' => 'James', 'email' => 'test@test.com', 'age' => 35];

    $user = serialize($user);

    setcookie('user', $user, time() + (84600 + 30));

    $user = unserialize($_COOKIE['user']);

    print_r($user);
?>