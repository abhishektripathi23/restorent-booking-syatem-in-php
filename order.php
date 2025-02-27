<!DOCTYPE html>
<html lang="en">
<head>
	<title>order</title>
	<link href="order.css" rel="stylesheet">	
</head>
<body background="image1wood.jpg">
	<a href="index_accesed.php" ><button  style="border:2px solid black;border-radius:9px;font-size: 30px;margin-top: 20px;margin-left: 20px;background-color:#435;cursor: pointer;color:white;">Back =></button></a>
	<div class="place">
  <mark style="font-size: 40px;">Place Your Order</mark>
  </div>

 
<form action="order.php"  method="POST">
	<table class="tabl">
     <tr >
      <th colspan="3" id="tr2" >Table NO :</th>
      <th colspan="2">
       <input type="Number" name="Table" placeholder="Table Number" id="num" required >
		  </th>
     </tr>

    

		<tr id="tr1">
			<th>S.NO.</th>
			<th>Item</th>
			<th>Quantity</th>
			<th>Price/Pizza</th>
			<th>Total Price</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Veg pizza</td>
			<td>
				<select id="s1" name="veg_pizza" onchange="f1()" oninput="sum() ">
					<option value="0">Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>195/-</td>
			<td><input type="text" id="t1" disabled="true" /></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Paneer pizza</td>
			<td>
				<select id="s2" name="Paneer_pizza" onchange="f2()" oninput="sum()">
					<option value="0">Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>150/</td>
			<td><input type="text" id="t2" disabled="true"/></td>
		</tr>
			<tr>
			<td>3</td>
			<td>Aaloo tikki</td>
		<td>
				<select id="s3" name="Alloo_tikki" onchange="f3()" oninput="sum()">
					<option value="0">Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>100/</td>
			<td><input type="text" id="t3" disabled="true" /></td>
		<tr>
			<td>4</td>
			<td>Green Momo</td>
		<td>
				<select id="s4" name="Green_Momo" onchange="f4()"oninput="sum()">
					<option value="0" >Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>150/</td>
			<td><input type="text" id="t4" disabled="true"/></td>
		</tr>
		<tr>
			<td>5</td>
			<td>Mixed Momo</td>
			<td>
				<select id="s5" name="Mixed_Momo" onchange="f5()" oninput="sum()">
					<option value="0">Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>200/</td>
			<td><input type="text" id="t5" disabled="true"/></td>
		</tr>		
<tr>
			<td>6</td>
			<td>Veg-Momo</td>
			<td>
				<select id="s6" name="Veg_Momo" onchange="f6()" oninput="sum()">
					<option value="0">Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>100/</td>
			<td><input type="text" id="t6" disabled="true"/></td>
		</tr>
		<tr>
			<td>7</td>
			<td>Fry Rices</td>
			<td>
				<select id="s7" name="Fry_rices" onchange="f7()" oninput="sum()">
					<option value="0">Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>350/</td>
			<td><input type="text" id="t7" disabled="true"/></td>
		</tr>

		<tr>
			<td>8</td>
			<td> Tandoori chap </td>
			<td>
				<select id="s8" name="Tandoori_chap" onchange="f8()" oninput="sum()">
					<option value="0">Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>380/</td>
			<td><input type="text" id="t8" disabled="true"/></td>
		</tr>
		<tr>
			<td>9</td>
			<td>chilly Potato</td>
			<td>
				<select id="s9" name="Chilly_Potato" onchange="f9()" oninput="sum()">
					<option value="0">Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>300/</td>
			<td><input type="text" id="t9" disabled="true"/></td>
		</tr>
		<tr>
			<td>10</td>
			<td>Sandwich</td>
			<td>
				<select id="s10" name="Sandwich" onchange="f10()" oninput="sum()">
					<option value="0">Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>200/</td>
			<td><input type="text" id="t10" disabled="true"/></td>
		</tr>
		<tr>
			<td>11</td>
			<td>Cheese Burger</td>
			<td>
				<select id="s11" name="Cheese_burger" onchange="f11()" oninput="sum()">
					<option value="0">Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>200/</td>
			<td><input type="text" id="t11" disabled="true"/></td>
		</tr>
		<tr>
			<td>12</td>
			<td>Ham Burger</td>
			<td>
				<select id="s12" name="Ham_burger" onchange="f12()" oninput="sum()">
					<option value="0">Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>250/</td>
			<td><input type="text" id="t12" disabled="true"/></td>
		</tr>
		<tr>
			<td>13</td>
			<td>Veg Burger</td>
			<td>
				<select id="s13" name="Veg_burger" onchange="f13()" oninput="sum()">
					<option value="0">Select</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</td>
			<td>150/</td>
			<td><input type="text" id="t13" disabled="true"/></td>
		</tr>
		<tr>
			<td colspan="4" id="td1" >Total Bill:</td>
			<td><input type="text" id="t14" name="Total_bill" /></td>
			
		</tr>
	</table>
	<center>
