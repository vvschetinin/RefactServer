<?php if ($_SERVER["REQUEST_URI"] == '/'): ?>
<title>Сайт Владлена Щетинина | Главная страница</title>
<meta name="robots" content="index, follow" >
<meta name="keywords" content="главная страница" >
<meta name="description" content="Сайт Владлена Щетинина. Создание сайтов под управлением 1C Bitrix. Адаптивный дизайню Лендинг-пейдж. Рефакторинг и доработка сайтов" >

<?php elseif ($_SERVER["REQUEST_URI"] == '/about/'): ?>
<title>Сайт Владлена Щетинина | Обо мне</title>
<meta name="robots" content="index, follow" >
<meta name="keywords" content="знакомство" >
<meta name="description" content="Сайт Владлена Щетинина. Общая информация обо мне." >

<?php elseif ($_SERVER["REQUEST_URI"] == '/competences/'): ?>
<title>Сайт Владлена Щетинина | Мои компетенции</title>
<meta name="robots" content="index, follow" >
<meta name="keywords" content="компетенции, навыки" >
<meta name="description" content="Сайт Владлена Щетинина. Мои компетенции и навыки" >
<?php elseif ($_SERVER["REQUEST_URI"] == '/competences/bitrix/'): ?>
<title>Сайт Владлена Щетинина | Работа с 1C Bitrix</title>
<meta name="robots" content="index, follow" >
<meta name="keywords" content="компетенции, навыки, битрикс, 1с битрикс" >
<meta name="description" content="Сайт Владлена Щетинина. Мои навыки при работе с 1C Bitrix" >
<?php elseif ($_SERVER["REQUEST_URI"] == '/competences/adaptive/'): ?>
<title>Сайт Владлена Щетинина | Адаптивный дизайн сайта</title>
<meta name="robots" content="index, follow" >
<meta name="keywords" content="дизайн, адаптивность сайта" >
<meta name="description" content="Сайт Владлена Щетинина. Мои навыки при создании адаптивного дизайна сайта" >

<?php elseif ($_SERVER["REQUEST_URI"] == '/works/'): ?>
<title>Сайт Владлена Щетинина | Мои работы</title>
<meta name="robots" content="index, follow" >
<meta name="keywords" content="работы, смотреть работы" >
<meta name="description" content="Сайт Владлена Щетинина. Перечень моих работ">
<?php elseif (preg_match('/^\/works/i', $_SERVER['REQUEST_URI']) && $_SERVER["REQUEST_URI"] != '/works/'): ?>
<title>Сайт Владлена Щетинина | Смотреть мои работы</title>
<meta name="robots" content="index, follow" >
<meta name="keywords" content="работы, смотреть работы" >
<meta name="description" content="Сайт Владлена Щетинина. Просмотр моих работ" >

<?php elseif ($_SERVER["REQUEST_URI"] == '/blog/'): ?>
<title>Сайт Владлена Щетинина | Блог</title>
<meta name="robots" content="index, follow" >
<meta name="keywords" content="блог, мой блог" >
<meta name="description" content="Сайт Владлена Щетинина. Мой блог" >
<?php elseif (preg_match('/^\/blog/i', $_SERVER['REQUEST_URI']) && $_SERVER["REQUEST_URI"] != '/blog/'): ?>
<title>Сайт Владлена Щетинина | Читать статью в блоге</title>
<meta name="robots" content="index, follow" >
<meta name="keywords" content="читать статьи" >
<meta name="description" content="Сайт Владлена Щетинина. Читать мой блог" >

<?php elseif ($_SERVER["REQUEST_URI"] == '/contacts/'): ?>
<title>Сайт Владлена Щетинина | Контакты</title>
<meta name="robots" content="index, follow" >
<meta name="keywords" content="контакты, телефон, почта" >
<meta name="description" content="Сайт Владлена Щетинина. Мои контакты. Как со мной связаться" >
<?php endif;?>
