
<link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

<div class="glitch" data-text="SKILLS">SKILLS</div> 



<div class="skills">
  
  <p><h2> Design </h2></p>
    
       
    <img width="50px" height="50px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Adobe_Photoshop_CC_icon.svg/66px-Adobe_Photoshop_CC_icon.svg.png">&nbsp; Photoshop</img></span>

<span class="bar">
      <span class="photoshop"></span></span>


    <img width="50px" height="50px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Adobe_Illustrator_CC_icon.svg/1051px-Adobe_Illustrator_CC_icon.svg.png">&nbsp; Illustrator</img></span>

<span class="bar">
      <span class="illustrator"></span></span>



    <img width="50px" height="50px" src="https://seeklogo.com/images/A/adobe-lightroom-logo-6A4DC55983-seeklogo.com.png">&nbsp; Lightroom</img></span>

<span class="bar">
      <span class="lightroom"></span></span>



<img width="50px" height="50px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Vegas_Pro_15.0.png/600px-Vegas_Pro_15.0.png">&nbsp; VegasPro</img>

<span class="bar">
      <span class="vegaspro"></span></span>

<p><h2> Programming </h2></p>


<img width="50px" height="50px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/120px-HTML5_logo_and_wordmark.svg.png">&nbsp; Html5</img>

<span class="bar">
      <span class="html5"></span></span>


<img width="50px" height="50px" src="https://pluralsight.imgix.net/paths/path-icons/css-c9b214f0d7.png">&nbsp; CSS</img>

<span class="bar">
      <span class="css"></span></span>



<img width="50px" height="50px" src="https://upload.wikimedia.org/wikipedia/en/thumb/6/62/MySQL.svg/1200px-MySQL.svg.png">&nbsp; MySql</img>

<span class="bar">
      <span class="mysql"></span></span>




<img width="50px" height="50px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png">&nbsp; Php</img>

<span class="bar">
      <span class="php"></span></span>



  <p><h2> Electrotechnology </h2></p>



<img style="border-radius: 10px;" width="50px" height="50px" src="https://w7.pngwing.com/pngs/759/217/png-transparent-square-black-logo-integrated-circuits-chips-central-processing-unit-computer-icons-chip-electronics-text-computer.png">&nbsp; Computer engineering</img>

<span class="bar">
      <span class="computer"></span></span>




<img width="50px" height="50px" src="https://seeklogo.com/images/W/windows-10-icon-logo-5BC5C69712-seeklogo.com.png">&nbsp; Windows</img>

<span class="bar">
      <span class="windows"></span></span>

<img width="50px" height="50px" src="https://cdn.worldvectorlogo.com/logos/android.svg">&nbsp; Android</img>

<span class="bar">
      <span class="android"></span></span>

<img width="50px" height="50px" src="https://i0.wp.com/www.linuxandubuntu.com/wp-content/uploads/2019/07/linux-logo-penguin.png">&nbsp; Linux</img>

<span class="bar">
      <span class="linux"></span></span>
      
      <style>
      body {
  background: black;
  font-family: "Varela", sans-serif;
}

.glitch {
  color: white;
  font-size: 100px;
  position: relative;
  width: 400px;
  margin: 0 auto;
}
@keyframes noise-anim {
  $steps: 20;
  @for $i from 0 through $steps {
    #{percentage($i*(1/$steps))} {
      $top: random(100);
      $bottom: random(101 - $top);
      clip-path: inset(#{$top}% 0 #{$bottom}%  0);
    }
  }
}
.glitch::after {
  content: attr(data-text);
  position: absolute;
  left: 2px;
  text-shadow: -1px 0 red;
  top: 0;
  color: white;
  background: black;
  overflow: hidden;
  animation: noise-anim 2s infinite linear alternate-reverse;
}

