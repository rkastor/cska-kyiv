<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cska_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'cska_db' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'AyUlygkF' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lA{@6Z[A[S]5~Yi_jrjpCW}5eNu@#ecEmrInSNrI_%nI@|/9[u|w >wedM5RA$Fd' );
define( 'SECURE_AUTH_KEY',  'CpR-^q?]{R?SgHz5;?j]Ss 0kAaq&DzIu C0zEYrxg4wyK@#F%{By=Zmu/LLajJ0' );
define( 'LOGGED_IN_KEY',    ',&3!RkdWy<th~M{`W4hu0VEUGwC{[MO;Pt359lE-p8Za-/+3]BNxL2$RdaZ]nIQ1' );
define( 'NONCE_KEY',        'Gj6jE$<Z!o3[29B?6to`aD!,{54ZFczpn?Xl#>L;N]9#ANl-&&~2B[*lkza^/S4w' );
define( 'AUTH_SALT',        'YDQN^=]pf}|(0wKIlbggfiR|Ca[pHo6,2~MtC{h0+B^mF.]&F8k<*&-%p7)KFn1F' );
define( 'SECURE_AUTH_SALT', '_U7kbVu7C9e0U56=*x^$fl]lT7%9GQg0z*^igDU]XhQH6(=vA%h[qBv0dF^TK8-I' );
define( 'LOGGED_IN_SALT',   'o`nHTb{k XPC?$VfxSLfP?ageDmXl<XJj^tyY|w+_nU:%<mxpS8,/XzL8f[5oEr2' );
define( 'NONCE_SALT',       'B.siTXiu&l7ot5BkQHw7|DG+6-inJBs8ixl 9M-ZA:D~VcYNhmM=g#LaG#pD-1Q%' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
