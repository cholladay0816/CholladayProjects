<?php

class About extends Controller
{
    public function __construct()
    {

    }
    
    public function index()
    {
        $data = [];
        $data['title'] = 'About Me';
        $this->postModel = $this->model('AboutModel');
        $data['about'] = $this->postModel->getAbout('Christian Holladay');
        $this->view('about/index', $data);
    }
}
?>
