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
define( 'DB_NAME', 'cursoemvideowp' );

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
define( 'AUTH_KEY',         ' sE)f)x}#AiSL5J4kMG0Mc#xx>{lHfFlGRi 1H!nTh!)N{PH>R0dtZXYw^d)50=x' );
define( 'SECURE_AUTH_KEY',  '?R97cjMqhC6r_:9JWiO<TVMt(LP.7,L[*{cQ{@lh+:z}ubjK_0TI`4(d)Y)eMTc[' );
define( 'LOGGED_IN_KEY',    'f,{R+@zQ;e]FYXj3IKyr6GCk6CbT Iw-`rMksqCO|AC9Uki<O$qnLp[fBu6x21nL' );
define( 'NONCE_KEY',        ' ;gcy~~Xb6dc38(2wck%RgGgo2Fdv^Y&(y#uh%Zp.|[^{,D@~F1`pNsJ_eeenO)j' );
define( 'AUTH_SALT',        'rNJ@BHkR4?|n0G+Lz{1~c^Ug]e==0,I )Hgw%so]tXn|s);TK-#2P-UD$J4j|6Bv' );
define( 'SECURE_AUTH_SALT', 'yj7NGmUS/ej]o=c-;E&CTH:kmq_TB1Uh[BVkh;iD1 @onQgz7%:0HI4Q02Wi1=hB' );
define( 'LOGGED_IN_SALT',   'd5~d[VM3@J|/[&b.FG/U1!K/!tR1a,*/<DTrjEi]4fZc|P(3(e*e:yL{I|e};KOm' );
define( 'NONCE_SALT',       'Va`UzE(!EA))-FBQr~*Px>er$K+bFoAI_oxokD%in/[<P>}1BpG%QY8T-o7=-!}p' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';

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
