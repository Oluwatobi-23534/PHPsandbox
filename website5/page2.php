<?php 
    setcookie('username', 'Tobi', time() + (86400 * 30));

    // Delete cookie
    setcookie('username', 'Tobi', time() - 3600);

    if(count($_COOKIE) > 0) {
        echo 'There are '.count($_COOKIE). ' cookies saved<br>';
    } else {
        echo 'There are no cookies saved<br>';
    }

    if(isset($_COOKIE['username'])) {
        echo 'user '. $_COOKIE['username'] . ' is set<br>';
    } else {
        echo 'User is not set';
    }
?>