<button type="submit" name="submit" style="border:2px solid black;border-radius:9px;font-size: 30px;margin-top: 20px;margin-left: 20px;background-color: green;color: white;cursor: pointer;">Confirm Order</button>
</center>

</form>








<script type="text/javascript">
	function f1()
	{
		var quant=Number(document.getElementById("s1").value);
		var per=195;
		var prize=quant*per;
		document.getElementById("t1").value=prize;
		return prize;

	}
	function f2()
	{
		var quant=Number(document.getElementById("s2").value);
		var per=150;
		var prize=quant*per;
		document.getElementById("t2").value=prize;
		return prize;
	}
	function f3()
	{
		var quant=Number(document.getElementById("s3").value);
		var per=100;
		var prize=quant*per;
		document.getElementById("t3").value=prize;
		return prize;
	}
	function f4()
	{
		var quant=Number(document.getElementById("s4").value);
		var per=150;
		var prize=quant*per;
		document.getElementById("t4").value=prize;
		return prize;
	}
	function f5()
	{
		var quant=Number(document.getElementById("s5").value);
		var per=200;
		var prize=quant*per;
		document.getElementById("t5").value=prize;
		return prize;
	}
	function f6()
	{
		var quant=Number(document.getElementById("s6").value);
		var per=100;
		var prize=quant*per;
		document.getElementById("t6").value=prize;
		return prize;
	}
function f7()
	{
		var quant=Number(document.getElementById("s7").value);
		var per=350;
		var prize=quant*per;
		document.getElementById("t7").value=prize;
		return prize;
	}
function f8()
	{
		var quant=Number(document.getElementById("s8").value);
		var per=380;
		var prize=quant*per;
		document.getElementById("t8").value=prize;
		return prize;
	}
function f9()
	{
		var quant=Number(document.getElementById("s9").value);
		var per=300;
		var prize=quant*per;
		document.getElementById("t9").value=prize;
		return prize;
	}
function f10()
	{
		var quant=Number(document.getElementById("s10").value);
		var per=200;
		var prize=quant*per;
		document.getElementById("t10").value=prize;
		return prize;
	}
function f11()
	{
		var quant=Number(document.getElementById("s11").value);
		var per=200;
		var prize=quant*per;
		document.getElementById("t11").value=prize;
		return prize;
	}
function f12()
	{
		var quant=Number(document.getElementById("s12").value);
		var per=250;
		var prize=quant*per;
		document.getElementById("t12").value=prize;
		return prize;
}
function f13()
	{
		var quant=Number(document.getElementById("s13").value);
		var per=150;
		var prize=quant*per;
		document.getElementById("t13").value=prize;
		return prize;
	}
	
	
	function sum()
	{
		var total=f1()+f2()+f3()+f4()+f5()+f6()+f7()+f8()+f9()+f10()+f11()+f12()+f13();
		document.getElementById("t14").value=total;
	}


	</script>


<?php
    
	include('connect.php');
$con= mysqli_connect($serever,$username,$password,$database);

if(isset($_POST['submit']))
{
$Table=$_POST['Table'];
$vegpizza=$_POST['veg_pizza'];
$Paneerpizza=$_POST['Paneer_pizza'];
$AllooTikki=$_POST['Alloo_tikki'];
$GreenMomo=$_POST['Green_Momo'];
$MixedMomo=$_POST['Mixed_Momo'];
$VegMomo=$_POST['Veg_Momo'];
$FryRices=$_POST['Fry_rices'];
$Tandoorichap=$_POST['Tandoori_chap'];
$ChillyPotato=$_POST['Chilly_Potato'];
$Sandwich=$_POST['Sandwich'];
$Cheeseburger=$_POST['Cheese_burger'];
$Hamburger=$_POST['Ham_burger'];
$Vegburger=$_POST['Veg_burger'];

$TotalBill=$_POST['Total_bill'];

if($con){
    //echo "connection is sucsesfull";
     $sql="INSERT INTO `food order`(`Table No` ,`veg_pizza`,`Paneer_pizza`,`Alloo_tikki`,
	 `Green_Momo`,`Mixed_Momo`,`Veg_Momo`,`Fry_rices`,`Tandoori_chap`,`Chilly_Potato`,
	 `Sandwich`,`Cheese_burger`,`Ham_burger`,`Veg_burger`,`Total_bill`)
     VALUES('$Table','$vegpizza','$Paneerpizza','$AllooTikki','$GreenMomo','$MixedMomo',
	  '$VegMomo', '$FryRices','$Tandoorichap','$ChillyPotato','$Sandwich','$Cheeseburger',
	  ' $Hamburger',' $Vegburger','$TotalBill')";
    
	 $data=mysqli_query($con , $sql);
if($data)
{
	echo '<script>alert("Order sucssesfully")</script>';    
}
else{
	die(mysqli_error($con));
}
}
else{
	echo "Error finding";
}
}

?>



	</body>
</html>	