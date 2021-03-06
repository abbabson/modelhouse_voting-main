
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color lighten-1">
  <a class="navbar-brand" href="<?php echo $baseUrl.'cadmin/admin_dashboard.php'; ?>" id="logged-in-header-title">WorkForce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <!-- Home Sample
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <!-- end of Home Sample //-->

      <!-- Office menu //-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Office
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="<?php echo $baseUrl.'cadmin/cell/cells.php'; ?>" > <i class="fab fa-galactic-republic"></i> Cells</a>
          <a class="dropdown-item" href="#"> <i class="far fa-dot-circle"></i> Circles</a>
          <a class="dropdown-item" href="<?php echo $baseUrl.'cadmin/user/users.php'; ?>" > <i class="fas fa-users"></i> Users</a>
          <a class="dropdown-item" href="<?php echo $baseUrl.'cadmin/user/staff.php'; ?>" > <i class="fas fa-users"></i> Staff</a>
          <a class="dropdown-item" href="#"> <i class="fas fa-users-cog"></i> Admin</a>
          <a class="dropdown-item" href="#"> <i class="fas fa-list-ol"></i> Tasks</a>
          <a class="dropdown-item" href="#"> <i class="far fa-file-alt"></i> Memos</a>
          <a class="dropdown-item" href="#"> <i class="far fa-list-alt"></i> Notes</a>
        </div>
      </li>
      <!-- end office menu //-->

      <!-- Project menu //-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">  Projects
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="#"> <i class="fas fa-suitcase"></i> Portfolio</a>
          <a class="dropdown-item" href="#"> <i class="far fa-comments"></i> Discussions</a>
          <a class="dropdown-item" href="#"> <i class="far fa-comment-alt"></i> Meetings</a>


        </div>
      </li>
      <!-- end project menu //-->

      <!-- File menu //-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Files
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="#"> <i class="far fa-file-alt"></i> Documents</a>
          <a class="dropdown-item" href="#"> <i class="far fa-images"></i> Images</a>
          <a class="dropdown-item" href="#"> <i class="fas fa-headphones"></i> Audios</a>
          <a class="dropdown-item" href="#"> <i class="far fa-file-video"></i> Videos</a>
        </div>
      </li>
      <!-- end file menu //-->

      <!-- Message menu //-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Messages
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="#"> <i class="far fa-edit"></i> Compose </a>
          <a class="dropdown-item" href="#"> <i class="far fa-envelope"></i> Inbox (0)</a>
          <a class="dropdown-item" href="#"> <i class="far fa-envelope-open"></i> Outbox (0)</a>
          <a class="dropdown-item" href="#"> <i class="far fa-trash-alt"></i> Trash (0)</a>
        </div>
      </li>
      <!-- end message menu //-->

      <!-- File menu //-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Contacts
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="#"> <i class="fas fa-user-plus"></i> Add Contact</a>
          <a class="dropdown-item" href="#"> <i class="fas fa-people-carry"></i> Co-workers</a>
        </div>
      </li>
      <!-- end file menu //-->

      <!-- File menu //-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Assistants
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="#"> <i class="far fa-calendar"></i> Calendar</a>
          <a class="dropdown-item" href="#"> <i class="far fa-clock"></i> Scheduler</a>
          <a class="dropdown-item" href="#"> <i class="far fa-clock"></i> Reminder</a>
        </div>
      </li>
      <!-- end file menu //-->

      <!--
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      //-->

    </ul>
  </div>


  <ul class="navbar-nav ml-auto nav-flex-icons">
    <li class="nav-item">
      <a class="nav-link waves-effect waves-light">
        <i class="fas fa-envelope"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link waves-effect waves-light">
        <i class="fas fa-comments"></i>
      </a>
    </li>
    <li class="nav-item avatar dropdown notification-bar-item">
          <a class="nav-link dropdown-toggle dropdown-menu-right" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="<?php echo $baseUrl."images/avatars/avatar-2.jpg";  ?>" class="img-fluid rounded-circle z-depth-0"
              alt="My Avatar" >
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs-right dropdown-menu-sm-right dropdown-menu-lg-left dropdown-secondary"
            aria-labelledby="navbarDropdownMenuLink-55">
            <a class="dropdown-item" href="#"> <i class="far fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#"> <i class="fas fa-key"></i> Change Password</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php"> <i class="fas fa-sign-out-alt"></i> Logout</a>
          </div>
    </li>
  </ul>
</nav>
<!--/.Navbar -->
