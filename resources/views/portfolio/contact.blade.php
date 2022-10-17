<div class="section-heading text-center">
    <h2>contact me</h2>
</div>
<div class="container">
    <div class="contact-content">
        <div class="row">
            <div class="col-md-offset-1 col-md-5 col-sm-6">
                <div class="single-contact-box">
                    <div class="contact-form">
                        <div class="alert alert-success" id="success_message" hidden>
                        <div class="alert alert-danger" id="error_message" hidden></div>
                        </div>
                        <form">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name*" name="name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email*" required="email" name="email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            placeholder="Subject" name="subject">
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="8" id="comment" name="message" placeholder="Message"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="single-contact-btn">
                                        <button type="button" class="contact-btn" id="contact_btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                    </div>
                </div>
            </div>
            <!--/.col-->
            <div class="col-md-offset-1 col-md-5 col-sm-6">
                <div class="single-contact-box">
                    <div class="contact-adress">
                        <div class="contact-add-head">
                            <h3>Vincent Lagria</h3>
                            <p>Software and Web Developer</p>
                        </div>
                        <div class="contact-add-info">
                            <div class="single-contact-add-info">
                                <h3>phone</h3>
                                <p>09771170727</p>
                            </div>
                            <div class="single-contact-add-info">
                                <h3>email</h3>
                                <p>vlagria3@gmail.com</p>
                            </div>
                            <div class="single-contact-add-info">
                                <h3>website</h3>
                                <p>www.vlagria.com</p>
                            </div>
                        </div>
                    </div>
                    <!--/.contact-adress-->
                    <div class="hm-foot-icon">
                        <ul>
                            <li><a href="https://www.facebook.com/vncntlagria/" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                            <!--/li-->
                            <li><a href="https://github.com/VLagria" target="_blank"><i class="fa fa-github"></i></a>
                            </li>
                            <!--/li-->
                            <li><a href="https://twitter.com/LagriaVincent" target="_blank"><i
                                        class="fa fa-twitter"></i></a></li>
                            <!--/li-->
                            <li><a href="https://www.linkedin.com/in/vincent-lagria-9b06a5213/" target="_blank"><i
                                        class="fa fa-linkedin"></i></a></li>
                            <!--/li-->
                            <li><a href="https://www.instagram.com/_itsmedogrammer/" target="_blank"><i
                                        class="fa fa-instagram"></i></a></li>
                            <!--/li-->
                        </ul>
                        <!--/ul-->
                    </div>
                    <!--/.hm-foot-icon-->
                </div>
                <!--/.single-contact-box-->
            </div>
            <!--/.col-->
        </div>
    </div>
</div>
