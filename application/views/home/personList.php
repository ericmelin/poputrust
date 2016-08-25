<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <!-- MENU SECTION END-->
        <main>
            <div class="content-wrapper">
               <div class="container" style="background-image:  <?php echo base_url('assets/custom/images/poputrust_search_bg.jpg'); ?>">
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
                            <h4 class="page-head-line">All persons</h4>
                        </div>
                    </div>
                    <div class="row" >

                        <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12">
                            <ul>
                           <?php 
                           foreach($people as $o){
                               echo "<li><a href='https://www.poputrust.com/p/".htmlentities( $o['seo'])."/".$o['id']."'>".$o['seo']."</a></li>";
                           }
                           ?>
                            </ul>
                        </div>

                    </div>
                    <div class="clearfix" style="margin-top: 20px"></div>
                    
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12  text-center">
                    <div class="">
                        <img src="<?php echo base_url('assets/custom/images/appStoreIcons/GooglePlay_appStore.png'); ?>" alt=""/>
                        <img src="<?php echo base_url('assets/custom/images/appStoreIcons/amazon-badge.png'); ?>" alt=""/>
                        <img src="<?php echo base_url('assets/custom/images/appStoreIcons/windows-badge-128x128.png'); ?>" alt=""/>
                        <img src="<?php echo base_url('assets/custom/images/appStoreIcons/download-on-the-app-store-badge.png'); ?>" alt=""/>
                    </div>
                </div>
            </div>
        </main>
        <!-- CONTENT-WRAPPER SECTION END-->
        <?php include 'footer.php'; ?>
        <!-- FOOTER SECTION END-->
    </body>
</html>
