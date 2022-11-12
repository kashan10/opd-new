@extends('layout')
   
   @section('content')
       
   
   <!-- carousel slide -->
    <section id="carousel">
        <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="bg-light border rounded border-light pulse animated hero-nature carousel-hero jumbotron py-5 px-4">
                        <h1 class="hero-title">Hero Nature</h1>
                        <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-light border rounded border-light pulse animated hero-photography carousel-hero jumbotron py-5 px-4">
                        <h1 class="hero-title">Hero Photography</h1>
                        <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="bg-light border rounded border-light pulse animated hero-technology carousel-hero jumbotron py-5 px-4">
                        <h1 class="hero-title">Hero Technology</h1>
                        <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2" class="active"></li>
            </ol>
        </div>
    </section>

    
     <section class="p-2">  

       <div class="container-md ">

        
           <h5 class="mt-3 mb-3">Performance score</h5>

             <div class="border p-2 rounded d-flex col " style="float: left;width: 370px; height: 140px;">

              <div class="p-1 px-4 d-flex flex-column align-items-center score rounded">
                  <span class="d-block char text-success">A</span>
                  <span class="text-success">98%</span>
              </div>


              <div class="ml-2 p-3">
                  <h6 class="heading1">PageSpeed Score</h6>
                  <span>The average page speed score is 75%</span> 
               </div>
             </div>


             <div class="border p-2 rounded d-flex col " style="float: left;width: 370px; height: 140px;">

                <div class="p-1 px-4 d-flex flex-column align-items-center score rounded">
                    <span class="d-block char text-success">A</span>
                    <span class="text-success">98%</span>
                </div>
  
  
                <div class="ml-2 p-3">
                    <h6 class="heading1">PageSpeed Score</h6>
                    <span>The average page speed score is 75%</span> 
                 </div>
               </div>



           <div class="border p-2 rounded d-flex col " style="float:left;width: 370px; height: 140px;">
               <div class="p-1 px-4 d-flex flex-column align-items-center speed rounded">
                    <span class="d-block char text-warning">C</span>
                     <span class="text-warning">72%</span>
                </div>

                <div class="ml-2 p-4">
                      <h6 class="text">YSlow Score</h6>
                     <span>The average YSlow score is 76%</span>   
                </div>
           </div>       
      </div>
    </section>
    <section style="padding-top: 200px;">

        <div id="main" class="container">
            <div class="row">
            <div class="text-start col-sm-6" id="info" style="">
                <img id="ventaspro-logo p-1" src="assets/img/ventaspro.png" width="100" height="45">
                <div class="" style="position:absolute;top:10%;left: 10%;">
                    <p class="text-center">Ponte en contacto con nosotros</p>

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Appointment</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">registration</button>
                        </li>
                        
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                            <form class="" id="">
                                <div class="mb-2"><label class="form-label" id="lbl-nombre" for="txt-nombre">Nombre</label><input class="form-control" type="text" id="txt-nombre" required="" minlength="3" maxlength="50"></div>
                                <div class="mb-2"><label class="form-label" id="lbl-email" for="txt-email">E-Mail</label><input class="form-control" type="text" id="txt-email" inputmode="email" required="" minlength="3" maxlength="50"></div>
                                <div class="mb-2"><label class="form-label" id="lbl-telefono" for="txt-telefono">Teléfono | Celular</label><input class="form-control" type="text" id="txt-telefono" required="" minlength="3" maxlength="13" inputmode="tel"></div>
                                <div class="mb-2"><label class="form-label" id="lbl-consulta" for="txt-consulta">Consulta</label><textarea class="form-control form-control-lg" id="txt-consulta" rows="3"></textarea></div>
                            </form>
                            <button class="btn btn-primary" id="btn-contacto" type="submit" style="--bs-primary: #256db4;--bs-primary-rgb: 37,109,180;background: #256db4;">Enviar Consulta</button>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <form class="" id="">
                                <div class="mb-2"><label class="form-label" id="lbl-nombre" for="txt-nombre">Nombre</label><input class="form-control" type="text" id="txt-nombre" required="" minlength="3" maxlength="50"></div>
                                <div class="mb-2"><label class="form-label" id="lbl-email" for="txt-email">E-Mail</label><input class="form-control" type="text" id="txt-email" inputmode="email" required="" minlength="3" maxlength="50"></div>
                                <div class="mb-2"><label class="form-label" id="lbl-telefono" for="txt-telefono">Teléfono | Celular</label><input class="form-control" type="text" id="txt-telefono" required="" minlength="3" maxlength="13" inputmode="tel"></div>
                                <div class="mb-2"><label class="form-label" id="lbl-consulta" for="txt-consulta">Consulta</label><textarea class="form-control form-control-lg" id="txt-consulta" rows="3"></textarea></div>
                            </form>
                            <button class="btn btn-primary" id="btn-contacto" type="submit" style="--bs-primary: #256db4;--bs-primary-rgb: 37,109,180;background: #256db4;">Enviar Consulta</button>
                        </div>
                        
                      </div>

                
                </div>
                
            </div>
           

            </div>
        </div>

    </section>
    <!-- service area -->
    <section id="services" class="services">
        <div class="container-md section-title">
            <div class="text-center">
                <h5 class="d-inline-block justify-content-lg-center" style="background-color: #e2d6b5;width: 120px;margin-left: 0px;border-radius: 30px;padding: 5px;margin-top: 20px;color: #ffffff;font-size: 18px;">SERVICES</h5>
                <h2 style="color: #75aadb;">We Offer Awesome<span style="color: #d12d33;"><strong>&nbsp;Services</strong></span></h2>
                <p class="d-inline-block" style="width: 50%;"><strong>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</strong><br>&nbsp; &nbsp;&nbsp;</p>
            </div>
            <div class="row">
                <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="text-center icon-box">
                        <div class="icon"><i class="fab fa-dribbble" style="margin-bottom: 15px;"></i>
                            <h4 class="title">Lorem Ipsum<a href="#"></a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="text-center icon-box">
                        <div class="icon"><i class="fab fa-renren" style="margin-bottom: 15px;"></i>
                            <h4 class="title">Lorem Ipsum<a href="#"></a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="text-center icon-box">
                        <div class="icon"><i class="fab fa-codepen" style="margin-bottom: 15px;"></i>
                            <h4 class="title">Lorem Ipsum<a href="#"></a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="text-center icon-box">
                        <div class="icon"><i class="fab fa-telegram" style="margin-bottom: 15px;"></i>
                            <h4 class="title">Lorem Ipsum<a href="#"></a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <section class="card-section-imagia">
            <h1>Our team</h1>
            <h2>Posset maiora firmatum nunc cuniculis</h2>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container-imagia">
                            <div class="card-imagia">
                                <div class="front-imagia">
                                    <div class="cover-imagia"><img alt="" src="https://unsplash.it/720/500?image=1067"></div>
                                    <div class="user-imagia"><img class="img-circle" alt="" src="https://unsplash.it/120/120?image=64"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">John Doe</h3>
                                        <p class="subtitle-imagia">Subtitle </p>
                                        <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves.</em></p>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div class="back-imagia">
                                    <div class="content-imagia content-back-imagia">
                                        <div>
                                            <h3 class="text-center">Lorem Ipsum</h3>
                                            <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                        </div>
                                    </div>
                                    <div class="footer-imagia">
                                        <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container-imagia">
                            <div class="card-imagia">
                                <div class="front-imagia">
                                    <div class="cover-imagia cover-gradient"></div>
                                    <div class="user-imagia"><img class="img-circle" alt="" src="https://unsplash.it/120/120?image=64"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">John Doe</h3>
                                        <p class="subtitle-imagia">Subtitle </p>
                                        <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves. </em></p>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div class="back-imagia">
                                    <div class="content-imagia content-back-imagia">
                                        <div>
                                            <h3 class="text-center">Lorem Ipsum</h3>
                                            <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                        </div>
                                    </div>
                                    <div class="footer-imagia">
                                        <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container-imagia">
                            <div class="card-imagia">
                                <div class="front-imagia">
                                    <div class="cover-imagia"><img alt="" src="https://unsplash.it/720/500?image=1067"></div>
                                    <div class="user-imagia"><img class="img-circle" alt="" src="https://unsplash.it/120/120?image=64"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">John Doe</h3>
                                        <p class="subtitle-imagia">Subtitle </p>
                                        <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves. </em></p>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div class="back-imagia">
                                    <div class="content-imagia content-back-imagia">
                                        <div>
                                            <h3 class="text-center">Lorem Ipsum</h3>
                                            <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                        </div>
                                    </div>
                                    <div class="footer-imagia">
                                        <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000" id="carousel-t">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="col-9 text-center mx-auto testimonial-content"><img class="rounded-circle" src="assets/img/Testimonial%20male%20white.svg" width="100">
                        <p class="text-center rating">5&nbsp;<i class="fa fa-star"></i></p>
                        <p class="text-center"><em>"Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae.&nbsp;Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae."</em><br></p>
                        <p class="signature">John D.</p>
                        <p class="text-center date">April 21, 2014<br></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-9 offset-xl-1 text-center mx-auto testimonial-content"><img class="rounded-circle" src="assets/img/Testimonial%20female%20white.svg" width="100">
                        <p class="text-center rating">5&nbsp;<i class="fa fa-star"></i></p>
                        <p class="text-center"><em>"Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae.&nbsp;Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae."</em><br></p>
                        <p class="signature">Jane D.</p>
                        <p class="text-center date">April 21, 2014<br></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-9 offset-xl-1 text-center mx-auto testimonial-content"><img class="rounded-circle" src="assets/img/Testimonial%20male%20blue.svg" width="100">
                        <p class="text-center rating">5&nbsp;<i class="fa fa-star"></i></p>
                        <p class="text-center"><em>"Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae.</em><br></p>
                        <p class="signature">Jane D.</p>
                        <p class="text-center date">April 21, 2014<br></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-9 offset-xl-1 text-center mx-auto testimonial-content"><img class="rounded-circle" src="assets/img/Testimonial%20female%20blue.svg" width="100">
                        <p class="text-center rating">5&nbsp;<i class="fa fa-star"></i></p>
                        <p class="text-center"><em>"Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae.&nbsp;Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam.</em><br></p>
                        <p class="signature">Jane D.</p>
                        <p class="text-center date">April 21, 2014<br></p>
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-t" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-t" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-t" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-t" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-t" data-bs-slide-to="2"></li>
                <li data-bs-target="#carousel-t" data-bs-slide-to="3"></li>
            </ol>
        </div><div class="blog-home3 py-5">
      <div class="container">
        <!-- Row  -->
        <div class="row justify-content-center">
          <!-- Column -->
          <div class="col-md-8 text-center">
            <h3 class="my-3">Latest News and Blog</h3>
            <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer services will be great experience for you without doubt</h6>
          </div>
          <!-- Column -->
          <!-- Column -->
        </div>
        <div class="row mt-4">
          <!-- Column -->
          <div class="col-lg-6">
            <div class="card border-0 mb-4">
              <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img4.jpg" alt="wrappixel kit"></a>
              <div class="date-pos text-center text-white p-3 bg-success-gradiant">JOHN DOE &nbsp; &nbsp; SEPT 15, 2017</div>
              <h5 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">Techonologies started to change Drastically</a></h5>
              <p class="m-t-20">You can relay on our amazing features list and also our customer services will be great experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
          </div>
          <!-- Column -->
          <div class="col-lg-6">
            <div class="row">
              <!-- Column -->
              <div class="col-md-6">
                <div class="card border-0 mb-4">
                  <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img5.jpg" alt="wrappixel kit"></a>
                  <div class="date-pos text-center text-white p-3 bg-success-gradiant">JOHN DOE &nbsp; &nbsp; SEPT 15, 2017</div>
                  <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">New Seminar on Newest Food Recipe</a></h6>
                </div>
              </div>
              <!-- Column -->
              <div class="col-md-6">
                <div class="card border-0 mb-4">
                  <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img6.jpg" alt="wrappixel kit"></a>
                  <div class="date-pos text-center text-white p-3 bg-success-gradiant">JOHN DOE &nbsp; &nbsp; SEPT 15, 2017</div>
                  <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">New Seminar on Newest Food Recipe</a></h6>
                </div>
              </div>
              <!-- Column -->
              <div class="col-md-6">
                <div class="card border-0 mb-4">
                  <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img7.jpg" alt="wrappixel kit"></a>
                  <div class="date-pos text-center text-white p-3 bg-success-gradiant">JOHN DOE &nbsp; &nbsp; SEPT 15, 2017</div>
                  <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">New Seminar on Newest Food Recipe</a></h6>
                </div>
              </div>
              <!-- Column -->
              <div class="col-md-6">
                <div class="card border-0 mb-4">
                  <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img8.jpg" alt="wrappixel kit"></a>
                  <div class="date-pos text-center text-white p-3 bg-success-gradiant">JOHN DOE &nbsp; &nbsp; SEPT 15, 2017</div>
                  <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">New Seminar on Newest Food Recipe</a></h6>
                </div>
              </div>
              <!-- Column -->
            </div>
          </div>
          <!-- Column -->
        </div>
      </div>
    </div><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    
  @endsection