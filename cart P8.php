<!DOCTYPE html>
<html lang="en">
<head>
  <title>V I O L E T</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
 
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="Formal Shirts.css">
   

<style>

*{
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}
.footer-main-div{
  width:100%;
  height: auto;
  margin: auto;
  background: black;
  padding: 50px 10px; 
}
.footer-social-icons{
  width: 100%;
  height: auto;
  margin: auto;
}
.footer-social-icons ul{
  margin:0px;
  padding: 0px;
  text-align: center;
}
.footer-social-icons ul li{
  display: inline-block;
  width: 50px;
  height: 50px;
  margin:0px 10px;
  border-radius: 70%;
}
.footer-social-icons ul li a{
  font-size: 25px;
}
.footer-menu-one{
  width: 100%;
  height: auto;
  margin: auto;
  margin-top: 20px;

}
.footer-menu-one ul{
  margin:0px;
  padding: 0px;
  text-align: center;
  color: white;
}
.footer-menu-one ul li{
  display: inline-block;
  
  margin:0px 20px;
  
}
.footer-menu-one ul li a{
  font-size: 25px;
  font-family: arial;
  color: white;
  text-transform: uppercase;
}
.footer-bottom{
  width: 100%;
  height: auto;
  background:violet;
  padding: 10px;
}
.footer-bottom{
  font-size: 14px;
  text-align: center;
  font-family: arial;
}


.alert {
  padding: 30px;
  background-color: green;
  color: black;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

  

.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #666;
  color: white;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}


.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: black;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;

}







* {box-sizing: border-box;}

.img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 40px;
  height: 40px;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 300px;
  height: 300px;
}
</style>
<script>
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>






</head>
<body>
<div class="topnav">


  


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="padding: 30px;"><h1>V I O L E T</h1></a>
    </div>
    <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<div style="padding-left:16px">
  
</div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

       

      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  </div &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp >

  <div class="sifa">
  <a href="index.php">Home</a>
  <a href="New In.php">New In</a>

 
<div class="Men">
    <button class="dropbtn">Men
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="Men-content">
      <a href="Formal Shirts.php">Formal Shirts</a>
      <a href="Formal Pants.php">Formal Pants</a>
            <a href="Mens Casual Shirts.php">Mens Casual Shirts</a>

      <a href="Panjabi.php">Panjabi</a>
      <a href="Pajama.php">Pajama</a>
      <a href="Polos.php">Polos</a>
    </div>
  </div> 

<div class="Women">
    <button class="dropbtn">Women 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="Women-content">
      <a href="Women's Tops.php">Women's Tops</a>
      <a href="Women's Lawn.php">Women's Lawn</a>
      <a href="Women's Long Dress.php">Women's Long Dress</a>
       <a href="Women's Jeans.php">Women's Jeans</a>
    </div>
  </div> 

  <div class="Kids">
    <button class="dropbtn">Kids 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="Kids-content">
      <a href="Boys.php">Boys</a>
      <div class="Boys">
    <button class="dropbtn">Boys 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="Boys-content">
      <a href="Boy's Tops.php">Boy's Tops</a>
         <a href="Boy's Panjabi.php">Boy's Panjabi</a>
            <a href="Boy's Bottoms.php">Boy's Bottoms</a>
          </div>
        </div>

      <a href="Girls.php">Girls</a>

      <div class="Girls">
    <button class="dropbtn">Girls 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="Girls-content">
      <a href="Girls's Tops.php">Girls's Tops</a>
         <a href="Girl's Ethnic Tops.php">Girl's Ethnic Tops</a>
            <a href="Girls's Bottoms.php">Girls's Bottoms</a>
          </div>
        </div>
      
    </div>
  </div>

<div class="Fragrance">
    <button class="dropbtn">Fragrance
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="Fragrance-content">
      <a href="For Women.php">For Women</a>
     
      <a href="For Men.php">For Men</a>

     
          </div>
        </div>
      </div>



      <div class="img-zoom-container">
  <img id="myimage" src="pic 34.jpg" width="300" height="340">
  <div id="myresult" class="img-zoom-result"></div>
</div>
<h2>M Panjabi in Brown Print</h2>
<br>Product Type &nbsp; &nbsp; &nbsp; Men Wear</br>
<h2>M Panjabi in Brown Print</h2>
<br><h3>Size</h3></br>

  
<div id="myDIV">
  <button class="btn">S</button>
  <button class="btn active">M</button>
  <button class="btn">L</button>
  <button class="btn">XL</button>
  <button class="btn">XXL</button>
</div>

<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
  




<script>
// Initiate zoom effect:
imageZoom("myimage", "myresult");
</script>
<br><h3>Tk 4,295.00</h3></br>

<h3>Quantity</h3>
<div style="width:20px;margin:auto;text-align: left">
  <button id="subtract">-</button>
<input type="number" value="0" style="display: inline-block;
  padding: 7px">
<button id="add">+</button>
</div>
<script>
  let btnAdd=document.querySelector('#add');
  let btn Subtract=document.querySelector('#subtract');
  let input=document.querySelector('input');
  btnAdd.addEventListener('click',(){
    input.value=parseInt(input.value)+1;

  });
   btnSubtract.addEventListener('click',(){
    input.value=parseInt(input.value)-1;

   });
</script>
<div class="card">
 <p><a href="cart P8.php"><button>Add to Cart</button></a></p>
</div>

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Your Cart is Full Now.</strong> 
</div>

</div>



 <div class="footer-main-div">
  <div class="footer-social-icons">
    <ul>
      <li><a href="https://www.facebook.com/photo.php?fbid=1496320363831963&set=a.114358465361500&type=3&source=11&referrer_profile_id=100003620427971"><i class="fa fa-facebook-official"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
    </ul>
  </div>
  <div class="footer-menu-one">
    <ul>
      <li><a href="About Us.php">About Us</a></li>
      <li><a href="Deliver Info.php">Delivery Information</a></li>
      <li><a href="Exc.php">Exchange Policy</a></li>
      <li><a href="Privacy.php">Privacy Policy</a></li>
      <li><a href="Contact Us.php">Contact Us</a></li>

    </ul>
  </div>
 
</div>
 <div class="footer-bottom">
  <p>DESIGNED BY SEFAT SIDDIQUEA</p>
</div>



       
</body>
</html>
