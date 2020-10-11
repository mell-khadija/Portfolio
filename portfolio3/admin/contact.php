<?php
session_start();

include('connection.php');

?>
    <?php include('includ/basepa.php') ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
   <h2>Messages et requêtes des utilisateurs</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nom</th>
              <th>Objet</th>
              <th>Email</th>
              <th>Message</th>
            </tr>
          </thead>
          <tbody>
            
             <?php
             include('connection.php');
      $query="SELECT * FROM `contact`";
      $queryrun=mysqli_query($conn,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
          
          <tr>
          <td>#<?=$count+1?></td>
              <td><?= $data['cnom']?></td>
              <td><?=$data['cobjet']?></td>
              <td><?=$data['cemail']?></td>
              <td><?=$data['cmessage']?></td>
            </tr>
          <?php
              $count++;
      }
      if($count==0){ ?>
          <td colspan="5" align="center"> Il n'y a actuellement aucun message ou requête !</td>
      <?php }
        ?>
              
          </tbody>
        </table>
      </div>
      </main>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/main.js"></script></body>
</html>