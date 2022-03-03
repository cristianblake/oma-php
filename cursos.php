<!DOCTYPE html>
<html lang="eng">

	<?php include('cuerpo/head.php'); ?>

	<body class="defult-home">
			
        <div class="full-width-header home8-style4 main-home">
                
                <?php include('cuerpo/header.php'); ?>

            </div>

		<div class="main-content">

			<div class="rs-breadcrumbs breadcrumbs-overlay">
                    <div class="breadcrumbs-img">
                            <img src="img/30.png">
                    </div>
					<div class="breadcrumbs-text white-color">
						<br>
						<br>
						<br>
							<h1 class="page-title">Cursos</h1>
							<ul>
								<li>
									<a class="active" href="./">Inicio</a>
								</li>
								<li>Cursos</li>
							</ul>
					</div>
			</div>

            <div class="rs-popular-courses style1 course-view-style orange-color rs-inner-blog white-bg pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <div class="widget-area">
                                <div class="search-widget mb-50">
                                    <h3 class="widget-title">Buscar Curso</h3>
                                    <div class="search-wrap">
                                        <input type="search" placeholder="Curso" name="s" class="search-input" value="">
                                        <button type="submit" value="Search"><i class=" flaticon-search"></i></button>
                                    </div>
                                </div>
                                <div class="widget-archives mb-50">
                                    <h3 class="widget-title">Filtrar por:</h3>
                                    <div class="filter-widget">

                                        <div class="filter-form">
                                            <form method="post" action="mailer.php">
                                                <div class="single-filter mb-30">
                                                    <h5>CATEGORÍAS</h5>

                                                    <div class="radio-box form-group">
                                                        <input type="radio" name="skill" id="type1" value="Ilustración" checked> 
                                                        <label for="type1">Ilustración</label>
                                                    </div>
                                                    
                                                    <div class="radio-box form-group">
                                                        <input type="radio" name="skill" id="type2" value="Diseño"> 
                                                        <label for="type2">Diseño</label>
                                                    </div>
                                                    
                                                    <div class="radio-box form-group">
                                                        <input type="radio" name="skill" id="type3" value="Animación"> 
                                                        <label for="type3">Animación</label>
                                                    </div>
                                                    
                                                    <div class="radio-box form-group">
                                                        <input type="radio" name="skill" id="type4" value="Moda"> 
                                                        <label for="type4">Moda</label>
                                                    </div>

                                                </div>
                                                
                                                <div class="single-filter mb-30">
                                                    <h5>NIVEL DE PRECIOS</h5>

                                                    <div class="radio-box form-group">
                                                        <input type="radio" name="price" id="type4" value="comunes" checked> 
                                                        <label for="type4">Costo comunes (53)</label>
                                                    </div>

                                                    <div class="radio-box form-group">
                                                        <input type="radio" name="price" id="type5" value="Promociones"> 
                                                        <label for="type5">Promociones (21)</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="single-filter mb-30">
                                                    <h5>TIEMPO DEL CURSO</h5>

                                                    <div class="radio-box form-group">
                                                        <input type="radio" name="duration" id="type6" value="5" checked> 
                                                        <label for="type6">5 horas (30)</label>
                                                    </div>

                                                    <div class="radio-box form-group">
                                                        <input type="radio" name="duration" id="type7" value="10"> 
                                                        <label for="type7">10 horas (20)</label>
                                                    </div>

                                                    <div class="radio-box form-group">
                                                        <input type="radio" name="duration" id="type8" value="15"> 
                                                        <label for="type8">15 horas (5)</label>
                                                    </div>
                                                </div>

                                                <div class="single-filter mb-30">
                                                    <h5>TIPO DE CURSOS</h5>
                                                    <div class="check-box form-group mb-0">
                                                        <input type="checkbox" name="course" id="check1" value="check1" checked>
                                                        <label for="check1">Edición de Imagenes</label>
                                                    </div>
                                                    <div class="check-box form-group mb-0">
                                                        <input type="checkbox" name="course" id="check2" value="check2">
                                                        <label for="check2">Edición de Videos</label>
                                                    </div>
                                                    <div class="check-box form-group mb-0">
                                                        <input type="checkbox" name="course" id="check3" value="check3">
                                                        <label for="check3">CSS3 + HTML5</label>
                                                    </div>
                                                    <div class="check-box form-group mb-0">
                                                        <input type="checkbox" name="course" id="check4" value="check4">
                                                        <label for="check4">Vue JS</label>
                                                    </div>
                                                    <div class="check-box form-group mb-0">
                                                        <input type="checkbox" name="course" id="check5" value="check5">
                                                        <label for="check5">Fotografia</label>
                                                    </div>
                                                    <div class="check-box form-group mb-0">
                                                        <input type="checkbox" name="course" id="check6" value="check6">
                                                        <label for="check6">Ensamblaje</label>
                                                    </div>
                                                </div> 

                                                <div class="single-filter mb-30">
                                                    <h5>Profesor</h5>
                                                    <div class="check-box form-group mb-0">
                                                        <input type="checkbox" id="check8" name="check8" value="check8" checked>
                                                        <label for="check8">Eddy Monje</label>
                                                    </div>
                                                    <div class="check-box form-group mb-0">
                                                        <input type="checkbox" id="check9" name="check9" value="check9">
                                                        <label for="check9">Angel Rojas</label>
                                                    </div>
                                                    <div class="check-box form-group mb-0">
                                                        <input type="checkbox" id="check10" name="check10" value="check10">
                                                        <label for="check10">Leonardo Cotrina</label>
                                                    </div>
                                                    <div class="check-box form-group mb-0">
                                                        <input type="checkbox" id="check11" name="check11" value="check11">
                                                        <label for="check11">Eduardo Contreras</label>
                                                    </div>
                                                    <div class="check-box form-group mb-0">
                                                        <input type="checkbox" id="check12" name="check12" value="check12">
                                                        <label for="check12">Grisell Estrada</label>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <input class="readon2 orange" type="submit" value="ENVIAR">
                                                </div>                                                    
                                            </form>
                                        </div>                                 
                                    </div>
                                </div>  
                                <div class="widget-archives mb-50">
                                    <h3 class="widget-title">CURSOS SEGÚN</h3>
                                    <ul class="categories">
                                        <li><a href="#">Colegios</a></li>
                                        <li><a href="#">Academias</a></li>
                                        <li><a href="#">Institutos</a></li>
                                        <li><a href="#">Universidades</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">                      
                            <div class="course-search-part">
                                <div class="course-view-part">
                                    <div class="view-icons"> 
                                        <a href="#" class="view-grid mr-10"><i class="fa fa-th-large"></i></a> 
                                        <a href="#" class="view-list"><i class="fa fa-list-ul"></i></a>
                                    </div>
                                    <div class="view-text">Crusos 1 - 8 de 30 resultados</div>
                                </div>
                                <div class="type-form">
                                    <form method="post" action="">
                                        
                                        <div class="form-group mb-0">
                                            <div class="custom-select-box">
                                                <select id="timing">
                                                    <option>Esta semana</option>
                                                    <option>Este mes</option>
                                                    <option>Siempre</option>
                                                </select>
                                            </div>   
                                        </div>
                                    </form>
                                </div>
                            </div>
                                <div class="rs-popular-courses main-home event-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="media-icon">
                                    <img class="video-img" src="assets/images/courses/main-home/1.jpg">
                                    <a style="position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #ffffff;
  background: #ff5421;
  width: 70px;
  height: 70px;
  border-radius: 100%;
  text-align: center;font-size: 30px;
  line-height: 70px;" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                                        <i class="fa fa-play"></i>
                                    </a>
                                        
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price" style="z-index: 1;">S/000.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Sketchbook de retrato: explora el rostro humano</a></h3>
                                        <p>Descubre las bases del retrato, aprende a dibujar los rasgos faciales y sigue tu...</p>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Estudiantes                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                5 secciones                                       
                                            </li>
                                        </ul>  
                                        <br>   
                                        <a class="readon orange-btn main-home text-center" href="#" style="width: 100%;">S/000.00</a>
                                    </div>
                                </div>
                           </div>
                        </div>

                        <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                              <div class="modal-body">

                                               <iframe width="100%" height="315" src="https://www.youtube.com/embed/bi2EozhmeDg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <br><br>

                                            <div class="container">
                                                <div class="row">
                                                <div class="col-lg-7 col-md-12">
                                               <h3 class="title"><a href="#">Sketchbook de retrato: explora el rostro humano</a></h3>
                                                <p>
                                                <strong>Aprende a crear un model sheet completo a lápiz, utilizando técnicas de proporción, volumen y movimiento</strong>
                                                <br>
                                                Descubre las bases del retrato, aprende a dibujar los rasgos faciales y sigue tu, descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion...
                                                </p>
                                                <a href="#" style="width: 100%;">Más información <i class="fa fa-long-arrow-right"></i></a>
                                            </div>

                                                <div class="col-lg-5 col-md-12">
                                                    <a class="readon orange-btn main-home text-center" href="#" style="width: 100%;">COMPRAR</a>
                                                    <br><br>
                                                <p>Descubre las bases del retrato, aprende a dibujar los rasgos faciales y sigue tu ...</p>
                                                <div class="course-features-info">
                                    <ul>
                                        <li class="lectures-feature">
                                            <i class="fa fa-files-o"></i>
                                            <span class="label">Secciones</span>
                                            <span class="value">6</span>
                                        </li>
                                       
                                        <li class="quizzes-feature">
                                            <i class="fa fa-puzzle-piece"></i>
                                            <span class="label">Modulos</span>
                                            <span class="value">3</span>
                                        </li>
                                       
                                        <li class="duration-feature">
                                            <i class="fa fa-clock-o"></i>
                                            <span class="label">Duración</span>
                                            <span class="value">3 meses</span>
                                        </li>
                                      
                                        <li class="students-feature">
                                            <i class="fa fa-users"></i>
                                            <span class="label">Estudiantes</span>
                                            <span class="value">30</span>
                                        </li>

                                    </ul>
                                </div>
                                            </div></div></div>

                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                        <div class="col-lg-6 col-md-6">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/main-home/1.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">S/000.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Sketchbook de retrato: explora el rostro humano</a></h3>
                                        <p>Descubre las bases del retrato, aprende a dibujar los rasgos faciales y sigue tu...</p>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Estudiantes                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                5 secciones                                       
                                            </li>
                                        </ul>  
                                        <br>   
                                        <a class="readon orange-btn main-home text-center" href="#" style="width: 100%;">S/000.00</a>
                                    </div>
                                </div>
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/main-home/1.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">S/000.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Sketchbook de retrato: explora el rostro humano</a></h3>
                                        <p>Descubre las bases del retrato, aprende a dibujar los rasgos faciales y sigue tu...</p>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Estudiantes                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                5 secciones                                       
                                            </li>
                                        </ul>  
                                        <br>   
                                        <a class="readon orange-btn main-home text-center" href="#" style="width: 100%;">S/000.00</a>
                                    </div>
                                </div>
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/main-home/1.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">S/000.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Sketchbook de retrato: explora el rostro humano</a></h3>
                                        <p>Descubre las bases del retrato, aprende a dibujar los rasgos faciales y sigue tu...</p>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Estudiantes                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                5 secciones                                       
                                            </li>
                                        </ul>  
                                        <br>   
                                        <a class="readon orange-btn main-home text-center" href="#" style="width: 100%;">S/000.00</a>
                                    </div>
                                </div>
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/main-home/1.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">S/000.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Sketchbook de retrato: explora el rostro humano</a></h3>
                                        <p>Descubre las bases del retrato, aprende a dibujar los rasgos faciales y sigue tu...</p>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Estudiantes                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                5 secciones                                       
                                            </li>
                                        </ul>  
                                        <br>   
                                        <a class="readon orange-btn main-home text-center" href="#" style="width: 100%;">S/000.00</a>
                                    </div>
                                </div>
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/main-home/1.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">S/000.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Sketchbook de retrato: explora el rostro humano</a></h3>
                                        <p>Descubre las bases del retrato, aprende a dibujar los rasgos faciales y sigue tu...</p>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Estudiantes                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                5 secciones                                       
                                            </li>
                                        </ul>  
                                        <br>   
                                        <a class="readon orange-btn main-home text-center" href="#" style="width: 100%;">S/000.00</a>
                                    </div>
                                </div>
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/main-home/1.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">S/000.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Sketchbook de retrato: explora el rostro humano</a></h3>
                                        <p>Descubre las bases del retrato, aprende a dibujar los rasgos faciales y sigue tu...</p>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Estudiantes                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                5 secciones                                       
                                            </li>
                                        </ul>  
                                        <br>   
                                        <a class="readon orange-btn main-home text-center" href="#" style="width: 100%;">S/000.00</a>
                                    </div>
                                </div>
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/main-home/1.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">S/000.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Sketchbook de retrato: explora el rostro humano</a></h3>
                                        <p>Descubre las bases del retrato, aprende a dibujar los rasgos faciales y sigue tu...</p>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Estudiantes                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                5 secciones                                       
                                            </li>
                                        </ul>  
                                        <br>   
                                        <a class="readon orange-btn main-home text-center" href="#" style="width: 100%;">S/000.00</a>
                                    </div>
                                </div>
                           </div>
                        </div>

                </div>
            </div>

                            </div>
                            <div class="pagination-area orange-color text-center mt-30 md-mt-0">
                                <ul class="pagination-part">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">Siguiente<i class="fa fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
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
                                       <h2 class="title mb-0 white-color">Suscribete para más información</h2>
                                   </div>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <form class="newsletter-form">
                                    <input type="email" name="email" placeholder="Correo Electrónico" required="">
                                    <button type="submit">ENVIAR</button>
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