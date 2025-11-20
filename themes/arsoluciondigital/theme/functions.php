<?php
/**
 * arsoluciondigital functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package arsoluciondigital
 */

if ( ! defined( 'ARSOLUCIONDIGITAL_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'ARSOLUCIONDIGITAL_VERSION', '0.1.0' );
}

if ( ! defined( 'ARSOLUCIONDIGITAL_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `arsoluciondigital_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'ARSOLUCIONDIGITAL_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'arsoluciondigital_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function arsoluciondigital_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on arsoluciondigital, use a find and replace
		 * to change 'arsoluciondigital' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'arsoluciondigital', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'arsoluciondigital' ),
				'menu-2' => __( 'Footer Menu', 'arsoluciondigital' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'arsoluciondigital_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function arsoluciondigital_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'arsoluciondigital' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'arsoluciondigital' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'arsoluciondigital_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function arsoluciondigital_scripts() {
	wp_enqueue_style( 'arsoluciondigital-style', get_stylesheet_uri(), array(), ARSOLUCIONDIGITAL_VERSION );
	wp_enqueue_script( 'arsoluciondigital-script', get_template_directory_uri() . '/js/script.min.js', array(), ARSOLUCIONDIGITAL_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'arsoluciondigital_scripts' );

/**
 * Enqueue the block editor script.
 */
function arsoluciondigital_enqueue_block_editor_script() {
	$current_screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;

	if (
		$current_screen &&
		$current_screen->is_block_editor() &&
		'widgets' !== $current_screen->id
	) {
		wp_enqueue_script(
			'arsoluciondigital-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			ARSOLUCIONDIGITAL_VERSION,
			true
		);
		wp_add_inline_script( 'arsoluciondigital-editor', "tailwindTypographyClasses = '" . esc_attr( ARSOLUCIONDIGITAL_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'arsoluciondigital_enqueue_block_editor_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function arsoluciondigital_tinymce_add_class( $settings ) {
	$settings['body_class'] = ARSOLUCIONDIGITAL_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'arsoluciondigital_tinymce_add_class' );

/**
 * Limit the block editor to heading levels supported by Tailwind Typography.
 *
 * @param array  $args Array of arguments for registering a block type.
 * @param string $block_type Block type name including namespace.
 * @return array
 */
function arsoluciondigital_modify_heading_levels( $args, $block_type ) {
	if ( 'core/heading' !== $block_type ) {
		return $args;
	}

	// Remove <h1>, <h5> and <h6>.
	$args['attributes']['levelOptions']['default'] = array( 2, 3, 4 );

	return $args;
}
add_filter( 'register_block_type_args', 'arsoluciondigital_modify_heading_levels', 10, 2 );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * ============================================================================
 * Contact Form Management System
 * ============================================================================
 */

/**
 * Create contact messages table in database
 */
function arsoluciondigital_create_contact_table() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'contact_messages';
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		name varchar(100) NOT NULL,
		phone varchar(20) NOT NULL,
		email varchar(100) NOT NULL,
		company varchar(100) DEFAULT '',
		message text NOT NULL,
		privacy_accepted tinyint(1) NOT NULL DEFAULT 1,
		status varchar(20) DEFAULT 'unread',
		created_at datetime DEFAULT CURRENT_TIMESTAMP,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $sql );
}

// Create table on theme activation
add_action( 'after_switch_theme', 'arsoluciondigital_create_contact_table' );

/**
 * Handle contact form submission via AJAX
 */
function arsoluciondigital_handle_contact_form() {
	// Verify nonce for security
	if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'contact_form_nonce' ) ) {
		wp_send_json_error( array( 'message' => 'Error de seguridad. Por favor, recarga la página e intenta de nuevo.' ) );
	}

	// Sanitize and validate form data
	$name = sanitize_text_field( $_POST['name'] );
	$phone = sanitize_text_field( $_POST['phone'] );
	$email = sanitize_email( $_POST['email'] );
	$company = sanitize_text_field( $_POST['company'] );
	$message = sanitize_textarea_field( $_POST['message'] );
	$privacy = isset( $_POST['privacy'] ) ? 1 : 0;

	// Validate required fields
	if ( empty( $name ) || empty( $phone ) || empty( $email ) || empty( $message ) ) {
		wp_send_json_error( array( 'message' => 'Por favor, completa todos los campos requeridos.' ) );
	}

	// Validate email format
	if ( ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => 'Por favor, introduce un correo electrónico válido.' ) );
	}

	// Validate privacy policy acceptance
	if ( ! $privacy ) {
		wp_send_json_error( array( 'message' => 'Debes aceptar las políticas de privacidad.' ) );
	}

	// Insert into database
	global $wpdb;
	$table_name = $wpdb->prefix . 'contact_messages';

	$inserted = $wpdb->insert(
		$table_name,
		array(
			'name' => $name,
			'phone' => $phone,
			'email' => $email,
			'company' => $company,
			'message' => $message,
			'privacy_accepted' => $privacy,
			'status' => 'unread',
			'created_at' => current_time( 'mysql' ),
		),
		array( '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%s' )
	);

	if ( ! $inserted ) {
		wp_send_json_error( array( 'message' => 'Hubo un error al guardar tu mensaje. Por favor, intenta de nuevo.' ) );
	}

	// Send email notification
	$email_sent = arsoluciondigital_send_contact_email( $name, $phone, $email, $company, $message );

	// Return success response
	wp_send_json_success( array(
		'message' => '¡Gracias! Tu mensaje ha sido enviado. Nos pondremos en contacto contigo pronto.',
		'email_sent' => $email_sent
	) );
}

add_action( 'wp_ajax_submit_contact_form', 'arsoluciondigital_handle_contact_form' );
add_action( 'wp_ajax_nopriv_submit_contact_form', 'arsoluciondigital_handle_contact_form' );

/**
 * Send email notification when contact form is submitted
 */
function arsoluciondigital_send_contact_email( $name, $phone, $email, $company, $message ) {
	// Email recipient - Change this to your email
	$to = get_option( 'admin_email' ); // Uses WordPress admin email by default

	// You can change this to a specific email:
	// $to = 'tu-email@ejemplo.com';

	// Email subject
	$subject = 'Nuevo mensaje de contacto - AR Solución Digital';

	// Email body
	$body = "Has recibido un nuevo mensaje de contacto:\n\n";
	$body .= "Nombre: $name\n";
	$body .= "Teléfono: $phone\n";
	$body .= "Email: $email\n";
	$body .= "Empresa: $company\n\n";
	$body .= "Mensaje:\n$message\n\n";
	$body .= "---\n";
	$body .= "Este mensaje fue enviado desde el formulario de contacto de " . get_bloginfo( 'name' );

	// Email headers
	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'From: ' . get_bloginfo( 'name' ) . ' <' . $email . '>',
		'Reply-To: ' . $email,
	);

	// Send email
	return wp_mail( $to, $subject, $body, $headers );
}

