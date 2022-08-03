<html>
<head>
    <style>
        body{
            margin-top: 20em;
            background-color: lavender;
            font-family: "American Typewriter";
            color:darksalmon;
            text-align: center;
        }
        p{
            margin-left: 20em;
        }
        img{
            margin-right: 40em;
        }
    </style>
</head>
<body>
<h1>The Robot will move to the LEFT</h1>
<img id= "img1" src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/344/external-robot-edutainment-flaticons-lineal-color-flat-icons.png" width="400" height="400">
<?php
$SERVER ="localhost:3308";
$username="root";
$password="";
$dbname="directions";

$conn=mysqli_connect($SERVER,$username,$password,$dbname);
$query= "insert into directions values('L')" ;
$run=mysqli_query($conn,$query);
?>

</body>
</html>
