<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 *
 * Ce fichier contient les configurations suivantes :
 *
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'alfa');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost:8888');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1|Fh_)gS-DG`r4-u_xH=Z6I6y^$scW=D}yIPS88VIfyG|b(]{ tU|EX@/iOS44E7');
define('SECURE_AUTH_KEY',  '0/na+I-+%`&YPaYQ)vn-?;5HyEM_RfVCEA|pI0U|kD%+FnV@+HW.@N?cN]|w!X~F');
define('LOGGED_IN_KEY',    '!h`p*sR3>6=oK9;}DwdYD<|CmWR*nZ SF41_.Qj/W5!xrM{-_+.SOAxi%v$%yhIw');
define('NONCE_KEY',        'J(ug,B(/rc>.RFl JX}=.mHa^H;oj!2pg^nWSTABlPTm#]Xw#oj~UPHeR|IhwioT');
define('AUTH_SALT',        'nPNxRK}Z-r2(6--hQ,P7%h`[|Z,T53EZ,&~_S.ewawPR6f^Z3HeYv3Xct)[~!x5j');
define('SECURE_AUTH_SALT', '!pcyGnyQ%x+>tD`([I6m+;<:w1ukI.d06$v284%,|t0i^QHZ+QQw2x|>4Z/iblUX');
define('LOGGED_IN_SALT',   'x@rYwKu|Z^mo-E3tM6&nM@Q]Jn?]=;?+G 8Ks*7!(Fb};B*Cbq:*5JZ2wD|JZUwf');
define('NONCE_SALT',       '7QT?f@Epn|Ii{c%azpF=Xwa J` )+to,Fq)4]9T++({veC;8[kk|S2kl|-zI2Wt1');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour obtenir plus d'information sur les constantes
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
