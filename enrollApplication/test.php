<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment</title>
   
</head>
<body>
    <div class="container mt-5">

        <div class="text-center">
            <h1>Student Enrollment</h1>
        </div>

        <div class="main raw justify-content-center" style="margin-top: 40px; padding-left: 30%;">

            <form method="POST" action="addstudent.php" id="student-form" class="raw justify-content-center mb-4" autocomplete="off">
                
                <div class="row">

                
                    <div class="col-3 mb-4">
                        <label for="firstName">First Name</label>
                        <input class="form-control" id="firstName" type="text" placeholder="First Name" name="firstName" required>
                    </div>
                    
                    <div class="col-4 mb-4">
                        <labe for="lastName">Last Name</labe>
                        <input class="form-control" id="lastName" type="text" placeholder="Last Name" name="lastName" required>
                    </div>

                </div>

                <div class="col-7 mb-4">
                    <labe for="address">Permanent Address</labe>
                    <input class="form-control" id="address" type="text" placeholder="Permanent Address" 
                    name="address" required>
                </div>

                <div class="col-7 mb-4">
                    
                    <h6>Gender</h6>

                    <div class="form-check form-check-inline">
                        <input  id="gender" type="radio" name="gender" value="Male">
                        <label for="male">Male</label>
                    </div>    
                    
                    <div class="form-check form-check-inline">
                        <input  id="gender" type="radio" name="gender" value="Female"> 
                        <label for="female">Female</label>
                    </div>
                </div>

                <div class="col-7 mb-4">
                    <labe for="date">Birth Date</labe>
                    <input class="form-control" id="birthdate" type="date" placeholder="Select Birth Date" 
                    name="birthdate" required>
                </div>

                <div class="col-7 mb-4">
                    <labe for="phone">Phone</labe>
                    <input class="form-control" id="phone" type="tel" placeholder="xxx-xxx-xxxx" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="10" name="phone" required>
                </div>

                <div class="col-7 mb-4">
                    <labe for="email">Email</labe>
                    <input class="form-control" id="email" type="email" placeholder="Email Address" name="email" required>
                </div>

               
                <div>
                <button type="submit" name="submit" class="btn btn-success btn-lg mb-1">Submit</button>
                
                
               
                

            </form>

           
        </div>    

        </div>


    </div>

   


     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    

</body>
</html>