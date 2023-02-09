@extends('layout')
@section('content')

<style>
.slider{
  width: 800px;
  height: 500px;
  border-radius: 10px;
  overflow: hidden;
  padding-left: 100px;
}

.slides{
  width: 500%;
  height: 500px;
  display: flex;
}

.slides input{
  display: none;
}

.slide{
  width: 20%;
  transition: 2s;
}

.slide img{
  width: 800px;
  height: 500px;
}

/*css for manual slide navigation*/

.navigation-manual{
  position: absolute;
  width: 800px;
  margin-top: -40px;
  display: flex;
  justify-content: center;
}

.manual-btn{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}

.manual-btn:not(:last-child){
  margin-right: 40px;
}

.manual-btn:hover{
  background: #40D3DC;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}

#radio4:checked ~ .first{
  margin-left: -60%;
}

/*css for automatic navigation*/

.navigation-auto{
  position: absolute;
  display: flex;
  width: 800px;
  justify-content: center;
  margin-top: 460px;
}

.navigation-auto div{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

#radio1:checked ~ .navigation-auto .auto-btn1{
  background: #40D3DC;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
  background: #40D3DC;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
  background: #40D3DC;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
  background: #40D3DC;
}
      

aside{
        display:block;
    }
    .menu {

height:500px;
  width: 100px;
  background: #B5B5B5;
  transition:width 1s;
  overflow: hidden;
  font-family: Arial;
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 400;
  padding: 0;
  display:block;
  float: left;
}
 
.menu:hover {
  width: 220px;
}
 
.menuitem span {
  position: absolute;
  left:80px;
  top:20px;
  transition:color 1s;
  color:rgba(255,255,255,0);
}
 
.menu:hover .menuitem  span {
 color:rgba(255,255,255,1);
}
 
.menuitem {
  position: relative;
  padding: 20px;
  transition:border .5s, background .2s;  
}
 
.menuitem:hover {
  background: #34495e;
  cursor: pointer;
}
 
 
.text:hover{
  border-left:20px solid #16a085;
}
</style>
<!-- Slider main container -->
<aside class="nav-sidebar flex-column" >
<div class="menu">
    <div class="menuitem text"><a href ="{{url('welcome')}}"><i class="fa fa-home"></i><span>Home</span></a></div>
    <div class="menuitem text"><a href ="{{route('showHotel')}}"><i class="fa fa-hotel"></i><span>Hotel</span></a></div>
    <div class="menuitem text"><a href ="{{route('fullcalendar')}}"><i class="fa fa-cog"></i><span>About Us</span></a></div>
    <div class="menuitem text"><a href="{{url('http://127.0.0.1:8000/')}}"><i class="fa fa-sign-out"></i><span>Log out</span></a></div>
</div>
</aside>

 <!--image slider start-->
 <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
        <img src="Area\Area\Cameron Highland\Cameron Lavender Farm\Picture96.jpg" alt="..." class="shown" class="img">
        </div>
        <div class="slide">
         <img src="Area\Area\Cameron Highland\Cameron Lavender Farm\Picture97.jpg" class="img" alt="...">
        </div>
        <div class="slide">
         <img src="Area\Area\Cameron Highland\Cameron Lavender Farm\Picture98.jpg" class="img" alt="...">
        </div>
        <div class="slide">
        <img src="Area\Area\Cameron Highland\Cameron Lavender Farm\Picture99.jpg" class="img" alt="...">
        </div>
        
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->
    <div class="description">
      <h5 style="color:black;">Lavendar garden now are avaiable in Fun Apartment! Come check in Hotel!</h5>
</div>
    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>




@endsection