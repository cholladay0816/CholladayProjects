<?php
class AboutModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  //Gets bio info using a name
  public function getAbout($name)
  {
    $sql = "SELECT * FROM `about` WHERE `name` = :name";
    $this->db->query($sql);
    $this->db->bind('name',$name);
    $res = $this->db->single();
    if($res)
    {
      $res->age = $this->getAge($res->dob);
    }
    return $res;
  }
  //Gets the number of years between two dates
  public function getAge($datetime)
  {
    $d1 = new DateTime($datetime);
    $d2 = new DateTime('now');
    $interval= $d1->diff($d2, false);
    return $interval->format('%y');
  }
}
?>
