<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>

    <?php 
    include 'header.php';
    include 'menu.php';
    ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php
    
    $pages = array('pl','hl','bl','lap');
    $page = isset($_GET['page']) ? $_GET['page'] : '';
	if (!empty($page)) {
        if(in_array($page,$pages)) {
			$page .= '.html';
		include($page);
		}
        else {
            include('error.php');
        }
	}
	else {
		include('error.php');
	}
?>
            </div>
        </div>
    </div>
</section>
   


   

    <a href="#apply-loan">
        <button class="open-button" id="opn-btn">Apply For A Loan</button></a>
    <?php include 'apply_loan.php'; ?>
    <?php  include 'footer.php'; ?>
</body>

</html>