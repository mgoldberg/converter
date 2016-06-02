
<!DOCTYPE HTML>

	<head>
		<title>Converter</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	</head>

	<body background="http://localhost/converter/images/5s-numbers-game-17-638.jpg">
		
		<div>
			<header>
				Weight Conversion
			</header>
			<form action= "weightConverter.php"  method="post">
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
   		}else{
   			return $data;
   		}
	}


	if(!empty($value)&&!empty($type)&&!empty($convertTo)){
		if(is_numeric($value)){
			switch ($type) {
				case "lb":
					switch ($convertTo) {
						case 'lb':
							echo $value . "lb";
							break;
						case 'oz':
							echo $value*16 . "oz";
							break;
						case 'ton':
							echo $value*0.00050 . "tons";
							break;
						case 'g':
							echo $value*453.59232  . "g";
							break;	
						case 'kg':
							echo $value*0.45359 . "kg";
							break;
					}
					break;	
				case "oz":
					switch ($convertTo) {
						case 'lb':
							echo $value*0.00220 . "lb";
							break;
						case 'oz':
							echo $value . "oz";
							break;
						case 'ton':
							echo $value*0.00050 . "tons";
							break;
						case 'g':
							echo $value*28.34952 . "g";
							break;	
						case 'kg':
							echo $value*0.02835 . "kg";
							break;
					}
					break;			
				case "ton":
					switch ($convertTo) {
						case 'lb':
							echo $value*2000 . "lb";
							break;
						case 'oz':
							echo $value*32000 . "oz";
							break;
						case 'ton':
							echo $value . "tons";
							break;
						case 'g':
							echo $value*907184.64 . "g";
							break;	
						case 'kg':
							echo $value*907.18464 . "kg";
							break;			
					}
					break;
				case "g":
					switch ($convertTo) {
						case 'lb':
							echo $value*0.00220 . "lb";
							break;
						case 'oz':
							echo $value*0.03527 . "oz";
							break;
						case 'ton':
							echo $value . "tons";
							break;
						case 'g':
							echo $value/907184.64 . "g";
							break;	
						case 'kg':
							echo $value*0.001 . "kg";
							break;			
					}	
					break;
				case "kg":
					switch ($convertTo) {
						case 'lb':
							echo $value*2.20462 . "lb";
							break;
						case 'oz':
							echo $value*35.27397 . "oz";
							break;
						case 'ton':
							echo $value*0.0011 . "tons";
							break;
						case 'g':
							echo $value*1000 . "g";
							break;	
						case 'kg':
							echo $value . "kg";
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
						<option value="lb">lb</option>
						<option value="oz">oz</option>
						<option value="g">g</option>
						<option value="kg">kg</option>
						<option value="ton">ton</option>
						</select>
				<b>Convert to:</b> 
						<select name="convertTo">
						<option value="">--Select a unit--</option>
						<option value="lb">lb</option>
						<option value="oz">oz</option>
						<option value="g">g</option>
						<option value="kg">kg</option>
						<option value="ton">ton</option>
						</select>

				<input id="submit" type="submit" value="Convert">
				<br>
			<a id ="backBTN"  href = "http://localhost/converter/index.php">Go back</a><br>	
			</p>
			</form>
		</div>

	</body>

</html>	