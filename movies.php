<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
<h1>Movies</h1>
<a href="moviesdetails.php">add a new Movie</a>
<?php

//step-1 connect to database
    $conn=new PDO(  'mysql:host=aws.computerstudi.es; dbname=gc200357701','gc200357701','20VCRJu0Fn');

//step-2 create the sql command
    $sql="SELECT * FROM movies";
    //step-3 prepare the sql command
    $cmd=$conn->prepare($sql);
    //step-4 execute and store the command
    $cmd->execute();
    $movies=$cmd->fetchall();
    //step-5 disconnect from database
    $conn=null;

    //create a table and show the results
    echo '<table class="table table-striped table-hover">
<tr><th>Name</th>
<th>Year</th>
<th>Director Name</th></tr>';
    foreach($movies as $movie)
    {
        echo'<tr><td>'.$movie['Name'].'</td>
                <td>'.$movie['Year'].'</td>
                <td>'.$movie['Director_name'].'</td></tr>';
    }
    echo '</table>';
    ?>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>