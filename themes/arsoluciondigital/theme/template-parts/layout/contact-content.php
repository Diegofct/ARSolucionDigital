<?php
/**
 * Template part for displaying the contact section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsoluciondigital
 */

// Detectar si estamos en la página de contacto o en la sección de la página de inicio
$is_contact_page = is_page_template( 'page-contacto.php' ) || is_page( 'contacto' );

// Clases según el contexto
if ( $is_contact_page ) {
	// Página de contacto: sin fondo (el wrapper bg-glow-effect lo maneja)
	$section_classes = 'min-h-[calc(100vh-80px)] flex items-center justify-center py-12 sm:py-16 md:py-20 lg:py-24';
} else {
	// Sección en página de inicio: con fondo oscuro propio
	$section_classes = 'py-16 sm:py-20 md:py-24 lg:py-28 bg-[#12003C]';
}

?>

<section class="<?php echo esc_attr( $section_classes ); ?>">
	<div class="container mx-auto px-4 sm:px-6 lg:px-8 <?php echo $is_contact_page ? 'w-full' : ''; ?>">

		<!-- Section Title -->
		<div class="text-center mb-6 sm:mb-8 md:mb-10">
			<h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-[#7E52FF] mb-4 sm:mb-6">
				¿Hablamos?
			</h2>

			<!-- Description -->
			<p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-200 leading-[1.4] max-w-3xl mx-auto px-4">
				Déjanos tu información y te contaremos cómo nuestro servicio puede ayudarte a impulsar tu presencia digital y obtener resultados reales.
			</p>
		</div>

		<!-- Contact Form -->
		<div class="max-w-xl mx-auto mt-8 sm:mt-10 md:mt-12">
			<form id="contact-form" class="bg-[#F5F5F5] rounded-2xl p-5 sm:p-6 md:p-8 space-y-4 sm:space-y-5">

				<!-- Name and Phone Fields - Side by side -->
				<div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
					<!-- Name Field -->
					<div>
						<input type="text"
							   id="name"
							   name="name"
							   required
							   class="w-full px-3 sm:px-4 py-2.5 sm:py-3 bg-white text-gray-900 rounded-2xl focus:ring-2 focus:ring-[#7E52FF] outline-none transition-all duration-300 text-sm"
							   placeholder="Nombre">
					</div>

					<!-- Phone Field -->
					<div>
						<div class="relative">
							<div class="absolute inset-y-0 right-0 pr-3 sm:pr-4 flex items-center pointer-events-none">
								<svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#7E52FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
								</svg>
							</div>
							<input type="tel"
								   id="phone"
								   name="phone"
								   required
								   class="w-full px-3 sm:px-4 py-2.5 sm:py-3 bg-white text-gray-900 rounded-2xl focus:ring-2 focus:ring-[#7E52FF] outline-none transition-all duration-300 text-sm"
								   placeholder="Tu número">
						</div>
					</div>
				</div>

				<!-- Email Field -->
				<div>
					<div class="relative">
						<div class="absolute inset-y-0 right-0 pr-3 sm:pr-4 flex items-center pointer-events-none">
							<svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#7E52FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
							</svg>
						</div>
						<input type="email"
							   id="email"
							   name="email"
							   required
							   class="w-full px-3 sm:px-4 py-2.5 sm:py-3 bg-white text-gray-900 rounded-2xl focus:ring-2 focus:ring-[#7E52FF] outline-none transition-all duration-300 text-sm"
							   placeholder="Tu correo">
					</div>
				</div>

				<!-- Company Field -->
				<div>
					<input type="text"
						   id="company"
						   name="company"
						   class="w-full px-3 sm:px-4 py-2.5 sm:py-3 bg-white text-gray-900 rounded-2xl focus:ring-2 focus:ring-[#7E52FF] outline-none transition-all duration-300 text-sm"
						   placeholder="Empresa">
				</div>

				<!-- Message Field -->
				<div>
					<div class="relative">
						<div class="absolute top-3 right-0 pr-3 sm:pr-4 pointer-events-none">
							<svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#7E52FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
							</svg>
						</div>
						<textarea id="message"
								  name="message"
								  rows="4"
								  required
								  class="w-full px-3 sm:px-4 py-2.5 sm:py-3 bg-white text-gray-900 rounded-2xl focus:ring-2 focus:ring-[#7E52FF] outline-none transition-all duration-300 resize-none text-sm"
								  placeholder="Deja tu mensaje"></textarea>
					</div>
				</div>

				<!-- Privacy Policy Checkbox -->
				<div class="flex items-start gap-3 pt-1">
					<input type="checkbox"
						   id="privacy"
						   name="privacy"
						   required
						   class="mt-1 w-4 h-4 text-[#7E52FF] bg-white border-gray-300 rounded focus:ring-2 focus:ring-[#7E52FF] cursor-pointer">
					<label for="privacy" class="text-gray-700 text-xs sm:text-sm cursor-pointer">
						Acepto las <a href="<?php echo esc_url( home_url( '/politicas-de-privacidad' ) ); ?>" class="text-[#7E52FF] hover:text-purple-700 underline transition-colors">políticas de privacidad</a>
					</label>
				</div>

				<!-- Submit Button -->
				<div class="flex justify-center pt-3 sm:pt-4">
					<button type="submit"
							class="inline-flex items-center gap-2 sm:gap-3 px-6 sm:px-8 md:px-10 py-2.5 sm:py-3 md:py-3.5 bg-[#7E52FF] text-white font-semibold rounded-full hover:bg-purple-700 transition-all duration-300 shadow-xl hover:shadow-2xl hover:scale-105 text-sm sm:text-base">
						Enviar
						<svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
						</svg>
					</button>
				</div>

				<!-- Success/Error Messages -->
				<div id="form-message" class="hidden mt-4 p-3 sm:p-4 rounded-lg text-center text-sm"></div>

			</form>
		</div>

	</div>
</section><!-- .contact-section -->

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const form = document.getElementById('contact-form');
		const messageDiv = document.getElementById('form-message');
		const submitButton = form.querySelector('button[type="submit"]');
		const submitButtonText = submitButton.innerHTML;

		form.addEventListener('submit', function(e) {
			e.preventDefault();

			// Disable submit button to prevent double submissions
			submitButton.disabled = true;
			submitButton.innerHTML = '<svg class="animate-spin h-5 w-5 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';

			// Get form data
			const formData = new FormData(form);

			// Prepare data for AJAX request
			const data = new URLSearchParams({
				action: 'submit_contact_form',
				nonce: contactFormAjax.nonce,
				name: formData.get('name'),
				phone: formData.get('phone'),
				email: formData.get('email'),
				company: formData.get('company') || '',
				message: formData.get('message'),
				privacy: formData.get('privacy') ? '1' : '0'
			});

			// Send AJAX request
			fetch(contactFormAjax.ajax_url, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/x-www-form-urlencoded',
				},
				body: data
			})
			.then(response => response.json())
			.then(result => {
				if (result.success) {
					// Show success message
					messageDiv.textContent = result.data.message;
					messageDiv.classList.remove('hidden', 'bg-red-100', 'text-red-700');
					messageDiv.classList.add('bg-green-100', 'text-green-700');

					// Reset form
					form.reset();

					// Hide message after 5 seconds
					setTimeout(function() {
						messageDiv.classList.add('hidden');
					}, 5000);
				} else {
					// Show error message
					messageDiv.textContent = result.data.message || 'Hubo un error al enviar el mensaje. Por favor, intenta de nuevo.';
					messageDiv.classList.remove('hidden', 'bg-green-100', 'text-green-700');
					messageDiv.classList.add('bg-red-100', 'text-red-700');
				}
			})
			.catch(error => {
				// Show error message
				console.error('Error:', error);
				messageDiv.textContent = 'Hubo un error de conexión. Por favor, verifica tu conexión a internet e intenta de nuevo.';
				messageDiv.classList.remove('hidden', 'bg-green-100', 'text-green-700');
				messageDiv.classList.add('bg-red-100', 'text-red-700');
			})
			.finally(() => {
				// Re-enable submit button
				submitButton.disabled = false;
				submitButton.innerHTML = submitButtonText;
			});
		});
	});
</script>
