<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="jqery.js"></script>
<script>$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#carousel1']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})</script>
<?php 
session_start();
if(!isset($_SESSION['check']))
{
header("location:tryagain.php");
}
else{$name=$_SESSION['welcomeuser'];
  
}
?>


<style type="text/css">
	*{padding: 0px;margin:0px;}
body{position:relative;}
.carousel-caption
{
    text-transform: uppercase;
    padding-top: 20px;
    padding-bottom: 20px;
    
    top: 20%;
}
.carousel-indicators{top:75%;}
.carousel-caption i.fa
{
    border: 1px solid #FF5700;
    border-radius: 50%;
    display: inline-block;
    width: 25px;
    height: 25px;
    padding-top: 5px;
    padding-right: 2px;
}
.carousel-caption a
{
    color: #FFFFFF;

}

.carousel-caption p
{
    margin-top: 70px;
}
.carousel-caption p span
{
    border-bottom: 1px solid #FF5700;
    border-top: 1px solid #FF5700;
    padding-top: 25px;
    padding-bottom: 25px;
    font-size: 1.5em;
    font-weight: lighter;
}
.left.carousel-control
{
    left: -35px;
}
.right.carousel-control
{
    right: -35px;
}
 .panel {
      border: 1px solid #f4511e; 
      border-bottom:1px solid white; 
      border-radius:0 !important;
      transition: box-shadow 0.5s,transform 1s;
      height: 440px;
      max-width:300px;

  }
  .panel:hover {
      box-shadow: 5px 5px 40px black;
  }
  
  .panel-heading {
      color: #fff !important;
      font-weight: bolder;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
   .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .panel-body{color:black;height: 240px;font-size: 30px;text-align: center;font-weight: bold;}
  .feature{margin:40px;background-color: red;box-shadow: 4px 4px 1px black;color:white;font-weight: bolder;font-size: 20px;}
  .navbar{transition: background-color 1s;}
  #view{text-align: center;}
  #about{padding-top: 40px;background-color: skyblue;}
#footer{background-color:#f4511e;height: 200px;color:white;font-weight: bold;font-size: 25px; }
#footer a{color:black;font-size: 30px;font-weight: bold;}
#contact{padding: 20px;}

    .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 2s;
      -webkit-animation-duration: 2s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translate(5px,5px);
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(-5px,-5px);
      -webkit-transform: translateY(0%);
    }
  }




.nav.navbar-nav a 
 
{
    color: #FFFFFF;
    font-size: 1.1em;
}
.nav.navbar-nav li.active 
 
 
{
    border-bottom: 1px solid #FF5700;

}.navbar-header .navbar-brand 
, footer.footer .logo span
{
    color: #FFFFFF;
    border-bottom: 2px solid #FF5700;
    font-size: 30px;
    font-weight: lighter;
    text-transform: uppercase;
    padding-bottom: 12px;

}

.navbar.navbar-fixed-top
{
    padding-top: 24px;
    border: none;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.66);
}
.nav.navbar-nav li a:hover
{
    background-color: transparent;
    border-bottom: 1px solid #FF5700;
}
.nav.navbar-nav li.active a
{
    background-color: transparent;
    border-bottom: 1px solid #FF5700;
}

  	</style>


	<title>ONE STOP TUT</title>
</head>


<body data-spy="scroll" data-target=".navbar" >


<!-- navigation bar-->
 <nav class="navbar navbar-fixed-top">
  	<div class="container">
  		<!-- Brand and toggle get grouped for better mobile display -->
  		<div class="navbar-header">
  			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
  			<a class="navbar-brand text-uppercase" href="#">ONE STOP TUT</a>
  	    </div>
  		<!-- Collect the nav links, forms, and other content for toggling -->
  		<div class="collapse navbar-collapse" id="topFixedNavbar1">
			<ul class="nav navbar-nav navbar-right text-uppercase">
  				<li class="ink"><a href="#carousel1" >HOME</a></li>
  				<li class="ink"><a href="#features" >TUTORIALS</a></li>
  				<li class="ink"><a href="#view" >VIEWS</a></li>
  				<li class="ink"><a href="#about">about</a></li>
  				<li class="ink"><a href="#contact">contact</a></li>
			</ul>
		</div> 
  		<!-- /.navbar-collapse -->
	  </div>
  	<!-- /.container-fluid -->
  </nav>


















