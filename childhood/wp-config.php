<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(/f[[O5%6@~O*`xuU(-#?)xV_;*tRu(,4qc{Q%R1J<wVD67 *IslYUkGBY.QwY:_' );
define( 'SECURE_AUTH_KEY',  '3}NOTxO)9yBRwgWKI(u,me7Kp7=q+S5Tu`9!+<(8eQ=i#m7RSx_39#vy>J2#|^SO' );
define( 'LOGGED_IN_KEY',    '|PSgiho51BIA,zXCjzj.fO>5BsIml{ksr)pP}Qx#Ll%;0E>a0>bbmRi>7zOe+Hs$' );
define( 'NONCE_KEY',        ',xa8>IP6n~F0u~aHr]/?P/A@QBZ`+xt`.Cr:t*Qa/>mw|Nu+<H)2yYw,Ad(Sni9d' );
define( 'AUTH_SALT',        'P 47Ee#-piys>7jNJEmyM $L/Wa!!lGRaqBsm=OAfUn>HrV%1E<hIOC`p--j))!)' );
define( 'SECURE_AUTH_SALT', 'vl*T[> sstn+uP6.G1mE2qdLpqIBu DUnD#g+yU#2:i8yVmqP64:TGx$kgxd1)1>' );
define( 'LOGGED_IN_SALT',   '9PxY})|7?IJLj%!(Z@V$T]pp[RcbfB_;F5<kE>1)hbUXQl[lzekKM^;~}}!-AE1I' );
define( 'NONCE_SALT',       'x~(Yy~Ff~Sp7C(q>$H;i:F^7UarOg:x)w0)0qqat8I28+)5Ia][,/Bp@q:(!9_~w' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
