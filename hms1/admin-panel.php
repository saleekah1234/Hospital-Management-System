<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body><div class="jumbotron" style="background:url('images/img3.jpg');background-size:cover; height:300px;"></div>

    <div class="container-fluid">
    <div class="row">
      
        <div class="col-md-3">
            <div class="list-group">
            <a href="" class="list-group-item active">Patient</a>
            <a href="patient-details.php" class="list-group-item-active">Patient Details</a>
            <a href="" class="list-group-item active">Add new patient</a>
            <a href="" class="list-group-item-active">Payment</a>
            </div>
            <hr>
            <div class="list-group">
            <a href="" class="list-group-item active">Staff</a>
            <a href="staff_details.php" class="list-group-item-active">Staff details</a>
            <a href="addstaff.php" class="list-group-item active">Add new staff</a>
            <a href="remove_staff.php" class="list-group-item-active">Remove staff member</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body" style="background-color:white;color:black"></div>
                <div class="card-body">
                    <form class="form-group"action="func.php" method="post">
                        <li><label>First Name </label><br>
                            <input type='text' name="fname" class="form-control">
                            <label>last  Name </label><br>
                            <input type='text' name="lname" class="form-control">
                            <label>E-mail </label><br>
                            <input type='text' name="email" class="form-control">
                          <label>Contact </label><br>
                            <input type='text' name="contact" class="form-control">
                            <label>Doctor appointment </label>
                            <select class="form-control" name="docapp">
                                <option  value="dr sharma">Dr sharma from 8pm to 6pm</option> 

                                <option value="dr Jeena">Dr Jeena from 10pm to 6 am</option> 
                            </select><br>
                            <button value="enter appointment" name="pat_submit" type="submit" class="btn btn-primary" >Enter Appointment</button>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="col-md-1"></div>

  </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>




</html>