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
                        <h4 class="page-head-line">Basic Details of  <?php echo $get['name']; ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <img src="<?php echo base_url('assets/custom/images/Delecant_Placeholder.png'); ?>" alt="">
                        <h2><?php echo (!empty($details['prefixes'])?$details['prefixes']:'') . ' ' . $details['fullName']; ?></h2>
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
                            <div class="col-md-4">
                                <?php
                                if (!empty($details['addresses'])) {
                                    ?>
                                    <b>Locations</b>
                                    <?php
                                    foreach ($details['addresses'] as $address) {
                                        echo "<p>" . $address['address3'] . "</p>";
                                    }
                                    ?> 
                                <?php }
                                ?>
                            </div>
                            <div class="col-md-4">
                                <b>Known by names</b>
                                <?php
                                foreach ($details['names'] as $name) {
                                    echo "<p>" . $name['fullName'] . "</p>";
                                }
                                ?> 
                            </div>
                            <div class="col-md-4">
                                <b>Relatives</b>
                                <?php
                                foreach ($details['relatives'] as $name) {
                                    echo "<p>" . $name['fullName'] . "</p>";
                                }
                                ?> 
                            </div>
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



