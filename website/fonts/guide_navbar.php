<?php
include_once("dbConnect.php");

if (session_status() == PHP_SESSION_NONE)
{
	session_start();
}
$loginOuput = '';
if(isset($_SESSION['tgid']))
{
	$tgid = $_SESSION['tgid'];
	$tgemail = $_SESSION['tgemail'];
	$tgfname = $_SESSION['tgfname'];
	$navLink = "tour-guide-home.php";
	$loginOuput = '<li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown"> Hello  '.$tgfname.'! <b class = "caret"></b></a>
          <ul class = "dropdown-menu">
            <li><a href = "'.$navLink.'">My Account</a></li>
            <li><a href = "sign_out.php">Sign Out</a></li>
          </ul></li>';
}
?>

<div class = "navbar navbar-inverse navbar-static-top" style="background-color: #8CC739;border-bottom-width: 0px; margin-bottom: 0px; color:#21BEDE">
  <div class = "container"> <a href ="tour-guide-home.php" class = "navbar-brand">NoMiddleMan Tour Guide</a><img style="width: 5%;height: 5%;padding-top: 8px;padding-bottom: 0px;" class = "navbar-brand" src=images/FaceOnly.png>
    <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse"> <span class = "icon-bar"></span> <span class = "icon-bar"></span> <span class = "icon-bar"></span> </button>
    <div class = "collapse navbar-collapse navHeaderCollapse">
      <ul class = "nav navbar-nav navbar-right">
        <?php echo $loginOuput?>
      </ul>
    </div>
  </div>
</div>