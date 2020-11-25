<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor to Mentee Relationship</title>
    <style>
    body{
        background-color: #e0ebeb;
        
    }
    h3{
        font-family: 'Montserrat', sans-serif;
    font-size: 2.5rem;
    color: #66BFBF;
    padding-bottom: 10px;
    text-align: center;
    }
    .form{
        text-align: center;
    }
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>    
<body>
<h3>Mentee Signup Page</h3>

<form class="form" action="<?php echo BASE_URL?>/menteecontroller/signupMentee" method="post">

<table>
<tr>
<td>First Name</td>
<td><input type="text" name="firstName" required="1"></td>
</tr>

<tr>
<td>Last Name</td>
<td><input type="text" name="lastName" required="1"></td>
</tr>

<tr>
<td>E-Mail</td>
<td><input type="email" name="email" required="1"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password" required="1"></td>
</tr>

<tr>
<td>Description</td>
<td><input type="text" name="description" required="1"></td>
</tr>

<tr>
             <td>Mentor</td>
             <td>
                <select name="mentor">
                    <option>Select a mentor</option>
                    <?php
                        foreach ($mentor as $key => $ment){

                    ?>
                    <option value="<?php echo $ment['mentorId']; ?>"><?php echo $ment['firstName']; ?></option>
                    <?php  } ?>
                </select>
             </td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" value="Signup"></td>


</tr>
</table>
</form>
</body>
</html>