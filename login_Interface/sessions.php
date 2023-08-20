<?php
function ErrorMessage() {
if(isset($_SESSION["ErrorMessage"])) {

    $Output = "<div style=\"border: 1px solid red; padding: 10px 20px; border-radius: 5px; text-align: center; background-color: rgba(255, 0, 0, 0.2);\">";
    $Output .= htmlentities($_SESSION["ErrorMessage"]);
    $Output .="</div>";
    $_SESSION["ErrorMessage"] = null;
    return $Output;
}
}

function SuccessMessage() {
    if(isset($_SESSION["SuccessMessage"])) {
    
        $Output = "<div style=\"border: 1px solid green; padding: 10px 20px; border-radius: 5px; text-align: center; background-color: rgba(0, 255, 0, 0.2);\">";
        $Output .= htmlentities($_SESSION["SuccessMessage"]);
        $Output .="</div>";
        $_SESSION["SuccessMessage"] = null;
        return $Output;
    }
    }
?>
