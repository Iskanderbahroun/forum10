<?php

require_once '../Controller/commentsC.php';
require_once '../Model/comments.php' ;
require_once '../Controller/topicC.php';
$a=$_GET['id'];
$commentsV=new commentsC();
$b=$_GET['idcom'];
echo $_GET['idcom'];

if (isset($_POST['contenu'])) 
{           
    echo $_GET['idcom'];
        
         $Comments = new comments(NULL,$_POST['id_topic'], $_POST['contenu']);
         $commentsV->modifiercomments($Comments,$b);
        header('Location:affichercomments.php');
}
else {
    $x=$commentsV->getcommentsbyID($b);
    echo $_GET['idcom'];

}

?>

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
    <title>NADHAFNI </title>

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
                <a class="navbar-brand" href="../index.html">NADHAFNI</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham</span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
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






                            <!--daly -->

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







<!--mahmoud -->
<li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-calendar-alt"></i>Evenements <span class="badge badge-success">6</span></a>
                        <div id="submenu-2" class="collapse submenu" >
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="../view/ajouterevent.php">Ajouter Evenements</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../view/afficherListeevents.php">Modifier Evenements</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../view/afficherListeevents.php">Supprimer Evenements</a>
                                </li> <li class="nav-item">
                                    <a class="nav-link" href="../view/afficherListeevents.php">Afficher Evenements</a>
                                </li> <li class="nav-item">
                                    <a class="nav-link" href="../view/afficherListeavis.php">afficher Avis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../view/afficherListeevents.php">Supprimer Avis</a>
                                </li> <li class="nav-item">
                                    <a class="nav-link" href="../view/afficherListeparticip.php">Afficher les participants</a>
                                </li> <li class="nav-item">
                                    <a class="nav-link" href="../view/searchavis.php">Voir les Avis (selon les Evenements)</a>
                                </li>
</ul>
</div>
</li>



<!--Ahmed-->
<li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-shopping-basket"></i>Produits & Categories <span class="badge badge-success">6</span></a>
                        <div id="submenu-3" class="collapse submenu" >
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="../view/products.php">Produits</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../view/categories.php">Categories</a>
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
                                                <br><br><br>
                                    <form action="" method="POST">
                                            <table border="1" align="center">
                                               
                                                <tr>
                                                    <td>
                                                        <label for="contenu">contenu :
                                                        </label>
                                                    </td>
                                                    <td><input type="text" value="<?php echo $x['contenu']; ?>" name="contenu" id="contenu" ></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="submit" value="Modifier"> 
                                                    </td>
                                                    <td>
                                                        <input type="reset" value="Annuler" >
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
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