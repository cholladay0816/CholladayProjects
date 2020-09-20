<?php

class Pages extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data = [];
        $data['title'] = 'Home';
        $this->postModel = $this->model('DisplayModel');
        $data['displays'] = $this->postModel->getProjectDisplays(); //Get list of projects
        $data['description'] = 'This is my web portfolio, where I upload and share my projects, demos, and creations.';
        $this->view('pages/index', $data,0);
        echo '<div my-5><br /></div>';
        echo '<div class="wow fadeInUp">';
        $this->AboutModel = $this->model('AboutModel');
        $data['about'] = $this->AboutModel->getAbout('Christian Holladay'); //Show about information lower down
        $this->view('about/index', $data,0);
        echo '</div>';
        echo '<div my-5><br />
        </div>';
        echo '<div class="container wow fadeIn">';
        echo '<h2 my-2>Explore</h2>';
        $data['displays'] = $this->postModel->getDisplays(''); //Start exploring at the bottom
        $this->view('explore/index', $data);
        echo '</div>';
    }
}
?>
