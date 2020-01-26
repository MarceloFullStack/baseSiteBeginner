<?php


if (resolve('/admin')){
    render('admin/home', 'admin');
}elseif (resolve('/admin/pages')){
    render('admin/pages','admin');
}else{
    echo "pagina nao encontrada";
}