<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

   
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name=$_POST['Username'];
    $password=$_POST['password'];
    $Age=$_POST['Age'];
    $Email=$_POST['Email'];
    $Time=$_POST['Time'];
    $range=$_POST['range'];
    $date=$_POST['date'];
    $options=$_POST['Options'];
    $pic=$_POST['profilePic'];
    $gender=$_POST['Gender'];
    $Textarea=$_POST['bio'];
    $checkbox=$_POST['conditions'];
    $color=$_POST['color'];

}
?> 
<table border="1" cellspacing="0">
    <tr>
    <th>Form input</th>
    <th>Answers</th>
</tr>
<tr>
    <td>Username</td>
    <td><?php echo "$name";?></td>
</tr>
<tr>
    <td>Password</td>
    <td><?php echo "$password";?></td>
</tr>
<tr>
    <td>Age</td>
    <td><?php echo "$Age";?></td>
</tr>
<tr>
    <td>Email</td>
    <td><?php echo "$Email";?></td>
</tr>
<tr>
    <td>time</td>
    <td><?php echo "$Time";?></td>
</tr>
<tr>
    <td>Range</td>
    <td><?php echo "$range";?></td>
</tr>
<tr>
    <td>Date</td>
    <td><?php echo "$date";?></td>
</tr>
<tr>
    <td>Color</td>
    <td><?php echo "$color";?></td>
</tr>
<tr>
    <td>Options</td>
    <td><?php echo "$options";?></td>
</tr>
<tr>
    <td>Profile Picture</td>
    <td><?php echo "$pic";?></td>
</tr>
<tr>
    <td>Gender</td>
    <td><?php echo "$gender";?></td>
</tr>
<tr>
    <td>Bio</td>
    <td><?php echo "$Textarea";?></td>
</tr>
<tr>
    <td>Condition</td>
    <td><?php echo "$checkbox";?></td>
</tr>
</table>

</div> 
</body>
</html>
