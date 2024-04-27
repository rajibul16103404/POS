<?php
require_once("../../conn.php");

if(isset($_POST['phone_number'])) {
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phone_number']);
    
    // Check if the phone number exists in the database
    $sql = "SELECT * FROM customer WHERE phone = '$phoneNumber'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<h5 class='h5 text-white' style='margin-top: 10px;'>Member</h5>";
    } 
    else 
    {
        echo "<button class='btn btn-primary w-100' type='submit' name='submit' data-toggle='modal' data-target='#exampleModal'>add member</button>";
    }
}
