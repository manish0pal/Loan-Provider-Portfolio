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
    include 'menu.php'

    ?>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-1">
            <div class="table-responsive">
                
<table class="table table-dark table-striped table-hover">
                      <tr>
                        <th>id</th>
                        <th>name</th>
                         <th>email</th>
                          <th>City</th>
                          <th>phone</th>
                        <th>amount</th>
                        <th>Loan Type</th>
                        <th></th>
                      </tr>
                      <?php 
                      $userid = mysqli_query($conn,"SELECT * FROM apply_for_loan");
						if ($userid) {
						  while ($row = mysqli_fetch_array($userid)){
						    $id  = $row['id'];
						    $name  = $row['name'];
						    $email = $row['email'];
						    $city  = $row['city'];
						    $phone  = $row['phone'];
						    $amount  = $row['amount'];
						     $loan_type  = $row['loan_type'];
						  ?>
                      <tr>
                        <td><?php echo "$id"; ?></td>
                        <td><?php echo "$name"; ?></td>
                        <td><?php echo "$email"; ?></td>
                        <td><?php echo "$city"; ?></td>
                        <td><?php echo "$phone"; ?></td>
                        <td><?php echo "$amount"; ?></td>
                        <td><?php echo "$loan_type"; ?></td>
                      </tr>
                    <?php  }}
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- ***** Footer Start ***** -->
    <?php  include 'footer.php'; ?>


</body>
</html>