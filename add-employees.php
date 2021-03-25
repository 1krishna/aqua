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
                    <h2>Employes</h2>
                </header>
                <!-- start: page -->
                <div class="row">
                    <div class="col">
                        <section class="card">
                            <header class="card-header">
                                <h2 class="card-title"><?php if (isset($_POST['pub_id'])) {
                                                            echo "Update";
                                                        } else {
                                                            echo "Add";
                                                        } ?> Employee</h2>
                            </header>

                            <?php
                            if (isset($_POST['empID'])) {
                                $empID = $_POST['empID'];
                                $empDetails = "SELECT * from employees where empID=$empID";
                                $empRow = mysqli_query($conn, $empDetails);
                                $empRow = mysqli_fetch_assoc($empRow);
                            }
                            ?>

                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="control-label text-lg-right pt-2" for="inputDefault">Employee ID</label>
                                        <input type="text" class="form-control" value="<?php if (isset($_POST['empID'])) {
                                                                                            echo $empRow['empID'];
                                                                                        } ?>" id="empID" required>
                                        <div id="title_err" style="color:red"></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="control-label text-lg-right pt-2" for="inputDefault">Employee Name</label>
                                        <input type="text" class="form-control" value="<?php if (isset($_POST['empID'])) {
                                                                                            echo $empRow['empName'];
                                                                                        } ?>" id="empName" required>
                                        <div id="title_err" style="color:red"></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="control-label text-lg-right pt-2" for="inputDefault">Mobile Number</label>
                                        <input type="text" class="form-control" value="<?php if (isset($_POST['empID'])) {
                                                                                            echo $empRow['empMobile'];
                                                                                        } ?>" id="empMobile">
                                        <div id="author_err" style="color:red"></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="control-label text-lg-right pt-2" for="inputDefault">DOB</label>
                                        <input type="date" class="form-control" value="<?php if (isset($_POST['empID'])) {
                                                                                            echo $empRow['empDOB'];
                                                                                        } ?>" id="empDOB">
                                        <div id="author_err" style="color:red"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <div class='row'>
                                            <div class="col-lg-4">
                                                <label class="control-label text-lg-right pt-2">Aadhar</label>
                                                <input type="mail" class="form-control" value="<?php if (isset($_POST['empID'])) {
                                                                                                    echo $empRow['empAadhar'];
                                                                                                } ?>" id="empAadhar">
                                                <div id="year_err" style="color:red"></div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label text-lg-right pt-2">Pan Number</label>
                                                <input type="text" class="form-control" value="<?php if (isset($_POST['empID'])) {
                                                                                                    echo $empRow['empPan'];
                                                                                                } ?>" id="empPan">
                                                <!-- <div id="type_name_err" style="color:red"></div> -->
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label text-lg-right pt-2">Education</label>
                                                <input type="text" class="form-control" value="<?php if (isset($_POST['empID'])) {
                                                                                                    echo $empRow['empEducation'];
                                                                                                } ?>" id="empEducation">
                                                <!-- <div id="type_name_err" style="color:red"></div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <div class='row'>
                                            <div class="col-lg-6">
                                                <label class="control-label text-lg-right pt-2">Parmenent Address</label>
                                                <input type="text" class="form-control" value="<?php if (isset($_POST['empID'])) {
                                                                                                    echo $empRow['empPAddress'];
                                                                                                } ?>" id="empPAddress">
                                                <div id="type_name_err" style="color:red"></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label text-lg-right pt-2">Current Address</label>
                                                <input type="text" class="form-control" value="<?php if (isset($_POST['empID'])) {
                                                                                                    echo $empRow['empCAddress'];
                                                                                                } ?>" id="empCAddress">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <div class='row'>
                                            <div class="col-lg-6">
                                                <label class="control-label text-lg-right pt-2">Work Zone</label>
                                                <input type="text" class="form-control" value="<?php if (isset($_POST['empID'])) {
                                                                                                    echo $empRow['empWorkZone'];
                                                                                                } ?>" id="empWorkZone">
                                                <div id="type_name_err" style="color:red"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-4">
                                        <?php
                                        if (isset($_POST['empID'])) {
                                            echo "<button class='btn btn-primary' id='update' style='width:100%;' onclick='updEmp({$empRow['empID']});'>Update Employee</button>";
                                        } else {
                                            echo "<button class='btn btn-primary' id='add' style='width:100%;' onclick='addEmp();'>Add Employee</button>";
                                        }
                                        ?>
                                    </div>
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
    <script src="vendor/flot.tooltip/flot.tooltip.js"></script>
    <script src="vendor/flot/jquery.flot.pie.js"></script>
    <script src="vendor/flot/jquery.flot.categories.js"></script>
    <script src="vendor/flot/jquery.flot.resize.js"></script>
    <script src="vendor/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="vendor/raphael/raphael.js"></script>
    <script src="vendor/morris/morris.js"></script>
    <script src="vendor/gauge/gauge.js"></script>
    <script src="vendor/snap.svg/snap.svg.js"></script>
    <script src="vendor/liquid-meter/liquid.meter.js"></script>
    <script src="vendor/jqvmap/jquery.vmap.js"></script>
    <script src="vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

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
        function addEmp() {
            var empID = $('#empID').val();
            var empName = $('#empName').val();
            var empMobile = $('#empMobile').val();
            var empDOB = $('#empDOB').val();
            var empAadhar = $('#empAadhar').val();
            var empPan = $('#empPan').val();
            var empEducation = $('#empEducation').val();
            var empPAddress = $('#empPAddress').val();
            var empCAddress = $('#empCAddress').val();
            var empWorkZone = $('#empWorkZone').val();

            var params = {
                empID: empID,
                empName: empName,
                empMobile: empMobile,
                empDOB: empDOB,
                empAadhar: empAadhar,
                empPan: empPan,
                empEducation: empEducation,
                empPAddress: empPAddress,
                empCAddress: empCAddress,
                empWorkZone: empWorkZone,
                addEmp: ''
            };

            getrequest('queries/employee.php', params, 'view-employees.php');

        }


        function updEmp(id) {
            var empID = id;
            var empName = $('#empName').val();
            var empMobile = $('#empMobile').val();
            var empDOB = $('#empDOB').val();
            var empAadhar = $('#empAadhar').val();
            var empPan = $('#empPan').val();
            var empEducation = $('#empEducation').val();
            var empPAddress = $('#empPAddress').val();
            var empCAddress = $('#empCAddress').val();
            var empWorkZone = $('#empWorkZone').val();

            var params = {
                empName: empName,
                empMobile: empMobile,
                empDOB: empDOB,
                empAadhar: empAadhar,
                empPan: empPan,
                empEducation: empEducation,
                empPAddress: empPAddress,
                empCAddress: empCAddress,
                empWorkZone: empWorkZone,
                updEmp: empID
            };

            getrequest('queries/employee.php', params, 'view-employees.php');

        }
    </script>

</body>

</html>