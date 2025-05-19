<?php
function conectar($bdhotel)
{
    return new PDO("mysql:host=localhost;dbname=$bdhotel", "root", "");

}

function encerrar()
{
    return null;

}

?>