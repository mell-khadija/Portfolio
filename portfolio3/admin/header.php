
<nav class="navbar navbar-info sticky-top bg-info flex-md-nowrap p-0 shadow">
  <a class="navbar-brand text-white  col-md-3 col-lg-2 mr-0 px-3" href="#">Admin</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
  <form action="../index.php" method="POST"> 
              <button type="submit" name="logout_btn" class="btn btn-info">Se déconnecter</button>
      </form>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Setup/Edit</span>
          
        </h6>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">
              <span data-feather="home"></span>
            Home
            </a>
          </li>
        
         
          <li class="nav-item">
            <a class="nav-link" href="edit-portfolio.php">
              <span data-feather="archive"></span>
              Edit Portfolio
            </a>
          </li>
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Account Settings</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="edit-profil.php">
              <span data-feather="user"></span>
              Edit Profile
            </a>
          </li>
        </ul>
      </div>
    </nav>