<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <li nk rel="stylesheet" href="main.css"/>
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
<body> 
    <div class="container-with-center">
     <h2> List Of Users</h2>
    </div>
    <div class="container my-3">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Contact</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
            <tbody>
                        <?php 

                        //connecting to a database 
                        $username = "root";
                        $servername = "localhost";
                        $password = "";
                        $database = "new_crud";


                        // create a connection
                        $conn  = mysqli_connect($servername,$username,$password,$database);

                        //querying the database
                        $sql = "SELECT * FROM person_details2";
                        $result = mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result))
                        { 
                            ?>
                            <tr>
                            <th scope="row"><?php echo $row['ID']; ?></th>
                            <th scope="row"><?php echo $row['Name']; ?></th>
                            <td><?php echo $row['Email_ID']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td><?php echo $row['Contact_NO']; ?></td>
                            <td> <img src="<?php echo $row['Image'] ?>" width="100" height="50">  </td>                               </td>
                            <td><a href="edit.php?ID=<?php echo $row['ID'];?>" data-toggle="tooltip" title="Update"> <i class="far fa-edit"></i></a></td>
                            <td><a href="delete.php?ID=<?php echo $row['ID'];?>" data-toggle="tooltip" title="Delete"> <i class="fas fa-trash"></i></a></td>
                        </tr>
                        <?php
                            }


                        ?>
            </tbody>
        </table>
    </div>
</body>
</html>