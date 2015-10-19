<?php

require_once 'core/init.php';

if (Session::exists('home'))
{
    echo '<p>' . Session::flash('home') . '</p>';
}

$user = new User();

if ($user->isLoggedIn())
{
?>
    <p>Hello, <a href="#"><?php echo escape($user->data()->username); ?></a>!</p>

    <ul>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="update.php">Update info</a></li>
    </ul>
<?php
}
else
{
    echo '<p>You need to <a href="login.php">log in</a> or <a href="register.php">register</a></p>';
}
