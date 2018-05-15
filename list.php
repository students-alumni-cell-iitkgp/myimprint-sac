
<?php
session_start();
include 'connection.php';
$query="SELECT * FROM DONOR_2012";
$query_run = $connection->query($query);
$arr_2012 = [];
if($query_run)
{
	if($query_run->num_rows>0)
	{
		while ($row = $query_run->fetch_assoc()) {
			array_push($arr_2012, $row);

		}
	}

}
$query="SELECT * FROM DONOR_2013";
$query_run = $connection->query($query);
$arr_2013 = [];
if($query_run)
{
	if($query_run->num_rows>0)
	{
		while ($row = $query_run->fetch_assoc()) {
			array_push($arr_2013, $row);

		}
	}

}
$query="SELECT * FROM DONOR_2014";
$query_run = $connection->query($query);
$arr_2014 = [];
if($query_run)
{
	if($query_run->num_rows>0)
	{
		while ($row = $query_run->fetch_assoc()) {
			array_push($arr_2014, $row);

		}
	}

}$query="SELECT * FROM DONOR_2015";
$query_run = $connection->query($query);
$arr_2015 = [];
if($query_run)
{
	if($query_run->num_rows>0)
	{
		while ($row = $query_run->fetch_assoc()) {
			array_push($arr_2015, $row);

		}
	}

}
$query="SELECT * FROM DONOR_2016";
$query_run = $connection->query($query);
$arr_2016 = [];
if($query_run)
{
	if($query_run->num_rows>0)
	{
		while ($row = $query_run->fetch_assoc()) {
			array_push($arr_2016, $row);

		}
	}

}

?>