<?php

class Home extends Controller
{
    public function __construct()
    {

    }
    //Prevents unwanted siteground redirection behavior
    public function index()
    {
        header('location:'.URLROOT);
        exit();
    }
}
?>
