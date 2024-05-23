<?php 

include('config.php');

$name = $nameerror = '';
$phone = $phoneerror = '';
$email = $emailerror = '';
$sub = $msg = '';

if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $sub = trim($_POST['subject']);
    $msg = trim($_POST['msg']);

    // Name validation
    $namepattern = '/^[A-Za-z ]+$/';

    // Phone validation
    $phonepattern = '/^[0-9]{10}$/';

    // Email validation
    $emailpattern = '/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/';

    // Validation checks
    $is_valid = true;

    if(!preg_match($namepattern, $name) || strlen($name) == 0){
        $nameerror = "Enter a Correct Phone Number";
        $is_valid = false;
    }

    if(!preg_match($phonepattern, $phone) || strlen($phone) == 0){
        $phoneerror = "Enter a Correct Phone Number";
        $is_valid = false;
    }

    if(!preg_match($emailpattern, $email) || strlen($email) == 0){
        $emailerror = "Enter a Correct Email Number";
        $is_valid = false;
    }

    // Insert data into database only if all validations are passed
    if($is_valid){
        $sql = "INSERT INTO contact_form (name, phone, email, sub, msg) VALUES ('$name', '$phone', '$email', '$sub', '$msg')";

        if(mysqli_query($conn, $sql)){
            echo "<script>alert('Record Insert Successful');</script>";
            header('Location: index.php');
            exit(); // Ensure no further code is executed
        } else {
            echo "<script>alert('Record Insert Unsuccessful');</script>";
        }
    } else {
        // Include form with errors
        include('index.php');
    }
} else {
    include('index.php');
}
?>





