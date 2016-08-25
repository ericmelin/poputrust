<!DOCTYPE html>
<html>
    <?php include('head.php'); ?>
    <body>
        <?php include('header.php'); ?>
        <!-- MENU SECTION END-->
        <main>
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="page-head-line">Basic Details of  <?php echo $details['name']; ?></h4>
                            <a href="https://www.poputrust.com/person/details/kenrick-kissoon/3" class="hidden">kenrick-kisson</a>
                            <?php
                            if (!empty($paginatedSearch)) {
                                if ($prev == "") {

                                    echo "<a href='" . $next . "' class='hidden'>$next_seoname</a>";
                                } else if ($prev != '' && $next != '') {
                                    echo "<a href='" . $next . "'  class='hidden'>$next_seoname</a>";
                                    echo "<a href='" . $prev . "' class='hidden'>$prev_seoname</a>";
                                } else {
                                    echo "<a href='" . $prev . "' class='hidden' >$prev_seoname</a>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="<?php echo base_url('assets/custom/images/Delecant_Placeholder.png'); ?>" alt="">
                            <h2><?php echo (!empty($details['prefixes']) ? $details['prefixes'] : '') . ' ' . $details['name']; ?></h2>
                            <?php
                            if (!empty($details['dob'])) {
                                ?>
                                <i class="fa fa-birthday-cake"></i> <?php echo $details['dob']; ?>
                                Age : <?php echo $details['age']; ?>
                                <?php
                            }
                            if (!empty($details['facebook'])) {
                                ?>
                                <a href="<?php echo $details['facebook']; ?>" class="btn btn-primary" target="_blank"><i class="fa fa-facebook"></i></a>
                                <?php
                            }

                            if (!empty($details['twitter'])) {
                                ?>
                                <a href="<?php echo $details['twitter']; ?>" class="btn btn-primary" target="_blank"><i class="fa fa-twitter"></i></a>
                                <?php
                            }

                            if (!empty($details['website'])) {
                                ?>
                                <a href="<?php echo $details['website']; ?>" class="btn btn-primary" target="_blank"><i class="fa fa-link"></i></a>
                            <?php }
                            ?>
                            <?php
                            if (!empty($details['email'])) {
                                ?>
                                <br>
                                <br>
                                <a href="#" class=""><?php echo "*****" . substr($details['email'], (strpos($details['email'], '@') - 4), 10); ?></a>
                            <?php }
                            ?>

                            <?php
                            if (!empty($details['phone'])) {
                                echo "<br><br>*****" . substr($details['phone'], (strlen($details['phone']) - 8), 8);
                            }
                            ?>
                        </div>
                        <div class="col-md-9">  
                            <div class="row">

                                <?php
                                if (!empty($details['address'])) {
                                    ?>
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <b>Locations</b>
                                        <p><?php echo $details['address']; ?> 
                                            <?php echo ', ' . $details['city']; ?>
                                            <?php echo ', ' . $details['state']; ?>
                                        </p>
                                    </div>
                                    <?php
                                }

                                if (!empty($details['about'])) {
                                    ?>
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <b>About</b>
                                        <p><?php echo $details['about']; ?></p>
                                    </div>
                                    <?php
                                }
                                if (!empty($details['specializations'])) {
                                    ?>
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <b>Specializations</b>
                                        <p><?php echo $details['specializations']; ?></p>
                                    </div>
                                <?php }
                                ?>     

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="alert alert-success text-center">
                                <h3>Click here to get more details about <a href="<?php echo base_url('home/people/s?id=' . $details['id'] . '&pt_result=1&name=' . urlencode($details['name'])); ?>"><?php echo $details['name']; ?></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- CONTENT-WRAPPER SECTION END-->
        <?php include('footer.php'); ?>
        <!-- FOOTER SECTION END-->

    </body>
</html>



