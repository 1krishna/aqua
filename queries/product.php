<?php
    include 'connect.php';
    if(isset($_SESSION['userID'])){
        if(isset($_POST['addProduct'])){
            $productName= $_POST['productName'];
            $productPrice= $_POST['productPrice'];
            $productUnit= $_POST['productUnit'];
            $productForm= $_POST['productForm'];
            $addProduct = "INSERT INTO `products`(`productName`, `productPrice`, `productUnit`, `productForm`) VALUES ('$productName','$productPrice','$productUnit','$productForm')";
            // echo $addProduct;
            $result = mysqli_query($conn, $addProduct);
            if($result){
                echo "Product Added Successfully";
            } else{
                echo "Failed to Add Product";
            }
        }

        if(isset($_POST['updProduct'])){
            $productName= $_POST['productName'];
            $productPrice= $_POST['productPrice'];
            $productUnit= $_POST['productUnit'];
            $productForm= $_POST['productForm'];
            $productID = $_POST['productID'];

            $updProduct = "UPDATE products SET productName= '$productName', productPrice= '$productPrice', productUnit= '$productUnit', productForm= '$productForm' where productID = '$productID'";
            // echo $updProduct;
            $result = mysqli_query($conn, $updProduct);
            if($result){
                echo "Product Details Updated";
            } else{
                echo "Failed to Update";
            }
        }

        if(isset($_POST['delProduct'])){
            $productID = $_POST['productID'];

            $delproduct = "DELETE from products where productID = '$productID'";
            // echo $addproduct;
            $result = mysqli_query($conn, $delproduct);
            if($result){
                echo "Product Details Deleted";
            } else{
                echo "Failed To Delete Product";
            }
        }
    }
