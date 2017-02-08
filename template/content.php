<?php

include('template/head.html');
echo('<div id="div-container" class="content-page" data-role="page">');
include('template/header.html.php');
include('template/panel.html');
echo '<main class="ui-content">';
include $pageURL;
echo '</main>';
echo '<!--END main-->';
include('template/footer.html');
echo '</div>';
echo '<!-- END #div-container -->'
 ?>
