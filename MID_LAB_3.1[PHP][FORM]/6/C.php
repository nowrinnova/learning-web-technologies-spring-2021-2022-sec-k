<?php 
	$unameError = "";
	$name = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['date'] == null){
			$unameError = "name is empty....";
		}else{
			$name = $_REQUEST['date'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_1</title>
</head>

<body>
    <fieldset style="display: inline-block">
        <legend>date</legend>
        <form action="" method="POST">
            date <br>
            <input type="date" name="date" value="<?=$name?>"> <br>
            <hr>
            <input type="submit" name="submit" value="submit">
            <b>date = </b><?=$name?>
        </form>
    </fieldset>
</body>

</html>