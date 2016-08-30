<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <!-- MENU SECTION END-->
        <main style=" background-image: url('<?php echo base_url('assets/custom/images/poputrust_search_bg.jpg'); ?>'); background-position: center; background-size: cover;">
            <div class="content-wrapper" style="margin-top:0px !important;">
                <a href="<?php echo base_url('p/kenrick-kissoon/3'); ?>" class="hidden">kenrick-kisson</a>
                <a href="<?php echo base_url('person/personList'); ?>" class="hidden">Person List</a>
                <div class="container" style="min-height: 299px;">

                    <div class="row">
                        <div class="alertMessage col-md-12 col-sm-12">
                            <?php
                            $flash_data = $this->session->flashdata('alert');
                            if (!empty($flash_data)) {
                                ?>
                                <div class="alert alert-<?php echo $flash_data['class']; ?>">
                                    <?php echo $flash_data['message']; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-md-12">
                            <h3 class="page-head-line text-center" style="color: #FFF; border-bottom: none;">Search among millions of records</h3>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-8 col-md-offset-3 col-lg-8 col-lg-offset-3 col-sm-12">
                            <form action="<?php echo base_url('search'); ?>" method="post" >
                                <div class="row">

                                    <div class="col-md-10 col-lg-10 col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="s" value="<?php
                                            if (!empty($s)) {
                                                echo $s;
                                            }
                                            ?>" placeholder="First Name Last Name, City, State"
                                                   autofocus
                                                   />
                                            <span class="input-group-btn">

                                                <button type="submit"  class="btn btn-default" type="button"><i class="fa fa-search"></i> Search</button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                </div>                                
                        </div>
                        </form>
                    </div>
                    <div class="clearfix" style="margin-top: 20px"></div>
                    <div  class="row">
                        <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1">

                            <?php
                            if (!empty($result)) {
                                ?>
                                <div class="list-group">
                                    <div class="list-group-item-heading">
                                        <div class="row">
                                            <div class="col-md-12">   
                                                <h3 class="text-center text-default"> 
                                                    <button type="button" class="btn btn-success btn-lg  btn-circle"><i class="fa fa-check fa-1x"></i></button><b>
                                                        <?php echo $totalResults . ' Results found for ' . $s; ?> 
                                                    </b>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                foreach ($result as $r) {
                                    ?>
                                    <div class="list-group-item-text">
                                        <div class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Person</label>
                                                        <h4><a href="<?php
                                                            $pt_result = (empty($r['pt_result']) == true ? '0' : '1');
                                                            $id = $r['id'];
                                                            $name = $r['fullName'];
                                                            echo base_url("home/people/s?id=$id&pt_result=$pt_result&name=$name");
                                                            ?>"><?php echo $r['fullName']; ?></a></h4>
                                                    </div>                                                
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label>Age</label>
                                                        <div><?php echo (!empty($r['age']) ? $r['age'] : 'NA'); ?></div>
                                                    </div>  
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>City, State</label>
                                                        <div><?php echo (!empty($r['city']) ? $r['city'] . ', ' : '') . (!empty($r['state']) ? $r['state'] : ''); ?></div>
                                                    </div>  
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Locations</label>
                                                        <div>
                                                            <?php
                                                            if (!empty($r['addresses'])) {
                                                                foreach ($r['addresses'] as $location) {
                                                                    ?>
                                                                    <?php echo $location['city'] . ', ' . $location['state']; ?><br/>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>  
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Relatives</label>
                                                        <div>
                                                            <?php
                                                            if (!empty($r['relatives'])) {
                                                                foreach ($r['relatives'] as $relatives) {
                                                                    ?>
                                                                    <?php echo $relatives['fullName']; ?><br/>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>  
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <?php
                                }
                            }
                            if (empty($result) && isset($s)) {
                                ?>
                                <div class="list-group">
                                    <div class="list-group-item-heading">
                                        <div class="row">
                                            <div class="col-md-12">                                            
                                                <div class="alert alert-danger">
                                                    <h3 class="text-center"> 
                                                        <button type="button" class="btn btn-danger btn-lg  btn-circle"><i class="fa fa-times fa-1x"></i></button><b>
                                                            <?php echo 'No Results found for ' . $s; ?> 
                                                        </b>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include 'footer.php'; ?>
    <!-- FOOTER SECTION END-->
</body>
</html>
