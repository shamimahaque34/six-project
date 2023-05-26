<?php
namespace App\classes;

class FileUpload
{
    public function __construct()
    {

    }

    public function index()
    {
        header('Location: pages/home.php');
    }
}