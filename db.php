<?php 

	try{

	$connection = new PDO("mysql:host=localhost;dbname=task", "root", "");

	}catch(Exception $e){

		echo "<h4 style = 'color: red;'>".$e->getMessage()."</h4>";

	}

	function getUser($email){

		global $connection;
		$query = $connection->prepare("SELECT * FROM project WHERE email = :email LIMIT 1");
		$query->execute(array("email"=>$email));
		$result = $query->fetch();
		return $result;

	}

	function addUser($email, $password, $fullname){

		global $connection;
		$query = $connection->prepare("INSERT INTO project (id, email, password, fullname) VALUES (NULL, :email, :password, :fullname)");
		$query->execute(array("email"=>$email, "password"=>$password, "fullname"=>$fullname));
	
	}
	
	function getTask(){

		global $connection;

		$query = $connection->prepare("SELECT * FROM phone");
		$query->execute();
		$result = $query->fetchAll();
		return $result;

	}

	function addPhone($name, $price, $amount){

		global $connection;
		$query = $connection->prepare("INSERT INTO phone (id, name, price, amount) VALUES (NULL, :n, :p,  :c) ");
		$query->execute(array("n"=>$name, "p"=>$price, "c"=>$amount));


	}

	function DetailsPhone($id){

		global $connection;

		$query = $connection->prepare("SELECT * FROM  phone WHERE id = :id");
		$query->execute(array("id"=>$id));
		$result = $query->fetch();
		return $result;

	}

	function UpdatePhone($id, $name, $price, $amount){

		global $connection;
		$query = $connection->prepare(" UPDATE phone SET  name = :n, price = :p, amount = :c WHERE id = :i");
		$query->execute(array("n"=>$name, "p"=>$price, "c"=>$amount, "i"=>$id));

	}

	function DeletePhone($id){

		global $connection;
		$query = $connection->prepare(" DELETE FROM  phone WHERE id = :i");
		$query->execute(array("i"=>$id));

	}
	
	function Search($search){

		$text = trim(strip_tags(stripcslashes(htmlspecialchars($search))));

		global $connection;

		$query = $connection->prepare("SELECT * FROM phone WHERE CONCAT(name)  LIKE '%$search%' ");
		$query->execute();
		$result = $query->fetchAll();
		return $result;

	}

	function getAllImage(){

		global $connection;

		$query = $connection->prepare("SELECT * FROM phone");
		$query->execute();
		$result = $query->fetchAll();

		return $result;

	}

	
?>