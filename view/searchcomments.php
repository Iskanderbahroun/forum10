<?php 
require_once '../Controller/topicC.php';
$topicC=new topicC();

$topics=$topicC->affichertopic();
if(isset($_POST['topic']) && isset($_POST['search'])){
$list=$topicC->affichercomments($_POST['topic']);
}
?>


<div class="form-container">
    <form action="" method = "POST">
        <div class="row">
            <div class="col-25">
                <label>Search: </label>
            </div>
            <div class="col-75">
                <select titre="topic" id="topic">
                    <?php foreach ($topics as $topic) {
                        ?>
                    <option 
                    value="<?= $topic['idtopic']?>"
                    <?php if (isset($_POST['search']) && $topic['idtopic']=$_POST['topic']) { ?>
                        selected
                    <?php } ?>
                    >
                    <?= $topic['titre'] ?>
                    </option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Search" name ="search">
                </div>
    </form>
                </div>
