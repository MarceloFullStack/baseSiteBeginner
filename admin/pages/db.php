<?php

$pages_all = function (){

    //buscar todas as paginas

};
/**
 * @param $id
 */
$pages_one = function ($id){

    //buscar uma pagina

};

$pages_create = function (){

    //cria uma pagina
    flash('Criado com seucesso', 'success ');
};
/**
 * @param $id
 */
$pages_edit = function ($id){

    //edita uma pagina
    flash('editado com seucesso', 'success ');

};
/**
 * @param $id
 */
$pages_delete = function ($id){

    //deleta uma pagina
    flash('Deletado', 'success ');

};