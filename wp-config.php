<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'showroom_wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'teste123');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dw{oP4<LQlhZ~yaFFyFsPg9HY_A]n+/^fg:tS+`g}9A*c&gil=${+=7YPe7l~5hj');
define('SECURE_AUTH_KEY',  '7U3%*`k?1huK9-|6GW[puLwG1<>8A6~l)-4qbF5y1!oXuOgcG57SinE6:UheT-T.');
define('LOGGED_IN_KEY',    '2Q9H8/,T&Rc5ug|G_0zeYbjS]+dr;aPnf5U$nxeDaAj3j.~8t?qX->PH2Xif?Gf-');
define('NONCE_KEY',        '~3Xa2g!4:-hb|NSWJ!]]{}h>&ni<x#{sRlyTenUB!fP4+:&x{fb6aKx}Rca}#1bu');
define('AUTH_SALT',        'gTw%fK38f.V><[|KaT!](e;z[o]9|BTWDwT2e/*~]5:4@sxs&;H<}d|](-jP#F( ');
define('SECURE_AUTH_SALT', ']R07nJ{3v_H40[:J0}J^Ocy=IKNM{PNFU|q]]!T)]XE-P*)6$-kG#[XT,LV5Ua7l');
define('LOGGED_IN_SALT',   'HZP%}TfZ92@KPzsk(b4Bw1U!J >~e0<{24/z]7u8bAY5E4s bvvy!egSW+:/ua0N');
define('NONCE_SALT',       'yw9L9OiFG5t$;/WT!f+*+YG-Iic+AAjI6Dg`p>R.:0`diVO(PfMx#]H%NgY*@NMa');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');