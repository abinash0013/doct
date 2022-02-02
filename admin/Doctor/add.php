<?php include './../pages/header.php'; ?>
<?php include './../pages/sidebar.php'; ?>
<?php include './../pages/navbar.php'; ?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Doctor</a></li>
                        <li class="active">Add Doctors</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <strong class="card-title">Add Doctors</strong>
                    </div>
                    <div class="col-6 ">
                        <a href="./index.php"><button type="button" class="btn btn-primary float-right">Back</button></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">                    
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name" class=" form-control-label">Name of Doctor</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Enter Doctor Name" class="form-control">
                        <!-- <small class="help-block text-danger  form-text">Name of Doctor</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email" class=" form-control-label">Email Id</label></div>
                        <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="Enter Doctor Email" class="form-control">
                        <!-- <small class="help-block text-danger  form-text">Please enter your email</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="experience" class=" form-control-label">Experience</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="experience" name="experience" placeholder="Year of Experience" class="form-control"></div>
                    </div>
                    <!-- <div class="row form-group">
                        <div class="col col-md-3"><label for="specialist" class=" form-control-label">Specialist In</label></div>
                        <div class="col col-md-9">
                            <select name="specialist" id="specialist" multiple="" class="form-control">
                                <option value="child">Child</option>
                                <option value="eye">Eye</option>
                                <option value="skin">Skin</option>
                            </select>
                            <small class="help-block text-danger  form-text">Specialist In</small>
                        </div>
                    </div> -->                    
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Specialist</label></div>
                        <div class="col-12 col-md-9">
                            <select name="specialist" id="specialist" class="form-control">
                                <option value="" selected selected hidden>Select Specialist</option>
                                <option value="child">Child</option>
                                <option value="eye">Eye</option>
                                <option value="skin">Skin</option>
                            </select>
                            <!-- <small class="help-block text-danger  form-text">Specialist In</small> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="charges" class=" form-control-label">Charges</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="charges" name="charges" placeholder="Charges in Hours" class="form-control">
                        <!-- <small class="help-block text-danger form-text">Charges of Doctor as per Hours</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address</label></div>
                        <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="6" placeholder="Enter Address.." class="form-control"></textarea>
                        <!-- <small class="help-block text-danger form-text">Address of Doctor</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label"></label></div>
                            <div class="col-12 col-md-9">
                                <button type="button" class="btn btn-primary">Add Doctor</button>
                            </div>
                        </div>    
                    </div>                    
                </form>
            </div>
        </div>
    </div>
<?php include './../pages/footer.php'; ?>