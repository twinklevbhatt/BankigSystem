<!DOCTYPE html>
<html>
<head>
<title>Banking System</title>
<style>
    body{
        background-image: url('https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/first-bank-building-black-and-white-trekkerimages-photography.jpg');
        background-repeat: no-repeat;
        background-size: 100% 200% ;

    }
table {
    margin-right: auto;
    margin-left: auto;
    margin-top: 40px;
    border-collapse: collapse;
width: 50%;
color: 	#181818 ;
font-family: monospace;
font-size: 25px;
text-align: center;
cursor: pointer;
}

th {
background-color: #181818 ;
color: white;
}
tr{
    background-color: #989898  ;
}
   h3{
        color:  #DCDCDC;
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
tr:nth-child(even) {background-color: #D8D8D8  }
b{
	font-size: 70px;
	text-align: center;
	
	text-shadow: 2px 2px 3px rgb(72,72,72), 3px 3px 5px rgb(208,208,208);
}
@media screen and (max-width: 600px)
{
     body{

        background-image: url('https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/first-bank-building-black-and-white-trekkerimages-photography.jpg');
        background-repeat: no-repeat;
        background-size: 150% 175%;
        background-color: #A998E3s ;
    }
    table {
        margin-top: 50px;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: auto;
    border-collapse: collapse;
    width: 50%;
    color: #181818 ;
    font-family: monospace;
    font-size: 20px;
    text-align: center;
}


}

	




</style>
</head>
<body>
	<body>
		<nav>
		<h3>Banking System</h3>
		<a href="index.php" class="Home">Home</a>
		<a href="bs.php" class="View">View Customer</a>
		<a href="transfer.php" class="Transfer">Transfer History</a>
		
	</nav>
<table>


<?php
$conn = mysqli_connect("localhost", "id15386982_banksystem", "z4PzTYB<<U4g\G>M", "id15386982_bankingsystem");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Customer";
$result = $conn->query($sql);
echo "<b> <center>Bank Customers </center> </b> <br>";

	if($result){
  if($result->num_rows > 0) {


    echo "<table><tr><th>ID</th><th>Name</th><th>Email_id</th><th>Balance</th><th>Operations</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $id= $row["ID"];
        echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["Email_id"]. "</td><td>" . $row["Balance"];
        echo "<td> <a href='xyz.php?id=$id'>View</a></tr>";
    }
}
    echo "</table>";
} else {
    echo "0 results";
}


?>
</table>
</body>
</html>