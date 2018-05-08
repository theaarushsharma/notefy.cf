<!DOCTYPE html>
<html>
<head>
	<title>
	Rkgec notEfy
</title>
<link rel="shortcut icon" type="image/icon" href="notefy.ico">
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="notEfy.css">
<link rel="stylesheet" href="Raleway.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Background Image */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("../notEfy/img/notefy.png");
    background-size: 100%;
    background-repeat: no-repeat;
    height: 100%

}
.notefy-bar .notefy-button {
    padding: 16px;
}
</style>
<body>

<!-- Logo Section -->
<div class="notefy-top">
  <div class="notefy-bar notefy-white notefy-card-2" id="myNavbar">
    <a href="#home" class="notefy-bar-item notefy-button"><img class="notefy-image " src="logo.png" ></a>
    <!-- Nav bar -->
    <div class="notefy-right notefy-hide-small" style="padding-top: 10px">
    	<a href="#home" class="notefy-bar-item notefy-button"><i class="fa fa-home"></i> HOME</a>
      <a href="#about" class="notefy-bar-item notefy-button"><i class="fa fa-search"></i> ABOUT</a>
      <a href="#team" class="notefy-bar-item notefy-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#team" class="notefy-bar-item notefy-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#contact" class="notefy-bar-item notefy-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Small Screen Navbar (Open) -->

    <a href="javascript:void(0)" class="notefy-bar-item notefy-button notefy-right notefy-hide-large notefy-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Small Screen Menu icon -->
<nav class="notefy-sidebar notefy-bar-block notefy-black notefy-card-2 notefy-animate-left notefy-hide-medium notefy-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="notefy-bar-item notefy-button notefy-large notefy-padding-16">Close ×</a>
  <a href="#home" onclick="w3_close()" class="notefy-bar-item notefy-button">HOME</a>
  <a href="#about" onclick="w3_close()" class="notefy-bar-item notefy-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="notefy-bar-item notefy-button">TEAM</a>
  <a href="#team" onclick="w3_close()" class="notefy-bar-item notefy-button">TEAM</a>
  <a href="#contact" onclick="w3_close()" class="notefy-bar-item notefy-button">CONTACT</a>
</nav>

<!-- Login Link -->
<header class="bgimg-1 notefy-display-container notefy-grayscale-min " id="home">
  <div class="notefy-display-left notefy-text-white" style="padding:40px">
  
    
    <p><a href="#" class="notefy-button notefy-green notefy-padding-large notefy-large notefy-margin-top notefy-opacity notefy-hover-opacity-off" onclick="onClick(this)">LOGIN</a></p>
  </div>

<!-- link for login form-->
<div id="formlink01" class="notefy-modal notefy-black" onclick="this.style.display='none'">
  <span class="notefy-button notefy-xxlarge notefy-black notefy-padding-large notefy-display-topright" title="Close">×</span>
  <div class="notefy-modal-content notefy-animate-zoom notefy-center notefy-transparent notefy-padding-64">
    <img id="formlink02" class="notefy-image">
    <p id="login" class="notefy-opacity notefy-large"></p>
  </div>
</div> 
</header>

