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
                            <h4 class="page-head-line">Affiliates</h4>
                            <p>
                                <b>Thank you for your interest in the POPUTRUST affiliate program!</b>
                            </p>
                            <p>
                                We look forward to a very successful relationship with you! POPUTRUST 
                                offers a unique opportunity to help people. People Search is a massive 
                                Multi-BILLION dollar market. People no longer just search “for fun” on 
                                celebrity names – a quick name search is often a precursor to a business 
                                meeting, a romantic date, a landlord/tenant relationship, employer/employee 
                                screening, college application process, or other research process.  
                                Billions of Searches for name per DAY from the web (i.e. Google) and 
                                increasingly from from Mobile Devices. Currently, big data firms are selling 
                                this data to the highest bidder…soon…as awareness of this practice grows…individuals
                                will want to own, control, and sell their personal data back to these same marketers. 
                                PopuTrust is where individuals go to take back control of their Online Identity 
                                and sensitive Personal Data.  
                            </p>
                            <b>PROGRAM HIGHLIGHTS:</b>
                            <ul>
                                <li>Earn 5-25% Commission on every Referral
                                </li>
                                <li>Performance Incentives
                                </li>
                                <li>90 day cookie duration (you will get credit)
                                </li>
                                <li>Innovative Background Check Solutions
                                </li>
                                <li>Order Sizes up to $50,000
                                </li>
                                <li>Wide Selection of Creatives & Links
                                </li>
                                <li>ASK for specials & promotions
                                </li>
                                <li>Data-feeds & API Calls
                                </li>
                                <li>Offline Conversion Tracking (we ask in-bound callers)
                                </li>
                                <li>Affiliate Optimization Advice
                                </li>
                                <li>Dedicated Affiliate Manager w/15+ Years SEO/SEM Experience</li>
                            </ul>

                            <b>HOW IT WORKS:</b>
                            <p>Our Customers use POPUTRUST in one of the following ways:</p>
                            <ol>
                                <li>Background Reports: <b>$4.95 per Report</b></li>
                                <li>Report Achieving:  <b>$3.95 per Report</b></li>
                                <li>Monthly Membership: <b>$24.95 per Month</b></li>
                                <li>Annual Membership: <b>$99 per year</b></li>
                                <li>Wealth Screening: <b>$99 per Subject Person</b></li>
                                <li>Full Background Report: <b>$500 per Subject Person</b></li>
                                <li>Full Background Report(Non-USA) <b>$1000 per Subject Person</b></li>
                                <li>Corporate Due Dilligence: <b>$1500 per Subject Firm</b></li>
                                <li>Corporate Dilligence (Non-USA)  <b>$2000 per Subject Firm</b></li>
                            </ol>

                            <p>For our corporate customers, a single order can be 100+ Reports at $500/each. 
                                Our valued affiliates earn a 5-25% Commission on every Referral.  At a 10%
                                commission this is a $5000 commission to you! </p>

                            <b>USER DEMOGRAPHICS:</b>
                            <p>Our users at <a href="https://www.poputrust.com">poputrust.com</a> tend to be
                                financial services professionals based in the United States with annual 
                                incomes over $100,000, however the service also appeals to a wider audience,
                                including home-makers, investors, real estate professionals, small business owners, 
                                nonprofit agencies, banking professionals, legal professionals and others.
                            </p>
                            <b>BEST PRACTICES & WARNINGS:</b>
                            <p>Search Marketers are welcome to use all words except variations of our brand/URL 
                                "POPUTRUST.com"; "POPUTRUST"; "POP U TRUST" and "POP YOU TRUST" trademarks. 
                                Always place our links at the top of the page. The more prominent a link is 
                                without the visitor having to search for it, the more likely they are to see 
                                it and click on it. Keep your content fresh. Be sure to periodically visit the 
                                site from the visitor's point of view to ensure you don't have any broken links 
                                or displaying links for expired promotions. Target the visitor wisely. Make sure
                                to choose a link that will appeal to your visitor demographics.  Visit this section
                                frequently to check for recent creatives. </p>
                            <b>ABOUT US:</b>
                            <p>We offer a 100% customer satisfaction guarantee, and we stand behind every transaction.  </p>
                        </div>
                    </div>

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
