<?php
/**
 * Создание класса в битрикс и его автолоад.
 *
 * В папке instalator лежит архив с модулем подключения классов.
 * 1. Его необходимо установить. Желательно в папку /local/
 * 2. После установки создать папку /lib/
 * 3. В папке /lib/ создать необходимые классы.
 * 4. Подключить модуль: в init.php:
 *      use Bitrix\Main\Loader;
 *      Loader::IncludeModule('classes.lib');
 *      use Classes\Lib as MyClass; // Пометка!: Пространство имен должно совпадать с названием модуля.
 * Пространство имен: Classes\Lib
 * Название модуля: classes.lib
 * 5. Модуль подключен, можно вызывать.
 *
 * Также рекомендуемо подключать модуль через composer autoload используя:
 * use Bitrix\Main\Loader;
 * Loader::IncludeModule('classes.lib');
*/