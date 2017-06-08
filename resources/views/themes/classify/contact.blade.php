@extends('themes.classify.base')

@section('content')
<!-- Start Breadcrumb -->
            <div class="page-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 style="color:white"><b>CONTACTO</b></h1>
                            <div class="breadcrumb">
                                <a href="/" title="Volver a la página principal">Inicio</a>
                                <span class="delimeter">/</span>
                                <span class="current">Contacto</span>
                                <div>
                                  <span class='st_facebook_large' displayText='Facebook' ></span>
                                  <span class='st_googleplus_large' displayText='Google +' ></span>
                                  <span class='st_linkedin_large' displayText='LinkedIn' ></span>
                                  <span class='st_twitter_large' displayText='Tweet' ></span>
                                  <span class='st_pinterest_large' displayText='Pinterest' ></span>
                                  <span class='st_fblike_large' displayText='Facebook Like' ></span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb -->



            <!-- Start Map-->
            <section>
                <div class="map-box clearfix">
                    <div id="map_container">
                        <div id="map_classify" style="height:400px;"></div>
                    </div>
                </div>
            </section>
            <!-- End Map-->

                     <section class="main-contain bg-white">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <div class="single-contact-option text-center">
                                        <a href="https://www.facebook.com/1810-Consultores-SAC-1313218335433677/?ref=bookmarks" target="new"><i class="fa fa-facebook"></i>
                                        <h6>Facebook</h6></a>

                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-12 ">
                                    <div class="single-contact-option text-center">
                                       <a href="https://twitter.com/Consultores1810" target="new"><i class="fa fa-twitter"></i>
                                        <h6>Twitter</h6></a>

                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <div class="single-contact-option text-center">
                                      <a href="https://plus.google.com/u/0/b/107767508324625280773/107767508324625280773" target="new"><i class="fa fa-google-plus"></i>
                                        <h6>Google+</h6></a>

                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <div class="single-contact-option text-center">
                                        <a href="https://www.linkedin.com/company/16251588" target="new"><i class="fa fa-linkedin"></i>
                                        <h6>Linkedin</h6></a>

                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <div class="single-contact-option text-center">
                                      <a href="https://es.pinterest.com/1810consultores/" target="new"><i class="fa fa-pinterest"></i>
                                        <h6>Pinterest</h6></a>

                                    </div>
                                  </div>
                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                        <div class="single-contact-option text-center">
                                          <a href="https://www.youtube.com/channel/UCeVKSkZTRlNrUwpvB1j5rQw" target="new"><i class="fa fa-youtube"></i>
                                            <h6>youtube</h6></a>

                                        </div>
                            </div>
                        </div>
                    </section>



@endsection
