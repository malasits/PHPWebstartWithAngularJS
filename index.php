<?php
    require_once("_layout.php");
    require_once("model/PersonModel.php");
    echo HTML_HEADER("Layout");//Here you can chaenge the title of the page
?>

    <div ng-app="myApp">
        <div ng-controller="myCtrl">
            {{name}}
        </div>
    </div>

<?php
    echo HTML_FOOTER();
?>