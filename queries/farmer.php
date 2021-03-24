<?php
    include 'connect.php';
    if(isset($_SESSION['userID'])){
        if(isset($_POST['addFarmer'])){
            $farmerName= $_POST['farmerName'];
            $farmerMobile= $_POST['farmerMobile'];
            $empID= $_POST['empID'];
            $farmerAddress= $_POST['farmerAddress'];
            $farmerTankArea= $_POST['farmerTankArea'];
            $farmerCity= $_POST['farmerCity'];
            $farmerVolume= $_POST['farmerVolume'];
            $farmerOldDue= $_POST['farmerOldDue'];

            $addFarmer = "INSERT INTO `farmers`(`empID`, `farmerName`, `farmerMobile`, `farmerAddress`, `farmerTankArea`, `farmerCity`, `farmerVolume`, `farmerOldDue`) VALUES ('$empID','$farmerName','$farmerMobile','$farmerAddress','$farmerTankArea','$farmerCity','$farmerVolume','$farmerOldDue')";
            // echo $addFarmer;
            $result = mysqli_query($conn, $addFarmer);
            if($result){
                echo "Farmer Added Successfully";
            } else{
                echo "Failed to Add Farmer";
            }
        }

        if(isset($_POST['updFarmer'])){
            $farmerName= $_POST['farmerName'];
            $farmerMobile= $_POST['farmerMobile'];
            $empID= $_POST['empID'];
            $farmerAddress= $_POST['farmerAddress'];
            $farmerTankArea= $_POST['farmerTankArea'];
            $farmerCity= $_POST['farmerCity'];
            $farmerVolume= $_POST['farmerVolume'];
            $farmerOldDue= $_POST['farmerOldDue'];
            $farmerID = $_POST['farmerID'];

            $updfarmer = "UPDATE farmers SET farmerName='$farmerName', farmerMobile='$farmerMobile', empID=$empID, farmerAddress='$farmerAddress', farmerTankArea='$farmerTankArea', farmerCity='$farmerCity', farmerVolume='$farmerVolume', farmerOldDue='$farmerOldDue' where farmerID =$farmerID";
            // echo $updfarmer;
            $result = mysqli_query($conn, $updfarmer);
            if($result){
                echo "Farmer Details Updated";
            } else{
                echo "Failed to Update";
            }
        }

        if(isset($_POST['delfarmer'])){
            $farmerID = $_POST['farmerID'];

            $delfarmer = "DELETE from farmers where farmerID = '$farmerID'";
            // echo $addfarmer;
            $result = mysqli_query($conn, $delfarmer);
            if($result){
                echo "Farmer Details Deleted";
            } else{
                echo "Failed To Delete Farmer";
            }
        }
    }
