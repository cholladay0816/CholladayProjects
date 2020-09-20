<?php

class Controller
{
  public function model($model)
  {
    require_once('../app/models/' . $model . '.php');
    return new $model();
  }

  public function view($view, $data = [], $footer=1)
  {
    if(file_exists('../app/views/' . $view . '.php')) //If a view file exists, load page
    {
      require_once(APPROOT . '/views/inc/header.php');
      require_once('../app/views/' . $view . '.php'); //Add header and potentially footer
      if($footer==1)
      {
        require_once(APPROOT . '/views/inc/footer.php');
      }
    }
    else //if page not found, show an error
    {
      require_once(APPROOT . '/views/inc/header.php');
      require_once(APPROOT . '/views/error/does-not-exist.php');
      require_once(APPROOT . '/views/inc/footer.php');
      exit();
    }
  }
}
