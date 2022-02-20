<?php

// spl_autoload_register(function ($class) {
//     $file = sprintf("src/%s.php", str_replace('\\', DIRECTORY_SEPARATOR, $class));
//     echo $file . '<br>';
//     if (file_exists($file)) {
//         require $file;
//     }
// });

// spl_autoload_register(function ($class) {
//     $className = ltrim($class, '\\'); // Удаляет пробелы (или другие символы) из начала строки
//     $fileName  = 'src/';
//     $namespace = '';

//     if ($lastNsPos = strrpos($className, '\\')) { // Возвращает позицию последнего вхождения подстроки в строке
//         $namespace = substr($className, 0, $lastNsPos); // Возвращает подстроку c 0 до последнего \
//         $className = substr($className, $lastNsPos + 1); // Возвращает подстроку после последнего \
//         $fileName  .= str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR; // Заменяет \ на /
//     }
//     $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php'; // Заменяет _ только в имени класса
 
//     echo $fileName . '<br>';

//     if (file_exists($fileName)) {
//         require $fileName;
//     }
// });

use GeekBrains\Blog\Post;
use GeekBrains\Person\Name;
use GeekBrains\Person\Person;
use GeekBrains\Person_Test\Person_Test as Test;

$post = new Post(
    new Person(
        new Name('Иван', 'Никитин'),
        new DateTimeImmutable()
    ),
    'Заголовок',
    'Всем привет!'
    // new Test()
);

print $post;