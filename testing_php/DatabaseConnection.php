<?php
	class DatabaseConnection{
		private $server;
		private $database;
		private $user;
		private $password;
		private $conexion = false;
		
		public function DatabaseConnection($server, $dbase, $us, $pass){
			$this->server = $server;
			$this->database = $dbase;
			$this->user = $us;
			$this->password = $pass;			
		}
		
		public function connection(){
			if($this->conexion==false)
				$this->conexion = mysqli_connect($this->server,$this->user,$this->password,$this->database) or die("Error while connecting database.");
		}
		
		public function getServer(){
			return $this->server;
		}
		
		public function setServer($server){
			$this->server = $server;
		}
		
		public function getDbase(){
			return $this->database;
		}
		
		public function setDbase($dbase){
			$this->database = $dbase;
		}
		
		public function getUser(){
			return $user;
		}
		
		public function setUser($us){
			$this->user = $us;
		}
		
		public function getPassword(){
			return $this->password;
		}
		
		public function setPassword($pass){
			$this->password = $pass;
		}
		public function getConnection(){
			
			if($this->conexion==false ){
				return $this->connection();
			}
			return $this->conexion;
		}
		
		public function setConnection($cn){
			$this->conexion = $cn;
		}
		
		public function query($sentence){
				return mysqli_query($this->getConnection(),$sentence);
		}
		
		public function disconnection(){
			if($this->conexion != false){
				mysqli_close($this->conexion);
				$this->conexion=false;
			}
		}
	}
?>