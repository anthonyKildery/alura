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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}V|XC%!J^g/K{)dJD|*oahhmzTxto$@ZBu3vsCjhD=7[kd;@-LAVRi9{c$9wW]:X' );
define( 'SECURE_AUTH_KEY',  'WWql[L9CScwy@:QX]/u!j~gkCMK]=l@Ny8_B%R*7ufLvFhTs4g&!VQBDT/@twI69' );
define( 'LOGGED_IN_KEY',    '0M0^yr$ 3Q1ult}+kl2lEyR*0HGH+LPZ#NzThhxE )=r<<[!O`>ViHJyj]W-AV$B' );
define( 'NONCE_KEY',        'SL>evif [m$0<DnahcB{V~{WfK.[gp;#-:/W BT&ahFCu,yhWQpE#^KKt(lxrv<s' );
define( 'AUTH_SALT',        '%Ro^Zs>*wJ!0zR3ty0$!4|rIILu2Oz$2>f!<-u<@x8]ChPZsW;ecaV+i~Hv*]iIb' );
define( 'SECURE_AUTH_SALT', '?f`(Ap~E9/E8rh/`U10x_S2S8$`7eJ`e yIIsvU*HRGusr*Xv( iK#{-l3-SC#xV' );
define( 'LOGGED_IN_SALT',   'k)9Fh{^d@CJrc<!if9]>BM93cMB:$>{KH-Q%`V;Mk@J(7@?q4)maWzv}l7QBbJ6q' );
define( 'NONCE_SALT',       'e>`IA&`S^Un:h%BszC{k,p 4S:o*iF^D=#~pp6+<?:9}(IdBid/PfzUZuu# k=aP' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