@keyframes noise-anim-2 {
  $steps: 10;
  @for $i from 0 through $steps {
    #{percentage($i*(1/$steps))} {
      $top: random(100);
      $bottom: random(101 - $top);
      clip-path: inset(#{$top}% 0 #{$bottom}%  0);
    }
  }
}
.glitch::before {
  content: attr(data-text);
  position: absolute;
  left: -3px;
  text-shadow: 1px 0 blue;
  top: 0;
  color: white;
  background: black;
  overflow: hidden;
  animation: noise-anim-2 15s infinite linear alternate-reverse;
}



.skills {
  width: 500px;
  margin: 60px auto;
  color: white;
}

.skills h1 {
  text-align: center;
  text-transform: capitalize;
}


.bar {
  background: #353b48;
  display: block;
  height: 12px;
  border: 1px solid rgba(0, 0, 0, 0.5);
  border-radius: 3px;
  overflow: hidden;
  box-shadow: 0 0 10px #2187e7ba;
  
}



.bar span {
  height: 12px;
  float: left;
  background: #2187e7;
  
  
}


.photoshop {
  width: 95%;
  animation: photoshop 2.5s 0.5 forwards;
}

.illustrator {
  width: 65%;
  animation: illustrator 2.5s 0.5 forwards;
}
.lightroom {
  width: 65%;
  animation: lightroom 2.5s 0.5 forwards;
}
.Html {
  width: 70%;
  animation: Html 2.5s 0.5 forwards;
}
.vegaspro {
  width: 64%;
  animation: vegaspro 2.5s 0.5 forwards;
}

.html5 {
  width: 64%;
  animation: html5 2.5s 0.5 forwards;
}

.css {
  width: 64%;
  animation: css 2.5s 0.5 forwards;
}

.mysql {
  width: 64%;
  animation: mysql 2.5s 0.5 forwards;
}

.php {
  width: 64%;
  animation: php 2.5s 0.5 forwards;
}


.computer {
  width: 64%;
  animation: computer 2.5s 0.5 forwards;
}

.windows {
  width: 64%;
  animation: windows 2.5s 0.5 forwards;
}

.android {
  width: 64%;
  animation: android 2.5s 0.5 forwards;
}

.linux {
  width: 64%;
  animation: linux 2.5s 0.5 forwards;
}

@keyframes photoshop {
  0% {
    width: 0;
  }
  100% {
  width: 100%;
  

  }
}

@keyframes illustrator {
  0% {
    width: 0;
  }
  100% {
    width: 85%;
    background: orange;
    
  }
}
@keyframes lightroom {
  0% {
    width: 0;
    
  }
  100% {
    width: 80%;
    background: purple;
    
  }
}

@keyframes vegaspro {
  0% {
    width: 0;
  }
  100% {
    width: 75%;
    background: red ;
  }
}

@keyframes html5 {
  0% {
    width: 0;
  }
  100% {
    width: 115%;
    background: orange;
    
  }
}

@keyframes css {
  0% {
    width: 0;
  }
  100% {
    width: 105%;
    background: green;
    
  }
}

@keyframes mysql {
  0% {
    width: 0;
  }
  100% {
    width: 75%;
    background: red;
    
  }
}
@keyframes php {
  0% {
    width: 0;
  }
  100% {
    width: 75%;
    background: purple;
    
  }
}

@keyframes computer {
  0% {
    width: 0;
  }
  100% {
    width: 115%;
    background: #56EFB0;
    
  }
}

@keyframes windows {
  0% {
    width: 0;
  }
  100% {
    width: 115%;
    background: blue;
    
  }
}

@keyframes android {
  0% {
    width: 0;
  }
  100% {
    width: 115%;
    background: limegreen;
    
  }
}

@keyframes linux {
  0% {
    width: 0;
  }
  100% {
    width: 65%;
    background: orange;
    
  }
}






@keyframes noise-anim {
  0% {
    clip-path: inset(40% 0 61% 0);
  }
  20% {
    clip-path: inset(92% 0 1% 0);
  }
  40% {
    clip-path: inset(43% 0 1% 0);
  }
  60% {
    clip-path: inset(25% 0 58% 0);
  }
  80% {
    clip-path: inset(54% 0 7% 0);
  }
  100% {
    clip-path: inset(58% 0 43% 0);
  }
}
      </style>
