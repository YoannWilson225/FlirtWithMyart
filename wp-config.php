<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'flirtwith' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' ySD|X[_<J;]FopaUo=y~Z/V$w)@#u#/]k?@^m7$*oLS@E@vX58#>?oeT#mon2im' );
define( 'SECURE_AUTH_KEY',  'Yj2?|>IzUtk=-%}ar)`!u=M<V.l9n1c7{t y@#9D}zf@B.v]{bKiF.TLUlrT?ToG' );
define( 'LOGGED_IN_KEY',    'VHcTA3$C6T81[q*:fFGj7N-6dY7F16RMTad>yR#,Zw$H2=p6L2XB(}|i8P;Te68U' );
define( 'NONCE_KEY',        '=P0sug9u7`~P{*tnt tgT<Qs.X`ZS]z~gkV78d? )_c(T%HTQ6Yh#X6X;IG^pNav' );
define( 'AUTH_SALT',        '!h_ ~47~A!5QCWb=<mWS:H|Jh+IY5n-]H,I%UIo=%4giN9OR&|e(}3>;<~~]:Lej' );
define( 'SECURE_AUTH_SALT', 'k-4esrD><hVu~U|4k7dR4H+^8Z-SQFPbI#.vGp-%Y0[)?;#T#V)r_nHxkhcP`D9i' );
define( 'LOGGED_IN_SALT',   'y#K[p`v%R+ N!KqPyG~Ti2wozJ/?T_C>a?VeImd`n!,qppH4)p:wkj|{.myc&d.m' );
define( 'NONCE_SALT',       '![Jlw*<<X{#[T@P:j6ptn^>fH*j==Q3*R<&-krJvN|`DqGOF@&{[7>t33Pxyu[I7' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
