<?php 

  $GLOBALS['dash']='home.php';

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    if(isset($_REQUEST['home']))
    {
        $GLOBALS['dash']='home.php';
    }
    else if(isset($_REQUEST['movies']))
    {
        $GLOBALS['dash']='movies.php';
    }
    else if(isset($_REQUEST['cars']))
    {
        $GLOBALS['dash']='cars.php';
    }
    else if(isset($_REQUEST['personalities']))
    {
        $GLOBALS['dash']='personalities.php';
    }
    else
    {
        $GLOBALS['dash']='home.php';
    }
  }



  

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
    <title>AWT Assignment</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type="text/css">
        nav{
            width: 100%;
            padding-left: 1%; 
            padding-top: 1%;
            background-color: #fff;


        }
        nav>button{
            
             margin: 0 auto;
        }

        iframe{
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="header" style="position: static;">
        <h1>MY IMAGE GALLERY</h1>
    </div>

    <div class="container-fluid" style="position: static;">
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline" >
    <button class="nav-link active btn  btn-outline-primary" name="dash">Home</button>
    <button class="nav-link btn  btn-outline-primary" name="movies">Movies</button>
       <button class="nav-link btn  btn-outline-primary" name="cars">Cars</button>
         <button class="nav-link btn  btn-outline-primary" name="personalities">Personalities</button>
          


  </nav>
</div>
        
    </form>
     </div>

    <div class="container-fluid">
        <?php echo' <iframe src="'.$GLOBALS['dash'].'"> </iframe>';?>
        
       
    </div>
    
    <div class="footer">
        <p>Swarnim Paudyal (201911503)</p>
    </div>

    <script type="text/javascript">
        function BMI() {
            var h = document.getElementById('h').value;
            var w = document.getElementById('w').value;
            h = h * 12 * 0.025; // height converted in meter 
            var bmi = w / (h * h);
            var bmio = (bmi.toFixed(2));

            if(bmio < 18.5) {
                message = "Underweight";    
            }                
            else if(bmio < 24.9) {
                message = "Normal";
            }
            else if(bmio < 29.9) {
                message = "Overweight";  
            }
            else if (bmio >= 29.9) {
                message = "Obese";
            }
            else {
                message = "NaN";
            }
            
            if(message != "NaN")
                document.getElementById("result_bmi").innerHTML = `Your BMI is <b>${bmio}</b> which is <b>${message}</b>`;
            else
                document.getElementById("result_bmi").innerHTML = "Please provide valid input "
        }
    </script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>