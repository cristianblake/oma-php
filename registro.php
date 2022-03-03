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
							<h1 class="page-title">Registrarse</h1>
							<ul>
								<li>
									<a class="active" href="./">Inicio</a>
								</li>
								<li>Registrarse</li>
							</ul>
					</div>
			</div>
            <section class="register-section pt-100 pb-100">
                <div class="container">
                    <div class="register-box">
                        
                        <div class="sec-title text-center mb-30">
                            <h2 class="title mb-10">Crear una cuenta</h2>
                        </div>
                        
                        <div class="styled-form">
                            <div id="form-messages"></div>
                            <form id="contact-form" method="post" action="">                               
                                <div class="row clearfix">        

                                    <div class="form-group col-lg-12 mb-25">
                                        <input type="text" id="Name" name="First Name" value="" placeholder="Nombres" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12">
                                        <input type="text" id="last" name="lname" value="" placeholder="Apellidos" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12">
                                        <input type="email" id="email" name="email" value="" placeholder="Correo Electrónico" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12">
                                        <input type="text" id="user" name="phone_number" value="" placeholder="Usuario" required>
                                    </div>    

                                    <div class="form-group col-lg-12">
                                        <input type="text" id="puser" name="Password" value="" placeholder="Contraseña" required>
                                    </div>    

                                    <div class="form-group col-lg-12">
                                        <input type="text" id="Confirm" name="Confirm Password" value="" placeholder="Confirmar Contraseña" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="readon register-btn"><span class="txt">Ingresar</span></button>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="users">¿Ya tienes una cuenta? <a href="login.php">Ingresar</a></div>
                                    </div>
                                    
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
            </section>

			
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