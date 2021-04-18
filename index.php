<!DOCTYPE html>
<head>
  <title>Free-fire</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand em-text" href="#">TechTutor</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>

            <li><a href="Todo-List.php">Project</a></li>
          
            <li><a href="http://localhost/new%20project/login.php" >Login</a></li>
            <li><a href="http://localhost/new%20project/Sign%20up.php">Sign in</a></li>
          </ul>
        </div>

      </div>
    </nav>
  
<div id ="hero">
  <video autoplay muted loop poster="">
    <source src ="img/video.mp4" type = "video/mp4">
  </video>
  
  <div class="content">
    <div class="contaier">
      <h1 class="ml14">
      <span class="text-wrapper">
      <h1>Knowing the World </h1>
      <span class="letters">Going.. Beyond!! </span>
      <span class="line"></span>
      
      </span>
     
      </h1>
    </div><br>
    <button class="btn btn1">Explore!!</button>
  
   
  </div>

</div>
<div class="container container1">
    <div id="slide-left-container">
      <div class="slide-left">
      </div>
    </div>
    <div id="cards-container">
      <div class="cards">
        <div class="card">
          <img src="https://source.unsplash.com/220x220/?animals" alt="Animals" style="width:100%">
          <div class="container">
            <h4>
             <centre> <b>Animals</b></centre>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/220x220/?nature" alt="Nature" style="width:100%">
          <div class="container">
            <h4>
              <b>Nature</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/220x220/?architecture" alt="Architecture" style="width:100%">
          <div class="container">
            <h4>
              <b>Architecture</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/220x220/?technology" alt="Technology" style="width:100%">
          <div class="container">
            <h4>
              <b>Technology</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/220x220/?people" alt="People" style="width:100%">
          <div class="container">
            <h4>
              <b>People</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/220x220/?ocean alt="Ocean" style="width:100%">
          <div class="container">
            <h4>
              <b>Oceans</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src=https://source.unsplash.com/220x220/?buildings" alt="Nature" style="width:100%">
          <div class="container">
            <h4>
              <b>Buildings</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/220x220/?cars" alt="Architecture" style="width:100%">
          <div class="container">
            <h4>
              <b>Cars</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/220x220/?aeroplanes" alt="Technology" style="width:100%">
          <div class="container">
            <h4>
              <b>Airways</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/220x220/?Random" alt="People" style="width:100%">
          <div class="container">
            <h4>
              <b>Random</b>
            </h4>
          </div>
        </div>
      </div>
    </div>

    <div id="slide-right-container">
      <div class="slide-right">
      </div>
    </div>

  </div>



 <footer>
  <div class="container">
    <div class="row">

      <div class="col-md-3">
        <h3>Tech-Tutor</h3>
        <p>Marketing & Patenerships</p>
        <p>Terms & Condition<br>Privacy-Policy</p>
      </div>
      <div class="col-md-3">
      <h3>Reach Us</h3>
      <p>New-Delhi<br>India</p>
      </div>
      <div class="col-md-3">
        <h3>Contact Us</h3>
         tutortech047@gmail.com<br>
      </div>
      <div class="col-md-3">
        <h3>Leave your Email</h3>
         <form  action="subscription.php" method="post" >
         <div class="form-group">
           <label for="email">Email</label>
           <input type="email" class="form-control" name="email" placeholder="email">
         </div>
           <button class="btn btn-primary">Submit</button>
         </form>

      </div><br>
      <div class="container">
       <center> <p><a href="#mymodal" data-toggle="modal">Comment on the website</a></p></center>
       <center> <p><a href="1.php">see all comments</a></p> </center>
       <center> <p id="timee"></p> </center>
      </div>
      
     <center> <p>Copyright @ techtutor 2021<br>India</p></center>
    </div>
  </div>
  <div class="modal" id="mymodal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="text-center">Comment Here ("Say Hello")</h3>
          <form  action="comment.php" method="post" >
            <div class="form-group">
                <label for="comment">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="comment">comment</label>
                <textarea type="comment" class="form-control" id="comment" rows="3" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" value="submit">Submit</button>
          </form><br><Br>
          <center> <p><a href="1.php">see all comments</a></p> </center>
         
        </div>
      </div>
    </div>
  </div>
<footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/boot.js"></script>
  <script>
  var b;
  var date;
  var a;
   setInterval(() => {
        a = new Date();
        b = a.getHours() + ":" + a.getMinutes() + ":" +a.getSeconds();
         date = a.toLocaleDateString();
        document.getElementById("timee").innerHTML="The Time is " +b +" on Date "+ date ;
    }, 1000);

  </script>
</body>
