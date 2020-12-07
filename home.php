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
</head>
<body>
   



    <div class="container">
        <div class="row">
            <div class="col s5">
                <img src="./assets/logo/logo.png" alt="" width="600px" style="margin:20px 0 50px 0">
                <div class="row">
                    <div class="col s4 offset-s1">
                       <img src="https://lh3.googleusercontent.com/-ayeXUAIWAAU/WGjX8PqDfOI/AAAAAAAAAYg/wHS3H5p0Zi8GnQEtxfgxrjGRVru3d17CQCEwYBhgLKtQDAL1Ocqyb6ZJqY40AIhr35kCpBpj0LgLdmRe03oSYwelMEVhy9Y68llpt4bnQkbzFkRSRcNVshZx6VZ3v6EW0RFOwp7JFsOIaHuHKr4S1wxTc-hF-jUJEd_nkP1aUAeL6G08Ze8khDm3hFsfAG4eByapgLIjBt4dHYxuI-MDHqlVWOTi6zvL12M33_Ox2jawZljCuIfMwQhpXvGd6YfZKbkhVGihH4vFEJGqkVl_eIGduyOKgzUPdunxK-I8WOJ0cn_Ze3zKy3NOyC00PcTyDxWP55ytJVoCH-YwrPFCgOscjzhNNEXZ1IfdpDtCFtXztm2w4tm2qttIgF43YEd2LoOypaMTsq3I3dwj7gl2Jp3p4ZTm0n629mKvjbvcCWxTfEupgNJxIGTcrY0hRb-89pBHcva6bcCiehLUPR3WZjCATHbm6axmbYj81bfS2O11w_qFEDT1jqFHulS_ENAY7rp2aV8IgpbD6mzsFvPqIj7nlQDQ_drPreO0ZQg8lv6GgYXiuNaZqZQybFSo_iQdPCYkmx8a6kpOveOiBffpwj9HjFKXwBAayyDpxBQOG8f_vJXitBzpeicNVVmjaoSjYx58lvu2WlH4-5-Oogi7umA--TrkdMJrwtv4F/w139-h140-p/5ee3df4c-2d1d-4f66-862d-ed0598337fb0" alt="" width="100px" style="border-radius: 50px;">
                    </div>
                    <div class="col s7">
                        <h6><b>Name:</b> Swarnim Paudyal</h6>
                        <h6><b>Reg. no.:</b> 201911503</h6>
                        <h6><b>Sec: </b> A</h6>
                    </div>
                </div>
                
            </div>
            <div class="col s5 offset-s2">
                <div class="bmi">
                    <div class="row">
                        <h3> BMI Calculator</h3>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input type="text" required id="h">
                            <label for="h">Height (in feets)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input type="text" required id="w">
                            <label for="w">Weight (in kgs)</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="waves-effect waves-light btn" id="btn" onClick="BMI()"><b>Calculate</b></button>
                    </div>
                    <center><b><h5 id="result_bmi"></h5></b></center>
                </div>
            </div>
        </div>     
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
                document.getElementById("result_bmi").innerHTML = "Please provide valid input 😅"
        }
    </script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>