<!--carousel-->

 <div id="carousel1" class="carousel slide" data-ride="carousel" data-interval="3000">
  	<ol class="carousel-indicators">
  		<li data-target="#carousel1" data-slide-to="0" class="active"></li>
  		<li data-target="#carousel1" data-slide-to="1"></li>
  		<li data-target="#carousel1" data-slide-to="2"></li>
	  </ol>
  	<div class="carousel-inner" role="listbox">
  		<div class="item active">
			<img src="images/carousel1.jpg" alt="First slide image" class="center-block">
  			<div class="carousel-caption slide">
  				<h3 >free Video tutorials from all sources </h3>
  				<p><span><?php echo "<em class='welcomeuser'>WELCOME!!! $name</em>";?></span></p>
				<p><strong>see available tutorials</strong></p>
				<a href="#features"><i class="fa fa-angle-double-down"></i></a>
			</div>
			<!-- / carousel-caption -->
		</div>
		<!--/ item-->
  		<div class="item">
			<img src="images/office1.jpg" alt="Second slide image" class="center-block">
  			<div class="carousel-caption slide">
  				<h3>free Video tutorials from all sources</h3>
  				<p><span><?php echo "<em class='welcomeuser'>WELCOME!!! $name</em>";?></span></p>
				<p><strong>see features</strong></p>
				<a href="#features"><i class="fa fa-angle-double-down"></i></a>
			</div>
			<!-- / carousel-caption -->
		</div>
		<!--/ item-->
  		<div class="item">
			<img src="images/carousel1.jpg" alt="Third slide image" class="center-block">
  			<div class="carousel-caption slide">
  				<h3>free Video tutorials from all sources</h3>
  				<p><span><?php echo "<em class='welcomeuser'>WELCOME!!! $name</em>";?></span></p>
				<p><strong>see features</strong></p>
				<a href="#features"><i class="fa fa-angle-double-down"></i></a>
	
			</div>
			<!-- / carousel-caption -->
		</div>
		<!--/ item-->
	  </div>
	  <!-- / carousel-inne-->
  	<a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
	<a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
	</div>


<!-- features-->
<div id="features">
 <div class="jumbotron">
    <div class="row ">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><p class="text-center feature" id="at">AVAILABLE TUTORIALS</p></div>
    <div class="col-sm-4"></div>  
    </div>
	


 </div>
 <div class="container">

	<div class="row">
	
	<div class="col-md-4 tutbox">
   <a href="xhtmlandcss.html" style="text-decoration: none"> <div class="panel panel-default text-center">
    <div class="panel-heading"><h1>XHTML & CSS</h1></div>
    <div class="panel-body"><p>HTML is a markup languagefor describing web documents</p></div>
    <div class="panel-footer"><a class="btn btn-primary btn-block" href="xhtmlandcss.html">watch tutorial</a></div>
    </div></a>
    </div>

    <div class="col-md-4 tutbox">
    <a href="html5andcss.html" style="text-decoration: none"> <div class="panel panel-default text-center">
    <div class="panel-heading"><h1>HTML5</h1></div>
    <div class="panel-body"><p>CSS is a stylesheet language that describes the presentation.</p></div>
    <div class="panel-footer"><button class="btn btn-primary btn-block" onclick="window.location='html5andcss.html';" >watch tutorial</button></div>
    </div></a>
    </div>

    <div class="col-md-4 tutbox">
    <a href="javascript.html" style="text-decoration: none"> <div class="panel panel-default text-center">
    <div class="panel-heading"><h1>JavaScript</h1></div>
    <div class="panel-body"><p>JavaScript is the programming language of HTML and the web</p></div>
    <div class="panel-footer"><button class="btn btn-primary btn-block" onclick="window.location='javascript.html';" >watch tutorial</button></div>
    </div>
    </div></a>

    </div>
