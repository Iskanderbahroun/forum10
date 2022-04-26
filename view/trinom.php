<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <title>Divertify </title>
    <style>
        
    .main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
  margin:10px;
}
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

table.customTable {
  width: 100%;
  background-color: #FFFFFF;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #E9F8F7;
  border-style: solid;
  color: #000000;
}

table.customTable td, table.customTable th {
  border-width: 2px;
  border-color: #E9F8F7;
  border-style: solid;
  padding: 5px;
}

table.customTable thead {
  background-color: #FFE0EB;
}
.navbar a.right {
  float: right;
  color: black;
}

    </style>
</head>

<body>
    
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../back-front/backoffice.php">Divertify</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                    <a href="#" class="right">
      <?php 
        if (isset($_SESSION["adminFullname"])) {
            echo "HEY, <strong style='color:black'>".$_SESSION["adminFullname"]."</strong>!";
        }
      ?>
  </a>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>

                            <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-comments"></i>Forum <span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu" >
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="../view/affichertopic.php">Topics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../view/affichercomments.php">Comments</a>
                                </li>
</ul>
</div>
</li>
         
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid">
                <br>  <br>  <br>  <br>
                <a href="trinom.php"><li data-filter=".gra"><h2>Trier les  Noms </h2></li></a> 

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

require_once '../Assets/Utils/config.php';
$config=config::getConnexion();

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $config->prepare("SELECT * FROM `topic` WHERE titre = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($Topic = $sth->fetch())
	{
		?>
		<br><br><br>
		<table border='2' align="center">
			<tr>
				<th>titre</th>
                <th>description</th>
				<th>contenu</th>

			</tr>
			<tr>
				<td><?php echo $Topic->titre; ?></td>
                <td><?php echo $Topic->description; ?></td>
                <td><?php echo $Topic->contenu; ?></td>
			</tr>
            

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
        }
    }
    ?>

                            <?php
                            require '../Controller/topicC.php';
                        
                            $TopicC = new topicC();
                            $Topic = $TopicC->trier();
                        ?>
                        
                        
                        <html>
                            <head>
                        </head>
                        <br><br>
                        <a href="ajoutertopic.php">Ajouter topic </a>
                        
                        <table border='2' align="center">
                        <tr>
                            <th>titre</th>
                            <th>description</th>
                            <th>contenu</th>
                        </tr>
                                <?php 
                                        foreach ($Topic as $Topic) {
                                ?>
                        
                        
                        <tr>
                            <td><?php echo $Topic['titre'] ; ?></td>
                            <td><?php echo $Topic['descrip'] ; ?></td>
                            <td><?php echo $Topic['contenu'] ; ?></td>
                            <td><a href="supprimertopic.php?id=<?php echo $Topic['idtopic'] ; ?>"><img src="../Assets/Images/supp.png" witdh='25px' height='25px'></a></td>
                            <td><a href="modifiertopic.php?id=<?php echo $Topic['idtopic'] ; ?>">modifier</a></td>
                        </tr>
                        
                        
                                <?php
                                        }
                                ?>
                        </table>
                        </html>
    
             </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script>
    $(document).ready(function() {

        // binding the check all box to onClick event
        $(".chk_all").click(function() {

            var checkAll = $(".chk_all").prop('checked');
            if (checkAll) {
                $(".checkboxes").prop("checked", true);
            } else {
                $(".checkboxes").prop("checked", false);
            }

        });

        // if all checkboxes are selected, then checked the main checkbox class and vise versa
        $(".checkboxes").click(function() {

            if ($(".checkboxes").length == $(".subscheked:checked").length) {
                $(".chk_all").attr("checked", "checked");
            } else {
                $(".chk_all").removeAttr("checked");
            }

        });

    });
    </script>
</body>
 
</html>