<?php
    include 'connect.php';
    if(isset($_SESSION['userID'])){

        if(isset($_POST['getFarmers'])){
            $empID = $_POST['empID'];
            $farmers = array();
            $farmer = "SELECT * from farmers where empID=$empID";
            $farmer = mysqli_query($conn, $farmer);
            while($farmer_row = mysqli_fetch_assoc($farmer)){
                $farmers[] = array(
                    'farmerID'=> $farmer_row['farmerID'],
                    'farmerName' => $farmer_row['farmerName']
                );
            }
            echo json_encode($farmers);
        }

        if(isset($_POST['getProductPrice'])){
            $productID = $_POST['productID'];
            $product = "SELECT * from products where productID=$productID";
            $product = mysqli_query($conn, $product);
            $product = mysqli_fetch_assoc($product);
            echo $product['productPrice'];
        }

        if(isset($_POST['addSale'])){
            $empID= $_POST['empID'];
            $farmerID= $_POST['farmerID'];
            $productID= $_POST['productID'];
            $quantity= $_POST['quantity'];
            $totalAmt= $_POST['totalAmt'];
            $discount= $_POST['discount'];
            $finalPrice= $_POST['finalPrice'];
            $saleDate = $_POST['saleDate'];

            $addSale = "INSERT INTO `sales`(`empID`, `farmerID`, `productID`, `quantity`, `totalAmt`, `discount`, `finalPrice`, `saleDate`) VALUES ('$empID','$farmerID','$productID','$quantity','$totalAmt','$discount','$finalPrice', '$saleDate')";

            // echo $addSale;
            $result = mysqli_query($conn, $addSale);
            if($result){
                echo "Sale Added Successfully";
            } else{
                echo "Failed to Add Sale";
            }
        }

        // if(isset($_POST['updFarmer'])){
        //     $farmerName= $_POST['farmerName'];
        //     $farmerMobile= $_POST['farmerMobile'];
        //     $empID= $_POST['empID'];
        //     $farmerAddress= $_POST['farmerAddress'];
        //     $farmerTankArea= $_POST['farmerTankArea'];
        //     $farmerCity= $_POST['farmerCity'];
        //     $farmerVolume= $_POST['farmerVolume'];
        //     $farmerOldDue= $_POST['farmerOldDue'];
        //     $farmerID = $_POST['farmerID'];

        //     $updfarmer = "UPDATE farmers SET farmerName='$farmerName', farmerMobile='$farmerMobile', empID=$empID, farmerAddress='$farmerAddress', farmerTankArea='$farmerTankArea', farmerCity='$farmerCity', farmerVolume='$farmerVolume', farmerOldDue='$farmerOldDue' where farmerID =$farmerID";
        //     // echo $updfarmer;
        //     $result = mysqli_query($conn, $updfarmer);
        //     if($result){
        //         echo "Farmer Details Updated";
        //     } else{
        //         echo "Failed to Update";
        //     }
        // }

        if(isset($_POST['delSale'])){
            $saleID = $_POST['saleID'];

            $delSale = "DELETE from sales where saleID = '$saleID'";
            // echo $addfarmer;
            $result = mysqli_query($conn, $delSale);
            if($result){
                echo "Sale Details Deleted";
            } else{
                echo "Failed To Delete Sale";
            }
        }
    }
