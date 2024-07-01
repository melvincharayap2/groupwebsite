<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('assets/images/hanspey1.png')}}" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/booktable.css')}}">
    <title>Booktable</title>
</head>
@include('navbar')
<body>
  <div class="containers">   
    <div class="grid">
        <div class="grid1">
            <h3>Book A Table</h3>
            <div class="placeholder">
                <input type="text" placeholder="Your Name" id="" required>
                <input type="text" placeholder="Phone Number" id="" required>
                <input type="text" placeholder="Your Email" id="" required>
                <input type="text" placeholder="How many Persons?" id="" required>
                <input type="text" placeholder="mm/dd/yyyy" id="" required>
                <div class="btn">
                    <button   onclick="bookNow()">Booknow</button>
                </div>
            </div>    
        </div>
        <div class="grid2">
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345096197!2d144.95373631590634!3d-37.81627917975195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf57747e39e6b7b0!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1618907289268!5m2!1sen!2sau" 
                    width="600" 
                    height="450" 
                    allowfullscreen="" 
                    loading="lazy"
                ></iframe>
            </div>
        </div>    
    </div>       
  </div>
  
  
</body>
<script>
    function bookNow() {
        alert('You have booked');
    }
</script>
<br>
<br>
@include('footer')
</html>
