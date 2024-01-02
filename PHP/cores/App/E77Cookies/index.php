<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\E77Cookies\Library\LoginManager;

if(!empty($_POST)){
    $csrf = LoginManager::csrf();
    $csrf_cookie = $_COOKIE['csrf_token'];
    $csrf_post = $_POST['csrf_token'];
    echo '<pre>';
    print_r([$csrf, $csrf_cookie, $csrf_post]);
}

$cookie_name = 'csrf_token';

/*
 * if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
*/

?>

<form method="post" action="">
    <?php echo LoginManager::csrf('i'); ?>
    <button type="submit">Submit</button>
</form>
