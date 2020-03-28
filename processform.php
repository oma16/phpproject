<?php
    if (isset($_POST['submit'])){
        
         
    if(isset($_POST['firstname'])){
        $errorMessage = "";
    }
    if(isset($_POST['lastname'])){
        $errorMessage = "";
    }
    if(isset($_POST['email'])){
        $errorMessage = "";
    }
    if(isset($_POST['gender'])){
        $errorMessage = "";
    }
    if(isset($_POST['department'])){
        $errorMessage = "";
    }
    if(isset($_POST['message'])){
        $errorMessage = "";
    }
    if(isset($_POST['terms'])){
        $errorMessage = "";
    }
    $varfirstname = $_POST['firstname'];
    $varlastname = $_POST['lastname'];
    $varemail = $_POST['email'];
    $vargender = $_POST['gender'];
    $vardepartment = $_POST['department'];
    $varmessage = $_POST['message'];
    $varterms = $_POST['terms'];
    if(!empty($errorMessage)){
        echo("<p>There was an error with your form:</p>\n");
        echo("<ul>" . $errorMessage ."</ul>\n");
        
    }
    else{
           
        $file = fopen("processform.csv", "a");
        fwrite($file,  $varfirstname.  "," . $varlastname.  "," . $varemail.  "," . $vargender.  "," . $vardepartment.  "," . $varmessage.  "," . $varterms. "\n");
        
        fclose($file);
    echo "Thank you for contacting us";
        exit;
    }
}
?>
    
