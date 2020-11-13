<!DOCTYPE html>
<html>
<head>
	<title>Transfer</title>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
			background-color: #C0C0C0;
            background-image: url('https://cei.org/wp-content/uploads/2015/10/ThinkstockPhotos-454347267-578x324-c-default.jpg');
            background-blend-mode:soft-light;
			background-repeat: no-repeat;
			background-size: 100%;
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
		
		table{

			margin-right:auto;
			margin-left: auto;
			margin-top: 50px;


			
		}

		th{
			font-size: 35px;
			padding-right: 15px;
			text-align: center;
			border-width: 2px;
			border-style:inset;
			border-collapse: collapse;
			border-color: black;
			color: 	#101010;
			border-style:inset;
			
		}
		td{
			font-size: 30px;
			color: 	#686868
			font-weight: bold;
			padding-right: 15px;
			text-align: center;
			border-width: 2px;
			border-style:inset;
			border-collapse: collapse;
			border-color: black;
		}
		
	</style>
</head>
<body>
		<nav>
		<h3><b>Banking System</b></h3>
		<a href="index.php" class="Home">Home</a>
		<a href="bs.php" class="View">View Customer</a>
		<a href="transfer.php" class="Transfer">Transfer History</a>
		
	</nav>


<?php error_reporting(E_ALL ^ E_NOTICE);


$To = $_POST['Name'];
$AmountTransfered = $_POST['Amount'];
$From = $_POST['From'];

$conn = mysqli_connect("localhost", "id15386982_banksystem", "z4PzTYB<<U4g\G>M", "id15386982_bankingsystem");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql1 = "INSERT INTO Transfer(FromCust, ToCust, AmountTransfered) VALUES ('$From', '$To', $AmountTransfered) ";
$inserted =$conn->query($sql1);

$sql4 = "select Balance from customer where `Name` = '$To'";
$result = $conn->query($sql4);
$row = $result->fetch_assoc();
$CurrentMoneyTo = $row["Balance"];
//selecting current balance From wale ka
$sql5 = "select Balance from customer where `Name` = '$From'";
$result = $conn->query($sql5);
$row = $result->fetch_assoc();
$CurrentMoneyFrom = $row["Balance"];
//Adding current money of to wala with transferred money
$sql2 = "UPDATE `Customer` set `Balance`='$CurrentMoneyTo'+'$AmountTransfered' where `Name`='$To'";
$result2 = $conn->query($sql2);
//Adding current money of from wala with transferred money
$sql3 = "UPDATE `Customer` set `Balance`='$CurrentMoneyFrom'-'$AmountTransfered' where `Name`='$From'";
// "UPDATE `students` SET `student_name` = '$name', `phone` = '$phn' WHERE `students`.`id` = $id"
$result3 = $conn->query($sql3);
$sql = "SELECT * FROM Transfer";
$result = $conn->query($sql);

if($result){
  if($result->num_rows > 0) {
  	echo "<table><tr><th>From customer</th><th>To customer</th><th>AmountTransfered</th><tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["FromCust"]. "</td><td>" . $row["ToCust"]. "</td><td>" . $row["AmountTransfered"]. "</td></tr>";
    }

}
 echo "</table>";
} else {
    echo "0 results";
}
?>
</body>
</html>