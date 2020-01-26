<?php

$path = $_SERVER['PATH_INFO'] ?? '/';

if ($path == '/'){
    require_once __DIR__ . '/home.php';
}elseif ($path == '/contatos' || $path == '/contatos/'){
    require_once __DIR__ . '/contatos.php' ?? 'errado';
}else{
    echo "pagina nao encontrada";
}
