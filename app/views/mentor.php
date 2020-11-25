
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentors</title>
</head>
<body>

Mentor List <hr>

<div>
    <?php
    foreach($mentor as $key => $value){
    
    ?>

    <div>
        <h2><?php echo $value['firstName']?>  <?php echo $value['lastName']?></h2>
        <p><?php echo $value['email']?></p>
        <p><?php echo $value['phoneNumber']?></p>
        <p><?php echo $value['description']?></p>
        <p><?php echo $value['expertise']?></p>
    </div>

<?php } ?>

</div>

    
</body>
</html>
