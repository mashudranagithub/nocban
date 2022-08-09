<?php $this->load->view('components/page-head'); ?>


<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>Bangladesh Olympic Association Election 2021</h1>
    </div>
</section>
<!-- End Section Title --> 

<!-- Section Area - Content Central -->
<section class="content-info">

    <div class="crumbs">
        <div class="container">
            <ul>
                <li><a href="<?php echo site_url('welcome/index')?>">Home</a></li>
                <li>/</li>
                <li><a href="<?php echo site_url('welcome/page/boaelec2021')?>">BOA Election 2021</a> </li>  
                <li>/</li>
                <?php
                    session_start();
                    if(isset($_SESSION["user"]) && $_SESSION["user"]= "authenticated"){
                ?>
                    <form action="<?php echo site_url('welcome/page/election-up'); ?>" method="POST" enctype="multipart/form-data" style="display:inline-block; margin-left: 30px;">
                        <input type="hidden" class="form-control" name="passcode" value="logout" >
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                <?php } ?>
                <?php $this->load->view('components/back'); ?>
            </ul>
        </div>        
    </div>

    <div class="semiboxshadow text-center">
        <img src="<?php echo site_url('img/img-theme/shp.png');?>" class="img-responsive" alt="">
    </div>

    <!-- Content Central -->
    <div class="container padding-top">
        <div class="row">

            <!-- About Template-->
            <div class="col-md-12">
                <!-- Info -->
                <div class="panel-box">
                    <div class="titles">
                        <h4><i class="fa fa-rocket"></i>Bangladesh Olympic Association Election 2021</h4>
                    </div>
                    <?php
                        if(isset($_SESSION["user"]) && $_SESSION["user"]= "authenticated"){
                    ?>

                    <div class="row">
                        <div class="col-md-12">
                            <form action="<?php echo site_url('welcome/page/election-up');?>" method="POST" enctype="multipart/form-data">
                                <div class="row" style="margin-bottom:30px;">
                                    <div class="col-md-8">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" id="title">
                                    </div>
                                    <div class="col-md-4 d-flex ">
                                        <label for="status">Status</label> <br>
                                        <span class="form-check form-check-inline" style="margin-right: 10px;">
                                        <input name="status" class="form-check-input" type="radio" id="active" value="1" checked>
                                        <label class="form-check-label" for="active">Active</label>
                                        </span>
                                        <span class="form-check form-check-inline">
                                        <input name="status" class="form-check-input" type="radio" id="inactive" value="0">
                                        <label class="form-check-label" for="inactive">Inactive</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:30px;">
                                    <div class="col-md-6">
                                        <label for="file">Upload a file (only pdf)</label>
                                        <input name="file" type="file" class="form-control" id="file" accept=".pdf">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="year">Select Year</label>
                                        <select name="year" class="form-control">
                                            <option value="">Select Year</option>
                                            <option value="2021" selected>2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:30px;">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Info ABout -->
                    
                    
                    
                    
                    <?php } else{ ?>
                    
                    <!-- Info ABout -->
                    <div class="row">
                        <div class="col-md-12">
                            <form action="<?php echo site_url('welcome/page/election-up'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="row" style="margin-bottom:30px;">
                                    <div class="col-md-4">
                                        <label for="passcode">Passcode</label>
                                        <input type="password" class="form-control" name="passcode" id="passcode">
                                    </div>
                                    <div class="col">
                                        <label style="display:block;color:#fff;" for="">label</label>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php } ?>
                </div>  
                <!-- End Info-->
            </div>
            <!-- End About Template-->
        </div>
    </div>  
    <!-- End Content Central -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php
        $servername = "localhost";
        $username = "nbnfak_db";
        $password = "DS(3Hf7Oir5i";
        $dbname = "nbnfak_db";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            $sql = "SELECT * FROM elections WHERE STATUS='1' ORDER BY id DESC";
            $result = $conn->query($sql);
        }
    ?>
    
    
    
                        <?php
                        if(isset($_SESSION["user"]) && $_SESSION["user"]= "authenticated"){
                    ?>
                    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($_SESSION['msg'])) { ?>
                <div class="alert alert-success">
                <?php echo $_SESSION['msg']; ?>
                </div>
                <?php unset($_SESSION['msg']); } ?>
            </div>
        </div>
    </div>

    <!-- Content Central -->
    <div class="container padding-top">
        <div class="row">

            <!-- About Template-->
            <div class="col-md-12">
                <!-- Info -->
                <div class="panel-box">
                    <div class="titles">
                        <h4><i class="fa fa-rocket"></i>Bangladesh Olympic Association Election 2021</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12">
                            <section id="tabs" class="project-tab">
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Election 2021 Documents</h3>
                                            <table class="table table-hover table-striped">
                                                <thead class="scr-had-bg">
                                                    <tr>
                                                        <th>Serial</th>
                                                        <th>Title</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1; if ($result->num_rows > 0) { while($row = $result->fetch_assoc()) { ?>
                                                    <tr>
                                                        <td><?php echo $i; $i++; ?></td>
                                                        <td><a target="_blank" href="<?php echo site_url('/electionFiles/'.$row["file"]);?>"><?php echo $row["title"] ?></a></td>
                                                        <td><a target="_blank" href="<?php echo site_url('/electionFiles/'.$row["file"]);?>"><i class="fa fa-eye"></i></a>
                                                            <form action="<?php echo site_url('welcome/page/election-delete'); ?>" method="POST" style="margin-left: 10px; color: red; display: inline-block;">
                                                                <input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
                                                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash-o"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <?php }} else { echo "0 results"; } $conn->close(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- End Info ABout --> 
                </div>  
                <!-- End Info-->
            </div>
            <!-- End About Template-->

        </div>                     
    </div>  
    <!-- End Content Central -->
    
    <?php } else{ ?>
    <div class="container padding-top" style="margin-bottom:50px;">
        <div class="row">
            <!-- About Template-->
            <div class="col-md-12">
                <p class="btn btn-primary">Not authenticated to show all uploaded files! Please login with the passcode.</p>
            </div>
        </div>
    </div>
    <?php } ?>



</section>
<!-- End Section Area - Content Central -->

<?php $this->load->view('components/page-tail'); ?>