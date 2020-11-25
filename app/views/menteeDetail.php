<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantee Detail</title>
</head>
<body>
    <?php
    foreach($menteebyid as $key => $value){


    ?>
    <div>
    <h2><?php echo $value['firstName'] ?> + ''+<?php echo $value['lastName'] ?></h2>
    <p><?php echo $value['email'] ?></p>
    <p><?php echo $value['description'] ?></p>
    <p>Mentor : <a href="<?php echo BASE_URL; ?>/MenteeController/menteeByMentor/<?php echo $value['mentor'] ?>"><?php echo $value['firstName']; ?></a></p>

    </div>

    <?php } ?>

</body>
</html>