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
define( 'DB_NAME', 'cfp_getech' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'djine' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mosila21' );

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
define( 'AUTH_KEY',         '9x%DP3V}&ub;i_b&BburKLk/Ht{>(Cv0y>.UG]-m|5oXWeiFJUJDl=aGNQZ?O7rQ' );
define( 'SECURE_AUTH_KEY',  'S$Y3YX9RwTt(Z*NO^x@;7m+h^XX{a vyd1<(yftn~^:jJ2[~/+aP+o;|w=@Tje#U' );
define( 'LOGGED_IN_KEY',    '[Phl&tvw`i.Vzl>AaQG@Wmtk;h+.[I![&@h8yFpjc-&Sb$FzPQnE[0d8X[p2[ESS' );
define( 'NONCE_KEY',        'IRCFh6rP@03@,{ajWr)hPIDr/qW4iaIpC?Nz)BG$[1)kzjE3sUi)^WUk09hK;={;' );
define( 'AUTH_SALT',        'bv$A@r#:=vs~Q(:l4_Vy,&.JNMy[ty{$:p]{2$pFTu?Tou5}pu7G?%R9F!>N8pbT' );
define( 'SECURE_AUTH_SALT', '!s4={NhIMILZ%^9`*Ot+Yy,U:6e[&Ln-)=!jet3Y!QB[hwR-8ch !$F8>ag`[sON' );
define( 'LOGGED_IN_SALT',   'k?f}MI~3(E%&bA);2! OviM:/G%x_`1B)H@zW ;:z%ty2wU<K+IX<#%7u(L6S5/o' );
define( 'NONCE_SALT',       '3>=_=b6*NdeMx?=j-Dy*tni)q1kk,Z;}5]Fo^_;a8Kg;_Z^y#YOleiP~6Vuyxs<f' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
