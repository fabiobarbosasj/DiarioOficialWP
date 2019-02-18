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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'g*cacw;tV;&3:9,<oaM.HeR/MsW9d;F<J@lxI1Q<@q)E71>p71N1aCkt/[>WX=7k');
define('SECURE_AUTH_KEY',  '3tv-gD{:1I^x?s2Zx9+g0b7Q{Q@>*h#LCXpC<;HOM_cE(0KcqDb~:}H**/hn?-h|');
define('LOGGED_IN_KEY',    'yj~B{3/D!+)(43Ze>}A2w-VE.:i7uONW@R/_z)i-BkyCEr@O@ou&ZEau*#QXdn9{');
define('NONCE_KEY',        'h=IeItk]9&I;9NV-vkY!?Hf(X0Y*GM_ycal?~b#!@hO&{k}1O*HB?;pCVs-n~Zs2');
define('AUTH_SALT',        '[x!Lo(n8(8Q=!#K^7.h;45qfg(2iVF(#MoU%Z/ Ai7:c=)|%#P3MZjvN[UQidlQX');
define('SECURE_AUTH_SALT', '?75R(=Xsy|}/1XlqfrPe$$-*bz|ucWq/#xV[r5F$hTI+{+`pDkhfPh,WNVsZEPxB');
define('LOGGED_IN_SALT',   'jcZWO.%m($=XumL?*f>4S&d?]?!o2FdfnB%<8^Iwjao}u;ki2M7RB7ALDAk%^?AV');
define('NONCE_SALT',       '7d2DsIFw@k0v>&l#FeEi3:3Ng#=(@dtUco1H1q9%r51^5yA_8EnN~8@^bpN0<k[/');

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
