<?php

class Contact extends Controller
{
    public function __construct()
    {

    }
    //Originally planned to use a contact form, but it's much more convenient to just redirect to a main outlet like email or a public account.
    public function index()
    {
        $data = [];
        $data['title'] = 'Contact';
        $this->view('contact/contact-info', $data);
    }
}
?>
