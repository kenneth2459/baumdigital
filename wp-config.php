<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'webmedia_baumdigital' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '9WP5%lYY0D8C}B_?Oq4-5sQgFRNmP)5u4= sOFgI7-{7nKHNs[4K.^1jI>8 eN<4' );
define( 'SECURE_AUTH_KEY', '$Rqv87tZ(um>VS-anN}K>i>R#^?t=/4$R:TG, nd(. R[*J;r|-}]ZgP+5!R4}K;' );
define( 'LOGGED_IN_KEY', 'j_cQgv!CaugY-uVV7-wdA`_}8AahRich|=Zdly>j?@]fIFD_PYRZ1N[m[>%.je2g' );
define( 'NONCE_KEY', '/~+}3A-dzQ Ts/lv0V5Nmn%=V}+d<DxUxvJLn-h><O[LvF#Zj<gMx[mU.mOn~{El' );
define( 'AUTH_SALT', 'p^[D$nb&V,LmlQdWVB[BQ1r.93UAZ#^+MhkpiV (89?rf;HZp8)/~[SQM6B,0B^<' );
define( 'SECURE_AUTH_SALT', 'bS@+3Y)tU{)F(P/FrYt&K43Hh|9PxBGc&&#8Y8,#=pBH4S0+fEF+4KXOfZOLXX3=' );
define( 'LOGGED_IN_SALT', 'bS-cM|kf I?ubt:2:#r_gd`bGg4JW^l]VG7.YKsI0N?VZ~,_3OSe?h9`POJVkOUt' );
define( 'NONCE_SALT', '/)0<2$N%/i1^YMxXQMA|?t9wD=0Y%CJ%q!L}V.V+8FWe;VpB]<ej5s!huFzgxg)6' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'webmedia_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

