<!DOCTYPE html>
<html>
<head>
    <title>View</title>
    <style type="text/css">
        body{
            background-color: #C0C0C0;
            
            background-image: url('https://cei.org/wp-content/uploads/2015/10/ThinkstockPhotos-454347267-578x324-c-default.jpg');
            background-blend-mode:soft-light;
            background-repeat: no-repeat;
            background-size: 100%;
        }
        form{
        
        position: absolute;
        bottom: 50px;
        left: 600px;
    }
     label{
        color: #2F4F4F;
        font-family: Impact, Charcoal, sans-serif;
      
        font-size: 25px;
        margin-bottom: 25px;
    }
    table{

            margin-right:auto;
            margin-left: auto;
            margin-top: 150px;

            
        }

        th{
            font-size: 35px;
            padding-right: 15px;
            text-align: center;
            border-width: 2px;
            border-style: solid;
            border-collapse: collapse;
            border-color: black;
            
        }
        td{
            font-size: 30px;
            color: #111989;
            font-weight: bold;
            padding-right: 15px;
            text-align: center;
            border-width: 2px;
            border-style: solid;
            border-collapse: collapse;
            border-color: black;
        }
        pre{
            font-size: 20px;
            text-align: center;

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
            color:  #DCDCDC;
            font-family: Georgia, serif;
            font-size: 20px;
            position: absolute;
            right: 350px;
        }
        .Transfer{
            color:  #DCDCDC;
            font-family: Georgia, serif;
            font-size: 20px;
            position: absolute;
            right: 100px;
        }
        .Home{
            color:  #DCDCDC;
            font-family: Georgia, serif;
            font-size: 20px;
            position: absolute;
            right: 600px;
        }        #Name{
        background-color: #DCDCDC ;
        color: #808080;
        font-size: 25px;
        margin-bottom: 25px;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    #Amount{
        background-color: #DCDCDC ;
        color: #808080;
        font-size: 25px;
        margin-bottom: 25px;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    #From{
        background-color:#DCDCDC  ;
        color: #808080;
        font-size: 25px;
        margin-bottom: 25px;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    #button{

        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #DCDCDC;
        color: #808080;
        cursor: pointer;
        font-size: 25px;
        margin-bottom: 25px;
    }


    </style>
</head>
<body>
    <body>
        <nav><h3><b>Banking System</b></h3>
        <a href="index.php" class="Home">Home</a>
        <a href="bs.php" class="View">View Customer</a>
        <a href="transfer.php" class="Transfer">Transfer History</a>
        
    </nav>
<?php
$id = $_GET['ID'];
$conn = mysqli_connect("localhost", "id15386982_banksystem", "z4PzTYB<<U4g\G>M", "id15386982_bankingsystem");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Customer WHERE ID=$ID";
$result = $conn->query($sql);
if($result){
  if($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email_id</th><th>Balance</th></tr>";
    while($row = $result->fetch_assoc()) {
        $Name =$row["Name"];
     echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["Email_id"]. "</td><td>" . $row["Balance"];

    }

}
 echo "</table>";
} else {
    echo "0 results";
}
?>
<form action="transfer.php" method="POST" >
    <label for="From" >From:</label><br>
            <input type="text" placeholder="From" name="From" id="From"><br>
    <label for="Name" >Name:</label><br>
            <input type="text" placeholder="<?php echo($Name)?>" name="Name" id="Name"><br>
    <label for="Amount" >Amount:</label><br>
            <input type="text" placeholder="Amount to transfer" name="Amount" id="Amount"><br>
    <input type="submit" value="Transfer Money" id="button">    
</form>
</body>
</html>