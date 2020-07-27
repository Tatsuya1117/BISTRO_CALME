<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'bistro_calme');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql5031.xserver.jp');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          'actuv@_E2 =QX(HZ*SdNVS_ /t2.)zEACy:qa|-=O>^l@scR_FWV~*u&(.9^Y#[1');
define('SECURE_AUTH_KEY',   'V{I?-P/^O47@U=0Q-A!n.F_?T0C0u$G?,nEW,6>k#G=<&u[uy{7i>Hv5n)He(I,A');
define('LOGGED_IN_KEY',     '?3w/gXfG$mptTb{)oc(A3^WpY/75);E7GS lE&|tB3=W?L>@2q%fV9Y1LDt_MZ%8');
define('NONCE_KEY',         'G=`5f5eB9D2uO;-|n>W%;.mPH;] i1&`b[x(^$dlW<IJiW,Z 0EsTGmW0U?at]{`');
define('AUTH_SALT',         'MI *6D+5U4U_=8,]Tr7+edI5gdY%6.+)0iBr}f X;wGv;[@p:&oYy?SBhH& H7yU');
define('SECURE_AUTH_SALT',  'Gl.@ubqa`aFgvD(bz5JHM}CaE*DwPr<~LvV#zs~QGl1{/[%hyOV*1Vh0}<sz/z^$');
define('LOGGED_IN_SALT',    '@7<[v$9e)(EBq!PnHlR@2J6Hj]w783~]ASSYZvx|wF!V(=clc`7&f}dkmIE|T72L');
define('NONCE_SALT',        '<1fKZ~MOvkQU$R`W|rw){S.RoDY9F(RT@]2xL7@n|jpi/`Z;Mm#MPw^7cQ? ?OEb');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
