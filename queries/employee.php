<?php
    include 'connect.php';
    if(isset($_SESSION['userID'])){
        if(isset($_POST['addEmp'])){
            $empID= $_POST['empID'];
            $empName= $_POST['empName'];
            $empMobile= $_POST['empMobile'];
            $empDOB= $_POST['empDOB'];
            $empAadhar= $_POST['empAadhar'];
            $empPan= $_POST['empPan'];
            $empEducation= $_POST['empEducation'];
            $empPAddress= $_POST['empPAddress'];
            $empCAddress= $_POST['empCAddress'];
            $empWorkZone= $_POST['empWorkZone'];

            $addEmp = "INSERT INTO `employees`(`empID`, `empName`, `empMobile`, `empDOB`, `empAadhar`, `empPan`, `empEducation`, `empPAddress`, `empCAddress`, `empWorkZone`) VALUES ('$empID','$empName','$empMobile','$empDOB','$empAadhar','$empPan','$empEducation','$empPAddress','$empCAddress','$empWorkZone')";
            $result = mysqli_query($conn, $addEmp);
            if($result){
                echo "Employee Added Successfully";
            } else{
                echo "Failed to Add Employee";
            }
        }

        if(isset($_POST['updEmp'])){
            $empName= $_POST['empName'];
            $empMobile= $_POST['empMobile'];
            $empDOB= $_POST['empDOB'];
            $empAadhar= $_POST['empAadhar'];
            $empPan= $_POST['empPan'];
            $empEducation= $_POST['empEducation'];
            $empPAddress= $_POST['empPAddress'];
            $empCAddress= $_POST['empCAddress'];
            $empWorkZone= $_POST['empWorkZone'];
            $empID = $_POST['updEmp'];

            $addEmp = "UPDATE employees SET empName= '$empName', empMobile= '$empMobile', empDOB= '$empDOB', empAadhar= '$empAadhar', empPan= '$empPan', empEducation= '$empEducation', empPAddress= '$empPAddress', empCAddress= '$empCAddress', empWorkZone= '$empWorkZone' where empID = '$empID'";
            // echo $addEmp;
            $result = mysqli_query($conn, $addEmp);
            if($result){
                echo "Employee Details Updated";
            } else{
                echo "Failed to Update";
            }
        }

        if(isset($_POST['delEmp'])){
            $empID = $_POST['empID'];

            $addEmp = "DELETE from employees where empID = '$empID'";
            $addEmp = "UPDATE employees set empStatus=0 where empID = '$empID'";
            // echo $addEmp;
            $result = mysqli_query($conn, $addEmp);
            if($result){
                echo "Employee Details Deleted";
            } else{
                echo "Failed To Delete Employees";
            }
        }
    }

?>