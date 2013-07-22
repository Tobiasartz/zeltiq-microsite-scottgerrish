<?php

    $title          = "CoolSculpting - Error";
    $bodyClass      = "interior";
    $description    = "";

    include('template/header.php');

?>
            
        <div class="wrapper clearfix content">
            
            <h1>Error</h1>

            <?php 
                $errorcode = isset($_GET["errorcode"]) ? $_GET["errorcode"] : null;
                $errorcontrol = isset($_GET["errorControl"]) ? $_GET["errorControl"] : null;

                switch($errorcode) {

                    case "1" : $strError = "An error has occurred while attempting to save your subscriber information."; break;
                    case "2" : $strError = "The list provided does not exist."; break;
                    case "3" : $strError = "Information was not provided for a mandatory field. (".$errorcontrol.")"; break;
                    case "4" : $strError = "Invalid information was provided. (".$errorcontrol.")"; break;
                    case "5" : $strError = "Information provided is not unique. (".$errorcontrol.")"; break;
                    case "6" : $strError = "An error has occurred while attempting to save your subscriber information."; break;
                    case "7" : $strError = "An error has occurred while attempting to save your subscriber information."; break;
                    case "8" : $strError = "Subscriber already exists."; break;
                    case "9" : $strError = "An error has occurred while attempting to save your subscriber information."; break;
                    case "10" : $strError = "An error has occurred while attempting to save your subscriber information."; break;
                      //case "11" : This error does not exist.
                    case "12" : $strError = "The subscriber you are attempting to insert is on the master unsubscribe list or the global unsubscribe list."; break;
                    default : $strError = "Other"; break;
                      //case "13" : Check that the list ID and/or MID specified in your code is correct.
                }

            ?>
            
        </div><!-- .wrapper -->
    
<?php 
    include('template/footer.php');
?>