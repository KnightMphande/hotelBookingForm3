<!DOCTYPE html>
<html lang="en">
<?php 
        include "config.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hotelBookingForm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
    <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
                <br> 
              <h1 class="card-title">Hotel Booking Form</h1>  <br> <br> <br> 

              <form id='form' name="myForm" action="" method="post">
                <div class="field">
                    <div class="control">
                        First Name: <br>
                        <input class="input is-large" type= "text" name="fname" placeholder="eg. Knight" required>
                        <br> <br> 
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        Surname: <br>
                        <input class="input is-large" type= "text" name="lname" placeholder="eg. Mphande">
                        <br> <br> 
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        Select your hotel by clicking the dropdown menu below: <br>
                        <select id="select-hotel" name="selection">
                            <option value="selectHotel">Hotel Options</option>
                            <option value="The Commodore Hotel">The Commodore Hotel</option>
                            <option value="Victoria & Alfred Hotel">Victoria & Alfred Hotel</option>
                            <option value="Taj Cape Town">Taj Cape Town</option>
                        </select>
                    </div>
                </div>  <br> 
                

                <div class="field">
                    <div class="control">
                        Number of Days: <br>
                        <input class="input is-large" id='daysInput' type="text" name="daysNum">
                        <br> <br> 
                    </div>
                </div>

                <button type="submit" name="submit">Submit</button>
            </form>

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">

                <br> 
                <h6 id='hotel_booked'></h6>  
                <h6 id='hotel_booked2'></h6> <br> 

                <h6 id='num_of_days'></h6> 
                <h6 id='num_of_days2'></h6> <br> 

                <h6 id='daily_rate'></h6> 
                <h6 id='daily_rate2'></h6> <br>

                <h6 id='totalCost'></h6>
                <h6 id='totalCost2'></h6> <br>
            </div>
          </div>
        </div>
      </div>

      <?php include "script.js"; ?>
      <?php add_user();?>
</body>
</html> 
