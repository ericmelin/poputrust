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
                        <h4 class="page-head-line">Terms of Service</h4>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <p>This web page represents a legal document that serves as our Terms of Service and it governs the legal terms of our website, https://www.poputrust.com, sub-domains, and any associated web-based and mobile applications (collectively, "Website"), as owned and operated by PopuTrust, LLC.</p>    
                        <p>Capitalized terms, unless otherwise defined, have the meaning specified within the Definitions section below. This Terms of Service, along with our Privacy Policy, any mobile license agreement, and other posted guidelines within our Website, collectively "Legal Terms", constitute the entire and only agreement between you and PopuTrust, LLC, and supersede all other agreements, representations, warranties and understandings with respect to our Website and the subject matter contained herein. We may amend our Legal Terms at any time without specific notice to you. The latest copies of our Legal Terms will be posted on our Website, and you should review all Legal Terms prior to using our Website. After any revisions to our Legal Terms are posted, you agree to be bound to any such changes to them. Therefore, it is important for you to periodically review our Legal Terms to make sure you still agree to them.</p>
                        <p>By accessing this web site, you are agreeing to be bound by these  Website Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this  Website are protected by applicable copyright and trademark law.</p>
                        <p>The last update to our Terms of Service was posted on June 13, 2016.</p>

                        <p><strong>Definitions</strong><br />The terms "us" or "we" or "our" refers to PopuTrust, LLC, the owner of the Website.</p>
                        <p>A "Visitor" is someone who merely browses our Website, but has not registered as Member.</p>
                        <p>A "Member" is an individual that has registered with us to use our Service.</p>
                        <p>Our "Service" represents the collective functionality and features as offered through our Website to our Members.</p>
                        <p>A "User" is a collective identifier that refers to either a Visitor or a Member.</p>
                        <p>All text, information, graphics, audio, video, and data offered through our Website are collectively known as our "Content".</p>

                        <p><strong>Use License</strong></p>
                        <ol type="a">
                            <li>Permission is granted to temporarily download one copy of the materials (information or software) on PopuTrust, LLC&#8217;s  Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
                                <ol type="i">
                                    <li>modify or copy the materials;</li>
                                    <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                                    <li>attempt to decompile or reverse engineer any software contained on PopuTrust, LLC&#8217;s web site;</li>
                                    <li>remove any copyright or other proprietary notations from the materials; or</li>
                                    <li>transfer the materials to another person or &#8220;mirror&#8221; the materials on any other server.</li>
                                </ol>
                            </li>
                            <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by PopuTrust, LLC at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
                        </ol>
                        <p><strong>Restricted Uses</strong><br />
                            Listing of offered products on the Website could be used only for lawful purposes by Users of the Website. You could not frame or utilize framing techniques to enclose any hallmark, logo, copyrighted image, or most proprietary details (consisting of images, text, page layout, or type) of PopuTrust, LLC without express composed consent. You might not use any meta tags or any various other &quot;unseen text&quot; utilizing PopuTrust, LLC's name or trademarks without the express written consent of PopuTrust, LLC. You agree not to offer or modify any content found on the Website consisting of, however not limited to, names of Users and Content, or to recreate, display, openly perform, distribute, or otherwise make use of the Material, in any way for any public function, in connection with services or products that are not those of PopuTrust, LLC, in other way that is likely to trigger confusion among consumers, that disparages or challenges PopuTrust, LLC or its licensors, that dilutes the strength of PopuTrust, LLC's or its licensor's residential property, or that otherwise infringes PopuTrust, LLC's or its licensor's copyright rights. You also agree to abstain from abusing any of the material that appears on the Site.  The use of the Material on any other website or in a networked computer system environment for any purpose is prohibited. Any code that PopuTrust, LLC develops to generate or show any Material of the pages making up the Website is likewise secured by PopuTrust, LLC's copyright, and you may not copy or adjust such code.</p>
                        <p>PopuTrust, LLC has no duty to keep track of any products published, transferred, or connected to or with the Site. If you think that something on the Website breaches these Terms please contact our marked representative as set forth below. </p>
                        <p>If alerted by a User of any products which allegedly do not conform to these Terms, PopuTrust, LLC could in its single discernment explore the allegation and figure out whether to take other actions or ask for the removal or get rid  of the Content. PopuTrust, LLC has no liability or duty to Individuals for efficiency or nonperformance of such activities.</p>
                        <p> <strong>Electronic Communication</strong><br />
                            You are connecting with us electronically when you go to the Website or send out emails to us. You consent to get interactions from us online. We will connect with you by email or by uploading notifications on the Site. You concur that all contracts notifications, disclosure, and various other communicates that we provide to you digitally please any legal requirements that such communications be in writing.</p>
                        <p><strong>Your Account</strong><br />
                            If you utilize the Website, you are accountable for maintaining the confidentiality of your account and password and you accept responsibility for all activities that happen under your account and password. You also accept not to reveal any personally identifiable information, consisting of, however not limited to, first and last names, credentials, or various other details of a personal nature (&quot;Personal Data&quot;)  from the Site. Your disclosure of any Personal Data on the website might result in the immediate termination of your account. PopuTrust, LLC additionally reserves the right to refuse service, terminate accounts, and remove or edit Content at it's sole discernment.</p>
                        <p>PopuTrust, LLC does not guarantee the truthfulness or represent, precision, or dependability of Content on the site, consisting of Personal Data. Each Individual is accountable for upgrading and changing any pertinent account info when essential to preserve the truthfulness, precision, or reliability of the details.</p>
                        <p><strong>Reviews, Comments, and Other Material</strong><br />
                            Registered Users of the Website might post evaluations and remarks of a product and services purchased by means of the Website, so long as the Material is not unlawful, profane, threatening, defamatory, an invasive of privacy, infringing of intellectual property rights, or otherwise injurious to third parties or objectionable and does not include or include industrial solicitation, mass mailings, or any type of &quot;spam.&quot; You may not use another User's account to impersonate a User or entity, or otherwise deceived as to the origin of the opinions. PopuTrust, LLC books the right (however is not bound) to eliminate or modify such Material, but does not regularly examine posted Material.</p>
                        <p>If you post an evaluation or send comments, and unless PopuTrust, LLC suggests otherwise, you grant PopuTrust, LLC a nonexclusive, royalty-free, permanent, irrevocable, and completely sublicensable right to utilize, recreate, modify, adjust, release, equate, create derivative works from, distribute, and screen such content throughout the world, in any media. You grant PopuTrust, LLC and sublicenses the right to utilize your name in connection with such Material, if they choose. You represent and require that You own or otherwise control all the rights to the content that You post; that the content is accurate; that use of the content You supply does not violate this policy and will not trigger injury to anyone or entity; which You will indemnify PopuTrust, LLC for all claims resulting from Content You supply. PopuTrust, LLC has the right but not the commitment to edit and keep track of or eliminate any task or Material. PopuTrust, LLC takes no duty and assumes no liability for any content published by You or any 3rd party.</p>
                        <p><strong>Legal Compliance</strong><br />You agree to comply with all applicable domestic and international laws, statutes, ordinances, and regulations regarding your use of our Website. PopuTrust, LLC reserves the right to investigate complaints or reported violations of our Legal Terms and to take any action we deem appropriate, including but not limited to canceling your Member account, reporting any suspected unlawful activity to law enforcement officials, regulators, or other third parties and disclosing any information necessary or appropriate to such persons or entities relating to your profile, email addresses, usage history, posted materials, IP addresses and traffic information, as allowed under our Privacy Policy.</p>

                        <p><strong>Intellectual Property</strong><br />Our Website may contain our service marks or trademarks as well as those of our affiliates or other companies, in the form of words, graphics, and logos. Your use of our Website does not constitute any right or license for you to use such service marks/trademarks, without the prior written permission of the corresponding service mark/trademark owner. Our Website is also protected under international copyright laws. The copying, redistribution, use or publication by you of any portion of our Website is strictly prohibited. Your use of our Website does not grant you ownership rights of any kind in our Website.</p>
                        <p><strong>Revisions and Errata</strong><br>
                            The materials appearing on PopuTrust, LLC&#8217;s  Website could include technical, typographical, or photographic errors. PopuTrust, LLC does not warrant that any of the materials on its  Website are accurate, complete, or current. PopuTrust, LLC may make changes to the materials contained on its Website at any time without notice. PopuTrust, LLC does not, however, make any commitment to update the materials.</p>
                        <p><strong>Disclaimer<br>
                            </strong>The materials on <b>PopuTrust, LLC</b>'s Website are provided "as is" <b>PopuTrust, LLC</b> makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, <b>PopuTrust, LLC</b> does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet Website or otherwise relating to such materials or on any sites linked to this site. 
                            </li>

                            The Website serves as a venue for Individuals to purchase distinct service or products. Neither PopuTrust, LLC nor the Website has control over the quality or fitness for a particular function of a product. PopuTrust, LLC likewise has no control over the accuracy, reliability, completeness, or timeliness of the User-submitted details and makes no representations or warranties about any info on the Site.</p>
                        <p> THE WEBSITE AND ALL DETAILS, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE APPLICATION) AND SERVICES CONSISTED OF ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THIS WEBSITE ARE PROVIDED BY PopuTrust, LLC ON AN &quot;AS IS&quot; AND &quot;AS AVAILABLE&quot; BASIS, UNLESS OTHERWISE SPECIFIED IN WRITING. PopuTrust, LLC MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, ABOUT THE OPERATION OF THIS Website OR THE INFO, MATERIAL, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) OR SERVICES CONSISTED OF ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THIS SITE, UNLESS OTHERWISE POINTED OUT IN WRITING. YOU EXPRESSLY AGREE THAT YOUR USE OF THIS WEBSITE IS AT YOUR OWN RISK.</p>
                        <p>TO THE COMPLETE EXTENT PERMISSIBLE BY APPLICABLE LAW, PopuTrust, LLC DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY AND PHYSICAL FITNESS FOR A PARTICULAR PURPOSE. PopuTrust, LLC DOES NOT WARRANT THAT THIS WEBSITE; DETAILS, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE APPLICATION) OR SERVICES CONSISTED OF ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE SITE; ITS SERVERS; OR EMAIL SENT FROM PopuTrust, LLC ARE WITHOUT VIRUSES OR OTHER HARMFUL ELEMENTS. PopuTrust, LLC WILL NOT BE LIABLE FOR ANY DAMAGES OF ANY KIND ARISING FROM THE USE OF THE Website OR FROM ANY DETAILS, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE APPLICATION) OR SERVICES CONSISTED OF ON OR OTHERWISE MADE AVAILABLE TO YOU WITH THIS SITE, INCLUDING, BUT NOT LIMITED TO DIRECT, INDIRECT, INCIDENTAL, PUNITIVE, AND CONSEQUENTIAL DAMAGES, UNLESS OTHERWISE POINTED OUT IN WRITING. UNDER NO SCENARIO SHALL PopuTrust, LLC'S LIABILITY DEVELOPING FROM OR IN CONNECTION WITH THE WEBSITE OR YOUR USE OF THE WEBSITE, DESPITE THE REASON FOR ACTION (WHETHER IN AGREEMENT, TORT, BREACH OF SERVICE WARRANTY OR OTHERWISE), GO BEYOND $100.</p>
                        <p><strong>Links to Other Websites</strong><br />Our Website may contain links to third party websites. These links are provided solely as a convenience to you. By linking to these websites, we do not create or have an affiliation with, or sponsor such third party websites. The inclusion of links within our Website does not constitute any endorsement, guarantee, warranty, or recommendation of such third party websites. PopuTrust, LLC has no control over the legal documents and privacy practices of third party websites; as such, you access any such third party websites at your own risk.</p>
                        <p><strong>Site Terms of Service Modifications</strong><br>
                            PopuTrust, LLC may revise these Terms of Service for its  Website at any time without notice. By using this  Website you are agreeing to be bound by the then current version of these Terms and Conditions of Use.</p>
                        <p><strong>Governing Law</strong><br>
                            Any claim relating to PopuTrust, LLC&#8217;s Website shall be governed by the laws of New Hampshire without regard to its conflict of law provisions, and You consent to exclusive jurisdiction and venue in such courts.</p>
                        <p><strong>Indemnity<br />
                            </strong>You accept defend, indemnify, and hold safe PopuTrust, LLC, its affiliates, and their corresponding officers, directors, agents and workers, from and against any claims, actions or demands, including without limitation affordable legal, accounting, and other provider charges, affirming or resulting from (i) any Content of most material You offer to the Site, (ii) Your use of any Content, or (iii) Your breach of the terms of these Terms. PopuTrust, LLC will provide notice to You promptly of any such claim, match, or case.</p>
                        <p><strong>General Terms</strong><br />Our Legal Terms shall be treated as though it were executed and performed in New Hampshire, United States and shall be governed by and construed in accordance with the laws of New Hampshire, United States without regard to conflict of law principles. In addition, you agree to submit to the personal jurisdiction and venue of such courts. Any cause of action by you with respect to our Website, must be instituted within one (1) year after the cause of action arose or be forever waived and barred. Should any part of our Legal Terms be held invalid or unenforceable, that portion shall be construed consistent with applicable law and the remaining portions shall remain in full force and effect. To the extent that any Content in our Website conflicts or is inconsistent with our Legal Terms, our Legal Terms shall take precedence. Our failure to enforce any provision of our Legal Terms shall not be deemed a waiver of such provision nor of the right to enforce such provision. The rights of PopuTrust, LLC under our Legal Terms shall survive the termination of our Legal Terms.</p>
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