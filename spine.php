
<style>
body{margin-top:0em;}
.wid{
	width:20em;
	padding-bottom:3em;
	text-align:center;}

</style>

<?php
include "db.php";

//echo "HELLO";
$query="SELECT * FROM table1";
$run=mysql_query($query);
if($run)
{
$c=1;
$i=0;
?>  
<table>
<tr>
<?php 
while($data=mysql_fetch_assoc($run))
{
  $i++;

  $ref=$data['reference'];
  $call=$data['call_number'];
  $bar=$data['barcode'];
  

?>

<td class = "wid">
<?php echo $ref;?>	<br>
<?php echo $call;?>	<br>
<?php echo $bar;?>	<br>
</td>
<?php if ($c%3==0)
			echo "</tr>";
	else if($c%30==0)
			echo "</tr>";

//echo "<div class=\"col-md-4\">".$ref."<br>".$call."<br>".$bar."<br>"."<br>"."</div>";
//echo "<div class=\"col-md-3\">".$call."</div>";
//echo "<div class=\"col-md-3\">".$bar."</div>";

$c++;
}

echo "</tr></table>";
}
else
  echo"NO BREAL";
?>