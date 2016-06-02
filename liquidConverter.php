<!DOCTYPE HTML>

	<head>
		<title>Converter</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	</head>

	<body background="http://localhost/converter/images/5s-numbers-game-17-638.jpg">
		
		<div>
			<header>
				Liquid Conversion
			</header>
			<form action= "liquidConverter.php"  method="post">
			<p>

<?php

	
	$value = "";
	$type = "";
	$convertTo = "";

	$value = check_input($_POST['value'], "Enter a value");
	$type = check_input($_POST['type'], "Enter a value");
	$convertTo = check_input($_POST['convertTo'], "Enter a value");



	//checks to see i required forms filled
	function check_input($data, $problem=''){

		$data = trim($data);
    	$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		if($data == NULL){
   			$Global['error'] = true;
   			//echo "enter all feilds";
   		}else{
   			return $data;
   		}
	}


	if(!empty($value)&&!empty($type)&&!empty($convertTo)){
		if(is_numeric($value)){
			switch ($type) {
				case "pint":
					switch ($convertTo) {
						case 'pint':
							echo $value . " pint";
							break;
						case 'gallon':
							echo $value*0.10408 . " gallon";
							break;
						case 'quart':
							echo $value*0.5 . " quarts";
							break;
						case 'cup':
							echo $value*2 . " cup";
							break;
					}
					break;	
				case "gallon":
					switch ($convertTo) {
						case 'pint':
							echo $value*9.60762 . " pint";
							break;
						case 'gallon':
							echo $value . " gallon";
							break;
						case 'quart':
							echo $value*4.80381. " quarts";
							break;
						case 'cup':
							echo $value*19.21524 . " cup";
							break;
					}
					break;			
				case "quart":
					switch ($convertTo) {
						case 'pint':
							echo $value*2 . " pint";
							break;
						case 'gallon':
							echo $value*0.20817 . " gallon";
							break;
						case 'quart':
							echo $value . " quarts";
							break;
						case 'cup':
							echo $value*4 . " cup";
							break;			
					}
					break;
				case "cup":
					switch ($convertTo) {
						case 'pint':
							echo $value*.5 . " pint";
							break;
						case 'gallon':
							echo $value*0.05204 . " gallon";
							break;
						case 'quart':
							echo $value*0.25 . " quarts";
							break;
						case 'cup':
							echo $value . " cup";
							break;			
					}
					break;	
			}	
		}else{
			echo "Enter a  valid number";
		}	
	}

?>
<br>

				<b>Value:</b> <input type="text" name="value" value=""/><br />
				<b>Unit type:</b> 
						<select name="type">
						<option value="">--Select a unit--</option>
						<option value="pint">pint</option>
						<option value="gallon">gallon</option>
						<option value="cup">cup</option>
						<option value="quart">quart</option>
						</select>
				<b>Convert to:</b> 
						<select name="convertTo">
						<option value="">--Select a unit--</option>
						<option value="pint">pint</option>
						<option value="gallon">gallon</option>
						<option value="cup">cup</option>
						<option value="quart">quart</option>
						</select>

				<input id="submit" type="submit" value="Convert">
				<br>
			<a  id ="backBTN" href = "http://localhost/converter/index.php">Go back</a><br>	
			</p>
			</form>
		</div>

	</body>

</html>	