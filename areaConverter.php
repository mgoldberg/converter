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
			switch ($type) {
				case "in":
					switch ($convertTo) {
						case 'in':
							echo $value . " square in";
							break;
						case 'ft':
							echo $value*0.00694 . " square ft";
							break;
						case 'cm':
							echo $value*6.45160 . " square cm";
							break;
						case 'mi':
							echo $value/4016064257.02811  . " square mi";
							break;	
						case 'm':
							echo $value*0.00065 . " square m";
							break;
					}
					break;	
				case "ft":
					switch ($convertTo) {
						case 'in':
							echo $value*144.00001 . " square in";
							break;
						case 'ft':
							echo $value . " square ft";
							break;
						case 'cm':
							echo $value*929.03046 . " square cm";
							break;
						case 'mi':
							echo $value/27889333.33333 . " square mi";
							break;	
						case 'm':
							echo $value*0.09290 . " square m";
							break;
					}
					break;			
				case "cm":
					switch ($convertTo) {
						case 'in':
							echo $value*0.155 . " square in";
							break;
						case 'ft':
							echo $value*0.00108 . " square ft";
							break;
						case 'cm':
							echo $value . " square cm";
							break;
						case 'mi':
							echo $value/25910040160.64260 . " square mi";
							break;	
						case 'm':
							echo $value/10000 . " square m";
							break;			
					}
					break;
				case "mi":
					switch ($convertTo) {
						case 'in':
							echo $value*4016064257.02811 . " square in";
							break;
						case 'ft':
							echo $value*27889333.33333 . " square ft";
							break;
						case 'cm':
							echo $value*25910040160.64260 . " square cm";
							break;
						case 'mi':
							echo $value . "square mi";
							break;	
						case 'm':
							echo $value*2591004.01606 . " square m";
							break;			
					}	
					break;
				case "m":
					switch ($convertTo) {
						case 'in':
							echo $value*1550.00310 . " square in";
							break;
						case 'ft':
							echo $value*10.76391 . " square ft";
							break;
						case 'cm':
							echo $value*10000 . " square cm";
							break;
						case 'mi':
							echo $value/2591004.01606 . " square mi";
							break;	
						case 'm':
							echo $value . " square m";
							break;			
					}
					break;	
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
			<form action= "areaConverter.php"  method="post">
				<b>Value:</b> <input type="text" name="value" value=""/><br />
				<b>Unit type:</b> 
						<select name="type">
						<option value="">--Select a unit--</option>
						<option value="in">square in</option>
						<option value="ft">square ft</option>
						<option value="mi">square mi</option>
						<option value="m">square m</option>
						<option value="cm">square cm</option>
						</select>
				<b>Convert to:</b> 
						<select name="convertTo">
						<option value="">--Select a unit--</option>
						<option value="in">square in</option>
						<option value="ft">square ft</option>
						<option value="mi">vmi</option>
						<option value="m">square m</option>
						<option value="cm">square cm</option>
						</select>

				<input id="submit" type="submit" value="Convert">
			</form>	
			<a href = "http://localhost/converter/index.php">Go back</a><br>	
		</div>

	</body>

</html>	