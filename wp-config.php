<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'lionsuite_lion' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'lionsuite_admin' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Sucesso@2020!' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?=_Lp5]Y( ~c%zh-+}bT-1gP[;=<%K31<t |j0Sr/xoOWHAj)d[Q;;:~#BF)a9Gb' );
define( 'SECURE_AUTH_KEY',  'jt2!}%N=RGH}8q-G:$/aJ_aUsVZFE4]u,jYG]u4C{6FJT/)l@>ub.;QQLb~z#ZYu' );
define( 'LOGGED_IN_KEY',    ']?N;u5TjD[/`6%u* (J(w hsaFGWbo-8:C&rGw}UkMb%|1}[[x0aiowJ<hT=m$A#' );
define( 'NONCE_KEY',        'o!a?#EAi<{b1@H=z2<z0|mMHGhN!(K(OEk?i835}<>h`jKPcxMPOnmVLwLcZ{C7P' );
define( 'AUTH_SALT',        '[-~dEYIyiG5 :!P4:v_2;M+; bu GLfGBvz4:=9/!:`FE|zC:4[ygmlKS|jml/2h' );
define( 'SECURE_AUTH_SALT', 'Ag=Z0_s3co13b90RmEX4Z>#gDYG>}`Uv#4^}:g)uto<Zjqhed*mP`~CA46$%Kff5' );
define( 'LOGGED_IN_SALT',   'Uv/p`TXCl7_j}9`8XM9k7E#W0:ncYFP~&[PG.py|7vtIoh>6pAt)d-B4B#_RQ!3{' );
define( 'NONCE_SALT',       'Ps;zbGCan4!uQ79JyG_nqWKeF!.%LR{CITm9USSmD,xBbx$,#yfc`J$!S9Ov8zxZ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
