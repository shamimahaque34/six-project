<?php
require_once '../vendor/autoload.php';
use App\classes\PassGenerator;
use App\classes\ImageUpload;

if (isset($_POST['btn']))
{
    $PassGenerator = new PassGenerator($_POST);
    $result = $PassGenerator->index();
    include 'home.php';
}

else if (isset($_POST['btn1']))
{
    $imageUpload = new ImageUpload($_POST);
    $imageUpload->index();
}