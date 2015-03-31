## Библиотеки реализующие различные вкусности в [CMS 1C-Bitrix](https://www.1c-bitrix.ru/)

Многие идеи позаимствованы из Laravel


### Библиотека config.php - релизует пользовательские переменные

Конфиги хранятся в bitrix/php_interface/include/config


### Библиотка environment.php - реализует понятие окружение

Если используется apache - то необходимо прописать в .htaccess в виде строчки (требуется модуль apache - mod_env)

```SetEnv BITRIX_ENV "dev.local"```

Если используется php-fpm то в конфигурации nginx прописать

```fastcgi_param BITRIX_ENV "dev.local";```

### Библиотека image_resize_filter.php - релизует расширенные фильтры при пережатии изображении

В примере наложение полупрозрачного текста под углом


### Лицензия

[MIT license](http://opensource.org/licenses/MIT)
