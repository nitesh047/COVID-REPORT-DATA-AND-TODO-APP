<!DOCTYPE html>
<head>
  <title>TechTutor</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Tech-Tutor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Projects
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Todo-List.php">TODO-List App</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Covid-Report.php">Covid-Report App</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Sign up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Login</a>
      </li>
    </ul>
   
  </div>
</nav>
  
<div id ="hero">
  <video autoplay muted loop poster="">
    <source src ="World - 1992.mp4" type = "video/mp4">
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
    <button class="btn btn1 ">Explore!!</button>
  
   
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
    <div class="row ">

      <div class="col-md-3 my-4">
        <h3>Tech-Tutor</h3>
        <p>Marketing & Patenerships</p>
        <p>Terms & Condition<br>Privacy-Policy</p>
      </div>
      <div class="col-md-3 my-4">
      <h3>Reach Us</h3>
      <p>New-Delhi<br>India</p>
      </div>
      <div class="col-md-3 my-4">
        <h3>Contact Us</h3>
         tutortech047@gmail.com<br>
      </div>
      <div class="col-md-3 my-4">
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="bootstrap.js"></script>
  <script src="boot.js"></script>
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
