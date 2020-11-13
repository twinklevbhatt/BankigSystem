<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<style type="text/css">
		  body{
        background-image: url('https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/first-bank-building-black-and-white-trekkerimages-photography.jpg');
        background-repeat: no-repeat;
        background-position: center;
    
  background-size: 100% 800%;


    }
   
		    h3{
    	color: 	#DCDCDC;
    	font-size: 25px;
    	font-family: Impact, Charcoal, san serif;
    	font-style: oblique;
    	text-shadow: 2px 2px 3px #606060, 3px 3px 5px rgb(208,208,208);
    	letter-spacing: 2px;
    	
    }
				nav{
			display: flex;
			flex-direction: row;
			background-color: #101010;
			padding: 15px 25px 15px 25px;
			height: 50px;
		}	
		div{
			margin-left: 35%;

		}
			.View{
			color:	#DCDCDC;
			font-family: Georgia, serif;
			font-size: 20px;
			position: absolute;
			right: 350px;
		}
		.Transfer{
			color:	#DCDCDC;
			font-family: Georgia, serif;
			font-size: 20px;
			position: absolute;
			right: 100px;
		}
		.Home{
			color:	#DCDCDC;
			font-family: Georgia, serif;
			font-size: 20px;
			position: absolute;
			right: 600px;
		}
	.button {
  background-color: #FFFFCC;
  border: block;
  color: 	#282828;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 10px;
  position: center;
  cursor: pointer;
}
	.button1{
		background-color: #202020;
			display: block;
			text-align: center;
			color: #E8E8E8;

			border: 4px solid #E8E8E8;
			box-sizing: border-box;
			border-radius: 25px;
   			width: 500px;
			padding: 15px 15px 15px 15px;
			margin-bottom: 20px;
			
		}
	.button2{
			background-color: #202020;
			display: block;
			text-align: center;
			color: #E8E8E8;
			font-weight: bold;
		   border: 4px solid #E8E8E8;
		   border-radius: 25px;
			box-sizing: border-box;
    		width: 500px;
    		
			padding: 15px 15px 15px 15px;
		
		}

@media screen and (max-width: 600px)
{
     body{

        background-image: url('https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/first-bank-building-black-and-white-trekkerimages-photography.jpg');
        background-repeat: no-repeat;
        background-size: 150% 175%;
        background-color: #A998E3s ;
    }
}

	</style>


	<body>
		<nav>
		<h3><b>Banking System</b></h3>
		<a href="index.php" class="Home">Home</a>
		<a href="bs.php" class="View">View Customer</a>
		<a href="transfer.php" class="Transfer">Transfer History</a>
		</nav>
		<p><div>
			<a href="bs.php" class="button1"><b>View Customer</b></a>
	<a href="transfer.php" class="button2"><b>Transfer History</b></a>
	
	</div>
		</p>
		

		
	
</head>
</html>