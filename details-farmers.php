<!doctype html>
<html class="fixed">

<head>
    <?php
    include_once 'includes/head.php';
    ?>
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
    <link rel="stylesheet" href="vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="vendor/morris/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.js"></script>

    <!-- DATA TABLES -->
    <link rel="stylesheet" href="vendor/select2/css/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />



</head>

<body>
    <section class="body">

        <!-- start: header -->
        <?php include_once 'includes/header.php'; ?>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <?php include 'includes/nav-bar.php'; ?>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Farmers Details</h2>
                </header>
                <!-- start: page -->
                <div class="row">
                    <div class="col">
                        <section class="card">
                            <div class="row">
                                <div class="col">
                                    <section class="card">
                                        <?php
                                        $farmer = "SELECT * from farmers f, employees e where f.farmerID={$_GET['farmerID']}";
                                        $farmer = mysqli_query($conn, $farmer);
                                        $farmerRow = mysqli_fetch_assoc($farmer);
                                        ?>
                                        <header class="card-header">
                                            <b>Farmer Name:</b> <?php echo $farmerRow['farmerName']; ?><br>
                                            <b>Farmer Mobile:</b> <?php echo $farmerRow['farmerMobile']; ?><br>
                                            <b>Employee Name:</b> <?php echo $farmerRow['empName']; ?>

                                        </header>

                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Sale/Payment</th>
                                                            <th>Payment Discription</th>
                                                            <th>Product</th>
                                                            <th>Quantity</th>
                                                            <th>Total Amount</th>
                                                            <th>Discount</th>
                                                            <th>Final Price/Amount Paid</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sale=0;
                                                        $payment=0;
                                                        $farmerSales = "SELECT * from sales s, products p where s.productID=p.productID and farmerID={$_GET['farmerID']}";
                                                        $farmerSales = mysqli_query($conn, $farmerSales);
                                                        while ($row = mysqli_fetch_assoc($farmerSales)) {
                                                            $sale = $sale+$row['finalPrice'];
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $row['saleDate']; ?></td>
                                                                <td>Sale</td>
                                                                <td>---</td>
                                                                <td><?php echo $row['productName']; ?></td>
                                                                <td><?php echo $row['quantity']; ?></td>
                                                                <td><?php echo $row['totalAmt']; ?></td>
                                                                <td><?php echo $row['discount']; ?></td>
                                                                <td><?php echo $row['finalPrice']; ?></td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>

                                                        <?php
                                                        $farmerPayment = "SELECT * from payments where farmerID={$_GET['farmerID']}";
                                                        $farmerPayment = mysqli_query($conn, $farmerPayment);
                                                        while ($row = mysqli_fetch_assoc($farmerPayment)) {
                                                            $payment = $payment+$row['paymentAmt']
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $row['paymentDate']; ?></td>
                                                                <td>Payment</td>
                                                                <td><?php echo $row['paymentDetails']; ?></td>
                                                                <td>---</td>
                                                                <td>---</td>
                                                                <td>---</td>
                                                                <td>---</td>
                                                                <td><?php echo $row['paymentAmt']; ?></td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>Total Due</td>
                                                            <td><?php echo ($sale+$farmerRow['farmerOldDue'])-$payment; ?></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- end: page -->
            </section>
        </div>
    </section>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
    <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="vendor/common/common.js"></script>
    <script src="vendor/nanoscroller/nanoscroller.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="vendor/jquery-placeholder/jquery-placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="vendor/jquery-ui/jquery-ui.js"></script>
    <script src="vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
    <script src="vendor/jquery-appear/jquery-appear.js"></script>
    <script src="vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="vendor/flot/jquery.flot.js"></script>
    <script src="vendor/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="vendor/raphael/raphael.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <!-- Examples -->
    <script src="js/examples/examples.dashboard.js"></script>

    <script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>
    <!-- Examples -->
    <script src="js/examples/examples.datatables.default.js"></script>
    <script src="js/examples/examples.datatables.row.with.details.js"></script>
    <script src="js/examples/examples.datatables.tabletools.js"></script>



    <script>
        function farmerDel(farmerID) {
            var params = {
                farmerID: farmerID,
                delfarmer: ''
            };
            if (confirm("Confirm To Delete")) {
                getrequest('queries/farmer.php', params, 'view-farmer.php');
            }
        }
    </script>

</body>

</html>