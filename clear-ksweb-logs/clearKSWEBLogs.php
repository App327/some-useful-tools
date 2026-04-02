<?php

header('HTTP/1.1 200 OK');
header('Content-Type: text/plain; charset=utf-8');

echo '============ ОЧИСТКА ЖУРНАЛОВ KSWEB ============
v1.0                              © App327, 2026
https://www.github.com/App327/some-useful-tools
Версия PHP: '.phpversion().'



';

$paths = [
 '/data/user/0/ru.kslabs.ksweb/components/log/lighttpd/lighttpd.log',
 '/data/user/0/ru.kslabs.ksweb/components/log/nginx/nginx.log',
 '/data/user/0/ru.kslabs.ksweb/components/log/apache/apache.log',
 '/data/user/0/ru.kslabs.ksweb/components/log/mysql/mysql.log',
 '/data/user/0/ru.kslabs.ksweb/components/log/php/php.log',
 '/data/user/0/ru.kslabs.ksweb/components/log/msmtp/msmtp.log',
 '/data/user/0/ru.kslabs.ksweb/components/log/scheduler/scheduler.log'
];

for ($i = 0; $i < count($paths); $i++) {
 file_put_contents($paths[$i], '');
 echo '+ Очищено: ' . $paths[$i] . PHP_EOL;
}

echo '
Всё очищено!';

?>