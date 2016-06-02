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
			if($type == "cm"){
				if($convertTo == "cm"){
					echo $value . "cm";
				}elseif($convertTo == "m"){
					echo $value/100 . "m";
				}
			}elseif($type == "m"){
				if($convertTo == "cm"){
					echo $value*100 . "cm";
				}elseif($convertTo == "m"){
					echo $value . "m";
				}
			}
		}	
	}

?>



<!DOCTYPE HTML>

	<head>
		<title>Converter</title>
	</head>

	<body>
		
		<div>
			<form action= "lengthConverter.php"  method="post">
				<b>Value:</b> <input type="text" name="value" value=""/><br />
				<b>Unit type:</b> 
						<select name="type">
						<option value="">--Select a unit--</option>
						<option value="cm">cm</option>
						<option value="m">m</option>
						</select>
				<b>Convert to:</b> 
						<select name="convertTo">
						<option value="">--Select a unit--</option>
						<option value="cm">cm</option>	
						<option value="m">m</option>		
						</select>

				<input id="submit" type="submit" value="Convert">
			</form>		
		</div>

	</body>

</html>	