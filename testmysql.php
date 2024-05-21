<?php

  include('db_connect.php');
  global $conn;
  

  $sql = 'SELECT Price, Flight_Code from ucus_listesi';

  $result = mysqli_query($conn, $sql);

  $liste = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free result from memory
  mysqli_free_result($result);

  //close connection
  mysqli_close($conn);

  // virgüllü verileri ayırmak için explode(',',$liste)




?>
<html>

<div class="container">
  <div class="row">
   
    <?php foreach ($liste as $list) { ?>  
      <div class="col s6 m3">
        <div class="card z-depth-0">
          <div class="card-content center">
            <h6><?php echo htmlspecialchars($list['Price']); ?></h6>
            <div><?php echo htmlspecialchars($list['Flight_Code']); ?></div>
          </div>
          <div class="card-action right-align">
            <a class="brand-text" href="#">Daha Fazla Bilgi</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

</html>