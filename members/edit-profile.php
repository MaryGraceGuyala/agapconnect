<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Hero-Clean-Reverse.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .lists-of-beneficiaries {
            margin: 20px;
        }
        .beneficiary-entry {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .beneficiary-entry input,
        .beneficiary-entry select {
            margin-right: 10px;
            flex: 1; 
        }
        .del {
            display: none; 
            cursor: pointer;
            color: red;
            margin-left: 10px;
        }
        .del.visible {
            display: inline;
        }
    </style>
</head>

<body class="text-muted small pt-2 ps-1">
    <header class="justify-content-between header fixed-top d-flex align-items-center" id="header" style="padding: 4px;background: url(&quot;assets/img/background.png&quot;) center / cover no-repeat, rgb(255,255,255);">
        <div class="d-flex align-items-center justify-content-between" style="gap: 15px"><i class="fas fa-bars toggle-sidebar-btn" style="color: rgb(0,0,0);"></i><a href="#"><img src="assets/img/AgapConnect%20(3).png" width="150px" height="40px"></a></div>
        <div class="search-bar" style="margin-right: 25px;margin-left: 100px;">
            <form class="search-form d-flex align-items-center"><input class="form-control" type="text" style="border-top-left-radius: 4px;border-top-right-radius: 0px;border-bottom-right-radius: 0px;" placeholder="Search here..."><button class="btn btn-primary" type="button" style="border-top-left-radius: 0px;border-bottom-left-radius: 0px;"><i class="fas fa-search" style="border-color: rgb(25,95,49);color: rgb(25,95,49);"></i></button></form>
        </div>
        <nav class="d-flex justify-content-between align-items-lg-center header-nav ms-auto" style="gap: 10px">
            <ul class="d-lg-flex align-items-lg-center d-flex align-items-center" style="gap:10px;">
                <li class="nav-item d-block d-lg-none"><a class="nav-link nav-icon search-bar-toggle" href="#"><i class="fas fa-search fs-3 text-dark nav-item d-block d-lg-none" style="margin-top: 15px;"></i></a></li>
                <li class="nav-item dropdown" style="margin-top: 15px;"><a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" style="margin-right: 10px;"><i class="fas fa-bell fs-3 text-dark"></i><span class="badge badge-number" style="background: rgb(118,217,94);color: rgb(0,0,0);">0</span></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">"You don't have new notifications."<a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a></li>
                        <li class="dropdown-divider"></li>
                        <li class="notification-item"></li>
                        <li class="notification-item"></li>
                    </ul>
                </li>
            </ul>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: rgb(35,123,21);margin-right: 10px;">
                    <img class="border rounded-circle" src="../assets/img/user%20(1).png" width="30px" height="30px" style="background: #ffffff;"></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="edit-profile.php"><i class="fas fa-user-edit fs-5 text-dark"></i>Edit Profile</a>
                    <a class="dropdown-item" href="account_setting.php"><i class="fas fa-user-cog fs-5 text-dark"></i>My Account</a>
                    <a class="dropdown-item" href="logout.php"><i class="fas fa-share-square fs-5 text-dark"></i>Logout</a>
                </div>
            </div>
        </nav>
    </header>
    <aside id="sidebar" class="sidebar" style="font-size: 16px;">
        <ul id="sidebar-nav" class="sidebar-nav">
            <li class="nav-item" style="color: rgb(13,13,13);">
                <a class="d-xl-flex nav-link" href="members_dashboard.php" style="font-size: 16px;"><i class="fas fa-tachometer-alt"></i>
                    <span style="padding-left: 5px;">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" style="color: rgb(13,13,13);">
                <a class="d-xl-flex nav-link" href="assistance_application.php" style="font-size: 16px;"><i class="fas fa-file-contract"></i>
                    <span style="padding-left: 5px;">Assistance Application</span>
                </a>
            </li>
            <li class="nav-item" style="color: rgb(13,13,13);">
                <a class="d-xl-flex nav-link" href="kaagapay.php" style="font-size: 16px;"><i class="fas fa-hands-helping"></i>
                    <span style="padding-left: 5px;">Kaagapay Program</span>
                </a>
            </li>
            <li class="nav-item" style="color: rgb(13,13,13);">
                <a class="d-xl-flex nav-link" href="request_status.php" style="font-size: 16px;"><i class="fas fa-spinner"></i>
                    <span style="padding-left: 5px;">Requests Status</span>
                </a>
            </li>
            <li class="nav-item" style="color: rgb(13,13,13);">
                <a class="d-xl-flex nav-link" href="request_history.php" style="font-size: 16px;"><i class="fas fa-history"></i>
                    <span style="padding-left: 5px;">Requests History</span>
                </a>
            </li>
        </ul>
    </aside>
    <main id="main" class="main">
        <div class="page-title">
            <h1 style="font-family: Acme, sans-serif;font-size: 26px;">Edit Profile</h1>
        </div>
        <section class="section dashboard">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="box-shadow: 0px 0px 5px rgb(80,152,62);">
                        <div class="card-body" style="color: rgb(0,0,0);gap: 10px;font-size: 16px;font-family: ABeeZee, sans-serif;">
                            <form class="edit-profile" style="padding: 3px;">
                                <div class="text-center">
                                    <img class="rounded-circle" src="assets/img/user%20(1).png" width="150px" height="150px" style="background: #ddf5e9;padding: 5px;">
                                    <div style="gap: 15px;">
                                        <button class="btn btn-primary" type="button" style="margin-right: 5px;background: rgb(199,224,201);">
                                            <a href="#"><i class="fas fa-file-upload fs-4 text-success"></i></a>
                                        </button>
                                            <button class="btn btn-primary" type="button" style="margin-right: 5px;background: rgb(199,224,201);">
                                                <a href="#"><i class="fas fa-trash-alt fs-4 text-success"></i></a>
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex row mb-3">
                                    <div class="col-md-12" style="padding: 4px; text-align: left;">
                                        <label class="form-label">Name</label>
                                        <input class="form-control" type="text" name="members_name" required>
                                    </div>
                                    <div class="col-md-12" style="padding: 4px; text-align: left;">
                                        <label class="form-label">Address</label>
                                        <input class="form-control" type="text" name="members_address" required>
                                    </div>
                                    <div class="col-md-4" style="padding: 4px; text-align: left;">
                                        <label class="form-label">Birthdate</label>
                                        <input class="form-control" type="date" name="members_birthdate" required>
                                    </div>
                                    <div class="col-md-4" style="padding: 4px; text-align: left;">
                                        <label class="form-label">Age</label>
                                        <input class="form-control" type="number" name="members_age" min="18" required>
                                    </div>
                                    <div class="col-md-4" style="padding: 4px; text-align: left;">
                                        <label class="form-label">Civil Status</label>
                                        <select class="form-control" type="select" name="members_civil_status" required>
                                            <option value="">Please select...</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widow">Widow</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4" style="padding: 4px; text-align: left;">
                                        <label class="form-label">Gender</label>
                                        <select class="form-control" type="select" name="members_gender" required>
                                            <option value="">Please select...</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4" style="padding: 4px; text-align: left;">
                                        <label class="form-label">Contact Number</label>
                                        <input class="form-control" type="tel" name="members_contact_number" maxLength="11" required>
                                    </div>
                                    <div class="col-md-4" style="padding: 4px; text-align: left;">
                                        <label class="form-label">Work</label>
                                        <input class="form-control" type="text" name="members_work" required>
                                    </div>
                                    <div class="col-md-12" style="padding: 4px; text-align: left;">
                                        <label class="form-label">Household Monthly Income</label>
                                        <select class="form-control" type="select" name="members_household_income" required>
                                            <option value="">Please select...</option>
                                            <option value="Less than Php 5,000.00">Less than Php 5,000.00</option>
                                            <option value="Php 5,000.00 to Php 10,000.00">Php 5,000.00 to Php 10,000.00</option>
                                            <option value="Php 10,000.00 to Php 20,000.00">Php 10,000.00 to Php 20,000.00</option>
                                            <option value="Php 20,000.00 to Php 50,000.00">Php 20,000.00 to Php 50,000.00</option>
                                            <option value="More than Php 50,000.00">More than Php 50,000.00</option>
                                        </select>
                                    </div>    
                                </div>                
                                    <div class="emergengency-contact">
                                        <div class="row" style="color: rgb(0,0,0);font-size: 16px;font-family: ABeeZee, sans-serif; text-align:left;">
                                            <h3>In case of emergency, please notify:</h3>
                                            <div class="col-md-12" style="padding: 4px; text-align: left;">
                                                <label class="form-label">Name</label>
                                                <input class="form-control" type="text" name="contact_name" required>
                                            </div>
                                            <div class="col-md-12" style="padding: 4px; text-align: left;">
                                                <label class="form-label">Address</label>
                                                <input class="form-control" type="text" name="contact_address" required>
                                            <div class="col-md-12" style="padding: 4px; text-align: left;">
                                                <label class="form-label">Age</label>
                                                <input class="form-control" type="number" name="contact_age" min="18" required>
                                            </div>
                                            <div class="col-md-12" style="padding: 4px; text-align: left;">
                                                <label class="form-label">Contact Number</label>
                                                <input class="form-control" type="tel" name="contact_phone" maxLength="11" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lists-of-beneficiaries">
                                        <div class="row"  style="color: rgb(0,0,0);font-size: 16px; display: flex;font-family: ABeeZee, sans-serif; text-align:left;">
                                            <h4>List of Beneficiaries:</h4>
                                            <div id="beneficiaryContainer">
                                                <div class="beneficiary-entry">
                                                    <div class="col-md-2" style="padding: 4px; text-align: left;">
                                                        <label class="form-label">Name</label>
                                                        <input class="form-control" type="text" name="members_beneficiary_name" required>
                                                    </div>
                                                    <div class="col-md-2" style="padding: 4px; text-align: left;">
                                                        <label class="form-label">Age</label>
                                                        <input class="form-control" type="number" name="members_beneficiary_age" required>
                                                    </div>
                                                    <div class="col-md-2" style="padding: 4px; text-align: left;">
                                                        <label class="form-label">Address</label>
                                                        <input class="form-control" type="text" name="members_beneficiary_address" required>
                                                    </div>
                                                    <div class="col-md-2" style="padding: 4px; text-align: left;">
                                                        <label class="form-label">Relationship</label>
                                                        <input class="form-control" type="text" name="members_beneficiary_relationship"  required>
                                                    </div>
                                                    <div class="col-md-3" style="padding: 4px; text-align: left;">
                                                        <label class="form-label" style="font-size:14px;">Household Monthly Income</label>
                                                        <select class="form-control" type="select" name="members_beneficiary_income" required>
                                                            <option value="">Please select...</option>
                                                            <option value="Less than Php 5,000">Less than Php 5,000</option>
                                                            <option value="Php 5,000.00 to Php 10,000.00">Php 5,000.00 to Php 10,000.00</option>
                                                            <option value="Php 10,000.00 to Php 20,000.00">Php 10,000.00 to Php 20,000.00</option>
                                                            <option value="Php 20,000.00 to Php 50,000.00">Php 20,000.00 to Php 50,000.00</option>
                                                            <option value="More than Php 50,000">More than Php 50,000</option>
                                                        </select>
                                                    </div>
                                                        <div class="del" onclick="removeEntry(this)"><i class="fas fa-trash-alt  fs-3 text-success"></i></div>
                                                    </div>
                                                </div>
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-primary" style="padding: 2px; padding-left: 5px; padding-right: 5px;  text-align: center; float: right;background: rgb(19,77,70); border-radius: 10px;" onclick="addBeneficiary()">Add Value</button>
                                            </div> 
                                        </div>
                                    </div> 
                                    <div class="col-md-12" style="text-align: center; padding: 4px; justify-content: between">
                                        <button class="btn btn-success" type="submit" value="save" name="save" style="height: 44px; width: 290px; font-family: Rubik, san-serif; font-size: 19px;">Save Changes</button>
                                        <button class="btn btn-danger" type="reset" value="reset" name="reset" style="height: 44px; width: 290px; font-family: Rubik, san-serif; font-size: 19px;">Discard Changes</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>