<html>

    <head>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Info</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
                </li>
                
                </ul>
            </div>
        </nav>
            
    </head>


    </head>

<body>
    <div class="container-with-center">
        <h2> Enter Your Details</h2>

    </div>
    <section>
    <div class="container my-3">
    <form   method= "post"  enctype="multipart/form-data">
        <div class="form-group row">
        
<?php
//connecting to a database 
$username = "root";
$servername = "localhost";
$password = "";
$database = "new_crud";


// create a connection
$conn  = mysqli_connect($servername,$username,$password,$database);

$id = $_GET["ID"];


$old_data_query = "select * from person_details2 where ID='$id' ";

$show_data = mysqli_query($conn,$old_data_query);
$old_data = mysqli_fetch_assoc($show_data);

// submitting data to the database
if(isset($_POST['submit'])){
    $id_refer = $_GET["ID"];
    $name = $_POST["user"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $contact = $_POST["p_number"];
    $file = $_FILES['img'];
    $h1pass = md5($pass);
  
  $filename = $file['name'];
  $filepath = $file['tmp_name'];
  $fileerror = $file["error"];
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        if(preg_match("/^[0-9]{10}+$/",$contact)){
                if($fileerror==0){
                    $destination = "db_images/".$filename;
                    move_uploaded_file($filepath,$destination);

                    
                    $update_sql = "update person_details2 set Name = '$name' , Email_ID = '$email',Password = 
                    '$h1pass', Contact_NO = '$contact' , Image='$destination' where ID='$id_refer' ";
                    $result = mysqli_query($conn,$update_sql);
                            
                    if($result)
                        {
                            header("Location:redirect.php");
                    }
                

                }
            }
            else{ echo"Enter Valid Contact Number" ; }
            
       
            
    }
    else{ echo"Enter valid Email"; }
 
}
    ?>

        <div class="col-xs-4">
            <label for="user">Name</label>
            <input type="text" name="user" id="user" class="form-control" placeholder="Enter username" value="<?php echo $old_data["Name"]; ?>"/>
        </div>
        </div>
        <div class="form-group row">
        <div class="col-xs-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" name = "email" id= "email" placeholder="Enter email Id" value="<?php echo $old_data["Email_ID"]; ?>"/>
        </div>
        </div> 

        <div class="form-group row">
        <div class="col-xs-4">
            <label for="pass">Password</label>
            <input type="password" class="form-control"  name = "pass" id="pass" placeholder="Enter password" value="<?php echo $old_data["Password"]; ?>"/>
        </div>
        </div>
        <div class="form-group row">
        <div class="col-xs-4">
            <label for="p_number">Contact</label>
            <input type="text" class="form-control"  name = "p_number" id = "p_number" placeholder="Enter contact number" value="<?php echo $old_data["Contact_NO"]; ?>"/>
        </div>
        </div>
        <div class="form-group row">
        <div class="col-xs-4">
            <label for="img">Upload</label>
            <input type="file" class="form-control"  name = "img" id = "img"  value="<?php echo $old_data["Image"]; ?>"/>
        </div>
        </div>
        

    
        <button type="submit" name="submit" class="btn btn-default">Submit</button>

        </form>
    </div>
    </section>
</body>
</html>