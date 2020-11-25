<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor</title>
</head>
<body>
Mentor by Id <hr>

<?php
    foreach($mentorbyid as $key => $value){
        echo $value['firstName'].'<br/>';
        echo $value['lastName'].'<br/>';
        echo $value['email'].'<br/>';
        echo $value['phoneNumber'].'<br/>';
        echo $value['image_path'].'<br/>';
        echo $value['description'].'<br/>';
        echo $value['expertise'].'<br/>';
    }
?>
</body>
</html>