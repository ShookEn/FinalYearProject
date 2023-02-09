<aside class="nav-sidebar flex-column" >
<div class="menu">
    <div class="menuitem text"><a href ="{{url('welcome')}}"><i class="fa fa-home"></i><span>Home</span></a></div>
    <div class="menuitem text"><a href ="{{route('showHotel')}}"><i class="fa fa-hotel"></i><span>Hotel</span></a></div>
    <div class="menuitem text"><a href ="{{route('fullcalendar')}}"><i class="fa fa-cog"></i><span>About Us</span></a></div>
    <div class="menuitem text"><a href="{{url('http://127.0.0.1:8000/')}}"><i class="fa fa-sign-out"></i><span>Log out</span></a></div>
</div>
</aside>



<style>
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