<html>
<head>
<title>All Books That Are Stored on Website</title>
<body>

<?

@ $db = mysql_pconnect("sql107.epizy.com","epiz_26256340","7WcXicCj7hyPE");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}

mysql_select_db("epiz_26256340_Main");

$query = "select * from Book";

$result = mysql_query($query);
$num_results = mysql_num_rows($result);

echo "<p>Number of Books found: ".$num_results."</p>";

for ($i=0; $i < $num_results; $i++)
{
$row = mysql_fetch_array($result);
echo "<p>";
echo htmlspecialchars( stripslashes($row["ISBN"]));
echo "<br>";
echo htmlspecialchars( stripslashes($row["Book_Title"]));
echo "<br>";
echo htmlspecialchars( stripslashes($row["Book_Author"]));
echo "<br>";
echo htmlspecialchars( stripslashes($row["Year_Released"]));
echo "<br>";
echo htmlspecialchars( stripslashes($row["Library_Name"]));
echo "<br>";
echo htmlspecialchars( stripslashes($row["Primary_Genre"]));
echo "<br>";
echo htmlspecialchars( stripslashes($row["Rating"]));
echo "<br>";
echo htmlspecialchars( stripslashes($row["Comments"]));
echo "<br>";
echo "</p>";

}  

?>

</body>
</html>