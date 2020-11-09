<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Calculator </title>
</head>

	<style>
		.calculator{
			width: 500px;
			height: 500px;
			/*background-color: #2C2C2C;*/
			/*position: absolute;*/
			margin: 10% 0% 0% 30%;
			padding: 50px;
			text-align: center;
			text-decoration: none;
			
		}
		.num_1{
			width: 180px;
			height: 30px;
			background-color: azure;
			color: red;
			border-radius: 20px;
			text-align: center;
		}
		.num_2{
			width: 180px;
			height: 30px;
			background-color: azure;
			color: red;
			border-radius: 20px;
			text-align: center;
		}
		.button{
			width: 150px;
			height: 50px;
			background-color: blueviolet;
			margin-top: 20px;
			border-radius: 20px;
			cursor: pointer;
			font-size: 20px;
			font-weight: 500;
		}
	</style>
<body>
	<div class="calculator">
		<form action="" method="post">
			<input type="text" name="num_1" class="num_1">
			<input type="text" name="num_2" class="num_2"><br>
			<input type="submit" name="count" value="calculate" class="button">
		</form>
		<h2>
			<?php
			if(isset($_POST['count'])){
				
				if($_POST['num_1']=='' || $_POST['num_2']==''){
				echo('Please fillup the input fields');
			}
			else{
				$number1 = $_POST['num_1'];
				$number2 = $_POST['num_2'];
				echo("The Summation is :".($number1+$number2)."<br>");
				echo("The Substraction is :".($number1-$number2)."<br>");
				echo("The Multipilication is :".($number1*$number2)."<br>");
				echo("The Division is :".($number1/$number2)."<br>");
			}
				
			}
		?>
		</h2>
	</div>
</body>
</html>