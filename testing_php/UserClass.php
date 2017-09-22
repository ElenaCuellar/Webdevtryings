<?php
	class UserClass{
		//insert usuario, update, delete
		private $dbAccess;
		
		public function UserClass($dba){
			$this->dbAccess = $dba; 
		}
		
		public function insertUser($us, $ps, $tp){
			$this->dbAccess.query("insert into Usuarios (Name,Password,Type) values ('$us','$ps','$tp')");
		}
		
		public function updateUser($id,$us, $ps, $tp){
			$this->dbAccess.query("update Usuarios set Name='$us', Password='$ps', Type='$tp' where Id='$id'");
		}
		
		public function deleteUser($id){
			$this->dbAccess.query("DELETE FROM Usuarios WHERE Id='$id'");
		}
	}
?>