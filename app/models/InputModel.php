<?php
class InputModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  //Clamps a value between a minimum and maximum
  public function clamp($current, $min, $max)
  {
    return max($min, min($max, $current));
  }
  //Sanitizes inputs
  public function sanitize($text)
  {
    return filter_var($text, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  }
}
?>
