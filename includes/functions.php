<?php

function url($path)
{
    return 'http://194.5.157.101/filmai/index.php/' . $path;
}

function urlStyle($path)
{
    return 'http://194.5.157.101/filmai/resources/' . $path;
}

function dd($data)
{
    echo '<pre>';
    print_r($data);
    die();
}

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
}