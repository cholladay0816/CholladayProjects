<?php


class Database
{
  private $host = DB_SERVER;
  private $username = DB_USER;
  private $password = DB_PASSWORD;
  private $dbname = DB_NAME;
  private $dbh;
  private $stmt;
  private $error;

  public function __construct()
  {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

    //Attempt to establish connection
    try
    {
      $this->dbh = new PDO($dsn, $this->username, $this->password);
    }
    //Connection failed
    catch (PDOException $e)
    {
      $this->error = $e->getMessage();
    }

  }
  //Prepare a SQL query
  public function query($sql)
  {
    $this->stmt = $this->dbh->prepare($sql);
  }
  //Prepare a SQL query
  public function getstmt()
  {
    return $this->stmt;
  }
  //Bind the parameters to the query
  public function bind($param, $value, $type = null)
  {
    //Define a type for the bind
    if(is_null($type))
    {
      switch(true)
      {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }
    $this->stmt->bindValue($param, $value, $type);
  }
  //Execute the SQL
  public function execute()
  {
    return $this->stmt->execute();
  }
  //Get Errors
  public function getError()
  {
    return $this->dbh->errorInfo();
  }
  //Get all records
  public function resultSet()
  {
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
  }
  //Get one record
  public function single()
  {
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_OBJ);
  }
  //Get number of rows
  public function rowCount()
  {
    return $this->stmt->rowCount();
  }
}
?>
