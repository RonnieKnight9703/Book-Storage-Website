<html>
<head>
<title>Delete Books</title>
<body>

<?



// get the data from the form and assign the data to variables

$ISBN = $_POST['ISBN'];



// check to see if all the data is there

if (!$ISBN)
{
	echo "You have not entered all the required details.<br>"
		."Please go back and try again.";
	exit;
}



// add slashes and prepare the data for deleting from the db

$ISBN = intval($ISBN);

// connect to the db

@ $db = mysql_pconnect("sql107.epizy.com","epiz_26256340","7WcXicCj7hyPE");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}

mysql_select_db("epiz_26256340_Main");


// prepare the query

$query = "DELETE FROM Book WHERE ISBN = $ISBN";

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." Book deleted from Database.<br>";


?>

<button type="button" onclick="history.back();">Back</button>

</body>
</html>