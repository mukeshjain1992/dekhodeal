<?php include 'header.php' ?>
 

    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">
                        <!-- APPT 1 -->
                        <div class="row-appointment-1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer clearfix" data-desktop="83" data-mobi="60" data-smobi="60"></div>

                                        <div class="wprt-headings style-1 clearfix text-center">
                                            <h2 class="heading clearfix">ONLINE APPOINTMENT FORM</h2>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading clearfix">Our professionals will perform diagnostic tests, fluid flush and fills, engine replacement, oil changes, and total vehicle overhauls.</p>
                                        </div><!-- /.wprt-headings -->

                                        <div class="wprt-spacer clearfix" data-desktop="45" data-mobi="40" data-smobi="40"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="wprt-content-box style-2">
                                            <div class="wprt-headings style-1 clearfix">
                                                <h5 class="heading clearfix">Here’s How The Online Appointment Form Works…</h5>
                                            </div><!-- /.wprt-headings -->

                                            <div class="wprt-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>

                                            <div class="wprt-icon-box style-5 clearfix icon-left w50 accent-outline outline-type align-left rounded-100 has-width">
                                                <div class="icon-wrap font-size-20">
                                                    1
                                                </div>
                                                <p class="desc">Complete the form to request an appointment at Auto Service.</p>
                                            </div><!-- /.wprt-icon-box -->

                                            <div class="wprt-spacer clearfix" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                            <div class="wprt-icon-box style-5 clearfix icon-left w50 accent-outline outline-type align-left rounded-100 has-width">
                                                <div class="icon-wrap font-size-20">
                                                    2
                                                </div>
                                                <p class="desc">Submit your completed form to Auto Service Customer Service.</p>
                                            </div><!-- /.wprt-icon-box -->

                                            <div class="wprt-spacer clearfix" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                            <div class="wprt-icon-box style-5 clearfix icon-left w50 accent-outline outline-type align-left rounded-100 has-width">
                                                <div class="icon-wrap font-size-20">
                                                    3
                                                </div>
                                                <p class="desc">Auto Service Manager will then contact you to confirm your appointment via email, phone.</p>
                                            </div><!-- /.wprt-icon-box -->
                                        </div><!-- /.wprt-content-box -->

                                        <div class="wprt-spacer clearfix" data-desktop="42" data-mobi="31" data-smobi="31"></div>

                                        <div class="wprt-content-box style-2">
                                            <div class="wprt-icon-box style-6 clearfix icon-top w70 accent-bg align-left rounded-100 has-width">
                                                <h3 class="heading margin-top-10 font-weight-600">
                                                    <a href="#">GET 10% OFF TODAY</a>
                                                </h3>

                                                <p class="desc">A Completely Safe and Advanced Cleaning Solution for both Petrol and Diesel Engines</p>

                                                <div class="elm-btn">
                                                    <a class="small wprt-button accent" href="#">Click for Detail</a>
                                                </div>
                                            </div><!-- /.wprt-icon-box -->
                                        </div><!-- /.wprt-content-box -->
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-8">
                                        <div class="wprt-appointment-form">
                                            <form action="./includes/appointment/appt-process.php" method="post" class="appointment-form">
                                                <div class="contact-wrap clearfix">
                                                    <div class="wprt-divider has-icon height-1px">
                                                        <div class="divider-icon">
                                                            <span class="divider-icon-before divider-center divider-double"></span>
                                                            <h2 class="title">Contact Information</h2>
                                                            <span class="divider-icon-after divider-center divider-double"></span>
                                                        </div>
                                                    </div>

                                                    <div class="wprt-spacer clearfix" data-desktop="15" data-mobi="15" data-smobi="15"></div>

                                                    <span class="form-control-wrap your-name">
                                                        <input type="text" tabindex="1" id="name" name="name" value="" class="form-control" placeholder="Contact Name *" required>
                                                    </span>

                                                    <span class="form-control-wrap your-phone">
                                                        <input type="text" tabindex="2" id="phone" name="phone" value="" class="form-control" placeholder="Phone Number *" required>
                                                    </span>

                                                    <span class="form-control-wrap your-email">
                                                        <input type="email" tabindex="3" id="email" name="email" value="" class="form-control" placeholder="E-mail *" required>
                                                    </span>

                                                    <span class="form-control-wrap your-prefer">
                                                        <p>How would you prefer we contact you?</p>
                                                        <span class="list-item">
                                                            <input type="radio" name="prefer" value="Phone">&nbsp;<span class="list-item-label">Phone</span>
                                                        </span>

                                                        <span class="list-item">
                                                            <input type="radio" name="prefer" value="Email">&nbsp;<span class="list-item-label">Email</span>
                                                        </span>

                                                        <span class="list-item">
                                                            <input type="radio" name="prefer" value="Either Method">&nbsp;<span class="list-item-label">Either Method</span>
                                                        </span>
                                                    </span>
                                                </div><!-- /.contact-wrap -->

                                                <div class="wprt-spacer clearfix" data-desktop="22" data-mobi="22" data-smobi="22"></div>

                                                <div class="vehicle-wrap clearfix">
                                                    <div class="wprt-divider has-icon height-1px">
                                                        <div class="divider-icon">
                                                            <span class="divider-icon-before divider-center divider-double"></span>
                                                            <h2 class="title">Vehicle Information</h2>
                                                            <span class="divider-icon-after divider-center divider-double"></span>
                                                        </div>
                                                    </div>

                                                    <div class="wprt-spacer clearfix" data-desktop="15" data-mobi="15" data-smobi="15"></div>

                                                    <span class="form-control-wrap your-make">
                                                        <input type="text" tabindex="4" id="make" name="make" value="" class="form-control" placeholder="Make">
                                                    </span>

                                                    <span class="form-control-wrap your-model">
                                                        <input type="text" tabindex="5" id="model" name="model" value="" class="form-control" placeholder="Model">
                                                    </span>

                                                    <span class="form-control-wrap your-year">
                                                        <input type="text" tabindex="6" id="year" name="year" value="" class="form-control" placeholder="Year">
                                                    </span>

                                                    <span class="form-control-wrap your-mileage">
                                                        <input type="text" tabindex="7" id="mileage" name="mileage" value="" class="form-control" placeholder="Mileage">
                                                    </span>

                                                    <span class="form-control-wrap your-license">
                                                        <input type="text" tabindex="8" id="license" name="license" value="" class="form-control" placeholder="License Number">
                                                    </span>

                                                    <span class="form-control-wrap your-needed">
                                                        <p>Please categorize the service(s) needed:</p>
                                                        <span class="list-item">
                                                            <input type="radio" name="needed" value="Maintenance">&nbsp;<span class="list-item-label">Maintenance</span>
                                                        </span>

                                                        <span class="list-item">
                                                            <input type="radio" name="needed" value="Repair">&nbsp;<span class="list-item-label">Repair</span>
                                                        </span>

                                                        <span class="list-item">
                                                            <input type="radio" name="needed" value="Both">&nbsp;<span class="list-item-label">Both</span>
                                                        </span>
                                                    </span>
                                                </div><!-- /.vehicle-wrap -->

                                                <div class="appointment-wrap clearfix">
                                                    <div class="wprt-spacer clearfix" data-desktop="22" data-mobi="22" data-smobi="22"></div>

                                                    <div class="wprt-divider has-icon height-1px">
                                                        <div class="divider-icon">
                                                            <span class="divider-icon-before divider-center divider-double"></span>
                                                            <h2 class="title">Appointment Information</h2>
                                                            <span class="divider-icon-after divider-center divider-double"></span>
                                                        </div>
                                                    </div>

                                                    <div class="wprt-spacer clearfix" data-desktop="15" data-mobi="15" data-smobi="15"></div>

                                                    <div class="form-control-wrap your-date">
                                                        <input type="text" value="" tabindex="9" placeholder="Date *" name="date" id="datepicker" required>
                                                        <span class="datepick"><i class="fa fa-angle-down"></i></span>
                                                    </div>

                                                    <span class="form-control-wrap your-time">
                                                        <input type="text" tabindex="10" id="time" name="time" value="" class="form-control" placeholder="Time *" required>
                                                    </span>

                                                    <span class="form-control-wrap your-pickup">
                                                        <p>Would you like us to pick up your vehicle?</p>
                                                        <span class="list-item">
                                                            <input type="radio" name="pickup" value="Yes">&nbsp;<span class="list-item-label">Yes</span>
                                                        </span>

                                                        <span class="list-item">
                                                            <input type="radio" name="pickup" value="No">&nbsp;<span class="list-item-label">No</span>
                                                        </span>
                                                    </span>
                                                </div><!-- /.appointment-wrap -->

                                                <div class="wprt-spacer clearfix" data-desktop="22" data-mobi="22" data-smobi="22"></div>

                                                <div class="addition-wrap">
                                                    <span class="form-control-wrap your-message">
                                                        <textarea name="message" tabindex="11" cols="40" rows="10" class="textarea" placeholder="Additional Details *" required></textarea>
                                                    </span>
                                                </div><!-- /.addition-wrap -->

                                                <div class="wrap-submit">
                                                    <input type="submit" value="SEND MESSAGE" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="submit">
                                                </div>
                                            </form>
                                        </div><!-- /.wprt-contact-form -->
                                    </div><!-- /.col-md-8 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer clearfix" data-desktop="90" data-mobi="60" data-smobi="60"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </div>
                        <!-- END APPT 1 -->

                        <!-- PROMOTION -->
                        <div class="row-promotion bg-accent">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer clearfix" data-desktop="25" data-mobi="25" data-smobi="35"></div>

                                        <div class="wprt-action-box style-1 has-icon">
                                            <div class="inner">
                                                <div class="heading-wrap">
                                                    <div class="text-wrap">
                                                        <h3 class="heading">Fixed Price MOT Test includes a Comprehensive Safety Check</h3>
                                                        <span class="icon"><i class="as-icon-speedometer2"></i></span> 
                                                    </div>
                                                </div>
                                                <div class="button-wrap">
                                                    <a href="#" class="wprt-button white">BOOK YOUR MOT</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wprt-spacer clearfix" data-desktop="25" data-mobi="25" data-smobi="35"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </div>
                        <!-- END PROMOTION -->
                    </div><!-- /.page-content -->
                </div><!-- /#inner-content -->
            </div><!-- /#site-content -->
        </div><!-- /#content-wrap -->
    </div><!-- /#main-content -->

    <?php include 'footer.php' ?>