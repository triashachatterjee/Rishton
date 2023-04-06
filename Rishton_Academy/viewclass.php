<html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="viewclass.css">
    
	</head>
    <body>
    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <a class="navbar-brand" href="index.html"><img id="logo" src="images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Class<a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="viewclass.php">View Class</a></li>
                                <li><a class="dropdown-item" href="addclass.html">Add Class</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Students</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="viewstudents.php">View Students</a></li>
                                <li><a class="dropdown-item" href="addstudents.html">Add Students</a></li>
                                <!-- <li><a class="dropdown-item" href="#">A third link</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Parents</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="viewparents.php">View Parents</a></li>
                                    <li><a class="dropdown-item" href="addparents.html">Add Parents</a></li>
                                    <!-- <li><a class="dropdown-item" href="#">A third link</a></li> -->
                                </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Teachers</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="viewteacher.php">View Teachers</a></li>
                                <li><a class="dropdown-item" href="addteacher.html">Add Teacher</a></li>
                                <!-- <li><a class="dropdown-item" href="#">A third link</a></li> -->
                            </ul>
                        </li>
                          
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Link</a></li>
                                <li><a class="dropdown-item" href="#">Another link</a></li>
                                <li><a class="dropdown-item" href="#">A third link</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </nav>
            <!-- END OF NAVIGATION MENU -->
            <!-- FORM HTML -->
            <div class="head">
            <h1>Search class data by it's id</h1>
            <h2>Enter your student id at below box</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xs-12 col-xl-4 col-xxl-4">
                
                    <form action="" method="POST">
                    
                        <input type="text" name="classID"  placeholder="Enter your Class ID" />

                        <button type="submit" name="search" >View Class</button>
                    </form>
                    
								<table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%" style="color:white;">
                                    <thead>
                                        <tr>
                                            <th>Class Id</th>
                                            
											<th>Teacher ID</th>
											<th>Class Name</th>
											<th>Class Capacity</th>
                                            
                                        </tr>
                                    </thead>
                                <?php
                                $connection = mysqli_connect("localhost","root","","rishton");
                               // $db = mysqli_select_db($connection, "");

                                if(isset($_POST['search']))
                                {
                                    $classID = $_POST['classID'];

                                    $query = "SELECT * FROM addclass where classID='".$classID."' ";
                                    $query_run = mysqli_query($connection, $query);

                                    while($row = mysqli_fetch_array($query_run,MYSQLI_BOTH)) 
                                    {
                                        ?>
                                            <tr>
                                             
                                                <td style="color:white;"> <?php echo $row['classID']; ?> </td>
                                                
                                                <td style="color:white;"> <?php echo $row['teachersID']; ?> </td>
                                                <td style="color:white;"> <?php echo $row['classname']; ?> </td>
                                                <td style="color:white;"> <?php echo $row['classcapacity']; ?> </td>
                                                


                                            </tr>

                                        <?php

                                    }
                                }
                                ?>
                    
                </table>
                </div>
            </div>
	
		
        

            
        
        </header>
        
        <footer class="text-center text-lg-start bg-light text-muted">
           <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->
              
            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
            </section>
            <!-- Section: Social media -->
              
            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                      <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Rishton Academy
                            </h6>
                            <p>
                            Interested to enrol, contact today using our various platforms.
                            We can't wait to hear from you.
                            </p>
                        </div>
                        <!-- Grid column -->
              
                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Products
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Shop</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Books</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Dresses</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Accessories</a>
                            </p>
                        </div>
                      <!-- Grid column -->
              
                      <!-- Grid column -->
                      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Library</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Payment</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->
              
                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                info@example.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                        </div>
                      <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 col-xl-12 col-xxl-12">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2375.5767263382927!2d-2.2871421842653663!3d53.
                        45815228000266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bafd0a3fc5c33%3A0x3f7512777459a239!2sUniversity%20Academy%2092%20(UA92)!
                        5e0!3m2!1sen!2suk!4v1680119034580!5m2!1sen!2suk"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="text-center1" style="background-color: rgba(248, 246, 246, 246);">
                © 2021 Copyright:
                <a class="text-reset1" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    



































<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>

<!--?php

    $link = mysqli_connect("localhost", "root", "", "rishton");
    // $result= mysqli_query($sql, "SELECT from addstudents ORDER by id DESC");
    // Check connection
    if ($link === false) {
        die("Connection failed: ");
    }
    // echo"See all students";
    $sql = mysqli_query($link, "SELECT studentID, studentname, email, address, gender, classname, medical  FROM addstudents");
			// while ($res = mysqli_fecth_array($result)){
			// echo "<tr>";  
			//     echo '<td>'.$res['studentID'].'</td>';
			//     echo '<td>'.$res['studentname'].'</td>';
            //     echo '<td>'.$res['email'].'</td>';
            //     echo '<td>'.$res['address'].'</td>';
            //     echo '<td>'.$res['gender'].'</td>';
            //     echo '<td>'.$res['classname'].'</td>';
            //     echo '<td>'.$res['medical'].'</td>';
            // echo "</tr>";
            // }
    echo "<table>";
    while ($row = $sql -> fetch_assoc()){
        echo "
        <tr>
            <td>{$row['studentID']}</td>
            <td>{$row['studentname']}</td>
            <td>{$row['email']}</td>
            <td>{$row['address']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['classname']}</td>
            <td>{$row['medical']}</td>
        </tr>";
        
    }
    echo "</table>";


?-->
</body>
</html>