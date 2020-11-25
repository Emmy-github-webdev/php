<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentees</title>
</head>
<body>
<div>
    <?php
    foreach ($mentee as $key => $value){

    
    ?>

    <div>
        <h2><a href="<?php echo BASE_URL?>/MenteeController/menteeDetail/<?php echo $value['menteeId']; ?>"><?php echo $value['firstName']?>  <?php echo $value['lastName']?></a></h2>
        <p><?php echo $value['email']?></p>
        <p><?php echo $value['description']?></p>
        <div><a href="<?php echo BASE_URL?>/MenteeController/menteeDetail/<?php echo $value['menteeId']; ?>">Details</a></div>
    </div>

<?php } ?>

</div>

</body>
</html>