  <!-- index.php -->


<?php


// Assemnble the page URL from the value passed in the GET
if (!isset($_GET['page'])) { // it's the home page
      $page= 'index';
  }

  else {

      $page= $_GET['page'];

};

/*
<nav data-role="controlgroup panel" data-type="vertical">
  <a href="index.php" class="ui-btn">Welcome</a>
  <a href="index.php?pageurl=personal" class="ui-btn mmenu-itm">Personal information</a>
  <a href="index.php?pageurl=expertise" class="ui-btn mmenu-itm">Expertise</a>
  <a href="index.php?pageurl=education" class="ui-btn mmenu-itm">Qualifications</a>
  <a href="index.php?pageurl=experience" class="ui-btn mmenu-itm">Experience</a>
  <a href="index.php?pageurl=contact" class="ui-btn mmenu-itm">Contact me</a>
</nav>

*/

// Set the salutation value (used for H3)
switch ($page) {
  case 'index':
                  $pageURL=$page.'.html.php';
                  $salutation='Welcome';
                  break;

  case 'personal':
                  $pageURL=$page.'.html.php';
                  $salutation='Personal Information';
                  break;
  case 'expertise':
                  $pageURL=$page.'.html.php';
                  $salutation='Expertise';
                  break;
  case 'qualifications':
                  $pageURL=$page.'.html.php';
                  $salutation='Qualifications';
                  break;
  case 'experience':
                  $pageURL=$page.'.html.php';
                  $salutation='Experience';
                  break;

  case 'contact':
                $pageURL=$page.'.html.php';
                  $salutation='Contact Me';
                  break;
  case 'about':
                  $pageURL=$page.'.html.php';
                  $salutation='About this website';
                  break;
  default:
                $pageURL="404.html.php";


}

include('template/content.php');

// TODO: Validate W3C
// TODO: Accessibility
// TODO: About page - detailing code, standards, techniques etc.
// TODO: PRINT version!
// TODO: FTP working

 ?>
