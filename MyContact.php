<?php

var_dump($_POST);
foreach ($_POST as $k => $v) {
    $$k = $v;
}


$dbc = new mysqli('localhost', 'root', '');

if($dbc ->connect_error)
{
    echo $dbc ->connect_error;
}
else
{
$dbc->select_db('ShopCurpet');
}

if($dbc -> error)
{
    echo $dbc -> error;
}
else
{
$sql = " INSERT INTO Customer (FullName , phonenum , Email , Title , Descrip) 
VALUES ('$FullName' , '$phonenum' , '$Email' , '$Title', '$Descrip')";
}


$result = $dbc->query($sql);
if ($dbc->error) 
{
    echo $dbc->error;
} 
else
{
    echo "عملیات با موفقیت انجام شد";
}
$dbc->close();
