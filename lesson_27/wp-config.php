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
define('DB_NAME', 'lesson');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '0961371159');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-bVZ58IHoZuexEBT?3(()2Otd0j?H{`#gd)LI}[:(zd=o `]E6?lZ}AP<zd#,<XT');
define('SECURE_AUTH_KEY',  '{rNAf{]v~r&?8B1v=1nU*EV)I8sKWO9l3DS/Wms&rSD[N)HS}gUL56{pM6Yt~(PQ');
define('LOGGED_IN_KEY',    '[eleJ>l^N5Xq:w>g4KxBZ;e2t:#V[+Bb`YI+%F$;S7L|D.b(RhxkEay6lJ_Xy$k)');
define('NONCE_KEY',        'O3W:,bhqB$L|wwY:r8vo>N|#Mk`#6cL,<,xNAa.4<;cCk>D?cO|Tx_&E]QJg-RiT');
define('AUTH_SALT',        '-O>OLt@TB|_~#(z4Bzyr]*zekVMo7=+a(ReWd-DSRl-3u*?I7_roz `d0pN|Ias5');
define('SECURE_AUTH_SALT', ']X+y_|Jb1]v]EWu+gEtKNj12K2;.n}0c/G-[kD{^Q?w[luEPCM7#4lAGqqibF4|y');
define('LOGGED_IN_SALT',   'sI_&D*.2GjG:$1@gA!K^-XK>d~-@k,AwA|Ia4I#GZo`C333VksE-#GA*(3m^.1*:');
define('NONCE_SALT',       'k%#tu74|Ee$=IuT)8&P}eZB^{K0][=Va#LP(_U!Gan^t8NG;KKVFdSX 5TQEAD ,');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
