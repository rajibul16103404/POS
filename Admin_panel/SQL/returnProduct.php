<?php
require_once("../../conn.php");

    
    if(isset($_POST['submit'])){

        if (isset($_POST['submit'])) {
            // Iterate through submitted input fields
            foreach ($_POST as $key => $value) {
                // Check if input field name starts with "input_"
                if (strpos($key, 'input_') === 0) {
                    // Sanitize the input value (you should use appropriate sanitization method depending on your use case)
                    $input_value = htmlspecialchars($value);
        
                    // Insert the input value into the database
                    $sql = "INSERT INTO your_table_name (input_value) VALUES ('$input_value')"; // Replace 'your_table_name' with your actual table name
                    if ($conn->query($sql) !== TRUE) {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
            }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Update Quantity</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });

    function addInputField() {
        var counter=0;
    counter++; // Increment the counter
    // Create a new input element
    var input = document.createElement("input");
    input.type = "text";
    input.name = "input_" + counter; // Generate a unique name for the input field
    input.placeholder = "Barcode";
    input.className="form-control a";

    // Create a new button element to remove the input field
    var removeButton = document.createElement("button");
    removeButton.type = "button";
    removeButton.className="btn btn-danger rem";
    removeButton.textContent = "-";
    removeButton.onclick = function() {
        // Remove the input field and the remove button when clicked
        input.remove();
        removeButton.remove();
    };

    // Get the container element where the new input will be appended
    var container = document.getElementById("input_container");

    // Append the new input and the remove button to the container
    container.appendChild(input);
    container.appendChild(removeButton);
    // container.appendChild(document.createElement("br")); // Add line break for spacing
}
</script>

<style>
    label{
        width: 85% !important;
        text-align: left !important;
        font-weight: 700 !important;
        font-size: 16px !important;
        margin-left: 5% !important;
    }
    input{
        text-align: center !important;
        width: 80% !important;
        font-weight: 700 !important;
    }
    .input-group{
        width: 80% !important;   
        margin: auto;
    }
    .a{
        flex-wrap: nowrap !important;
    }
    .a input{
        width: 70% !important;
    }
    form{
        text-align: center !important;
    }
    .rem{
        margin: 10px 0px !important;
        margin: auto !important;
    }
    #input_container{
        align-items: center !important;
    }
    #input_container button{
        width: 47px; 
        height: 47px; 
        font-size:20px; 
        font-weight: 800;
        margin-top: 2px !important;
    }
</style>

</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Return Product</h5>
                <a href="../pos.php"><button type="button" class="close">&times;</button></a>
            </div>
            <div class="modal-body">
                <form action="#" method="post" class="text-center">
                    <label for="ret_id">Enter Return ID</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">RET_ID</span>
                        </div>
                        <input type="text" class="form-control" id="ret_id" value="<?php echo "RET".rand(10000000,99999999); ?>" readonly>
                    </div>
                    <label for="order_id">Customer Phone</label>
                    <div class="input-group a mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">PHONE</span>
                        </div>
                        <input type="text" class="form-control" id="order_id" required>
                    </div>
                    <label for="order_id">Order ID</label>
                    <div class="input-group a mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">ORDER_ID</span>
                        </div>
                        <input type="text" class="form-control" id="order_id" required>
                    </div>
                    <label for="barcode">Product Barcode</label>
                    <div class="input-group mb-3" id="input_container">
                        <input type="text" class="form-control" id="barcode" placeholder="Barcode" required>
                        <button type="button" class="btn btn-info" onclick="addInputField();">+</button>
                    </div>
                    
                    <input type="submit" class="btn btn-primary w-40" name="submit" value="Return" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>



