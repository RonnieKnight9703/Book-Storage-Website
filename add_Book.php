<html>
<head>
<title>Add Books</title>
<body>

<? 



// get the data from the form and assign the data to variables

$ISBN = $_POST['ISBN'];
$Book_Title = $_POST['Book_Title'];
$Book_Author = $_POST['Book_Author'];
$Year_Released = $_POST['Year_Released'];
$Library_Name = $_POST['Library_Name'];
$Primary_Genre = $_POST['Primary_Genre'];
$Rating = $_POST['Rating'];
$Comments = $_POST['Comments'];



// check to see if all the data is there

if (!$ISBN
 || !$Book_Title
 || !$Book_Author
 || !$Date_Released
 || !$Library_Name
 || !$Primary_Genre
 || !$Rating
 || !$Comments)
{
	echo "You have not entered all the required details.<br>"
		."Please go back and try again.";
	exit;
}



// add slashes and prepare the data for inserting into the db

$ISBN = intval($ISBN);
$Book_Title = addslashes($Book_Title);
$Book_Author = addslashes($Book_Author);
$Year_Released = intval($Year_Released);
$Library_Name = addslashes($Library_Name);
$Primary_Genre = addslashes($Primary_Genre);
$Rating = intval($Rating);
$Comments = addslashes($Comments);

// connect to the db

@ $db = mysql_pconnect("sql107.epizy.com","epiz_26256340","7WcXicCj7hyPE");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}

mysql_select_db("epiz_26256340_Main");


// prepare the query

$query = "insert into Book values
	('".$ISBN.
"','".$Book_Title.
"','".$Book_Author.
"','".$Year_Released.
"','".$Library_Name.
"','".$Primary_Genre.
"','".$Rating.
"','".$Comments."')";

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." Book added to Database.<br>";
    


?>
<button type="button" onclick="history.back();">Back</button>
</body>
</html>