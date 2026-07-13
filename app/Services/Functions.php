<?php

function view($filePath, $data = [])
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
    $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
    $file = APP_ROOT.DIRECTORY_SEPARATOR.'resources/views'.DIRECTORY_SEPARATOR.$path.'.php';

    if (file_exists($file)) {
        extract($data);

        return require $file;
    }

    throw new Exception('Page not found'.$file);
}

function addPage($file)
{
    include_once APP_ROOT.'/resources/views/'.$file;
}

function redirect($url)
{
    header("Location: $url");
    exit();
}
