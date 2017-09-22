<?php
	
	class User{
		//Login: select en la tabla usuarios del registro que coincida con user y pass. Si no coincide ninguno no entra, si coincide uno muestra sus datos.
		
		private $user;
		private $pass;
		private $dbAccess;
		
		public function User($us, $ps, $cn){
			$this->user = $us;
			$this->pass = $ps;
			$this->dbAccess = $cn;
		}
		
		public function checkUser(){
			$user=$this->user;
			$pass=$this->pass;
			$result = $this->dbAccess->query("SELECT COUNT(Id) FROM Usuarios WHERE Name='$user' AND Password='$pass'");
			$row = mysqli_fetch_array($result);
			if($row[0]>0)
				return true;
			else
				return false;
		}
		
		public function getId(){
			$user=$this->user;
			$pass=$this->pass;
			$result = $this->dbAccess->query("SELECT Id FROM Usuarios WHERE Name='$user' AND Password='$pass'");
			$row = mysqli_fetch_array($result);
			return $row[0];
		}
	}
?>