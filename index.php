<!DOCTYPE html>
<html lang="eng">

<?php include('cuerpo/head.php'); ?>

<style>
    button span {
        font-weight: 800;
        font-size: 0.75rem;
        margin: 7px 20px;
        color: white;
    }

    button {
        padding: 5px 15px;
        border-radius: 4px;
    }

    .hero__btn {
        background-color: #a0a1a1;
        border: none;
        margin-top: 60px;
    }

    .hero__btn:active {
        background-color: #a0a1a1;
        border: none;
    }

    .hero__btn:hover {
        background-color: #a0a1a1;
        border: none;
    }
</style>

<body class="defult-home">

    <div id="loader" class="loader orange-color">
        <div class="loader-container">
            <div class='loader-icon'>
                <img src="img/logo_carga.png" alt="">
            </div>
        </div>
    </div>

    <div class="main-content">

        <div class="full-width-header home8-style4 main-home">

            <?php include('cuerpo/header.php'); ?>

        </div>

        <div class="rs-slider main-home">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">

                <div class="slider-content slide1" style="background: url(img/hero1.jpg); background-size:cover; position: top;">
                    <div class="container">
                        <div class="content-part">
                            <h1 class="hero__title sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms" style="margin-bottom: 20px; font-size: 4.4rem; font-weight: 200;">APRENDIZAJE QUE TRANSFORMA VIDAS</h1>
                            <div class="hero__subtitle sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms" style="color: white; font-size: 1.8rem; font-weight: 100;">El talento está formado por la suma de conocimientos,<br>competencias blandas, ética, compromiso y acción.</div>
                            <button class="hero__btn"><span>DONA AQUI</span></button>
                        </div>
                    </div>
                </div>
                <div class="slider-content slide2" style="background: url(img/hero1.jpg); background-size:cover; position: top;">
                    <div class="container">
                        <div class="content-part">
                            <h1 class="hero__title sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms" style="margin-bottom: 20px; font-size: 4.4rem; font-weight: 200;">APRENDIZAJE QUE TRANSFORMA VIDAS</h1>
                            <div class="hero__subtitle sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms" style="color: white; font-size: 1.8rem; font-weight: 100;">El talento está formado por la suma de conocimientos,<br>competencias blandas, ética, compromiso y acción.</div>
                            <button class="hero__btn"><span>DONA AQUI</span></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="rs-blog" class="rs-blog main-home pb-50 pt-50 md-pt-70 md-pb-70">
            <div class="container" style="max-width: 90%;">
                <div class="sec-title3 text-center mb-50">
                    <h2 class="title"><a class="body__a" style="color: #faa22f;font-size: 2.7rem;">ORGANIZACIÓN MUNDIAL</a><a class="body__a" style="color: #ad0909;font-size: 2.7rem;"> DE APOYO A LA EDUCACIÓN</a></h2>
                    <div class="sub-title body__t" style="font-size: 1.29rem; color: #807a7a; 
  font-weight: 600; margin-top: -25px">OMA es una asociación sin fines de lucro orientada a contribuir a la formación de profesionales íntegros y comprometidos con su país.</div>
                </div>
                <div class="row">
                    <div class="col-lg-3 padding-10">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/20.png" alt="">
                            </div>
                            <div class="blog-content" style="padding: 12px;background: #dfc1c14d; min-height: 356px">
                                <h3 class="title" style="text-align: center;color: #ad0909 !important;">CONGRESO OMA</h3>
                                <div class="desc" style="font-size: 14px; text-align: left; color: black;">
                                    Evento bianual que convoca estudiantes de alto rendimiento académico del país y latinoamérica para asistir a talleres de coaching, mentoring y foros educativos, organizados en el marco de Expomina
                                </div>
                                <div class="btn-btm" style="position:relative; bottom: 0; margin-top: 85px">
                                    <div class="rs-view-btn">
                                        <a href="#" style="color: #fc7f19; position:relative; bottom: 0;">Leer más ...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 padding-10">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/19.png" alt="">
                            </div>
                            <div class="blog-content" style="padding: 12px;background: #dfc1c14d; min-height: 356px">
                                <h3 class="title" style="text-align: center;color: #ad0909 !important;">PROGRAMA MUJERES ROCA</h3>
                                <div class="desc" style="font-size: 14px; text-align: left; color: black;">
                                    Programa en alianza con la Cámara de Comercio de Canadá, que busca contribuir a la diversidad de género en posiciones gerenciales dentro del sector minero en el Perú.
                                </div>
                                <div class="btn-btm" style="margin-top: 50px">
                                    <div class="rs-view-btn">
                                        <a href="#" style="color: #fc7f19;  position:relative; bottom: 0;">Leer más ...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 padding-10">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/18.png" alt="">
                            </div>
                            <div class="blog-content" style="padding: 12px;background: #dfc1c14d; min-height: 356px">
                                <h3 class="title" style="text-align: center;color: #ad0909 !important;">PROGRAMA DE COACHING</h3>
                                <div class="desc" style="font-size: 14px; text-align: left; color: black;">
                                    Liderazgo en valores para la comunidad <br>
                                    Desarrollo de competencias para la inserción
                                    laboral<br>
                                    Desarrollo de competencias para el docente
                                    universitario <br>
                                    Inducción a la vida universitaria
                                </div>
                                <div class="btn-btm" style="margin-top: 20px">
                                    <div class="rs-view-btn">
                                        <a href="#" style="color: #fc7f19; position:relative; bottom: 0;">Leer más ...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 padding-10">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/17.png" alt="">
                            </div>
                            <div class="blog-content" style="padding: 12px;background: #dfc1c14d; min-height: 356px">
                                <h3 class="title" style="text-align: center;color: #ad0909 !important;">ASOCIACIÓN DE OMA</h3>
                                <div class="desc" style="font-size: 14px; text-align: left; color: black;">
                                    Liderazgo en valores para la comunidad <br>
                                    Desarrollo de competencias para la inserción
                                    laboral <br>
                                    Desarrollo de competencias para el docente
                                    universitario <br>
                                    Inducción a la vida universitaria

                                </div>
                                <div class="btn-btm" style="margin-top: 50px">
                                    <div class="rs-view-btn">
                                        <a href="#" style="color: #fc7f19; position:relative; bottom: 0;">Leer más ...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div id="rs-blog" class="rs-blog main-home pb-50 pt-30 md-pt-70 md-pb-70" style="background: #d3cfcf4d;">
            <div class="container">
                <div class="sec-title3 text-center mb-30">
                    <h2 class="title body__a" style="color: #DB2323; font-size: 1.8rem;"><mark>GRACIAS A NUESTROS AUSPICIADORES</mark></h2>
                </div>
                <div class="row">
                    <div class="col-lg-1 padding-10">
                        <div class="blog-item">
                            <div class="image-part">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 padding-10">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 padding-10">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 padding-10">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 padding-10">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 padding-10">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 padding-10">
                        <div class="blog-item">
                            <div class="image-part">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
        </div>

        <br>

        <div id="rs-blog" class="rs-blog main-home pb-100 pt-30 md-pt-70 md-pb-70" style="background: #d3cfcf4d;">
            <div class="container" style="max-width: 100%;">
                <div class="sec-title3 text-center mb-30">
                    <h2 class="title body__a" style="color: #EF7917; font-size: 1.8rem;">NUESTRAS ALIANZAS</h2>
                </div>
                <div class="row">
                    <div class="col-lg-1 padding-0" style="">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/6.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 padding-0">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/7.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 padding-0">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/8.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 padding-0">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/14.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 padding-0">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/9.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 padding-0">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/9.1.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 padding-0">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/16.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 padding-0">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/10.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 padding-0">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/11.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 padding-0">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/15.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 padding-0">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/12.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 padding-0">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="imagenes/13.jpg">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
        </div>

        <br><br>

        <!--
            <div class="rs-faq-part style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 padding-0">
                          <div class=" main-part">
                            <div class="title mb-40 md-mb-15">
                                <h2 class="text-part">ORGANIZACIÓN MUNDIAL DE APOYO A LA EDUCACIÓN</h2>
                            </div>
                                <p>OMA es una asociación sin fines de lucro orientada a contribuir a la formación de profesionales íntegros y comprometidos con su país.</p>
                                <p>OMA cree en la formación integral de la persona que comprende no solo su preparación académica, sino el desarrollo de las competencias blandas y valores que contribuyen al logro de sus metas y al ejercicio responsable de su ciudadanía.</p>
                                <p>Empoderar a los jóvenes como agentes de cambio capaces de enfrentar desafíos y buscar soluciones innovadoras que aporten al bienestar y desarrollo sostenible de sus regiones y del país.</p>
                                <p>Somos parte de la evolución responsable en la sociedad y contribuimos con el futuro del país y la región. Creemos que el desarrollo de la persona como ser humano íntegro es parte de los sólidos pilares necesarios para obtener el éxito en la vida de cada joven estudiante y profesional.</p>
                          </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="img-part media-icon orange-color" style="background: url(img/17.jpg);">
                                <a class="popup-videos" href="https://www.youtube.com/watch?v=bi2EozhmeDg">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                  

            <div id="rs-categories" class="rs-categories main-home pt-90 pb-100 md-pt-60 md-pb-40">
                <div class="container">
                    <div class="sec-title3 text-center mb-45">
                        <div class="sub-title">Tú decides a dónde quieres llegar</div>
                        <h2 class="title black-color">Especialízate en las áreas con mayor demanda laboral</h2>
                    </div>
                    <div class="row mb-35">

                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="categories-items">
                                <div class="cate-images">
                                    <a href="#"><img src="img2/1.jpg" alt=""></a>
                                </div>
                                <div class="contents">
                                    <div class="img-part">
                                        <img src="iconos/7.png" alt="">
                                    </div>
                                    <div class="content-wrap">
                                        <h2 class="title"><a href="#">NOMBRE DEL CURSO</a></h2>
                                        <span class="course-qnty">20 alumnos</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="categories-items">
                                <div class="cate-images">
                                    <a href="#"><img src="img2/2.jpg" alt=""></a>
                                </div>
                                <div class="contents">
                                    <div class="img-part">
                                        <img src="iconos/7.png" alt="">
                                    </div>
                                    <div class="content-wrap">
                                        <h2 class="title"><a href="#">NOMBRE DEL CURSO</a></h2>
                                        <span class="course-qnty">20 alumnos</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="categories-items">
                                <div class="cate-images">
                                    <a href="#"><img src="img2/3.jpg" alt=""></a>
                                </div>
                                <div class="contents">
                                    <div class="img-part">
                                        <img src="iconos/7.png" alt="">
                                    </div>
                                    <div class="content-wrap">
                                        <h2 class="title"><a href="#">NOMBRE DEL CURSO</a></h2>
                                        <span class="course-qnty">20 alumnos</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="categories-items">
                                <div class="cate-images">
                                    <a href="#"><img src="img2/4.jpg" alt=""></a>
                                </div>
                                <div class="contents">
                                    <div class="img-part">
                                        <img src="iconos/7.png" alt="">
                                    </div>
                                    <div class="content-wrap">
                                        <h2 class="title"><a href="#">NOMBRE DEL CURSO</a></h2>
                                        <span class="course-qnty">20 alumnos</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="categories-items">
                                <div class="cate-images">
                                    <a href="#"><img src="img2/4.jpg" alt=""></a>
                                </div>
                                <div class="contents">
                                    <div class="img-part">
                                        <img src="iconos/7.png" alt="">
                                    </div>
                                    <div class="content-wrap">
                                        <h2 class="title"><a href="#">NOMBRE DEL CURSO</a></h2>
                                        <span class="course-qnty">20 alumnos</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="categories-items">
                                <div class="cate-images">
                                    <a href="#"><img src="img2/3.jpg" alt=""></a>
                                </div>
                                <div class="contents">
                                    <div class="img-part">
                                        <img src="iconos/7.png" alt="">
                                    </div>
                                    <div class="content-wrap">
                                        <h2 class="title"><a href="#">NOMBRE DEL CURSO</a></h2>
                                        <span class="course-qnty">20 alumnos</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="categories-items">
                                <div class="cate-images">
                                    <a href="#"><img src="img2/2.jpg" alt=""></a>
                                </div>
                                <div class="contents">
                                    <div class="img-part">
                                        <img src="iconos/7.png" alt="">
                                    </div>
                                    <div class="content-wrap">
                                        <h2 class="title"><a href="#">NOMBRE DEL CURSO</a></h2>
                                        <span class="course-qnty">20 alumnos</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="categories-items">
                                <div class="cate-images">
                                    <a href="#"><img src="img2/1.jpg" alt=""></a>
                                </div>
                                <div class="contents">
                                    <div class="img-part">
                                        <img src="iconos/7.png" alt="">
                                    </div>
                                    <div class="content-wrap">
                                        <h2 class="title"><a href="#">NOMBRE DEL CURSO</a></h2>
                                        <span class="course-qnty">20 alumnos</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 text-center">
                        <a class="readon orange-btn main-home" href="#">Ver todos los cursos</a>
                    </div>
                </div>
            </div>

            <div class="rs-cta main-home">
                <div class="partition-bg-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-6"></div>
                            <div class="col-lg-6 pl-70 md-pl-15">
                                <div class="sec-title3 mb-40">
                                    <h2 class="title white-color mb-16">Todo en una misma suscripción anual</h2>
                                    <div class="desc white-color pr-100 md-pr-0">
                                        <strong>Accede a tus cursos 24/7</strong>
                                        <br>
                                        Aprende a la hora que quieras desde donde tú elijas. ¡Sin horarios!
                                        <br>
                                        <br>
                                        <strong>Clases en vivo</strong>
                                        <br>
                                        Sesiones semanales especializadas para aprender según tu área de estudio.
                                        <br>
                                        <br>
                                        <strong>Aprende en comunidad</strong>
                                        <br>
                                        Conéctate con otros estudiantes, comparte tus proyectos y crea conexiones profesionales.
                                        <br>
                                        <br>
                                        <strong>Foros y respuestas a tus preguntas</strong>
                                        <br>
                                        Comparte tus aprendizajes y resuelve tus dudas en comunidad.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rs-faq-part style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 padding-0">
                          <div class=" main-part">
                            <div class="title mb-40 md-mb-15">
                                <h2 class="text-part">OMA PERÚ</h2>
                            </div>
                              <div class="faq-content">
                                  <div id="accordion" class="accordion">
                                     <div class="card">
                                         <div class="card-header">
                                             <a class="card-link" data-toggle="collapse" href="#collapseOne">NUESTRO COMPROMISO</a>
                                         </div>
                                         <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                             <div class="card-body">
                                                Formar estudiantes líderes y emprendedores
                                                <br>
                                                Proveer herramientas para el éxito personal
                                                <br>
                                                Capacitar estudiantes universitarios y docentes mediante talleres interactivos y charlas especializadas
                                                <br>
                                                Formar equipos de trabajo con las comunidades para apoyar a la minería responsable promoviendo la innovación y conservación del medio ambiente
                                             </div>
                                         </div>
                                     </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">CÓDIGO DE ÉTICA</a>
                                          </div>
                                          <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                OMA no tiene vínculo ni participación política, en el país o en el exterior. Es una organización sin fines de lucro, cuyo principal objetivo es contribuir de manera positiva a la formación de estudiantes universitarios y fortalecer la formación de los docentes como líderes y mentores de los estudiantes.
                                                <br>
                                                OMA fue constituida y formada con recursos propios. No tiene deudas ni pasivos.
                                                <br>
                                                OMA respeta la opinión, cultura, valores y experiencia de cada participante.
                                                <br>
                                                OMA facilita la transparencia de sus finanzas y el destino de sus contribuciones.
                                              </div>
                                          </div>
                                      </div>                                      
                                        <div class="btn-part">
                                        <a class="readon orange-btn transparent" href="#">VER MÁS INFORMACIÓN</a>
                                        </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="img-part media-icon orange-color" style="background: url(img/17.jpg);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="rs-team" class="rs-team style1 orange-color pt-50 pb-100 md-pt-64 md-pb-70 white-bg">
                <div class="container">
                      <div class="sec-title3 text-center mb-50">
                        <div class="sub-title">EXPERTOS</div>
                        <h2 class="title">NUESTRO EQUIPO DE TRABAJO</h2>
                      </div> 
                    <div class="row">

                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="img2/13.jpg" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="team-single.html">Eddy Monje</a></h4>
                                    <span class="designation">Programador y Diseñador</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="img2/14.jpg" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="team-single.html">Eddy Monje</a></h4>
                                    <span class="designation">Programador y Diseñador</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="img2/13.jpg" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="team-single.html">Eddy Monje</a></h4>
                                    <span class="designation">Programador y Diseñador</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="img2/14.jpg" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="team-single.html">Eddy Monje</a></h4>
                                    <span class="designation">Programador y Diseñador</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="img2/13.jpg" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="team-single.html">Eddy Monje</a></h4>
                                    <span class="designation">Programador y Diseñador</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="img2/14.jpg" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="team-single.html">Eddy Monje</a></h4>
                                    <span class="designation">Programador y Diseñador</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="rs-testimonial main-home pt-100 pb-100 md-pt-70 md-pb-70" style="background: url(img/23.jpg);">
                <div class="container">
                    <div class="sec-title3 mb-50 md-mb-30 text-center">
                        <div class="sub-title primary">TESTIMONIOS</div>
                        <h2 class="title white-color">DE NUESTROS ALUMNOS</h2>
                    </div>
                    <div class="rs-carousel owl-carousel" 
                        data-loop="true" 
                        data-items="2" 
                        data-margin="30" 
                        data-autoplay="true" 
                        data-hoverpause="true" 
                        data-autoplay-timeout="5000" 
                        data-smart-speed="800" 
                        data-dots="true" 
                        data-nav="false" 
                        data-nav-speed="false" 

                        data-md-device="2" 
                        data-md-device-nav="false" 
                        data-md-device-dots="true" 
                        data-center-mode="false"

                        data-ipad-device2="1" 
                        data-ipad-device-nav2="false" 
                        data-ipad-device-dots2="true"

                        data-ipad-device="2" 
                        data-ipad-device-nav="false" 
                        data-ipad-device-dots="true" 

                        data-mobile-device="1" 
                        data-mobile-device-nav="false" 
                        data-mobile-device-dots="false">

                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="img/24.png" alt="">
                                El taller de coaching desarrollado fue un gran aprendizaje que me ayudo a realizar una evaluación personal, para poder mejorar en todos los aspectos que se presentan tanto en el ámbito personal y profesional. Bajo ello, el taller fue de mucha ayuda porque descubrió el potencial que puedo emplear en servicio de la sociedad para un Perú diferente.
                                </div>
                                <div class="author-img">
                                    <img src="img/25.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Christian Felipa Galán</a>
                                <span class="designation">Universidad Nacional Mayor de San Marcos</span>
                            </div>
                        </div>

                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="img/24.png" alt="">
                                Realmente fue una de las mejores experiencias que tuve en mi vida. Poder compartir, trabajar en equipo, y liderar; nos ayuda mucho a desarrollarnos como estudiantes y profesionales, obteniendo un buen desempeño en el campo laboral.
                                </div>
                                <div class="author-img">
                                    <img src="img/25.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">David Frantzen Contreras</a>
                                <span class="designation">Universidad Privada del Norte</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="rs-blog" class="rs-blog main-home pb-100 pt-100 md-pt-70 md-pb-70">
                <div class="container">  
                      <div class="sec-title3 text-center mb-50">
                        <div class="sub-title">MANTENTE ACTUALIZADO</div>
                        <h2 class="title">NUESTRO BLOG Y NOTICIAS</h2>
                      </div> 
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">

                        <div class="blog-item">
                            <div class="image-part">
                                <img src="img2/7.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i>Eddy Monje</li>
                                    <li><i class="fa fa-calendar"></i>05/01/2022</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Titulo titulo titulo titulo</a></h3>
                                <div class="desc">
                                    Descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion
                                </div>
                                <div class="btn-btm">
                                    <div class="rs-view-btn">
                                        <a href="#">Leer más ...</a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="blog-item">
                            <div class="image-part">
                                <img src="img2/8.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i>Eddy Monje</li>
                                    <li><i class="fa fa-calendar"></i>05/01/2022</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Titulo titulo titulo titulo</a></h3>
                                <div class="desc">
                                    Descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion
                                </div>
                                <div class="btn-btm">
                                    <div class="rs-view-btn">
                                        <a href="#">Leer más ...</a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="blog-item">
                            <div class="image-part">
                                <img src="img2/9.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i>Eddy Monje</li>
                                    <li><i class="fa fa-calendar"></i>05/01/2022</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Titulo titulo titulo titulo</a></h3>
                                <div class="desc">
                                    Descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion
                                </div>
                                <div class="btn-btm">
                                    <div class="rs-view-btn">
                                        <a href="#">Leer más ...</a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                     </div>
                </div>
                <br>
                <div class="col-lg-12 text-center">
                    <a class="readon orange-btn main-home" href="blog.php">Ver todo el blog</a>
                </div>
            </div>
        -->

        <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                            <div class="content-part">
                                <div class="sec-title">
                                    <div class="title-icon md-mb-15">
                                        <img src="iconos/10.png" alt="images">
                                    </div>
                                    <h2 class="title mb-0 white-color">Suscribete para la<br>Asociación OMA</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <form class="newsletter-form">
                                <input type="email" name="email" placeholder="Correo Electrónico" required="">
                                <button type="submit" style="border-radius: 0;">ENVIAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include('cuerpo/footer.php'); ?>

</body>

</html>