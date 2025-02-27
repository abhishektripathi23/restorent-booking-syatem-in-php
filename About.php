<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	 <link rel="icon" type="image/png"sizes="32*32" href="image\aboutus.png">
	 <script src="jquery-3.3.1.js"></script>
	<style type="text/css">
	body
	{
		margin: 0;
		background-color: #000;
	}
	#port
	{
		
		
    width: auto;
    height: 544px;
border: 2px solid white;
    text-shadow: 5px;
    z-index: -1;
    
    background-color: rgba(255,255,255,0.9);


	}
	.portf 
	{  
		border-top: 5px solid 	#0fb784;
	
        border-radius: 10px;
		width: 270px;
		height: 420px;
		float: left;
		
		margin-left: 50px;
		margin-right: auto;
		margin-top:32px;
		text-align: center;
		

    background-color:#3aa148;
   

	}
	.portf:hover
	{
		z-index: 1;
		box-shadow: 5px 5px 35px 0 rgb(132, 158, 179); 
		border-left:3px solid white; 
		border-right :3px solid white; 
		border-bottom:3px solid white; 
	}
	#dp
	{
		
     height: 120px;
     width: 120px;
     border-radius: 60px;
     margin-top: 8px;
     border: 3px solid white;
}


	.social-m
	{
    
    
width: 35px;
height: 35px;
padding-left:  2px;
margin-bottom: 1px;
text-align: none;

	}
	.social-m :hover
	{
		border:2px solid rgb(143, 143, 54);
		
		box-shadow: 5px 5px 25px 0 rgba(46,61,73,.5); 
	}
	#social-m
	{
	
	float: left;
	padding:40px 30px;
	
	}
	#content h3
	{
		font-weight: bold;
		font-size: 25px;
		font-family: monospace;
	}
	#content 
	{
		font-size: 20px;
		font-family:cursive,sans-serif;
		color:white;
		word-wrap:break-word;
		text-align:justify-all;
		
	}
	#content b
	{
		color: rgb(246, 208, 184);
		font-size: 30px;
		text-decoration: underline;
		text-decoration-color:rgb(233, 233, 10); 
	}

#intro
{
	background-color: white;
	text-align: center;
	font-size: 20px;
	z-index: -1;
}
#intro h3
{
	font-size: 40px;
	font-weight: bold;
	

	
}
#intro
 {
 	color:#219;
 	font-size: 30px;
 	
 	letter-spacing: 1px;
 	word-spacing: 15px;
 	text-align: center;
 	position: relative;
 	font-family:verdana ;
 	background-color:#000;
 	width: 100%; 
 	

 }
 #dev
 {
 	width:100%;border-bottom: 2px solid grey;border-top-width: 2px solid grey; background-color: #cbffcd;padding-top: 10px;
 	padding-bottom: 10px;
 	font-family:Comic ;
 	text-transform: capitalize;
 	border-bottom: 2px solid grey;
 	border-top: 2px solid grey;
 	letter-spacing: 5px;
 	font-stretch: ultra-expanded;
	 text-align:  center;
 }
 #button
 {
 	background-color: blue;
 	color:white;
 	height: 50px;
 	word-spacing: 10px;
 	font-size: 25px;
 	border:3px solid white;
 }
 #button:hover
 {
 	transform: scaleZ(5);
 	background-color: #1b5a94;
 }
 #title
 { 
 	position:fixed;
 	z-index:1;
 	right: 0px;
 	top:0px;
 	background-color:#338;
 	margin:0;
 	width:auto;
 	padding:10px 30px;
 	height: auto;
 	word-spacing: 10px;
 }
 #home
   {
        position: fixed;
        top: 0;
        left:0;
        margin-left: 10px;
        margin-top:5px;

        }
        #homeimg
        {
            height: 80px;
            width: 80px;
            float: left;
            position: fixed;
            z-index: 5;
            border-radius: 40px;
 
        }
	</style>
</head>
<body>

	<div id="home">
        <a href="index_accesed.php">Home >=</a>
        
    </div>
<div id="title">
<span style="font-size:24px;text-decoration:none;color:#fff;padding:0 0 0 5px;font-family:sans-serif;">About Us</span></div>
	</div>
	

	<div>
	<div id="intro">
		<p><h3>-<span style="font-size:40px;color:white;font-family:Courier; Verdana : Arial;">Our Mission</span>-<h3>
			<span style="color:	#85c5d1;font-size:30px;font-family: cursive;font-style: italic;">To provide the utmost satisfaction to our customer</span>
	</p>
	<p> <h3>-<span style="font-size:40px;color:#aafeaa;font-family:Courier; Verdana :Arial;">About</span>-<h3>
		<span style="color:#c0c0c0;font-size:30px;font-family: cursive;font-style: italic;">The Project is about a website which functions like a Restaurant Management System which provides user to choose in between various options provided like Selecting many type of food Booking  for any party.<br><span style="color:orange">Rest Things are to be Explored By you.... </span></span>	
	</p>

</div>

	<div id="port">
<div id="dev" >
	<button id="button">About Developers</button>
	</div>
		
		<div class="portf">
			<img id="dp" src="Abhishek pic1.jpeg">
			<p id="content">
				
				<B>Abhishek tripathi</B>
				<br>
				<i>Student
				<br>Lovely Professional University<br>
				(12313778)</i>

			</p>
			<div id="social-m">
			<a href="https://www.linkedin.com/in/abhishek-tripathi-b5289322a/" target="_blank"><img src="linkdin.png" class="social-m" title="LinkedIn"></a>
			<a href="#" target="_blank"><img src="instalogo.png" class="social-m" title="Instagram"></a>
			<a href="#" target="_blank"><img src="facebook.png" class="social-m" title="Facebook"></a>
			<a href="https://github.com/abhishektripathi23" target="_blank"><img src="github.png" class="social-m" title="GitHub"></a>
			<a href="#" target="_blank"><img src="image/Twitter.png" class="social-m" title="Twitter"></a>		
		</div>
		</div>
	</div>
</body>
</html>