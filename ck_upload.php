<?php

if(isset($_FILES['upload']['name'])){
    $file = $_FILES['upload']['name'];
    $filetmp = $_FILES['upload']['tmp_name'];

    move_uploaded_file($filetmp, 'imagenes/'.$file);
    $function_number = $_GET['CKEditorFuncNum'];
    $url = 'imagenes/'.$file;

}