 <div class="heading center">

    <h5>Apply For Loan List</h5>
<br/>
</div>
            <div class="table-responsive">
                
<table class="table table-dark table-striped table-hover">
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                         <th>Email</th>
                          <th>City</th>
                          <th>Phone</th>
                        <th>Amount</th>
                        <th>Loan Type</th>
                       
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