<?php
session_start();
require_once("conn.php");
    if($conn)
    {

        if(isset($_POST["submit"]))
        {
            $username=$_POST["username"];
            $password=$_POST["pass"];

            if($username == "admin")
            {
                $sql= "SELECT * FROM login WHERE username='$username'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0)
                {
                    $row=mysqli_fetch_assoc($result);
                    $_SESSION['user_info']=$row;
                    
                    {
                        if($row["username"]== "$username" && $row["password"]== "$password")
                        {
                            header("Location:Admin_panel/dashboard.php");
                        }
                        else{
                            echo "<script>alert('Password Is Wrong');window.location.href='index.php';</script>";
                            
                        }
                    }
                }
            }

            elseif($username == "user")
            {
                $sql= "SELECT * FROM login WHERE username='$username'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0)
                {
                    $row=mysqli_fetch_assoc($result);
                    {
                        if($row["username"]== "$username" && $row["password"]== "$password")
                        {
                            header("Location:User_panel/dashboard.php");
                        }
                        else{
                            echo "<script>alert('Password Is Wrong!!');window.location.href='index.php';</script>";
                            
                        }
                    }
                }
            }

            else
            {
                echo "<script>alert('No Record Found in Our Database!!');window.location.href='index.php';</script>";
            }

            
        }
    }
    else{
        echo "Not Connected to Database";
    }
?>