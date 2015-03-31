<?

// Autoload классов
CModule::AddAutoloadClasses(
	'',
	array(
		'Config' 			=> '/bitrix/php_interface/include/config.php',
		'Environment' 		=> '/bitrix/php_interface/include/environment.php',
		'ImageResizeFilter' => '/bitrix/php_interface/include/image_resize_filter.php',
	)
);


// Добавляем фильтр на изобращение, если только в CFile::ResizeImageGet в $arFilters есть ключ irf_text
AddEventHandler('main', 'OnAfterResizeImage', Array('ImageResizeFilter', 'add'));


/**
 * 
 * Если используется apache - то необходимо прописать в .htaccess в виде строчки (требуется модуль apache - mod_env)
 * SetEnv BITRIX_ENV "dev.local"
 * 
 * Если используется php-fpm то в конфигубиции nginx прописать
 * fastcgi_param BITRIX_ENV "dev.local";
 * 
 */

// Определим все возможные окружения
Environment::add(array(
	'dev' => array('dev.local', 'release.local'), // Тестовые сервера
	'www' => array('www.local'), // Боевой сервер
));

// Если это окружение разработки
if (Environment::has('dev')) {

}//\\ if