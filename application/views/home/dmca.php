<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    <body>
        <!-- header start -->
        <?php include 'header.php'; ?>
        <!-- header end -->

        <!-- middle area start -->
        <div class="content-wrapper">
            <div class="container">
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
                        <h4 class="page-head-line">Digital Millennium Copyright Act (DMCA) Compliance</h4>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <p>
                            PopuTrust, LLC abides by the federal Digital Millennium Copyright Act (DMCA) by responding to notices of alleged infringement that comply with the DMCA and other applicable laws. As part of our response, we may remove or disable access to material residing on a site that is controlled or operated by PopuTrust, LLC (such as <?php echo base_url('');?>) that is claimed to be infringing, in which case we will make a good-faith attempt to contact the person who submitted the affected material so that they may make a counter notification, also in accordance with the DMCA.</p>
                        <p>PopuTrust, LLC does not control content hosted on third party websites, and cannot remove content from sites it does not own or control. If you are the copyright owner of content hosted on a third party site, and you have not authorized the use of your content, please contact the administrator of that website directly to have the content removed.  </p>
                        <p>Before serving either a Notice of Infringing Material or Counter-Notification, you may wish to contact a lawyer to better understand your rights and obligations under the DMCA and other applicable laws. The following notice requirements are intended to comply with PopuTrust, LLC’s rights and obligations under the DMCA and, in particular, section 512(c), and do not constitute legal advice.</p>
                        <p><strong>NOTICE TO COPYRIGHT OWNERS:
                            </strong><br />
                            If you believe material posted on or linked to or from this site is infringing, please provide a written, signed notice of infringement (a "DMCA Notice") to the designated agent at the PopuTrust, LLC, by fax or mail, at the address provided on our contact page. Such DMCA Notice should be in the form set forth below, which is consistent with the form suggested by the United States Digital Millennium Copyright Act (the "DMCA").</p>
                        <p> Pursuant to federal law you may be held liable for damages and attorneys' fees if you make any material misrepresentations in a Notification. Thus, if you are not sure whether content located on or accessible via a link from the Website infringes your copyright, you should contact an attorney.    </p>
                        <p><strong>All Notifications should include the following:    </strong></p>
                        <ul>
                            <li>A physical or electronic signature of a person authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.</li>
                            <li>Identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works at a single online site are covered by a single notification, a representative list of such works at that site.</li>
                            <li> Identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled, and information reasonably sufficient to permit the service provider to locate the material.    </li>
                            <li>Information reasonably sufficient to permit the service provider to contact the complaining party, such as an address, telephone number, and, if available, an electronic mail address at which the complaining party may be contacted.    </li>
                            <li>A statement that the complaining party has a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law.
                                A statement that the information in the notification is accurate, and under penalty of perjury, that the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.    </li>
                        </ul>
                        <p>Notifications should be sent to the address shown on our contact page.</p>
                        <p><strong>Please note: The DMCA provides that you may be liable for damages (including costs and attorneys' fees) if you make a false or bad faith allegation of copyright infringement by using this process. If you are not sure what your rights are, or whether a copyright has been infringed, you should check with a legal advisor first.</strong></p>

                    </div>
                </div>
            </div>
        </div>
        <!-- middlearea end -->

        <!-- footer start -->
        <?php include 'footer.php'; ?>
        <!-- footer end -->
        <script type="text/javascript">
            $('#loginForm').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    }

                }, messages: {
                    email: {
                        required: "Enter Email",
                        email: 'Enter valid Email'
                    },
                    password: {
                        required: "Enter Password",
                        minlength: "Password must be 6 character"
                    }
                }
            });
        </script>
    </body>
</html>