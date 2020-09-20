<?php

class Projects extends Controller
{
    public function __construct()
    {

    }

    public function index($optional_parameters = [])
    {
        $data = [];
        //If no project submitted, show an error
        if($optional_parameters==''||$optional_parameters==[]||$optional_parameters=='/')
        {
          $data['title'] = 'Project Not Found';
          $this->view('projects/index',$data);
          exit();
        }
        $project_name = urldecode( explode('/', $_GET['url'])[1] ); //Gets projects/_X_ from URL to put into the query
        $this->postModel = $this->model('DisplayModel');
        $data['display'] = $this->postModel->getDisplayByName($project_name); //Finds a project by name
        if(!$data['display']) //If none found, let the user know
        {
          $data['title'] = 'Project Not Found';
          $this->view('projects/index',$data);
          exit();
        }
        //Set the page title and description to the project's info
        $data['title'] = $data['display']->title;
        $data['description'] = $data['display']->description;
        $this->view('projects/'.urlencode($data['display']->title),$data);
    }
}
?>
