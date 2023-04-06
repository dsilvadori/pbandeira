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
define( 'DB_NAME', 'pbandeira' );

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
define( 'AUTH_KEY',         '&/|] N+wX,w^QFxTi91 DNrEk,}8R)|wDd)qBbv46N[k9:bgVPz|$$SJaWE:PZA!' );
define( 'SECURE_AUTH_KEY',  '*Oy7,~Q]II?1?eC/`->Fbu-{ianGZ5MwVQmBB}jhyxvKx/8jv;>_ZTM`=LVD-3(t' );
define( 'LOGGED_IN_KEY',    'bc_bnXS9Nq0g`?X[86CG^tRtOBX:+Q}7+OyVGQiyOt)X=KC}it@@{J8q>ci`=J0n' );
define( 'NONCE_KEY',        'gir[sfOV0xYA]>(`#epM.#Z[deW_5_9jr&X`47VaQjO$dM(3@KOp,>G]T1y@KDae' );
define( 'AUTH_SALT',        '6pexdpaNBmkU+UQZ]A%?Q`!_Mboajx b#D%*hhUv]lIDzG5_yKoYLjnC#q*S6k06' );
define( 'SECURE_AUTH_SALT', 'O3rn7iaox}+Ek4@q/xzQ1:HRNDzqcwGq/8Ehj!c7?ZQ%(oT,K`Q~n>7%vK7xk{;h' );
define( 'LOGGED_IN_SALT',   'b,m_i.qt{1mQ9e$w=_?,9g0y/&$rnbf-:Hw.4*|*i:/Y=tk/>rpF@:.4}jnd!&HD' );
define( 'NONCE_SALT',       'R+a uQ*/*r&SnZI[LS3kt+pD/*K7b:iT<Rcw*2*o(pfAL1u-S=iJIe 7emI[CpK*' );

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
