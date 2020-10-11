
<?php
session_start();

include('connection.php');


?>
  
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Admin Panel</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
    
   

    
    <style>
        .oo{
            height: 200px;
        }
        
        .ooo{
            height: 100px;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
  </head>
  <body>
    <?php include('header.php');?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <h2>Edit Portfolio Section</h2>
  <form method="post" action="updatep.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <label>Image</label>
  <div class="custom-file">
    <input type="file" name="projetpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projetpic">Choisissez ...</label>
  </div></div>
  
   <div class="form-group col-md-6 mt-auto">
      <label for="name">Nom du projet</label>
      <input type="name" name="projetnom" class="form-control" id="name" placeholder="Nom">
    </div>
    <div class="form-group col-md-12">
      <label for="email">Lien du projet</label>
      <input type="text" name="projetlien" class="form-control" id="email" placeholder="https://mell-khadija.github.io/C2C3/">
    </div>
    <div class="form-group col-md-2 ml-auto">
        <input type="submit" name="ajouter" class="btn btn-info" value="Ajouter au portfolio">
    </div>
</form>

<table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Image du Projet</th>
              <th>Nom du Projet</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
        
    <?php
       $query2=mysqli_query($conn,"select * from  `portfolio` ");
       $count=1; 
       while($data2=mysqli_fetch_array($query2)){
  ?>
               

<tr>
  
<div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Edit Portfolio</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="updatep.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?=$data2['id']?>">
  <div class="form-row">
  <div class="form-group col-md-12">
      <img src="../assets/img/portfolio/<?=$data2['projetpic']?>" class="oo img-thumbnail">
  </div>
  <div class="form-group col-md-6">
  <label>Image </label>
  <div class="custom-file">
    <input type="file" name="projetpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projetpic">Choisissez...</label>
  </div></div>
  
   <div class="form-group col-md-6 mt-auto">
      <label for="name">Nom du projet</label>
      <input type="name" name="projetnom" value="<?=$data2['projetnom']?>" class="form-control" id="name" placeholder="nom">
    </div>
    <div class="form-group col-md-12">
      <label for="email">Lien du projet</label>
      <input type="text" name="projetlien" value="<?=$data2['projetlien']?>" class="form-control" id="email" placeholder="https://mell-khadija.github.io/C2C3/">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="pupdate" value="Update">
          </form>
      </div>
    </div>
  </div>
  </div>


         <td>#<?=$count?></td>
         <td width="28%"><img src="../assets/img/portfolio/<?=$data2['projetpic']?>" class="oo img-thumbnail"></td>
         <td><?=$data2['projetnom']?></td>
         <td>
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id']?>">Edit</button>
          <a href="updatep.php?del=<?=$data2['id']?>"> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Delete</button></a></td>
            </tr>            
                    
            <?php
            $count++;
           }
        ?>
             </tbody></table>  
</main>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/main.js"></script></body>
</html>
