<?php include './../pages/header.php'; ?>
<?php include './../pages/sidebar.php'; ?>
<?php include './../pages/navbar.php'; ?>

    <!-- :::::::::::::::::::::::::::::::::::> Fetch Data Start <::::::::::::::::::::::::::::::::::: -->
    <?php 
        $resultdata = $con->query("SELECT * from `doctor` order by id desc");
        $result = array();
        while($row = mysqli_fetch_array($resultdata)) {
            $result[] = $row;
        }
    ?>
    <!-- ::::::::::::::::::::::::::::::::::::> Fetch Data End <:::::::::::::::::::::::::::::::::::: -->

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
                        <li class="active">List of Doctors</li>
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
                        <strong class="card-title">List of Doctor</strong>
                    </div>
                    <div class="col-6 ">
                        <a href="./add.php"><button type="button" class="btn btn-primary float-right">Add Doctor</button></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name of Doctor</th>
                            <th scope="col">Experience</th>
                            <th scope="col">Specialist</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0; ?>
                        <?php foreach($result as $value){?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?php echo $value['name']; ?></td>
                                <td><?php echo $value['experience']; ?></td>
                                <td><?php echo $value['specialist']; ?></td>                            
                                <td><?php echo $value['address']; ?></td>
                                <td>
                                    <a href="./edit.php"><i class="fa fa-pencil"> Edit</i> </a>
                                    <!-- <i class="fa fa-trash"></i> 
                                    <i class="fa fa-eye"></i> -->
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<?php include './../pages/footer.php'; ?>