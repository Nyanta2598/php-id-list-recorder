<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <span class="navbar-brand">St. Vincent College of Cabuyao</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li  class="nav-item  <?php if($page=="home"){?>active<?php }?>">
        <a class="nav-link" href="home.php"><b>Home</b></a>
      </li>
      <li class="nav-item <?php if($page1=="list"){?>active<?php }?>">
        <a class="nav-link" href="list_student.php"><b>Student List</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Print</a>
      </li>
    </ul>
    <span class="navbar-text">
      Logout
    </span>
  </div>
</nav>