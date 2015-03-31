## Библиотеки реализующие различные вкусности в Битрикс

Многие идеи позаимствованы из Laravel


### Библиотека config.php - релизует пользовательские переменные

Конфиги хранятся в bitrix/php_interface/include/config


### Библиотка environment.php - реализует понятие окружение

Если используется apache - то необходимо прописать в .htaccess в виде строчки (требуется модуль apache - mod_env)

```SetEnv BITRIX_ENV "dev.local"```

Если используется php-fpm то в конфигурации nginx прописать

```fastcgi_param BITRIX_ENV "dev.local";```


### Лицензия

[MIT license](http://opensource.org/licenses/MIT)
