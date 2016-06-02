<?php

	

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
			if($type == "C"){
				if($convertTo == "C"){
					echo $value . "C";
				}elseif($convertTo == "F"){
					echo (5/9 *($value-32))  . "F";
				}elseif($convertTo == "K"){
					echo $value+273 . "K";
				}
			}elseif($type == "F"){
				if($convertTo == "C"){
					echo (9/5*$value) +32 . "C";
				}elseif($convertTo == "F"){
					echo $value  . "F";
				}elseif($convertTo == "K"){
					echo (9/5*($value+273)) +32 . "K";
				}
			}
		}else{
			echo "Enter a  valid number";
		}	
	}

?>



<!DOCTYPE HTML>

	<head>
		<title>Converter</title>
	</head>

	<body>
		
		<div>
			<form action= "temperatureConverter.php"  method="post">
				<b>Value:</b> <input type="text" name="value" value=""/><br />
				<b>Unit type:</b> 
						<select name="type">
						<option value="">--Select a unit--</option>
						<option value="C">C</option>
						<option value="F">F</option>
						<option value="K">K</option>
						</select>
				<b>Convert to:</b> 
						<select name="convertTo">
						<option value="">--Select a unit--</option>
						<option value="C">C</option>	
						<option value="F">F</option>	
						<option value="K">K</option>
						</select>

				<input id="submit" type="submit" value="Convert">
			</form>		
		</div>

	</body>

</html>	