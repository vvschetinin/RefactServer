<?php

$i = 0;
$array_menu = array();

$array_menu[$i]['url'] = '/about/';
$array_menu[$i++]['name'] = 'Обо мне';

$array_menu[$i]['url'] = '/competences/';
$array_menu[$i++]['name'] = 'Компетенции';

$array_menu[$i]['url'] = '/works/';
$array_menu[$i++]['name'] = 'Работы';

$array_menu[$i]['url'] = '/blog/';
$array_menu[$i++]['name'] = 'Блог';

$array_menu[$i]['url'] = '/contacts/';
$array_menu[$i++]['name'] = 'Контакты';

echo "<ul class='menu-desktop'>\n";
for ($i = 0; $i < count($array_menu); $i++) {
    echo ($_SERVER["REQUEST_URI"] == $array_menu[$i]['url']) ? '<li class="active menu-item">' : '<li class="menu-item">';

    if ($_SERVER["REQUEST_URI"] == $array_menu[$i]['url']) {
        echo "<span>" . $array_menu[$i]['name'] . "</span></li>\n";
    } else {
        echo "<a href=\"" . $array_menu[$i]['url'] . "\">" . $array_menu[$i]['name'] . "</a></li>\n";
    }
}
echo "</ul>";