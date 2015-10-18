<?php

require_once 'core/init.php';

if (Session::exists('success'))
{
    echo Session::flash('success');
}
