<?php 
	class Manager 
	{ 
		protected function dbConnect() 
		{ 
			$host_name = '127.0.0.1'; 
			$database = 'c1AdnCons2022bdd'; 
			$user_name = 'c1ConsAdn2022'; 
			$password = 'aqPZQq#8Zs'; 
			$db = null; 
			try 
			{ 
				$db = new PDO("mysql:host=$host_name; dbname=$database", $user_name, $password);
				return $db; 
			} 
			catch (PDOException $e) 
			{ 
				echo "Erreur!: " . $e->getMessage() . "<br/>"; 
				die(); 
			} 
		} 
	}

?>