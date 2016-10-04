<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Ingresar codigo';
?>

<!-- .ingresar-codigo-cont -->
<div class="ingresar-codigo-cont">
	<!-- .ingresar-codigo-card -->
	<div class="ingresar-codigo-card">
		
		<!-- #ingresar-codigo-form -->
		<?php $form = ActiveForm::begin(['id' => 'ingresar-codigo-form']); ?>
			
			<!-- .ingresar-codigo-card-header -->
			<div class="ingresar-codigo-card-header">
				<div class="ingresar-codigo-card-header-anuncio">
					<h3 class="f-futurist-black">Vive la Final</h3>
					<p>
						este 15 de Octubre en <span>ATP OPEN MTY 2016</span>
					</p>
				</div>
			</div>
			<!-- end - .ingresar-codigo-card-header -->
			
			<!-- .ingresar-codigo-card-body -->
			<div class="ingresar-codigo-card-body">

				<p class="recibiras">
					Recibirás tu ID vía sms
				</p>

				<div class="id">
					<?= $form->field($codigo, 'txt_codigo')->textInput(['maxlength' => 10])-> label(false) -> textInput(["placeholder" => "ID 579Y26ER"])?>
				</div>

				<?= Html::submitButton('Jugar', ['class' => 'ingresar-codigo-card-btn-jugar', 'name' => 'contact-button'])?>

				<div class="msj-tardara">
					<p class="msj-tardara-codigo">El código puede tardar algunos minutos.</p>
					<p class="small">No te llego el código:</p>
						<button id="js-reenviar-codigo">Reenviar código</button> 
				</div>

				<hr>

				<p class="texto">
					Juega aquí y el score más alto será parte de esta
				</p>

				<img src="<?=Url::base()?>/images/me-footer.png" alt="" class="card-logo">
				
				<p class="vigencia">
					Vigencia del 3 al 13 de Oct
				</p>

			</div>
			<!-- end - .ingresar-codigo-card-body -->
		
		<?php ActiveForm::end(); ?>
		<!-- end - #ingresar-codigo-form -->

	</div>
	<!-- end - .ingresar-codigo-card -->

	<!-- .aviso-privacidad -->
	<div class="aviso-privacidad">
		<span class="btn-aviso-privacidad">Aviso de Privacidad</span>
	</div>
	<!-- end - .aviso-privacidad -->

	<!-- .modal (Aviso de privacidad) -->
	<div id="modal-aviso-privacidad" class="modal modal-aviso-privacidad">

		<!-- .modal-content -->
		<div class="modal-content">
			<!-- .modal-header -->
			<div class="modal-header">
				<span class="close modal-aviso-privacidad-close">×</span>
				<h2>Aviso de privacidad de PUBLICIDAD GREEN</h2>
			</div>
			<!-- end - .modal-header -->
			<!-- .modal-body -->
			<div class="modal-body">
				<div class="aviso-privacidad-colum">
					
					<p>
						Con fundamento en los artículos 15 y 16 de la <strong>LEY FEDERAL DE PROTECCIÓN DE DATOS PERSONALES EN POSESIÓN DE PARTICULARES,</strong> hacemos de su conocimiento que, PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., con domicilio en calle Convento de Santa Brígida #19, Colonia Jardines de Santa Mónica, Tlalnepantla, Estado de México, C.P. 54050, es responsable de recabar sus datos personales, del uso que se les dé a los mismos y de su protección.
					</p>

					<p>
						Su información personal será utilizada para las siguientes finalidades: proveer los servicios y productos que ha solicitado; notificarle sobre nuevos productos que tengan relación con los ya contratados o adquiridos; comunicarle en los cambios de los mismos; elaborar estudios y programas que son necesarios para determinar hábitos de consumo; realizar evaluaciones periódicas de nuestros productos y servicios para efecto de mejorar la calidad de los mismos; evaluar la calidad del servicio que brindamos, y en general  para dar cumplimiento a las obligaciones que hemos contraído para con Usted.
					</p>

					<p>
						Para las finalidades antes mencionadas, en forma enunciativa más no limitativa podríamos obtener alguno de los siguientes datos personales: nombre completo, teléfono fijo y/o teléfono celular, correo electrónico, dirección de facebook, twiter, y/o cualquier otra red social, así como domicilio particular y de trabajo.
					</p>

					<h4>LIMITACIÓN DE USO Y DIVULGACIÓN</h4>

					<p>
						El tratamiento de sus datos personales será el que resulte necesario, adecuado y relevante en relación con las finalidades previstas en esta Política de Privacidad.
					</p>

					<p>
						PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., cumple los principios de protección de datos personales establecidos en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y adopta las medidas necesarias para su aplicación. Lo anterior aplica aún y cuando estos datos fueren tratados por un tercero, a solicitud de PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., y con el fin de cubrir los servicios necesarios, manteniendo la confidencialidad en todo momento. PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., toma las medidas necesarias y suficientes para procurar que esta Política de Privacidad sea respetada, por él o por terceros con los que guarde alguna relación, para otorgar los servicios o productos establecidos con el titular.
					</p>

					<p>
						La obligación de acceso a la información se dará por cumplida cuando se ponga a disposición del titular los datos personales, o bien, mediante la expedición de copias simples, documentos electrónicos o cualquier otro medio que PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., provea al titular.
					</p>

					<p>
						En el caso de que el titular solicite acceso a los datos a una persona que presume es el responsable, y ésta resulta no serlo, bastará con que así se le indique al titular por cualquiera de los medios impresos (carta de procedencia) o electrónicos (correo electrónico, medios audiovisuales, etc.), para tener por cumplida la solicitud. 
					</p>

					<p>
						PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., limitará el uso de los datos personales sensibles a petición expresa del titular, y no estará obligada a cancelar los datos personales cuando:
					</p>

					<ol type="1">
						<li>Se refiera a las partes de un contrato privado, social, administrativo, y sean necesarios para su desarrollo y cumplimiento.</li>
						<li>Deban ser tratados por disposición legal.</li>
						<li>Obstaculice actuaciones judiciales o administrativas vinculadas a obligaciones fiscales, la investigación y persecución de delitos, o la actualización de sanciones administrativas.</li>
						<li>Sean necesarios para proteger los intereses jurídicamente tutelados del titular.</li>
						<li>Sean necesarios para realizar una acción en función del interés público.</li>
						<li>Sean necesarios para cumplir con una obligación legalmente adquirida por el titular, o…</li>
						<li>Sean objeto de tratamiento para la prevención o el diagnóstico médico o la gestión de servicios de salud, siempre que dicho tratamiento se realice por un profesional de la salud sujeto a un deber secreto.</li>
					</ol>

					<p>
						<strong>
							Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar su consentimiento, para lo cual se puede poner en contacto directamente a Publicidad y Soluciones Green S.A. de C.V., la cual puede localizar en la dirección ya señalada en el primer párrafo de este aviso, o al teléfono 24-87-01-01, y en el correo electrónico <a href="mailto:info@publicidadgreen.com.mx" class="link">info@publicidadgreen.com.mx</a>, o bien a través de un escrito libre acompañado de una copia de su identificación oficial, y especificando los datos personales que quiera proteger, entregándolo en la misma dirección ya citada,
						</strong>
						PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., contará con 20 días hábiles para atender su solicitud.
					</p>

					<p>
						Si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello.
					</p>

					<p>
						<strong>
							Es importante informarle que Usted tiene derecho al acceso, ratificación, y cancelación de sus datos personales, a oponerse al tratamiento de los mismos o a revocar el consentimiento que para dicho fin nos haya otorgado.
						</strong>
					</p>

					<p>
						Al aceptar las condiciones y términos establecidos por medio del presente aviso de privacidad se considera otorgado el consentimiento expreso para que PUBLICIDAD GREEN, haga uso de manejo tratamiento y transferencia de sus datos personales para los fines descritos.
					</p>

					<h4>
						CAMBIOS A ESTA DECLARACIÓN DE PREIVACIDAD
					</h4>

					<p>
						<strong>SOLUCIONES GREN S.A. DE C.V.</strong> podrá en cualquier momento actualizar esta declaración de privacidad. En el caso de que se produzcan cambios sustanciales a esta declaración, lo comunicaremos a través de nuestras páginas de internet señaladas en el párrafo tres de este Aviso de Privacidad.
					</p>

					<p>
						Por lo anterior, les sugerimos visitar periódicamente esta declaración de privacidad
					</p>

					<p>
						Contacto PUBLICIDAD GREEN: <a href="mailto:info@publicidadgreen.com.mx" class="link">info@publicidadgreen.com.mx</a>
					</p>

				</div>
			</div>
			<!-- end - .modal-body -->
		</div>
		<!-- end - .modal-content -->

	</div>
	<!-- end - .modal -->
	
	<!-- .modal (Reenviar codigo) -->
	<div id="modal-reenviar-codigo" class="modal">

		<!-- .modal-content -->
		<div class="modal-content">
			<!-- .modal-header -->
			<div class="modal-header">
				<span class="close modal-reenviar-close">×</span>
				<h2>Reenviar codigo</h2>
			</div>
			<!-- end - .modal-header -->
			<!-- .modal-body -->
			<div class="modal-body">
				<p>
					<?php  $form = ActiveForm::begin(['id' => 'reenviar-codigo-form']); ?>

					<?php  $form->field($usuario, 'tel_numero_celular')->textInput(['maxlength' => 10])?>

					<?php  ActiveForm::end(); ?>
				</p>
			</div>
			<!-- end - .modal-body -->
		</div>
		<!-- end - .modal-content -->

	</div>
	<!-- end - .modal -->
	
</div>
<!-- end - .ingresar-codigo-cont -->

<!-- <h1><?php # Html::encode($this->title) ?></h1> -->

<?php # $form = ActiveForm::begin(['id' => 'ingresar-codigo-form']); ?>

<?php # $form->field($codigo, 'txt_codigo')->textInput(['maxlength' => 10])?>

<?php # ActiveForm::end(); ?>