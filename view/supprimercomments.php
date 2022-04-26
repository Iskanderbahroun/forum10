<?php
    require '../Controller/commentsc.php';

    $commentsC = new commentsC();
    $commentsC->supprimercomments($_GET['id']);
    header('Location:affichercomments.php');
?>