<?php 
require_once 'core/init.php';

if (!$username = Input::get('user')) {
    Redirect::to('index.php');
} else {
    $user = new User($username);
    if (!$user->exists()) {
        Redirect::to(404);
    } else {
        $data = $user->data();
    }
    ?>

    <h3><?php echo escape($user->data()->username); ?></h3>
    <p>Vollsändiger Name: <?php echo escape($user->data()->name); ?></p>

    <?php
}