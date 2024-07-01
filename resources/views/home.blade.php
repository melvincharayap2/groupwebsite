<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('assets/images/hanspey1.png')}}" >
    <link rel="stylesheet" href="{{asset('assets/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/booktable.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/body.css')}}">
    <title>Home</title>
@include('navbar')
<body>
<div class="menu">
        <center><span>Menu</span></center>
    </div>
    <br>
    <div class="menu-button">
        <button onclick="filterMenu('all')">Menu</button>
        <button onclick="filterMenu('burger')">Burgers</button>
        <button onclick="filterMenu('drinks')">Drinks</button>
        <button onclick="filterMenu('snacks')">Snacks</button>
        <button onclick="filterMenu('mami')">Mami</button>
    </div>
    <div class="menu-grid">
        <!-- Burger items -->
       
        <div class="grid-item burger">  
            <img src="{{asset('assets/images/burger.jpg')}}" alt="burger">
            <br>
            <div class="footer1">
                <span>Price: 60</span>
                <br>
                <span>Burger with egg and cheese</span>    
            </div> 
        </div>
        <div class="grid-item burger">  
            <img src="{{asset('assets/images/burger.jpg')}}" alt="burger">
            <br>
            <div class="footer1">
                <span>Price: 40</span>
                <br>
                <span>Burger with cheese</span>    
            </div> 
        </div>
        <div class="grid-item burger">  
            <img src="{{asset('assets/images/burger.jpg')}}" alt="burger">
            <br>
            <div class="footer1">
                <span>Price: 50</span>
                <br>
                <span>Burger with egg</span>    
            </div> 
        </div>
        

        <!-- Drink items -->
        <div class="grid-item drinks">  
            <img src="{{asset('assets/images/drinks/coke.jpg')}}" alt="coke">
            <br>
            <div class="footer1">
                <span>Price: 25</span>
                <br>
                <span>Coke</span>    
            </div> 
        </div>
        <div class="grid-item drinks">  
            <img src="{{asset('assets/images/drinks/royal.webp')}}" alt="coke">
            <br>
            <div class="footer1">
                <span>Price: 25</span>
                <br>
                <span>Royal</span>    
            </div> 
        </div>
        <div class="grid-item drinks">  
            <img src="{{asset('assets/images/drinks/cobra.jpg')}}" alt="coke">
            <br>
            <div class="footer1">
                <span>Price: 25</span>
                <br>
                <span>Cobra</span>    
            </div> 
        </div>
        <div class="grid-item drinks">  
            <img src="{{asset('assets/images/drinks/sprite.png')}}" alt="coke">
            <br>
            <div class="footer1">
                <span>Price: 25</span>
                <br>
                <span>Sprite</span>    
            </div> 
        </div>
        <div class="grid-item drinks">  
            <img src="{{asset('assets/images/drinks/sting.jpeg')}}" alt="coke">
            <br>
            <div class="footer1">
                <span>Price: 25</span>
                <br>
                <span>Sting</span>    
            </div> 
        </div>
        <div class="grid-item drinks">  
            <img src="{{asset('assets/images/drinks/c2.jpg')}}" alt="coke">
            <br>
            <div class="footer1">
                <span>Price: 20</span>
                <br>
                <span>C2</span>    
            </div> 
        </div>
        <div class="grid-item drinks">  
            <img src="{{asset('assets/images/drinks/gatorade.jpg')}}" alt="coke">
            <br>
            <div class="footer1">
                <span>Price: 20</span>
                <br>
                <span>Gatorade</span>    
            </div> 
        </div>
        
        <!-- Snack items -->
        <div class="grid-item snacks">  
            <img src="{{asset('assets/images/snacks/corndog.jpg')}}" alt="snack">
            <br>
            <div class="footer1">
                <span style="color: green">Price: 20</span>
                <br>
                <span>Corn dog</span>    
            </div> 
        </div>
        <div class="grid-item snacks">  
            <img src="{{asset('assets/images/snacks/sticks.jpg')}}" alt="snack">
            <br>
            <div class="footer1">
                <span style="color: green">Price: 20</span>
                <br>
                <span>Cheese Stick</span>    
            </div> 
        </div>
        <div class="grid-item snacks">  
            <img src="{{asset('assets/images/snacks/turon.jpg')}}" alt="snack">
            <br>
            <div class="footer1">
                <span style="color: green">Price: 20</span>
                <br>
                <span>Banana Turon</span>    
            </div> 
        </div>
        <div class="grid-item snacks">  
            <img src="{{asset('assets/images/snacks/chickenball.jpg')}}" alt="snack">
            <br>
            <div class="footer1">
                <span style="color: green">Price: 20</span>
                <br>
                <span>Chicken Ball</span>    
            </div> 
        </div>
        <div class="grid-item snacks">  
            <img src="{{asset('assets/images/snacks/chickenshiomai.jpg')}}" alt="snack">
            <br>
            <div class="footer1">
                <span style="color: green">Price: 20</span>
                <br>
                <span>Chicken shomai</span>    
            </div> 
        </div>
        <div class="grid-item snacks">  
            <img src="{{asset('assets/images/snacks/fishball.jpg')}}" alt="snack">
            <br>
            <div class="footer1">
                <span style="color: green">Price: 20</span>
                <br>
                <span>Fish Ball</span>    
            </div> 
        </div>
        <div class="grid-item snacks">  
            <img src="{{asset('assets/images/snacks/kwek.jpg')}}" alt="snack">
            <br>
            <div class="footer1">
                <span style="color: green">Price: 25</span>
                <br>
                <span>Kwek Kwek</span>    
            </div> 
        </div>
        <div class="grid-item snacks">  
            <img src="{{asset('assets/images/snacks/kikiam.jpg')}}" alt="snack">
            <br>
            <div class="footer1">
                <span style="color: green">Price: 20</span>
                <br>
                <span>Kikiam</span>    
            </div> 
        </div>
        <div class="grid-item snacks">  
            <img src="{{asset('assets/images/snacks/hotdog.jpg')}}" alt="snack">
            <br>
            <div class="footer1">
                <span style="color: green">Price: 20</span>
                <br>
                <span>Hotdog</span>    
            </div> 
        </div>
        <div class="grid-item snacks">  
            <img src="{{asset('assets/images/snacks/friedtufo.jpg')}}" alt="snack">
            <br>
            <div class="footer1">
                <span style="color: green">Price: 20</span>
                <br>
                <span>Fried Tufo</span>    
            </div> 
        </div>
        
        
        <!-- Mami items -->
        <div class="grid-item mami">  
            <img src="{{asset('assets/images/mami/mamiplain.jpg')}}" alt="mami">
            <br>
            <div class="footer1">
                <span>Price: 25</span>
                <br>
                <span>Mami Plain</span>    
            </div> 
        </div>
        <div class="grid-item mami">  
            <img src="{{asset('assets/images/mami/mamichickenshomai.jpg')}}" alt="mami">
            <br>
            <div class="footer1">
                <span>Price: 65</span>
                <br>
                <span>Mami Chicken Siomai</span>    
            </div> 
        </div>
        <div class="grid-item mami">  
            <img src="{{asset('assets/images/mami/mamishomai.jpg')}}" alt="mami">
            <br>
            <div class="footer1">
                <span>Price: 35</span>
                <br>
                <span>Mami Siomai</span>    
            </div> 
        </div>
        <div class="grid-item mami">  
            <img src="{{asset('assets/images/mami/mamieggshomai.jpg')}}" alt="mami">
            <br>
            <div class="footer1">
                <span>Price: 50</span>
                <br>
                <span>Mami EGG Siomai</span>    
            </div> 
        </div>
        <div class="grid-item mami">  
            <img src="{{asset('assets/images/mami/mamichickeneggshomai.jpg')}}" alt="mami">
            <br>
            <div class="footer1">
                <span>Price: 80</span>
                <br>
                <span>Mami Chicken EGG Siomai</span>    
            </div> 
        </div>
        <div class="grid-item mami">  
            <img src="{{asset('assets/images/mami/mamitufo.jpg')}}" alt="mami">
            <br>
            <div class="footer1">
                <span>Price: 35</span>
                <br>
                <span>Mami Tofu</span>    
            </div> 
        </div>
        <div class="grid-item mami">  
            <img src="{{asset('assets/images/mami/mamioverload.jpg')}}" alt="mami">
            <br>
            <div class="footer1">
                <span>Price: 100</span>
                <br>
                <span>Mami Overload with free black gulaman</span>    
            </div> 
        </div>
        <div class="grid-item mami">  
            <img src="{{asset('assets/images/mami/mamichickeneggtufo.jpg')}}" alt="mami">
            <br>
            <div class="footer1">
                <span>Price: 800</span>
                <br>
                <span>Mami Chicken Egg Tofu</span>    
            </div> 
        </div>
        <div class="grid-item mami">  
            <img src="{{asset('assets/images/mami/mamieggtufo.jpg')}}" alt="mami">
            <br>
            <div class="footer1">
                <span>Price: 50</span>
                <br>
                <span>Mami  Egg Tofu</span>    
            </div> 
        </div>
        <div class="grid-item mami">  
            <img src="{{asset('assets/images/mami/mamichickenshomaitofu.jpg')}}" alt="mami">
            <br>
            <div class="footer1">
                <span>Price: 80</span>
                <br>
                <span>Mami  Chicken Siomai Tofu</span>    
            </div> 
        </div>
        <div class="grid-item mami">  
            <img src="{{asset('assets/images/mami/mamishomaitufo.jpg')}}" alt="mami">
            <br>
            <div class="footer1">
                <span>Price: 50</span>
                <br>
                <span>Mami Siomai Tofu</span>    
            </div> 
        </div>
        <div class="grid-item mami">  
            <img src="{{asset('assets/images/mami/mamichickentofu.jpg')}}" alt="mami">
            <br>
            <div class="footer1">
                <span>Price: 65</span>
                <br>
                <span>Mami Chicken Tofu</span>    
            </div> 
        </div>
        
    </div>
    
    <script>
        function filterMenu(category) {
            var items = document.querySelectorAll('.grid-item');
            if (category === 'all') {
                items.forEach(function(item) {
                    item.style.display = 'block';
                });
            } else {
                items.forEach(function(item) {
                    if (item.classList.contains(category)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        }
    </script>
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
                        <button onclick="bookNow()">Booknow</button>
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
      <script>
        function bookNow() {
            alert('You have booked');
        }
    </script>
      <div class="container">
        <div class="grid">
            <div class="grid-item1">
               <center><img src="{{asset("assets/images/burger.png")}}" alt=""></center> 
            </div>
            <div class="grid-item2">
                <div class="inside">
                <h2>Hanspey</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All</p>
              
                <div class="button">
                <BUTTon>READ MORE</BUTTon>
            </div>
            </div>
            </div>
            
        </div>
    </div>
    <script>
        function filterMenu(category) {
            var items = document.querySelectorAll('.grid-item');
            if (category === 'all') {
                items.forEach(function(item) {
                    item.style.display = 'block';
                });
            } else {
                items.forEach(function(item) {
                    if (item.classList.contains(category)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        }
    </script>
    @include('team')
</body>
@include('footer')
</html>