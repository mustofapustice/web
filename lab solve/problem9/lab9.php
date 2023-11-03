<?php
$connect=mysqli_connect("localhost","root","","Student");
//include("connection.php");
//require();
//Insert start
if(isset($_POST["insert"]))
{
$id =$_POST["id"];
$name=$_POST["name"];
$sess=$_POST["session"];
$phone=$_POST["ph_number"];
$city=$_POST["city"];
$gender=$_POST["gender"];
$insert="INSERT INTO `semester_reg` (`ID`, `Name`, `Session`, `Phone_No`, `City`, `Gender`) VALUES ('$id','$name','$sess', '$phone', '$city', '$gender')";
$result=mysqli_query($connect,$insert);
if($result==1)
{
echo"Successfully insert a record!";
}
else
{
echo"Unsucess";
}
} //Insert end
//Delete start
if(isset($_POST["delete"]))
{
$id =$_POST["id"];
$name=$_POST["name"];
$sess=$_POST["session"];
$delete="delete from semester_reg where ID='$id'and Name='$name' and Session='$sess'";
$result=mysqli_query($connect,$delete);
if($result==1)
{
echo"Successfully delete your record!";
}
else
{
echo"Unsucess";
}
} //Delete end
//update start
if(isset($_POST["update"]))
{
$id =$_POST["id"];
$name=$_POST["name"];
$sess=$_POST["session"];
$phone=$_POST["ph_number"];
$city=$_POST["city"];
$gender=$_POST["gender"];
$insert="update semester_reg set Name='$name',Session='$sess',Ph_Num='$phone', City='$city',Gender='$gender' where ID='$id'";
$result=mysqli_query($connect,$insert);
if($result==1)
{
echo"Successfully updated your record!";
}
else
{
echo"Unsucess";
}
}//update end
//show data start
if(isset($_POST["select"])){
$query="SELECT * FROM semester_reg"; //ORDER BY id ASC";";
$result=mysqli_query($connect,$query);
if($result==true){
echo "All Registered Students List <br>";
echo "<table cellpadding=10 border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Session</th>
<th>Phone Number</th>
<th>City</th>
<th>Gender</th>
</tr>";
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td style='color:black'>" . $row['ID'] ."</td>";
echo "<td style='color:black'>" . $row['Name'] . "</td>";
echo "<td style='color:black'>" . $row['Session'] . "</td>";
echo "<td style='color:black'>" . $row['Ph_Num'] . "</td>";
echo "<td style='color:black'>" . $row['City'] . "</td>";
echo "<td style='color:black'>" . $row['Gender'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
} else
{
echo "No record found!";
}
}
//end of show data
?>
