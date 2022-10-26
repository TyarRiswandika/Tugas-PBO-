<?php
class DbConfig
{
    private $_host = 'localhost';
    private $_username = 'tyar';
    private $_password = '';
    private $_database = 'musik';

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

        return $this->connection;        
    }
}
$conn = mysqli_connect("localhost","root","","musik");

function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>