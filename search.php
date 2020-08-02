
<?php
@ $db = mysql_pconnect("sql107.epizy.com","epiz_26256340","7WcXicCj7hyPE");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}

mysql_select_db("epiz_26256340_Main");

$output = " ";

if (isset ($_POST['search-submit']))
{
	$searchq = $_POST['search'];
    //$searchq = preg_replace ("#[^0-9a-z]#i","", $searchq );
	
	$query = "select `Book_Title` from `Book` where `Book_Title` LIKE '%$searchq%' ";
	$count = mysql_num_rows($query);
	if($num_results == 0)
    {
		$output = ' There was no search results!';
	}
	else
    {
		while ($row = mysql_fetch_array ($query))
        {
			$Book_Title = $row['Book_Title'];
			$Book_Author = $row['Book_Author'];
			$Year_Released = $row['Year_Released'];

			$output = '<div> '.$Book_Title.' '.$Book_Author.' '.$Year_Released.' </div> ';
        }
    }

}

?>

<!DOCTYPE html>
<html>

<body>

	<table align="center" border="2px" style="width:950px; line-height:35px;">
		<tr>
			<th colspan="8"><h2> Books Stored</h2></th>
		</tr>
		<t>
			<th> ISBN </th>
			<th> Book Title </th>
			<th> Book Author </th>
			<th> Year Released </th>
			<th> Library Name </th>
			<th> Primary Genre </th>
			<th> Rating </th>
			<th> Comments </th>
		</t>
	<?php 
		while($row=mysql_fetch_assoc($query))
		{
	?>
			<tr>
				<td><center><?php echo htmlspecialchars( stripslashes($row["ISBN"])); ?></center></td>
				<td><center><?php echo htmlspecialchars( stripslashes($row["Book_Title"])); ?></center></td>
				<td><center><?php echo htmlspecialchars( stripslashes($row["Book_Author"])); ?></center></td>
				<td><center><?php echo htmlspecialchars( stripslashes($row["Year_Released"])); ?></center></td>
				<td><center><?php echo htmlspecialchars( stripslashes($row["Library_Name"])); ?></center></td>
				<td><center><?php echo htmlspecialchars( stripslashes($row["Primary_Genre"])); ?></center></td>
				<td><center><?php echo htmlspecialchars( stripslashes($row["Rating"])); ?></center></td>
				<td><?php echo htmlspecialchars( stripslashes($row["Comments"])); ?></td>
			</tr>
	<?php
		}
	?>
    
	</table>
    <button type="button" onclick="history.back();">Back</button>				
</body>
</html>