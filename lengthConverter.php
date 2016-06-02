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
				}elseif($convertTo == "in"){
					echo $value*0.39370078740157 . "in";
				}elseif($convertTo == "ft"){
					echo $value*0.032808398950131 . "ft";
				}elseif($convertTo == "mi"){
					echo $value*0.0000062137119223733 . "mi";
				}elseif($convertTo == "km"){
					echo $value*0.00001 . "km";
				}
			}elseif($type == "m"){
				if($convertTo == "cm"){
					echo $value*100 . "cm";
				}elseif($convertTo == "m"){
					echo $value . "m";
				}elseif($convertTo == "in"){
					echo $value*39.370078740157 . "in";
				}elseif($convertTo == "ft"){
					echo $value*3.2808398950131 . "ft";
				}elseif($convertTo == "mi"){
					echo $value*0.00062137119223733 . "mi";
				}elseif($convertTo == "km"){
					echo $value*0.001 . "km";
				}
			}elseif($type == "km"){
				if($convertTo == "cm"){
					echo $value*100000 . "cm";
				}elseif($convertTo == "m"){
					echo $value*1000 . "m";
				}elseif($convertTo == "in"){
					echo $value*39370.078740157 . "in";
				}elseif($convertTo == "ft"){
					echo $value*3280.8398950131 . "ft";
				}elseif($convertTo == "mi"){
					echo $value*0.62137119223733 . "mi";
				}elseif($convertTo == "km"){
					echo $value . "km";
				}
			}elseif($type == "in"){
				if($convertTo == "cm"){
					echo $value*2.54 . "cm";
				}elseif($convertTo == "m"){
					echo $value*0.0254 . "m";
				}elseif($convertTo == "in"){
					echo $value . "in";
				}elseif($convertTo == "ft"){
					echo $value*0.083333333333333 . "ft";
				}elseif($convertTo == "mi"){
					echo $value*0.000015782828282828 . "mi";
				}elseif($convertTo == "km"){
					echo $value*0.0000254 . "km";
				}
			}elseif($type == "ft"){
				if($convertTo == "cm"){
					echo $value*30.48 . "cm";
				}elseif($convertTo == "m"){
					echo $value*0.3048 . "m";
				}elseif($convertTo == "in"){
					echo $value*12 . "in";
				}elseif($convertTo == "ft"){
					echo $value . "ft";
				}elseif($convertTo == "mi"){
					echo $value*0.00018939393939394 . "mi";
				}elseif($convertTo == "km"){
					echo $value*0.0003048 . "km";
				}
			}elseif($type == "mi"){
				if($convertTo == "cm"){
					echo $value*160934.4 . "cm";
				}elseif($convertTo == "m"){
					echo $value*1609.344 . "m";
				}elseif($convertTo == "in"){
					echo $value*63360 . "in";
				}elseif($convertTo == "ft"){
					echo $value*5280 . "ft";
				}elseif($convertTo == "mi"){
					echo $value . "mi";
				}elseif($convertTo == "km"){
					echo $value*1.609344 . "km";
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
			<form action= "lengthConverter.php"  method="post">
				<b>Value:</b> <input type="text" name="value" value=""/><br />
				<b>Unit type:</b> 
						<select name="type">
						<option value="">--Select a unit--</option>
						<option value="cm">cm</option>
						<option value="m">m</option>
						<option value="in">in</option>
						<option value="ft">ft</option>
						<option value="mi">mi</option>
						<option value="km">km</option>
						</select>
				<b>Convert to:</b> 
						<select name="convertTo">
						<option value="">--Select a unit--</option>
						<option value="cm">cm</option>	
						<option value="m">m</option>	
						<option value="in">in</option>
						<option value="ft">ft</option>
						<option value="mi">mi</option>	
						<option value="km">km</option>
						</select>

				<input id="submit" type="submit" value="Convert">
			</form>		
		</div>

	</body>

</html>	