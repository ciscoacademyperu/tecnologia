<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'tecnologia');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#F!T)O[,CT4OJ |migsSOA{Z6n#oDU%GZpOr3j4BXLDeXW!YP;l-1QX89ZUg+VMx');
define('SECURE_AUTH_KEY',  'v@t${`e5ne%8 |*nB9S2 )Ec&0yM**YRVl$?WLV$%4D=~Mzv_v+g9h6;91RNSWB/');
define('LOGGED_IN_KEY',    '>Vs+%=^2,)PsDRW3?7f.aBmC+k{l]8{++BY[}>6HL}1 Mc0{@wA}i=sBXS7&Jz&;');
define('NONCE_KEY',        'Z5|3X}W;:ni*d_puKcTqspN=Lwou2stdKuW$c~!aXs_CF]aG0a]=v!g8iws#Fb&P');
define('AUTH_SALT',        'fgEg/<|bK]$>ZH1|U8+)aEQD0w-HV*SE1XXo)L<@5x!pR.Su3__,GdQkYr8ZU.aO');
define('SECURE_AUTH_SALT', 's). wBd2R53bL9lbV0nTaQ8>^rihZaa#P L+ue<_!0k[<s`u:-o`v/I|&O/q4T&5');
define('LOGGED_IN_SALT',   'cX/1V[G(qc2mshXv^_.Svf$0(A7X$!Lr$6wW^RM.e$=Dkw56Ec[WE_jl&9tDIlEY');
define('NONCE_SALT',       'COQLT&~r<(wM-7MEfCEi%aIO7+C:1  ndS)[M68xc}6&bbjQ!N.|^UE{nE,U=ncN');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
