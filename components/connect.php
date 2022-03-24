<?php

if($con->query($sql) == TRUE)
{
 echo "<script>alert('Data Added ')</script>";
 header('refresh:0,url=FileName_where_you_want_redirect');  
}
else
{
echo "<script>alert('data not added')</script>";
}
$con->close();

?>