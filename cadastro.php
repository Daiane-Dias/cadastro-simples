<?php

/* 
 * Cadastro php
 */

$login = $_POST['login'];
$senha = md5($_POST['senha']);
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('cadastro');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];

if($login == "" || $login == null){
    echo "<script language='javascript' type='text/javascript'>
    alert('Preencha o campo login!');window.location.href='cadastro.html';</script>";
    
}else{
    if($logarray == $login){
        echo "<script language='javascript' type='text/javascript'>
            alert('Esse login ja existe!');window.location.href='cadastro.html';</script>";
        die();
        
    }  else {
        $query = "INSERT INTO usuarios(login,senha) VALUES ('$login','$senha')";
        $insert = mysql_query($query,$connect);
        
        if($insert){
            echo "<script language='javascript' type='text/javascript'>
                alert('Usuario cadastrado com sucesso!');window.location.href='login.html';</script>";
        }  else {
            echo "<script language='javascript' type='text/javascript'>
                alert('Nao foi possivel cadastrar esse usuario');window.location.href='cadastro.html';</script>";
            
        } 
    }       
}

?>
