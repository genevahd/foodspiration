<!--  NAV BAR /////////////////////////////////////////// -->
    <div class="container" style="margin-bottom:100px;">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button></div>
          <a class="navbar-brand animated pulse infinite navbar-left" href="#"><b>Foodspiration</a>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
<?php
  if ($this->session->userdata("id")){
?>
            <li><a href="/recipes">HOME</a></li>
<?php }?>
            <li><a href="/users/logout">LOGOUT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
    </nav>
</div>