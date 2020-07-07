<?php

/* 
 * Pagina Principal
 */

$login_cookie = $_COOKIE['login'];
if(isset($login_cookie)){
    echo "Bem vindo, $login_cookie<br>";
    echo "Essas informaçoes <font color='red'>PODEM</font> ser acessadas por voce";
}  else {
   echo"Bem vindo Convidado<br>";
   echo "Essas informações<font color='red'>NAO PODEM</font>ser acessadas  por voce";
   echo"<br><a href='loin.html'>Faça Login</a>Para ler o conteudo";
}

