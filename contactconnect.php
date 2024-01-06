<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'wellnessguard_hospital') or die("Connection Failed:" . mysqli_connect_error());
        if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            
            $sql = "INSERT INTO `contact_us` (`Name`, `Mobile_No`, `Email`, `Message`) VALUES ('$name','$phone','$email','$message')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header("Location: Thank.html");
            } else {
                echo 'Error Occurred: ' . mysqli_error($conn);
            }
        }
    }
?>