</div>
</div>

<!--views-->
<div id="view">
<div class="jumbotron">
	<div class="row ">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><p class="text-center feature" >PUBLIC OPINION</p></div>
    <div class="col-sm-4"></div>  
</div>
<div class="container">
<h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel" data-interval="4000">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4 style="font-weight: bold;font-style: italic;">"This company is the best. I am so happy with the result!"<br><span style="font-weight: normal;">Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4 style="font-weight: bold;font-style: italic;">"One word... WOW!!"<br><span style="font-weight:normal;">John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4 style="font-weight: bold;font-style: italic;">"Could I... BE any more happy with this company?"<br><span style="font-weight:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	
</div>
</div>


<!--about-->
<div id="about">


	<div class="container">
	<div class="row ">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><p class="text-center feature" >ABOUT US</p></div>
    <div class="col-sm-4"></div>  
    </div>
    </div>


	<div class="container">
	<div class="row ">
    <div class="col-sm-4"><img src="images/computer.gif " class="img-circle text-center" height="200px"> </div>
    <div class="col-sm-8 slideanim"><p >I havc irrcluded solutions to a srnall rrumber of exercises. I have also
added solrro rrew exercises to keep frorn rtxhrcing the unsolved problems too
much. Irr strlec:ting exercises for solutiorr, I have favored those that have
signiflcant instructioner,l ver,luesF. or this reasorr, I givc not onlv the answers,
brrt show the reasonirrg that is the ba,sis for the firml result. Merny exercises
have thtl ser,meth eme; often I choose a rupresentative case to solve, hoping
that a studerrt who can follow the reasorrirrg will be able to transfer it to a
set of similar instances. I bclicrve that soluiions to a carcfirlly selected set
ttf exercises can help studerrts irrr:rea"ret heir problern-solvirrg skills and still
lcave instructors a good set of unuolved exercises. In the text, {lxercises for
whir:h rr,s olution or a hint is g-ivcrrr r,rqird entified with {ffi.
Also in response to suggcstitlns, I have identified sonre of ther harder
exercist:s. This is not always easv, sirrt:e the exercises span a spectrrrm of
diffic;ulty and because a problen that seems easy to one student rnay givr:
considerable trouble to another. But thcre are some exercises that havcl
posed a challcnge fbr a majority of my studcnts. These are rnarked witlr
a single star (*). There are also a few exercisos that are different from
most in that they have rro r:lear-cut answer. They rnay crrll f'or upeculation,</p></div>
      
    </div>
    </div>



</div>



<!-- Container (Contact Section) -->
<div id="contact" class="container bg-grey">
  <h2 class="text-center feature">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> pantnagar, INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span> 9690352988</p>
      <p><span class="glyphicon glyphicon-envelope"></span> itsmeabhijeetpandey@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--footer-->
<div id="footer">
<footer class="container text-center" style="padding-top: 40px;">
  <a href="#carousel1" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Video tutorial  site (c)<a href="http://www.onestoptut.cf"
 title="Visit one stop tut">www.onestoptut.cf</a></p>
</footer>
	
</div>

<script type="text/javascript">

var x=document.getElementsByClassName("navbar");
var y=document.getElementsByClassName("panel");

	window.addEventListener("scroll",initscroll);
     
	function initscroll(){
		if(window.pageYOffset>610){
   x[0].style.backgroundColor="gray";y[0].style.transform="rotate(0deg)";y[2].style.transform="rotate(0deg)"



}
   else{y[0].style.transform="rotate(-20deg)";y[2].style.transform="rotate(20deg)";x[0].style.backgroundColor="transparent";}
for(var i=0;i<3;i++){z[i].style.color="black";}   }

</script>















</body>
</html>