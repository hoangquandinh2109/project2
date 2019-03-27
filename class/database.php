<?php 
	/**
	* 
	*/
	class Database
	{
		public $servername = "localhost";
		public $username = "root";
		public $password = "";
		public $dbname = "beautymax";
		public $conn;



			
		function findOne($table, $column, $value)
		{
			$this->conn = $this->getConnection();

			$sql = "SELECT * FROM $table WHERE $column = $value";
			// echo $sql;
			$result = $this->conn->query($sql);
			if ($result)
			{
				$obj= $result->fetch_object();
				$result->free_result();
			}
			$this->conn->close();
			return $obj;
		}
		function getAll($table){
			$this->conn = $this->getConnection();

			$sql = "SELECT * FROM $table";
			$result = $this->conn->query($sql);
			$i=1;

			while ($obj = $result->fetch_object()){
				$objects[]= $obj;
			}
			$result->free_result();
			$this->conn->close();
			if(isset($objects)) return $objects;
		}
		function getAllWhere($table, $column, $value){
			$this->conn = $this->getConnection();

			$sql = "SELECT * FROM $table WHERE $column = $value";
			$result = $this->conn->query($sql);
			$i=1;
			$objects = array();
			while ($obj = $result->fetch_object()){
				$objects[]= $obj;
			}
			$result->free_result();
			$this->conn->close();
			return $objects;
		}
		function getNewestOrdersID(){
			$this->conn = $this->getConnection();

			$sql="SELECT MAX(`orders_id`) FROM `orders`";
			$result = $this->conn->query($sql);

			if ($result->num_rows > 0) {
			    $row = $result->fetch_assoc();
			} else {
			    echo "0 results";
			}
			$this->conn->close();
			return $row["MAX(`orders_id`)"];
		}
		function executeQuery($sql){
			$this->conn = $this->getConnection();
			$this->conn->query($sql);
			
		}
		function getConnection(){
			$con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			$con->set_charset("utf8");
			if ($con->connect_error) {
			    die("Connection failed: " . $con->connect_error);
			} 
			return $con;

		}
		function getByQuery($sql){
			$this->conn = $this->getConnection();

			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
			    $row = $result->fetch_assoc();
			} else {
			    echo "0 results";
			}
			return $row;
		}
	}
 ?>