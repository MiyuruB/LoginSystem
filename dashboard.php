<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="img/fav.png" type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboardcss.css" />
    <title>Dashboard</title>
  </head>
  <body>
  <div class="d-flex" id="wrapper">

        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Dashboard</div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Users</a>
                        
                      <a href="includes/logout.inc.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <?php
        if (isset ($_SESSION["adminid"])){
          echo   "<li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"profile.php\">Profile Information</a>
        </li>";
          echo  "<li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"includes/logout.inc.php\">Log out</a>
      </li>";
        }
        else {
        echo "<li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"login.php\">Log in</a>
        </li>";
        echo "<li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"signup.php\">Sign up</a>
      </li>";
        }
        ?>
      </ul>
                </div>
            </nav>
            <div class="row my-5">
                    <h3 class="fs-4 mb-3">Recent Users</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Last Login</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
        include 'includes/dbh.inc.php';

        $sql = "SELECT userId, userName, userEmail, userUid, last_login FROM users";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0) {
           
           
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["userId"] ."</td><td>". $row["userName"]. "</td><td>". $row["userEmail"]."</td><td>". $row["userUid"]."</td><td>". $row["last_login"]."</td><td>";
            }
            echo "</table>";    
        }
        else {
            echo "0 result";


        }
        $conn-> close();
      
   
     


?>
                            </tbody>
                        </table>
                    </div>

            

                </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>