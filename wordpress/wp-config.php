<?php
# Database Configuration
define( 'DB_NAME', 'wp_devthisland' );
define( 'DB_USER', 'devthisland' );
define( 'DB_PASSWORD', 'Fbcx6nr3h0Tji0DSU8z1' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'hkVE*>|n>4<[^=x-Sn)es{SK$&!O::uW|5l;LVOqtZ-@++;P-R,A#Oic$8T},8n-');
define('SECURE_AUTH_KEY',  ')Qh;U-YbI% `{Y%#k-tojag9vI%6<OejIeSA6`bkf0nmZxyeQ|&[+z J#M3$u1jo');
define('LOGGED_IN_KEY',    '+TJCON*5F#4+?%?<C2!T$;Pa=qj,+1W]x|> Rr(e~O=?;WEn$G*Y^*PsJ+)AG-|D');
define('NONCE_KEY',        '|3^wU5L@TYICQ|DjM?m|3:,oxH0l!5 hg<s%|aR4Wh5JbF(;/)f=}>~mZ;KYX)!H');
define('AUTH_SALT',        'oimF.g69,i t^7jUs6X--O2!{H_B|j[X/z|.XFnu}PwO+:?Uvs5rk*g|?xh}YUTH');
define('SECURE_AUTH_SALT', 'UTW]w:CA5TD%oJ{9JKI>FYY*ee1G=c3{.WTe|fkLkPJph`z51~B,X}KI_-<~!y87');
define('LOGGED_IN_SALT',   'XBpZgB;<m,r|)Uy@x!KpMx!Gc=9|^<ukg-ln:56pK&~U-}(/5pyq>d5P!c^,j)e9');
define('NONCE_SALT',       '6+gZ*eRC.+0uuv:~$jN^qcc7lh@K3]0m=?#v;eO;xV34OpA-1qC-|JG>?cJf/eZ}');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'devthisland' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'c6067669556506170116267e632224e3dea94763' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '40413' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '45.33.65.139' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'devthisland.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-40413', );

$wpe_special_ips=array ( 0 => '45.33.65.139', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
