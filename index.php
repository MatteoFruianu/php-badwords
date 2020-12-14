<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php badwords</title>
</head>
<body>
    
    <?php

    $text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum cumque ex fugiat deleniti officiis possimus veritatis doloribus aut ea, ipsa dolorem, molestias provident omnis, atque quia fugit beatae aspernatur corrupti.';

    $name= $_GET['name'];
    
    ?>

    <p> <?php echo $text ?> </p>

    <h4> <?php echo strlen($text)  ?> </h4>

    <h1>ciao mi chiamo <?php echo ($name)  ?> </h1>


    <?php 
    
    $my_string = 'All work and no play makes Jack a dull boy All work and no play makes Jack a dull boy All work and no play makes Jack a dull boy All work and no play makes Jack a dull boy All work and no play makes Jack a dull boy All work and no play makes Jack a dull boy';
    
    $badword= $_GET['badword'];

    $replaced = str_replace($badword, '***', $my_string);
    
    ?>


    <p> <?php echo $replaced ?>  </p>




    

</body>
</html>