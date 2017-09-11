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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'd3imo859_d3imob');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'd3imo859_d3imob');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'd3imob');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '4p7`-<dh+ViP!/?!&7rNM2~o.c8K)@U8Ye3lGHG0e[+>noXzC27cTt/Tc(y1loM,');
define('SECURE_AUTH_KEY',  ']c},,WlyF^:F17*MP3Yd7f0r^_`%<UD,ikTR5,V|vI_.^j<#dI5jxi&G!QTUjNCu');
define('LOGGED_IN_KEY',    '7LOl&Oq[^P[/x*gqVEWsYQMQHNQ$J&=/7:vdT`Hth(aZP^;P&G$Qu*tyh5.7^iE#');
define('NONCE_KEY',        'gS{Lu>b6R}h,}9nSCFKcGfVuOt=G;^/1ss?&9&XtgkPg<4T,>|,1e[Jtl5fAEDVm');
define('AUTH_SALT',        'Wv9fzhAQ=*Q*O?<cb8Ch8QKN~e?,{}x`Y=Ir{nP&7C8t#ZA:35_z#AoIv$O.q_]4');
define('SECURE_AUTH_SALT', 'ezE]R`L1fauxx[3KxY?2w^@)RJ7,hmXu4vUdJp/.v T?U_vDM{2[x!2oqq(54V&Z');
define('LOGGED_IN_SALT',   'sM!-?V{Kq1]n8C}XulXysbC~,k==W|=,YTtv)y)qT-=5X=8L&@c3R_-(RTnm?NK9');
define('NONCE_SALT',       '+`B>m)*kMN@Z0LvSR|Ne$_j+D?Ct;w=E^O?I:7$42kdo/v)#<*.r5+QQb~h0L2!b');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
