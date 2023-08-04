<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $species = $_POST['species'];
    $description = $_POST['description'];

    if(isset($date, $time, $location, $species, $description))
    {
        header("Location: redirect-after-submit.blade.php");
        exit;
    }
}
