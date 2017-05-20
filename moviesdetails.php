<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies details</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <h1>Movies Details</h1>
    <form method="post" action="savemovies.php">
        <fieldset class="form-group">
            <label for="name" class="col-sm-1"> Name: *</label>
            <input name="name" id="name" required placeholder="Movie Name"/>
        </fieldset>
        <fieldset class="form-group">
            <label for="year" class="col-sm-1"> Year: *</label>
            <input name="year" id="year" required placeholder="Movie Releasing Date"/>
        </fieldset>
        <fieldset class="form-group">
            <label for="Director_name" class="col-sm-1"> Director Name: *</label>
            <input name="Director_name" id="Director_name" required placeholder="Director name"/>
        </fieldset>
        <button class="btn btn-success col-sm-offset-1">Save</button>
    </form>
</main>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>