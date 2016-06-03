<!DOCTYPE HTML>

	<head>
		<title>Converter</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	</head>

	<body background="http://localhost/converter/images/5s-numbers-game-17-638.jpg">
		
		<div>
			<header>
				Volume Conversion
			</header>
			<img src="http://localhost/converter/images/imgres-1.jpg" height = "200px" width = "200px"/><br>
			<form action= "volumeConverter.php"  method="post">
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
				case "in":
					switch ($convertTo) {
						case 'in':
							echo $value . " cubic in";
							break;
						case 'ft':
							echo $value*0.00058 . " cubic ft";
							break;
						case 'cm':
							echo $value*16.38706 . " cubic cm";
							break;
						case 'mi':
							echo $value/4016064257.02811  . " cubic mi";
							break;	
						case 'm':
							echo $value*0.00002 . " cubic m";
							break;
					}
					break;	
				case "ft":
					switch ($convertTo) {
						case 'in':
							echo $value*1727.99912 . " cubic in";
							break;
						case 'ft':
							echo $value . " cubic ft";
							break;
						case 'cm':
							echo $value*28316.82518 . " cubic cm";
							break;
						case 'mi':
							echo $value/27889333.33333 . " cubic mi";
							break;	
						case 'm':
							echo $value*0.02834 . " cubic m";
							break;
					}
					break;			
				case "cm":
					switch ($convertTo) {
						case 'in':
							echo $value*0.06102 . " cubic in";
							break;
						case 'ft':
							echo $value*0.00004 . " cubic ft";
							break;
						case 'cm':
							echo $value . " cubic cm";
							break;
						case 'mi':
							echo $value/25910040160.64260 . " cubic mi";
							break;	
						case 'm':
							echo $value/28316.82518 . " cubic m";
							break;			
					}
					break;
				case "mi":
					switch ($convertTo) {
						case 'in':
							echo $value*4016064257.02811 . " cubic in";
							break;
						case 'ft':
							echo $value*27889333.33333 . " cubic ft";
							break;
						case 'cm':
							echo $value*25910040160.64260 . " cubic cm";
							break;
						case 'mi':
							echo $value . "cubic mi";
							break;	
						case 'm':
							echo $value*2591004.01606 . " cubic m";
							break;			
					}	
					break;
				case "m":
					switch ($convertTo) {
						case 'in':
							echo $value*60975.60976 . " cubic in";
							break;
						case 'ft':
							echo $value*10.76391 . " cubic ft";
							break;
						case 'cm':
							echo $value*999210.97561
							 . " cubic cm";
							break;
						case 'mi':
							echo $value/2591004.01606 . " cubic mi";
							break;	
						case 'm':
							echo $value . " cubic m";
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
						<option value="in">cubic in</option>
						<option value="ft">cubic ft</option>
						<!--<option value="mi">cubic mi</option>-->
						<option value="m">cubic m</option>
						<option value="cm">cubic cm</option>
						</select>
				<b>Convert to:</b> 
						<select name="convertTo">
						<option value="">--Select a unit--</option>
						<option value="in">cubic in</option>
						<option value="ft">cubic ft</option>
						<!--<option value="mi">cubic mi</option>-->
						<option value="m">cubic m</option>
						<option value="cm">cubic cm</option>
						</select>
				<br>
				<input id="submit" type="submit" value="Convert">	
				<br>
				<br>
			<a  id ="backBTN" href = "http://localhost/converter/index.php">Go back</a><br>	
			</p>
			</form>
		</div>

	</body>

</html>	