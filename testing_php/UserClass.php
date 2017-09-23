<?php
	class UserClass{
		//insert usuario, update, delete
		private $dbAccess;
		
		public function UserClass($dba){
			$this->dbAccess = $dba; 
		}
		
		public function nameExists($us){
			$result=$this->dbAccess->query("SELECT COUNT(Name) FROM Usuarios WHERE Name='$us'");
			$row = mysqli_fetch_array($result);
			if($row[0]>0)
				return true;
			else
				return false;
		}
		
		public function insertUser($us, $ps, $tp){
			$this->dbAccess->query("insert into Usuarios (Name,Password,Type) values ('$us','$ps','$tp')");
		}
		
		public function updateUser($id,$us, $ps, $tp){
			$this->dbAccess->query("update Usuarios set Name='$us', Password='$ps', Type='$tp' where Id='$id'");
		}
		
		public function updatePass($id,$newPs){
			$this->dbAccess->query("update Usuarios set Password='$newPs' where Id='$id'");
		}
		
		public function deleteUser($id){
			$this->dbAccess->query("DELETE FROM Usuarios WHERE Id='$id'");
		}
	}
?>