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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'pokemonGo' );

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
define( 'AUTH_KEY',         'Ng3y#Qy}D3(voZV66ftjLWZ44a@#f!]84Tc!nY#FDD*D~K+b)||;(&!?z Pr_Yw6' );
define( 'SECURE_AUTH_KEY',  'ay;hbm%J9=)lbKE/+M5Rj:;Sx3$zLSfGqBA,$({(ZL4!!}|_mPjN$<oi)~4{;;Bg' );
define( 'LOGGED_IN_KEY',    'ZWGh&7z/D!nE&|Vlepb{}q#X(rM4)1*Y @p++(%g6kXs?tpD8ik(@ol.?xcY!C@[' );
define( 'NONCE_KEY',        ';KsR)eYIIskT(wXxif) t~$iT?~b}n=.f>m$yHacB7(L$lj,=h%./Jl/a]N3fAa0' );
define( 'AUTH_SALT',        'BywKUneo$[vk;hqkw3rx[AeB]f5;2AU{]/+>vil2D_,ck2Bf+sSe;g/s<4v&ao`J' );
define( 'SECURE_AUTH_SALT', '(F=dH1=#O{fDZ,#H%CfDoF5H=3cIA#[}9>w(lS><W2+Grb(($J6!&ua6Lo<Wo!m<' );
define( 'LOGGED_IN_SALT',   'DeDZuHiKpEWyRsP&yl96w.^~&JLF*x,Kpu~qb8JT64pq8+p_W$gu],P@#;sjfwi&' );
define( 'NONCE_SALT',       's9B,K:v pVk+zj;XdXYM7^gC+bSOHydC6+Fo_Hi{75T&$`Hf7`S.7HsiI32V6||&' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
