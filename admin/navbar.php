<nav class="navbar navbar-expand navbar-dark static-top body_background" style="background:rgba(0,0,0,0.5);">

      <a class="navbar-brand mr-1" href="dashboard">Punarnava</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <ul class="navbar-nav ml-auto mr-0 mr-md-5 my-4 my-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <h5 style="color:white;">
              <?php echo ucfirst( $_SESSION["auth"]["name"]); ?>
              <i class="fas fa-user-circle fa-fw" style="font-size: 30px"></i>
             </h5><!-- user -->
          </a>
          <div class="dropdown-menu" aria-labelledby="userDropdown" style="margin-left: 60px;">
            <a class="dropdown-item">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="changePassword">Change password</a>
            <a class="dropdown-item" href="logout">Logout</a>
          </div>
        </li>
      </ul>
    
    </nav>