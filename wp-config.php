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
define('DB_NAME', 'fff');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'GLM67<t6YkIfWP$>>k)8Iq,C`YqZR%!$VUKVw_JI&ir*s(<ABJ>G^Z!mQl,m$2H6');
define('SECURE_AUTH_KEY',  'Yna*#DtF=caVKrD6,hU!1T-U<ge_megp^/[@m!d_yAgK`?ct?$-i6:f?hBU]=N]/');
define('LOGGED_IN_KEY',    '*ttp2Fi>I++:(F@a|{D!}n-`#0eN+{$gIBW~(}_OJ3u![-.YgvVB0IXv0F`FY[q+');
define('NONCE_KEY',        'x/z:K{&c9hS?ALa|6zbu1[x$Lq_?c%nr[u*i5!De+[c *VPjW_^Te7D<0q/5n5eY');
define('AUTH_SALT',        '[@Y/nPv23c=T7A<T`rVm71nnNN#(^>z=:EyfYh67)`+=/;P9AcjKi_x^s0y4yX)P');
define('SECURE_AUTH_SALT', 'fc?f;*)wVcgp`3{M-):K=I.y$oiU@Ny@]2D?N2]M%h)fb*M7d~@4WDguToRHBOhH');
define('LOGGED_IN_SALT',   'qvxr4C~8:O-g2m^$PK9e9}PJQBJ&Zo;VSyGnueV 5h{HwC-1oKU  ,OjRlty/OkO');
define('NONCE_SALT',       '&(&;Kc(4N:AhX h.a04]()!j JrfWPAPkcf,8$}}_gAX8iHkjdlHA@$lRXz[3`9&');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
