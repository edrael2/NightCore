<?php
include_once 'conn.php';

class Crud extends DbConfig
{
	
	private $lastID; 
	public function __construct()
	{
		parent::__construct();
	}
	public function getLastID(){
		
		return $this->lastID;
		
	}
	public function getData($query)
	{		
		$result = $this->connection->query($query);
		
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		echo json_encode($rows);
		return $rows;
	}
		
	public function execute($query) 
	{
		$result = $this->connection->query($query);
		$this->lastID = $this->connection->insert_id;
		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
			echo '<script>alert("Success")</script>';
			return true;
		}		
	}
	
	public function delete($id, $table) 
	{ 
		$query = "DELETE FROM $table WHERE id = $id";
		
		$result = $this->connection->query($query);
	
		if ($result == false) {
			echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
			return false;
		} else {
			return true;
		}
	}
	
	public function delete_member($id)
	{
		$query = "DELETE FROM `information` WHERE `information`.`Idno` = $id";
		$result = $this->connection->query($query);
		if ($results == false)
		{
			echo "unable to delete member";
			return false;
		}
		else {
			return true;
		}
	}
	/*public function update_member($id)
	{
		$query = "
		";
		$result = $this->connection->query($query);
		if ($results == false)
		{
			echo "unable to delete member";
			return false;
		}
		else {
			return true;
		}
	}
	public function escape_string($value)
	{
		return $this->connection->real_escape_string($value);
	}*/
}
?>