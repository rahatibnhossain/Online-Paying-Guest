<?php
class Database {

public function dd ($dd) {
		echo("<pre>");
		print_r($dd);
		echo("</pre>");
	}

    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'crud';

    protected $connection;

    public function __construct()
    {
        if (!isset($this->connection)) {

            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }
      // $this->dd($this->connection);
        return $this->connection;
    }

  public function myQuery($sql_query){
    $mysqlq = $this -> connection;
	//print_r($mysqlq);die;
    return $mysqlq -> query($sql_query);
  }

	public function databaseClose () {
		$this -> connection -> close();
	}
}
$obj = new Database();
?>