<!-- About Section -->
<div class="notefy-container" style="padding:80px 16px" id="about">
  <h3 class="notefy-center">ABOUT RKGEC NOTEFY</h3>
  <div class="notefy-row-padding notefy-center" style="margin-top:64px">
    <div class="notefy-quarter">
      <i class="fa fa-globe notefy-margin-bottom notefy-jumbo notefy-center"></i>
      <p class="notefy-large">Ecofriendly</p>
      <p>It reduces the usage of paper and saves money.</p>
    </div>
    <div class="notefy-quarter">
      <i class="fa fa-heart notefy-margin-bottom notefy-jumbo"></i>
      <p class="notefy-large">Simple</p>
      <p>It is so simple that anyone can  easily use it without having professional knowledge.</p>
    </div>
    <div class="notefy-quarter">
      <i class="fa fa-mobile notefy-margin-bottom notefy-jumbo"></i>
      <p class="notefy-large">Responsive</p>
      <p>Looks good and work smoothly on any device(desktops, tablets and even mobile phones).</p>
    </div>
    <div class="notefy-quarter">
      <i class="fa fa-cog notefy-margin-bottom notefy-jumbo"></i>
      <p class="notefy-large">Cross-platform</p>
      <p>notEfy is specially designed to work on any platform (Windows, Linux and MacOS and it can also be downloaded on Android and IOS devices.</p>
    </div>
  </div>
</div>

<!-- What is notEfy -->
<div class="notefy-container notefy-light-grey" style="padding:128px 16px">
  <div class="notefy-row-padding">
    <div class="notefy-col m6">
      <h3>What is notEfy ?</h3>
      <p>The project “Rkgec notEfy” is designed for the Teachers and for Students where teachers from every branch  can upload their notes on the website. The students can get all the notes from this common platform. This project will prove helpful to both the students and the faculty. 
       </p>
    </div>
    <div class="notefy-col m6">
      <img class="notefy-image notefy-round-large" src="img.jpg"  width="700" height="394">
    </div>
  </div>
</div>




<!-- Video section -->
<div class="notefy-container notefy-row notefy-center notefy-dark-grey notefy-padding-64">
  <div class="notefy-quarter">
    <span class="notefy-xxlarge">video</span>
    <br>
  </div>
  
</div>

<!-- Team Section -->
<div class="notefy-container " style="padding:80px 16px" id="team">
  <h3 class="notefy-center">THE TEAM</h3>
  <p class="notefy-center notefy-large">The ones who made this project</p>
  <div class="notefy-row-padding notefy-grayscale" style="margin-top:60px">
    <div class="notefy-col l3 m6 notefy-margin-bottom">
      <div class="notefy-card-2">
        <div class="notefy-container notefy-cyan notefy-text-white">
          <h3>Prashant Sharma</h3>
          <p class="notefy-opacity"></p>
          <p></p>
          <p><a href="https://www.linkedin.com/in/aarush-sharma" target="_blank" class="notefy-button notefy-light-grey notefy-block" ><i class="fa fa-envelope"></i> Contact</a></p>
        </div>
      </div>
    </div>
    <div class="notefy-col l3 m6 notefy-margin-bottom">
      <div class="notefy-card-2">
        <div class="notefy-container notefy-red">
          <h3>Vanshika Gupta</h3>
          <p class="notefy-opacity"></p>
          <p></p>
          <p><a href="#team" class="notefy-button notefy-light-grey notefy-block"><i class="fa fa-envelope"></i> Contact</a></p>
        </div>
      </div>
    </div>
    <div class="notefy-col l3 m6 notefy-margin-bottom">
      <div class="notefy-card-2">
        <div class="notefy-container notefy-yellow">
          <h3>Shivangi Gupta</h3>
          <p class="notefy-opacity"></p>
          <p></p>
          <p><a href="#team" class="notefy-button notefy-light-grey notefy-block"><i class="fa fa-envelope"></i> Contact</a></p>
        </div>
      </div>
    </div>
    <div class="notefy-col l3 m6 notefy-margin-bottom">
      <div class="notefy-card-2">
        <div class="notefy-container notefy-green">
          <h3>Nagma Shabbir</h3>
          <p class="notefy-opacity"></p>
          <p></p>
          <p><a href="#team" class="notefy-button notefy-light-grey notefy-block"><i class="fa fa-envelope"></i> Contact</a></p>
        </div>
      </div>
    </div>
    <div class="notefy-col l3 m6 notefy-margin-bottom">
      <div class="notefy-card-2">
        <div class="notefy-container notefy-blue">
          <h3>Shweta Yadav</h3>
          <p class="notefy-opacity"></p>
          <p></p>
          <p><a href="#team" class="notefy-button notefy-light-grey notefy-block"><i class="fa fa-envelope"></i> Contact</a></p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Contact Section -->
<div class="notefy-container notefy-light-grey" style="padding:80px 40px" id="contact">
  <h3 class="notefy-center">CONTACT</h3>
  <p class="notefy-center notefy-large">Lets get in touch. Send us a message:</p>
  <div class="notefy-row-padding" style="margin-top:50px">
    <div class="notefy-half">
      <p><i class="fa fa-map-marker fa-fw notefy-xxlarge notefy-margin-right"></i>40th KM Stone,NH-24, Delhi - Hapur Road, Pilkhuwa, Hapur (Formly Ghaziabad)- 245304 (U.P.)</p>
      <p><i class="fa fa-phone fa-fw notefy-xxlarge notefy-margin-right"></i> Phone: 0122-2321964, 2324554, 9219532274</p>
      <p><i class="fa fa-envelope fa-fw notefy-xxlarge notefy-margin-right"> </i> Email: contact@rkgec.edu.in</p>
      <br>
      <form action="/action_page.php" target="_blank">
        <p><input class="notefy-input notefy-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="notefy-input notefy-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="notefy-input notefy-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="notefy-input notefy-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="notefy-button notefy-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>
    
  </div>
</div>

<!-- Footer -->
<footer class="notefy-center notefy-black notefy-padding-64">
  <a href="#home" class="notefy-button notefy-light-grey"><i class="fa fa-arrow-up notefy-margin-right"></i>To the top</a>
  <div class="notefy-xlarge notefy-section">
    <i class="fa fa-facebook-official notefy-hover-opacity"></i>
    <i class="fa fa-instagram notefy-hover-opacity"></i>
    <i class="fa fa-snapchat notefy-hover-opacity"></i>
    <i class="fa fa-pinterest-p notefy-hover-opacity"></i>
    <i class="fa fa-twitter notefy-hover-opacity"></i>
    <i class="fa fa-linkedin notefy-hover-opacity"></i>
  </div>
  <p>Copyright &copy RKGEC 2017. All Rights Reserved</p>
</footer>
<script>

//login form
function onClick(element) {
  document.getElementById("formlink02").src = element.src;
  document.getElementById("formlink01").style.display = "block";
  var captionText = document.getElementById("login");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

</script>
</body>
</html>
