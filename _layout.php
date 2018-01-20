<?php

    //HTML HEADER CONTENT
    function HTML_HEADER($title){
        $str = "";
        $str.="<!Doctype html>\n\n";
        $str.="<Html>\n";
        $str.="\t<meta charset='Utf-8'>\n";
        $str.="\t<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
        $str.="\t<title>$title</title>\n";
        //SCRIPT
        $str.="\t<!--Scripts-->\n";
        $str.="\t<script src='https://code.jquery.com/jquery-3.1.1.slim.min.js' integrity='sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n' crossorigin='anonymous'></script>\n";
        $str.="\t<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js' integrity='sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb' crossorigin='anonymous'></script>\n";
        $str.="\t<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js' integrity='sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn' crossorigin='anonymous'></script>\n";
        
        $str.="\t<script src='Scripts/angular.min.js'></script>\n";

        $str.="\t<script src='myScripts/Module.js'></script>\n";
        $str.="\t<script src='myScripts/Service.js'></script>\n";
        $str.="\t<script src='myScripts/Controller.js'></script>\n";
        
        //CSS
        $str.="\t<!--StyleSheets-->\n";
        $str.="\t<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' integrity='sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ' crossorigin='anonymous'>\n"; //Bootstrap


        $str.="\t<Body>\n";

        return $str;
    }

    function HTML_FOOTER(){
        $str = "";
        $str.="\t</Body>\n";
        $str.="</Html>\n";

        return $str;
    }

?>