/**
 * Add admin menu for contact messages
 */
function arsoluciondigital_add_contact_menu() {
	add_menu_page(
		'Mensajes de Contacto',           // Page title
		'Mensajes',                        // Menu title
		'manage_options',                  // Capability
		'contact-messages',                // Menu slug
		'arsoluciondigital_contact_messages_page', // Callback function
		'dashicons-email',                 // Icon
		25                                 // Position
	);
}
add_action( 'admin_menu', 'arsoluciondigital_add_contact_menu' );

/**
 * Display contact messages admin page
 */
function arsoluciondigital_contact_messages_page() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'contact_messages';

	// Handle status update
	if ( isset( $_GET['action'] ) && $_GET['action'] === 'mark_read' && isset( $_GET['message_id'] ) ) {
		$message_id = intval( $_GET['message_id'] );
		$wpdb->update(
			$table_name,
			array( 'status' => 'read' ),
			array( 'id' => $message_id ),
			array( '%s' ),
			array( '%d' )
		);
	}

	// Handle delete
	if ( isset( $_GET['action'] ) && $_GET['action'] === 'delete' && isset( $_GET['message_id'] ) ) {
		$message_id = intval( $_GET['message_id'] );
		$wpdb->delete(
			$table_name,
			array( 'id' => $message_id ),
			array( '%d' )
		);
	}

	// Get all messages
	$messages = $wpdb->get_results( "SELECT * FROM $table_name ORDER BY created_at DESC" );
	$unread_count = $wpdb->get_var( "SELECT COUNT(*) FROM $table_name WHERE status = 'unread'" );

	?>
	<div class="wrap">
		<h1>Mensajes de Contacto</h1>

		<?php if ( $unread_count > 0 ) : ?>
			<div class="notice notice-info">
				<p><strong><?php echo $unread_count; ?></strong> mensaje(s) sin leer</p>
			</div>
		<?php endif; ?>

		<table class="wp-list-table widefat fixed striped">
			<thead>
				<tr>
					<th width="5%">ID</th>
					<th width="15%">Nombre</th>
					<th width="12%">Teléfono</th>
					<th width="15%">Email</th>
					<th width="12%">Empresa</th>
					<th width="25%">Mensaje</th>
					<th width="10%">Fecha</th>
					<th width="8%">Estado</th>
					<th width="8%">Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php if ( empty( $messages ) ) : ?>
					<tr>
						<td colspan="9" style="text-align: center; padding: 20px;">
							No hay mensajes todavía.
						</td>
					</tr>
				<?php else : ?>
					<?php foreach ( $messages as $msg ) : ?>
						<tr style="<?php echo $msg->status === 'unread' ? 'background-color: #f0f8ff;' : ''; ?>">
							<td><?php echo esc_html( $msg->id ); ?></td>
							<td><strong><?php echo esc_html( $msg->name ); ?></strong></td>
							<td><?php echo esc_html( $msg->phone ); ?></td>
							<td><a href="mailto:<?php echo esc_attr( $msg->email ); ?>"><?php echo esc_html( $msg->email ); ?></a></td>
							<td><?php echo esc_html( $msg->company ); ?></td>
							<td><?php echo esc_html( wp_trim_words( $msg->message, 15 ) ); ?></td>
							<td><?php echo esc_html( date( 'd/m/Y H:i', strtotime( $msg->created_at ) ) ); ?></td>
							<td>
								<?php if ( $msg->status === 'unread' ) : ?>
									<span class="dashicons dashicons-marker" style="color: #2271b1;"></span> Sin leer
								<?php else : ?>
									<span class="dashicons dashicons-yes" style="color: #00a32a;"></span> Leído
								<?php endif; ?>
							</td>
							<td>
								<?php if ( $msg->status === 'unread' ) : ?>
									<a href="?page=contact-messages&action=mark_read&message_id=<?php echo $msg->id; ?>"
									   class="button button-small">Marcar leído</a>
								<?php endif; ?>
								<a href="?page=contact-messages&action=delete&message_id=<?php echo $msg->id; ?>"
								   class="button button-small"
								   onclick="return confirm('¿Estás seguro de eliminar este mensaje?');">Eliminar</a>
							</td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>

		<style>
			.wp-list-table td {
				vertical-align: middle;
			}
		</style>
	</div>
	<?php
}

/**
 * Enqueue AJAX script for contact form
 */
function arsoluciondigital_enqueue_contact_form_script() {
	// Always enqueue on all pages (simpler approach)
	wp_localize_script( 'arsoluciondigital-script', 'contactFormAjax', array(
		'ajax_url' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce( 'contact_form_nonce' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'arsoluciondigital_enqueue_contact_form_script' );

/**
 * Calculate reading time for posts
 */
function arsoluciondigital_reading_time() {
	$content = get_post_field( 'post_content', get_the_ID() );
	$word_count = str_word_count( strip_tags( $content ) );
	$reading_time = ceil( $word_count / 200 ); // Average reading speed: 200 words per minute
	return $reading_time;
}
