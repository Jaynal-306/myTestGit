//Task-1:>>>>>>

<!DOCTYPE html>
<html>
<head>
	<title>HTML FORM</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
		}
		.container {
			width: 50%;
			margin: 0 auto;
			padding: 20px;
			background-color: #ccc;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
		}
		h1 {
			margin-top: 0;
		}
		form {
			display: flex;
			flex-wrap: wrap;
			margin-bottom: 20px;
		}
		label {
			width: 100%;
			margin-bottom: 5px;
		}
		input[type="text"], select {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			margin-bottom: 10px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		p {
			font-size: 18px;
			margin: 0;
			padding: 10px;
			background-color: #e6e6e6;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 style="text-align:center">Name and Email Submition Form</h1>
		<form action="string_tool.php" method="post">
			<label for="input_string">Enter Your Name:</label>
			<input type="text" id="input_string" name="input_string">
			<label for="input_string">Enter Your Email:</label>
			<input type="text" id="input_string" name="email">
			<input type="submit" value="Submit">
		</form>
		
	</div>

</body>
</html>

//Task-2: >>>>>
<?php
class Person{
	public $name;
	public $email;
	function name($name){
		echo $name;
	}

	function email($email){
		echo $email;
	}
	function getName($name){

	}

	function getEmail($email){

	}
}

$obj = new Person();

$obj->name("Hamid");

$obj->email("hamid@email.com");


//==============
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
