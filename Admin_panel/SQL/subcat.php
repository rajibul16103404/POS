<?php
include ("../../conn.php");
if (!empty($_POST["id"])) {
    $id = $_POST['id'];
    $query = "select * from subcategory where category=$id and status='enable'";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
        echo "<option style= value='color:white !important;'>Select One</option>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['id'] . '">' . $row['sub_category'] . '</option>';
        }
    }
}
