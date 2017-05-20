<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saving Movies...</title>
</head>
<body>
<?php
$Name=$_POST['Name'];
$Year=$_POST['Year'];
$Director_name=$_POST['Director_name'];

echo 'Name: '.$Name.'<br />';
echo 'Year: '.$Year.'<br />';
echo 'Director_name: '.$Director_name.'<br />';

//step-1 connect to database
$conn=new PDO(  'mysql:host=aws.computerstudi.es; dbname=gc200357701','gc200357701','20VCRJu0Fn');

//step-2 create the sql command to insert a record
$sql="INSERT INTO movies (Name, Year, Director_name) VALUES ('Inception', 2010,'Christopher Nolan');";
//step-3 prepare the sql command and bind the arguments to prevent the sql injection
$cmd=$conn->prepare($sql);
$cmd->bindParam('Name',$Name,PDO::PARAM_STR, 40);
$cmd->bindParam('Year',$Year,PDO::PARAM_INT, 4);
$cmd->bindParam('Director_name',$Director_name,PDO::PARAM_STR, 30);
//step-4 execute
$cmd->execute();
//step-5 disconnect from database
$conn=null;
//step-6 redirect to the movies page
header('location:movies.php');

?>


</body>
</html>