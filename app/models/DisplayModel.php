<?php
class DisplayModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  //Gets a list of projects to display on the homepage
  public function getProjectDisplays()
  {
    $sql = "SELECT * FROM `products` WHERE `type` = 'Project' AND `visible` = '1' ORDER BY `priority` ASC";
    $this->db->query($sql);
    return $this->db->resultSet();
  }
  //Gets a display by its name
  public function getDisplayByName($name)
  {
    $sql = "SELECT * FROM `products` WHERE `title` = :name AND `visible` = '1'";
    $this->db->query($sql);
    $this->db->bind('name',$name);
    return $this->db->single();
  }
  //Gets a full list of all displays, or filtered displays
  public function getDisplays($field)
  {
    //First, get all if none specified
    if($field == '')
    {
      $sql = "SELECT * FROM `products` WHERE `visible` = '1' ORDER BY `priority` ASC";
      $this->db->query($sql);
      return $this->db->resultSet();
    }

    $newfield = '%'.$field.'%';
    //Next, get matching categories
    $sql = "SELECT * FROM `products` WHERE `category` LIKE :field AND `visible` = '1' ORDER BY `priority` ASC";
    $this->db->query($sql);
    $this->db->bind('field',$newfield);
    $res = $this->db->resultSet();
    if(count($res)>0)
    {
      return $res;
    }

    //Try types
    $sql = "SELECT * FROM `products` WHERE `type` LIKE :field AND `visible` = '1' ORDER BY `priority` ASC";
    $this->db->query($sql);
    $this->db->bind('field',$newfield);
    $res = $this->db->resultSet();
    if(count($res)>0)
    {
      return $res;
    }
    
    //Try names and descriptions
    $sql = "SELECT * FROM `products` WHERE `title` LIKE :field OR `description` LIKE :field AND `visible` = '1' ORDER BY `priority` ASC";
    $this->db->query($sql);
    $this->db->bind('field',$newfield);
    return $this->db->resultSet();
  }
}
?>
