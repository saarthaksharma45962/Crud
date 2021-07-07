<?php


//connecting to a database 
$username = "root";
$servername = "localhost";
$password = "";
$database = "new_crud";


// create a connection
$conn  = mysqli_connect($servername,$username,$password,$database);



?>


<html>


<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#" ><img src="assets\logo.jpg" width="50"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</header>
<body>
  <section >
    <div class="container my-3" >
      <div class="row">
        <div class="col-md-12">
            <div class="col-sm-10">              
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" >
              <img class="d-block w-100" src="assets\1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets\2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets\3.jpg" alt="Third slide">
              </div >
          </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
  <div id="middlebox" >
      <div id="detail" class="col">Product Title<br>
        <!-- Add icon library -->

        <span class="heading">User Rating</span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <p style="font-size: small">4.1 average based on 254 reviews.</p><hr>
      </div>
      <div id="price" class="col">Rs 3,000
        <select name="cars" id="cars"  style="height: 20px">
          <optgroup ><option value="every">every</option>
          <option value="none">none</option>
          <option value="some">some</option>
          <option value="any">any</option></optgroup>
        </select>
      </div>
          
      </div>

    </div> 
    </div>
  </div>  
</div>
</section>
<hr>
<section>
  <div class="container-with-center">
      Similar Products
    

  </div>

</section>
<section>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="thumbnails">
           <a href= "assets\sim1.jpg">
             <img src="assets\sim1.jpg" style="width: 100%;height: 180px;" >
             <div class="caption">
               <p >Product Name<br>
                 Rs 3000
               </p>
               </div>
           </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnails">
           <a href= "assets\sim2.jpg">
             <img src="assets\sim2.jpg" style="width: 100%;height: 180px;" >
             <div class="caption">
               <p >Product Name<br>
                 Rs 4000
               </p>
               </div>
           </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnails">
           <a href= "assets\sim3.jpg">
             <img src="assets\sim3.jpg"style="width: 100%; height=100px;" >
             <div class="caption">
               <p >Product Name<br>
                 Rs 2000
               </p>
               </div>
           </a>
          </div>
        </div>
      </div>
    </div>
</section><hr>



<section>
  <div class="container" id="review">
    Reviews
  </div>
</section>





<section>
  <div class="container">
  
   <p style="font-size: 15px;">Anonymous: A paragraph is a series of sentences that are organized and 
      coherent, and are all related to a single topic. Almost every piece of writing
      you do that is longer than a few sentences should be organized into paragraphs</p>
  </div>
</section>
<hr>




<section>
  <div class="container-with-center">
    Register To Subscribe
  </div>
</section>



<section>
  <div class="container">
  <form action = "index1.php" method= "post" enctype="multipart/form-data" >
    <div class="form-group row">
      <div class="col-xs-4">
        <label for="user">Name</label>
        <input type="text" name="user" id="user" class="form-control" placeholder="Enter username"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-4">
        <label for="email">Email</label>
        <input type="email" class="form-control" name = "email" id= "email" placeholder="Enter email Id"/>
      </div>
    </div> 

    <div class="form-group row">
      <div class="col-xs-4">
        <label for="pass">Password</label>
        <input type="password" class="form-control"  name = "pass" id="pass" placeholder="Enter password"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-4">
        <label for="p_number">Contact</label>
        <input type="text" class="form-control"  name = "p_number" id = "p_number" placeholder="Enter contact number"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-4">
        <label for="img">Upload</label>
        <input type="file" class="form-control"  name = "img" id = "img" />
      </div>
    </div>

   
    <button type="submit" name="submit" class="btn btn-default">Submit</button>

    </form>
  </div>
</section>


</body>
</html>


<?php
      // submitting data to the database
      if(isset($_POST['submit'])){
        
        $name = $_POST["user"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $contact = $_POST["p_number"];
        $file = $_FILES["img"];
#hashed passwd ---------
        $hpass = md5($pass);

       // print_r($file);
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file["error"];
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
          if(preg_match("/^[0-9]{10}+$/",$contact)){
            if($fileerror==0){

              $destfile = 'db_images/'.$filename;

              move_uploaded_file($filepath,$destfile);
              
              $sql = "insert into person_details2(Name,Email_ID,Password,Contact_NO,Image) 
                        values('$name ','$email','$hpass ','$contact','$destfile')";
              $result = mysqli_query($conn,$sql);

              if($result){
                
            header("Location: redirect.php");

            }

          }
        }
        else{   echo "Contact number is not valid" ;}
      }
      else{ echo " Enter valid Email "; }

        
      }
?>
