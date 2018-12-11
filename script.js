<script>
document.body.style.backgroundImage = "url(http://www.jokesoftheday.net/jokes-archive/2016/11/12/Futuristic-Hotel-Rooms-In-Space.jpg)";

function validateForm() {
    var firstName = document.forms["myForm"]["fname"].value;
    var lastName = document.forms["myForm"]["lname"].value;
    var NumofDays = document.forms["myForm"]["daysNum"].value;
    if (firstName == "") {
        alert("First Name must be filled out");
        return false;
    }else if (lastName == "") {
        alert("Last Name must be filled out");
        return false;
    }else if (NumofDays == "" || !parseInt(NumofDays)) {
        alert("Numbers of days should be more than 0");
        return false;
    }
}

function selectHotelPricing(){
    var hotelOption = document.forms["myForm"]["selection"].value;
    var dayRate = 350;

    if (hotelOption == "selectHotel"){
        alert("Please select Hotel option");
        return false;
    }else if (hotelOption == "The Commodore Hotel"){
        dayRate = 350; 
        return dayRate;
    }else if (hotelOption == "Victoria & Alfred Hotel"){
        dayRate = 450;
        return dayRate;
    }else if (hotelOption == "Taj Cape Town"){
        dayRate = 550;
        return dayRate;
    }
}

function totalCost(){
    var hotelOption = document.forms["myForm"]["selection"].value;
    var NumOfDays = document.forms["myForm"]["daysNum"].value;
    var dayRate = selectHotelPricing();
    var totalCost = NumOfDays * dayRate;
    document.getElementById('hotel_booked').innerHTML = "Hotel booked: ";
    document.getElementById('hotel_booked2').innerHTML = hotelOption;
    document.getElementById('num_of_days').innerHTML = "Number of days: ";
    document.getElementById('num_of_days2').innerHTML = NumOfDays;
    document.getElementById('daily_rate').innerHTML = "Daily Rate: ";
    document.getElementById('daily_rate2').innerHTML = dayRate;
    document.getElementById('totalCost').innerHTML = "Total Cost: ";
    document.getElementById('totalCost2').innerHTML = totalCost; 
}

var daysInput = document.getElementById('daysInput');
daysInput.addEventListener('keyup', function(event) {
    event.preventDefault();
    if (selectHotelPricing() !== false && validateForm() !== false) {
        setTimeout(function() {
            totalCost();
        }, 1000);
    }
});

var form = document.getElementById('form');
form.addEventListener('submit', function(event) {
    // event.preventDefault();
    if (validateForm() !== false && selectHotelPricing() !== false) {
        document.getElementById('hotel_booked').innerHTML = "Your booking was successful, see you soon!"; 
        document.getElementById('hotel_booked2').innerHTML = "";
        document.getElementById('num_of_days').innerHTML = "";
        document.getElementById('num_of_days2').innerHTML = "";
        document.getElementById('daily_rate').innerHTML = "";
        document.getElementById('daily_rate2').innerHTML = "";
        document.getElementById('totalCost').innerHTML = "";
        document.getElementById('totalCost2').innerHTML = ""; 
    }
});

</script>
