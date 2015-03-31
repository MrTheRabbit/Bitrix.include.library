## Библиотеки реализующие различные вкусности в Битрикс

Многие идеи позаимствованы из Laravel


<<<<<<< HEAD
### Библиотека config.php - релизует пользовательские переменные
=======

Библиотека config.php - релизует пользовательские переменные
>>>>>>> 6c12544741df1457f7767c7abfc70c258d78c482

Конфиги хранятся в bitrix/php_interface/include/config


<<<<<<< HEAD
### Библиотка environment.php - реализует понятие окружение

Если используется apache - то необходимо прописать в .htaccess в виде строчки (требуется модуль apache - mod_env)

```SetEnv BITRIX_ENV "dev.local"```

Если используется php-fpm то в конфигурации nginx прописать

```fastcgi_param BITRIX_ENV "dev.local";```
=======

Библиотка environment.php - реализует понятие окружение

Если используется apache - то необходимо прописать в .htaccess в виде строчки (требуется модуль apache - mod_env)

SetEnv BITRIX_ENV "dev.local"

Если используется php-fpm то в конфигурации nginx прописать

fastcgi_param BITRIX_ENV "dev.local";
>>>>>>> 6c12544741df1457f7767c7abfc70c258d78c482


### Лицензия

[MIT license](http://opensource.org/licenses/MIT)
