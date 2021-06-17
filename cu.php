 <div class="heading center">

    <h5>Contact Us List</h5>
<br/>
</div>
            <div class="table-responsive">
                
<table class="table table-dark table-striped table-hover">
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                         <th>Phone</th>
                          <th>Message</th>
                      </tr>
                      <?php 
                      $userid = mysqli_query($conn,"SELECT * FROM contact_us");
						if ($userid) {
						  while ($row = mysqli_fetch_array($userid)){
						    $id  = $row['id'];
						    $name  = $row['name'];
						    $phone  = $row['phone'];
						    $message  = $row['message'];
						
						  ?>
                      <tr>
                        <td><?php echo "$id"; ?></td>
                        <td><?php echo "$name"; ?></td>
                        <td><?php echo "$phone"; ?></td>
                        <td><?php echo "$message"; ?></td>
                      </tr>
                    <?php  }}
                    ?>
                    </table>
                </div>