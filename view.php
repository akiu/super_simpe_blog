<?php

include "conncet.php";

$sql = "SELECT * FROM blog";





?>

<html>

<head>

</head>

<body>

<h1>View Article</h1>

<ul>

<?php 

foreach ($conn->query($sql) as $row)
{

echo "<li>" .  "<a href=\"view_each.php?id=" . $row['id'] . "\"" . ">" . $row['judul'] .  "</a>" .  "</li>" . "<br />";

}

?>

</ul>	


</body>	




</html>