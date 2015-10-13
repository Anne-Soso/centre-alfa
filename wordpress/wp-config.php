<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '][r!)mkzw#WVs?O(GUlDxKP@)|3)HjG(yf8p-TA3BMAs.!C+gn}zqP}$Uj ^?P/)');
define('SECURE_AUTH_KEY',  'oCE_q+5ZTh|b<bY-nB^F86|5ck_<:/R}<6+,-k#6j5Q2U3?FDW>ow?*%A?kk5~,8');
define('LOGGED_IN_KEY',    '^&sPgz&6.MW+A77a2.A5W@} EN`-M:%C>J-3mHw8Zz9=%5jqL];V+3ed4jQ-;[+A');
define('NONCE_KEY',        '3m/+1f1sb+Gs|D,:8`oJtDh-lFh|@fek`Gi5F^May}3n3D*&|r1|8`2F,TC`^p6f');
define('AUTH_SALT',        ';3u#w:qcC#u++(HG@V?CRkgpC-u`ep{+#Za@3f?OLOa>j?+&utQTu~~#+tHrEDvz');
define('SECURE_AUTH_SALT', 'HE_:1Zg5I&Tl_U(gon< 1`~g[TRHa -G|GJ/[nGwo-+%+ dMP196qDX&y|_dX$E2');
define('LOGGED_IN_SALT',   'p_X1R*)4n`yIi2-k4+}P$u#%g4z.xZ*?#FoaDrRTWfX ;8Z(?|y~YQffu?-0QCA9');
define('NONCE_SALT',       'kAz1?AF[a*XPE:32;MjH84CO|VMxXIeQPQS%+ L~e;];9UQoxiQl,Z+etqu]:=Mw');
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