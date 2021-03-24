<?php
    include 'connect.php';
    if(isset($_SESSION['userID'])){

        

        if(isset($_POST['addPayment'])){
            $empID= $_POST['empID'];
            $farmerID= $_POST['farmerID'];
            $paymentAmt= $_POST['paymentAmt'];
            $paymentDetails= $_POST['paymentDetails'];
            $paymentDate= $_POST['paymentDate'];
                
            $addPayment = "INSERT INTO `payments`(`empID`, `farmerID`, `paymentAmt`, `paymentDetails`, `paymentDate`) VALUES ('$empID','$farmerID','$paymentAmt','$paymentDetails','$paymentDate')";

            // echo $addPayment;
            $result = mysqli_query($conn, $addPayment);
            if($result){
                echo "Payment Added Successfully";
            } else{
                echo "Failed to Add Payment";
            }
        }

        

        if(isset($_POST['delPayment'])){
            $paymentID = $_POST['paymentID'];

            $delpayment = "DELETE from payments where paymentID = '$paymentID'";
            // echo $addfarmer;
            $result = mysqli_query($conn, $delpayment);
            if($result){
                echo "Payment Details Deleted";
            } else{
                echo "Failed To Delete Payment";
            }
        }
    }
