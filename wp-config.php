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
define( 'DB_NAME', 'fixit' );

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
define( 'AUTH_KEY',         'n142%HfT04`@PJ~lph?}}{lVC%T!lvgpX?/?$]8Kk_4wh&TmE}DgC-WRO7eG_5Ie' );
define( 'SECURE_AUTH_KEY',  'kR=d_>tQtD[&B7LlP]cfwE=s$XH@`)wI; Z4V?n<ZG4c$,EG~}A|My]fnjd.kI96' );
define( 'LOGGED_IN_KEY',    'fxs>J;7OA]C^YWznR1~Hu9[Vm#-.@S>0DZr8_pr![)hwQvx5~ow?YFOM+tard5%m' );
define( 'NONCE_KEY',        'Q`jLw@GSIB*sy?mBI>3l1Z*U/xSavP,.Z?MBcj%CJlKRh0jat#~[~VS)C$;#!={M' );
define( 'AUTH_SALT',        'KSIR%cv{KUl3M*;.yP</.kXr, B+rfPFAEnf;-3s8ZO`Qa!^tawv0CDAV+r[E$!4' );
define( 'SECURE_AUTH_SALT', '.n8Oe`Jg c6`gFM1Dq5bs.t}s3 i93N_w c9GJ~rAs}tBM6UT[o<-[xVI~|]#ks6' );
define( 'LOGGED_IN_SALT',   'OH/-EY7$jB`*r~Naau^YIX~dW[[t%E:O>mnv!#p.P!lxCLgp9} x<!G]j{6cfr+G' );
define( 'NONCE_SALT',       '5%,4|?b+#~6+LJl1T-|rAs]9QQ>DL1<bH8DgCK(}_|xM1ytwh[C^JU(qgZLjb9.f' );
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
