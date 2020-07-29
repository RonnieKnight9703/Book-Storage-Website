<?php
@ $db = mysql_pconnect("sql107.epizy.com","epiz_26256340","7WcXicCj7hyPE");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}

mysql_select_db("epiz_26256340_Main");

$query = "select * from Book ORDER BY Book_Title ASC";

$result = mysql_query($query);
$num_results = mysql_num_rows($result);

echo "<p>Number of Books found: ".$num_results."</p>";
?>

<!DOCTYPE html>
<html>

<body>

	<table align="center" border="2px" style="width:950px; line-height:35px;"
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
		while($row=mysql_fetch_assoc($result))
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