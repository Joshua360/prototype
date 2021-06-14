<?php include 'inc/header.php'?>

        
        <div class="header-height"></div>
        
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Contact With Us</h2>
                    <!-- <p>Help today because tomorrow you may be the one who <br>needs more helping!</p> -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->

 
        
        <section class="contact-section padding">
            <div id="google_map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.2688690882073!2d8.856686015632352!3d47.65977297918819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479a88ccc73d2a37%3A0xd7589bbd3432a50d!2sRathauspl.%2023%2C%208260%20Stein%20am%20Rhein%2C%20Switzerland!5e0!3m2!1sen!2ske!4v1623643467622!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>


            </div>
            
            <!-- /#google_map -->
            
            
            <div class="container">
                <div class="row contact-wrap">
                    <div class="col-md-6 xs-padding">
                        <div class="contact-info">
                            <h3>Get in touch</h3>
                            <!-- <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p> -->
                            <p> We are here to help you with all your queries.</p>
                            <h3>Headquarters</h3>

                            <ul>
                                <li><i class="ti-location-pin"></i> Rathausplatz 23 CH-8260 Stein am Rhein, Switzerland</li>
                                <li><i class="ti-mobile"></i> +41 (0) 79 794 18 41</li>
                                <li><i class="ti-email"></i> contact@aavf.ch </li>
                            </ul>
                            <br>

                            <h3>South Africa Branch</h3>

                            <ul>
                                <li><i class="ti-location-pin"></i> Suite 92,Private Bag X2, Dainfern Johannesburg 2055S, <br> South Africa</li>
                                <li><i class="ti-mobile"></i> Cell:+27 (0) 82 077 3649 </li>
                            </ul>

                            <br>

                            <h3>Account Information</h3>

                            <ul>
                                <li> Account No.: 826.070-5 101</li>
                                <li> Clearing: 782</li>
                                <li> SWIFT/BIC: SHKBCH25</li>
                                <li> IBAN: CH88 0078 2008 2607 0510 1</li>

                            </ul>
                    </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="contact-form">
                            <h3>Drop us a message</h3>
                            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                            <form action="contact.php" method="post" id="ajax_form" class="form-horizontal">
                                <div class="form-group colum-row row">
                                    <div class="col-sm-6">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button id="submit" class="default-btn" type="submit">Send Message</button>
                                    </div>
                                </div>
                                <div id="form-messages" class="alert" role="alert"></div>
                            </form>
                            <br><br>
                            <a target="_blank" href="#" class="default-btn">Apply for Membership</a>
                            <br><br><br>
                            <a target="_blank" href="https://www.paypal.com/paypalme/aavf" class="default-btn">Paypal Payments</a>

                            <br><br>
                            <a href="#" class="default-btn">Donate</a>


                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->

<?php include 'inc/footer.php'?>
