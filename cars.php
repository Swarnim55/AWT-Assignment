<?php
    $pic = array('1.jpg','2.jpg','3.jpg','5.jpg','6.jpg');
    shuffle($pic);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->        
    <link rel="stylesheet" href="./styles.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>🚗 Cars</title>
</head>
<body>
    <div class="header">
        <h1>FAVOURITE CARS</h1>
    </div>



     <div class="container">
         <p>Please  <b>CARS</b> button to shuffle the images</p>
         <div class="row">
             <div class="col">
                <?php
                    for($i = 0; $i < 5; $i++)
                    {
                        $source = "./assets/cars/".$pic[$i];  
                        echo "<img src=".$source." width='300'>";
                    }
                ?>
             </div>
         </div>
     </div>
</body>
</html>