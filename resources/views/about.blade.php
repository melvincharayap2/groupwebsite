<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('assets/images/hanspey1.png')}}" >
    <link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
    <title>About</title>
    <style>
    </style>
    @include('navbar')
</head>


<body>
    <div class="container-1">
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
  
</body>


@include('footer')
</html>
