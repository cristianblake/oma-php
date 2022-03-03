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
							<h1 class="page-title">Checkout</h1>
							<ul>
								<li>
									<a class="active" href="./">Inicio</a>
								</li>
								<li>Checkout</li>
							</ul>
					</div>
			</div>

            <div id="rs-checkout" class="rs-checkout orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                 <div class="container">
                     <div class="coupon-toggle">
                         <div id="accordion" class="accordion">
                             <div class="card">
                                 <div class="card-header" id="headingOne">
                                     <div class="card-title">
                                         <span><i class="fa fa-window-maximize"></i> ¿Tienes un cupón?</span>
                                         <button class="accordion-toggle" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Presiona aquí para ingresarlo</button>
                                     </div>
                                 </div>
                                 <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                     <div class="card-body">
                                         <p>Sección válida sólo para cupones</p>
                                         <div class="coupon-code-input">
                                             <input type="text" name="coupon_code" placeholder="Cupon" required="">
                                         </div>
                                         <button class="btn-shop orange-color" type="submit">Aplicar</button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="full-grid">
                         <form>
                             <div class="billing-fields">
                                 <div class="checkout-title">
                                     <h3>Detalles del Comprador</h3>
                                 </div>
                                 <div class="form-content-box">
                                     <div class="row">
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Nombres *</label>
                                                 <input id="fname" name="fname" class="form-control-mod" type="text" required="">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Apellidos *</label>
                                                 <input id="lname" name="lname" class="form-control-mod" type="text" required="">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Empresa (Opcional)</label>
                                                 <input id="cname" name="cname" class="form-control-mod" type="text">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Distrito *</label>
                                                 <select class="d-block" required="">
                                                     <option value="">Lima</option>
                                                     <option value="">Santa Anita</option>
                                                     <option value="">El Agustino</option>
                                                     <option value="">Miraflores</option>
                                                     <option value="">Villa el Salvador</option>
                                                 </select>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Dirección *</label>
                                                 <input id="hnumber" name="hnumber" class="form-control-mod margin-bottom" type="text" placeholder="Detallar dirección" required="">
                                                 <input id="hnumber-2" name="hnumber" class="form-control-mod" type="text" placeholder="Referencia (Opcional)">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Telefono / Celular *</label>
                                                 <input id="number" name="number" class="form-control-mod" type="text" required="">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Correo Electrónico *</label>
                                                 <input id="email" name="email" class="form-control-mod" type="email" required="">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="additional-fields">
                                 <div class="form-content-box">
                                     <div class="checkout-title">
                                         <h3>¿Alguna información adicional?</h3>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Información (Opcional)</label>
                                                 <textarea placeholder="¿Quién lo recibe si no está? ¿En que piso vive? etc ..."></textarea>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="ordered-product">
                                 <div class="checkout-title">
                                     <h3>Tu orden de compra</h3>
                                 </div>
                                 <table>
                                     <thead>
                                         <tr>
                                             <th>Producto</th>
                                             <th>Total</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td>Libro de ... <strong><i class="fa fa-close"></i> 1</strong></td>
                                             <td>S/. 000.00</td>
                                         </tr>
                                         <tr>
                                             <td>Mochila para ... <strong><i class="fa fa-close"></i> 1</strong></td>
                                             <td>S/. 000.00</td>
                                         </tr>
                                     </tbody>
                                     <tfoot>
                                         <tr>
                                             <th>Sub Total</th>
                                             <td>S/. 000.00</td>
                                         </tr>
                                         <tr>
                                             <th>Total</th>
                                             <td>S/. 000.00</td>
                                         </tr>
                                     </tfoot>
                                 </table>
                             </div>

                             <div class="payment-method mt-40 md-mt-20">
                                 <div class="bottom-area">
                                     <p class="mt-15">OMA PERÚ no publicará tus datos personales ni los guardará en una base de datos, para más información leer los términos y condiciones</p>
                                     <button class="btn-shop orange-color" type="submit">Continuar con la compra</button>
                                 </div>
                             </div>
                         </form>
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