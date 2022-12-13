<!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url(); ?>/assets/User/images/alquran.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Kontak Kami</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                       
                        <li class="active">Kontak</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Info
    ============================================= -->
    <div class="contact-info-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Contact Info -->
                <div class="contact-info">
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="info">
                                <h4>Hubungi Kami</h4>
                                <span>+324 119 2343</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info">
                                <h4>Alamat kami</h4>
                                <span>Desa Danamulya RT RW 003/001 Kecamatan Plumbon Kabupaten Cirebon</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon" #10403a>
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info">
                                <h4>Email kami</h4>
                                <span>saungngaji@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Info -->

                <div class="seperator col-md-12">
                    <span class="border"></span>
                </div>

                <!-- Start Maps & Contact Form -->
                <div class="maps-form">
                    <div class="col-md-6 maps">
                        <h3>Lokasi Kami</h3>
                        <div class="google-maps">
                            <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Desa Danamulya Blok Jagawana RT 003 RW 001 Kecamatan Plumbon Kabupaten Cirebon&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 form">
                        <div class="heading">
                            <h3>Hubungi Kami</h3>
                            <p>
                            
                            </p>
                        </div>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Nama" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="No telepon" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Komentar *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit" style= "background-color: #10403a; color: white;">
                                        Kirim Pesan <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Maps & Contact Form -->

            </div>
        </div>
    </div>
    <!-- End Contact Info -->