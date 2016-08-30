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
                            <h4 class="page-head-line">Select report option for. <?php echo $get['name']; ?></h4>
                        </div>
                    </div>

                    <div  class="row">
                        <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1">

                            <div class="row alert alert-warning">
                                <div class="col-sm-4 col-md-4 col-lg-4"><b><strong> Free Background Check</strong></div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><b>0$</b></div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <?php
                                    $pt_result = (empty($get['pt_result']) == true ? '0' : '1');
                                    ?>
                                    <a href="<?php echo 'https://www.peoplesmart.com/default-name-loading?Find=' . $get['name'] . '&aff=201'; ?>">Click here</a>
                                </div>
                            </div>

                            <div class="row alert alert-warning">
                                <div class="col-sm-4 col-md-4 col-lg-4"><b><strong> Basic Background Check</strong></div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><b>4.95$</b></div>
                                <div class="col-sm-4 col-md-4 col-lg-4"><b>
                                        <a href="<?php echo 'https://www.peoplesmart.com/default-name-loading?Find=' . $get['name'] . '&aff=201'; ?>">Click here</a>
                                </div>
                            </div>                                        

                            <div class="row  alert alert-warning">
                                <div class="col-sm-4 col-md-4 col-lg-4"><b><strong> Full Background Check</strong></div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><b>24.95$</b></div>
                                <div class="col-sm-4 col-md-4 col-lg-4"><b>
                                        <a href="<?php echo 'https://www.peoplesmart.com/default-name-loading?Find=' . $get['name'] . '&aff=201'; ?>">Click here</a>
                                </div>
                            </div>                                        

                            <div class="row alert alert-info">
                                <div class="col-sm-4 col-md-4 col-lg-4"><b><strong> 506c Investor Accreditation Check</strong></div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><b>99$</b></div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="X25R57KXA8YNY">
                                        <input type="hidden" name="custom" value="<?php echo $get['id']?>">
                                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                            </div>                                        

                            <div class="row  alert alert-info">
                                <div class="col-sm-4 col-md-4 col-lg-4"><b><strong> Comprehensive Background Check</strong></div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><b>500$</b></div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="5AHEYJUXT2D7S">
                                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                            </div>                                        

                            <div class="row  alert alert-success">
                                <div class="col-sm-4 col-md-4 col-lg-4"><b><strong> International Background Check</strong></div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><b>1000$</b></div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="QMGSMQCAJ27RS">
                                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                            </div>                                        

                            <div class="row alert alert-success">
                                <div class="col-sm-4 col-md-4 col-lg-4"><b><strong> Basic Company Diligence Check</strong></div>
                                <div class="col-sm-3">1500$</div>
                                <div class="col-sm-3">
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="MTH36365Z48EJ">
                                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                            </div>                                        

                            <div class="row alert alert-success">
                                <div class="col-sm-4 col-md-4 col-lg-4"><b><strong> Corporate Compliance & Diligence</strong></div>
                                <div class="col-sm-3 col-md-3 col-lg-3"><b>2000$</div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="7SMTD7CRLEM7G">
                                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                    </form>

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

