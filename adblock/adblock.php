<html>
<head><title></title></head>
<body>
<?php
function insertData()
{
	$origin = "";
	$url = "";

	if (isset($_GET["url"]) && $_GET["url"]!="" && 
		isset($_GET["origin"]) && $_GET["origin"]!="")
	{
			$url = $_GET["url"];
			$origin = $_GET["origin"];
	}
	else
	{
		return;
	}

	$db_host = "localhost";
	$db_username = "root"; 
	$db_pass = ""; 
	$db_name = "adblockplus";

	$db = mysql_connect("$db_host","$db_username","$db_pass");
	if (!$db)
	{
		return;
	}

	$selected = mysql_select_db($db_name,$db);
	if (!$selected)
	{
		return;
	}


	$sql = "INSERT INTO adblock_data (`date`, `origin`, `blocked_url`) 
			VALUES (NOW(), '$url','$origin')";
	$query = mysql_query($sql,$db);
	mysql_close($db);
}
insertData();
?>

<script type='text/javascript'>
window.close();
</script>
</body>

</html>