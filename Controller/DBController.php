<?php 
class DatabaseController {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "mydatabase";
    private $conn;
  
    public function __construct() {
      $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
  
      if (!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    }
  
    public function query($sql) {
      $result = mysqli_query($this->conn, $sql);
  
      if (!$result) {
        die("Query failed: " . mysqli_error($this->conn));
      }
  
      return $result;
    }
  
    public function insert($table, $data) {
      $columns = implode(", ", array_keys($data));
      $values = "'" . implode("', '", array_values($data)) . "'";
      $sql = "INSERT INTO $table ($columns) VALUES ($values)";
      return $this->query($sql);
    }
  
    public function update($table, $data, $where) {
      $set = array();
      foreach ($data as $key => $value) {
        $set[] = "$key = '$value'";
      }
      $set = implode(", ", $set);
      $sql = "UPDATE $table SET $set WHERE $where";
      return $this->query($sql);
    }
  
    public function delete($table, $where) {
      $sql = "DELETE FROM $table WHERE $where";
      return $this->query($sql);
    }
  
    public function select($table, $where = "1") {
      $sql = "SELECT * FROM $table WHERE $where";
      $result = $this->query($sql);
      $data = array();
      while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
      }
      return $data;
    }
  
    public function close() {
      mysqli_close($this->conn);
    }
  }


?>