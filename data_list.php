<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->

    <?php
    include 'header.php';
    // include 'pop_form.php';
    include 'db.php';
    include 'admin_menu.php'

    ?>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-1">


            <?php

    

    $pages = array('afl','cu','ref');

    $page = isset($_GET['page']) ? $_GET['page'] : '';

	if (!empty($page)) {

        if(in_array($page,$pages)) {

			$page .= '.php';

		include($page);

		}

        else {

            include('errorlist.php');

        }

	}

	else {

		include('errorlist.php');

	}

?>
            </div>
        </div>
    </div>


    <!-- ***** Footer Start ***** -->
    <?php  include 'footer.php'; ?>


</body>
</html>