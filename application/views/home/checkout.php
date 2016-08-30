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
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <h4 class="page-head-line">Chekout Details</h4>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <td>
                                            <b>Free Background Check</b>
                                            <p>Basic Search to Determine if Subject Exists in PopuTrust Database.</p>
                                        </td>
                                        <td>
                                            <b>$0</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Basic Background Check</b>
                                            <p>Includes a very basic background check, containing name, location, age, etc.</p>
                                        </td>
                                        <td>
                                            <b>$4.95/each</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo 'https://www.peoplesmart.com/default-name-loading?Find=person&aff=201'; ?>" target="_blank">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Full Background Check (1-Subject, 1-Report)</b>
                                        </td>
                                        <td>
                                            <b>$24.95/each</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo 'https://www.peoplesmart.com/default-name-loading?Find=person&aff=201'; ?>" target="_blank"a>Click here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Full Background Check (1-Month Subscription, Unlimited)</b>                                          
                                        </td>
                                        <td>
                                            <b>$49</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Full Background Check (6-Month Subscription, Unlimited)</b>                                          
                                        </td>
                                        <td>
                                            <b>$99</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Full Background Check (12-Month Subscription, Unlimited)</b>                                          
                                        </td>
                                        <td>
                                            <b>$149</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Comprehensive Background Research Report.</b>
                                            <p>Over (10) public and paid/proprietary searches via a staff of trained Research Analysts:</p>                                          
                                            <ol>
                                                <li>Criminal History Search</li>
                                                <li>Civil History Search</li>
                                                <li>Bankruptcy, Judgments, Liens Search</li>
                                                <li>Education Verification (Diploma Search)</li>
                                                <li>Sex Offender Search</li>
                                                <li>FINRA (Financial Industry Regulatory Authority) “BrokerCheck”</li>
                                                <li>FBI (Federal Bureau of Investigation) Search</li>
                                                <li>SDN (Specially Designated Nationals) Search</li>
                                                <li>FSE (Foreign Sanctions Evaders List) Search</li>
                                                <li>OFAC  (Office of Foreign Assets Control, i.e. “Terrorists” Search)</li>
                                                <li>Media (Newspapers, Facebook, Google, Twitter, LinkedIN, etc.)</li>
                                                <li>Employment Verification (outbound phone calls/emails)</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <b>$500/each</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Monthly Monitoring For Finance/Brokers and/or Disclosure or OBA.  </b>
                                            <p>First 90 days are included for each Initial Comprehensive Background Check.</p>                                          
                                        </td>
                                        <td>
                                            <b>$4/month</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b>506c Investor Accreditation & Wealth-Screening</b>

                                        </td>
                                        <td>
                                            <b>$99/each</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>E-Verify® Compliance Consulting</b>
                                            <p>Included audit/review of a I-9 Form and Consulting for each TNC (Tentative Non-Confirmation) and case verification.</p>
                                        </td>
                                        <td>
                                            <b>$399/each</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Data Removal Package: Bronze </b> 
                                            <p>Data can be removed from PopuTrust by completing <a href="<?php echo base_url('assets/uploads/misc/POPUTRUST_OPT_OUT_FORM.pdf'); ?>" download="POPUTRUST_OPT_OUT_FORM.pdf" target="_blank">this form</a> 
                                                at no charge; our Bronze Data Removal Package allows for
                                                a fully-automated data removal request to all of
                                                PopuTrust’s data providers.  No results are guaranteed.  
                                                Does not include any Customized Research Reports or 
                                                Deliverables.  “Good” quality; usually removes data from 
                                                most popular / common databases that have automated 
                                                data-removal request procedures.</p>

                                        </td>
                                        <td>
                                            <b>$299/each</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Data Removal Package: Silver </b> 
                                            <p>Data can be removed from PopuTrust by faxing <a href="<?php echo base_url('assets/uploads/misc/POPUTRUST_OPT_OUT_FORM.pdf'); ?>" download="POPUTRUST_OPT_OUT_FORM.pdf" target="_blank">this form</a> without charge; our Silver Data Removal Package includes automated software APIs but also allows for a Customized Data Removal Service prepared by a PopuTrust Research Analyst who will spend at least 10 hours manually requesting data removals, submitting emails, web forms, and making outbound telephone calls as necessary.  Results are guaranteed and a summary customized report will be provided.   “Better” quality expectation; usually removes data from most databases. A Research Analyst will discuss findings by telephone with suggestions for additional efforts. </p>
                                        </td>
                                        <td>
                                            <b>$599/each</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Data Removal Package: Gold</b> 
                                            <p>Data can be removed from PopuTrust by completing <a href="<?php echo base_url('assets/uploads/misc/POPUTRUST_OPT_OUT_FORM.pdf'); ?>" download="POPUTRUST_OPT_OUT_FORM.pdf" target="_blank">this form</a> without charge; our Gold Data Removal Package includes automated software APIs but also allows for a Customized Data Removal Service prepared by a PopuTrust Research Analyst who will spend at least 30 hours manually requesting data removals, submitting emails, web forms, and making outbound telephone calls as necessary.  Results are guaranteed and a customized report will be provided that includes public records, social records, various archives, and “deep web” locations indexed by search engines and other non-governmental entities.  “Best” expectation means a Research Analyst will work with you by telephone & email until all desired data has been removed from any and all external/3rd party locations to the full extent of the law.</p>
                                        </td>
                                        <td>
                                            <b>$1999/each</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Basic Due-Diligence Package (Domestic Business Entity Check)</b>
                                            <p>Includes Comprehensive Background Research Report on 1 Principle.</p>
                                        </td>
                                        <td>
                                            <b>$999/each</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Basic Due-Diligence Package (International Business Entity Check)</b>
                                            <p>Includes Basic Background Research Report on up to 5 Principles. </p>
                                        </td>
                                        <td>
                                            <b>$1999/each</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Full Due-Diligence Package </b>
                                            <p>Includes Background Research Reports on up to 20 Principles and 5 Corporate Entities, USA or International.</p>
                                        </td>
                                        <td>
                                            <b>$3999/each</b>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(''); ?>">Click Here</a>
                                        </td>
                                    </tr>
                                </table>
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
