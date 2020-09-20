<?php

class Explore extends Controller
{
    public function __construct()
    {

    }

    public function index($optional_parameters = '')
    {
        if($_SERVER['REQUEST_METHOD'] == "POST") //If a POST was sent from a search, set the param to the result of this
        {
          if($_POST['explore']!='')
          {
            $optional_parameters = $_POST['explore'];
          }
        }
        else if($optional_parameters!='')
        {
          $optional_parameters = explode('/', $_GET['url'])[1]; //Gets explore/_X_ from URL
        }
        //No params, make blank for all results
        else
        {
          $optional_parameters = '';
        }
        $data = [];
        $data['title'] = 'Explore';
        //Grab every available display (filtered if one is provided)
        $this->postModel = $this->model('DisplayModel');
        $data['displays'] = $this->postModel->getDisplays($optional_parameters);
        if(count($data['displays'])==0) //No displays, show custom page
        {
          $data['param'] = $optional_parameters;
          $this->view('explore/none',$data);
          exit();
        }
        $this->view('explore/index', $data);
    }
}
?>
