<?php
/**
 * Copyright (C) 2013-2020 Combodo SARL
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 */

// Portal
Dict::Add('uk ua', 'Ukraine', 'Українська', array(
	'Page:DefaultTitle' => '%1$s Портал користувача',
	'Page:PleaseWait' => 'Зачекайте будь ласка...',
	'Page:Home' => 'Додому',
	'Page:GoPortalHome' => 'Домашня сторінка',
	'Page:GoPreviousPage' => 'Попередня сторінка',
	'Page:ReloadPage' => 'Оновити сторінку',
	'Portal:Button:Submit' => 'Надіслати',
	'Portal:Button:Apply' => 'Оновити',
	'Portal:Button:Cancel' => 'Відміна',
	'Portal:Button:Close' => 'Закрити',
	'Portal:Button:Add' => 'Додати',
	'Portal:Button:Remove' => 'Видалити',
	'Portal:Button:Delete' => 'Видалити',
	'Portal:EnvironmentBanner:Title' => 'Ви знаходитесь у режимі <strong>%1$s</strong>',
	'Portal:EnvironmentBanner:GoToProduction' => 'Повернутися до режиму PRODUCTION',
	'Error:HTTP:400' => 'Некоректний запит',
	'Error:HTTP:401' => 'Помилка аутентифікації',
	'Error:HTTP:404' => 'Сторінку не знайдено',
	'Error:HTTP:500' => 'Виникла помилка!',
	'Error:HTTP:GetHelp' => 'Будь ласка зверніться до адміністратора %1$s, або у Службу підтримки користувачів',
	'Error:XHR:Fail' => 'Помилка завантаження, будь ласка зверніться до адміністратора %1$s, або у Службу підтримки користувачів',
	'Portal:ErrorUserLoggedOut' => 'Ви вийшли із системи, для продовження роботи потрібно увійти повторно.',
	'Portal:Datatables:Language:Processing' => 'Зачекайте будь ласка...',
	'Portal:Datatables:Language:Search' => 'Фільтр:~~',
	'Portal:Datatables:Language:LengthMenu' => 'Відображати _MENU_ елементів на сторінку',
	'Portal:Datatables:Language:ZeroRecords' => 'Нічого не знайдено',
	'Portal:Datatables:Language:Info' => 'Сторінка _PAGE_ з _PAGES_',
	'Portal:Datatables:Language:InfoEmpty' => 'Інформація відсутня',
	'Portal:Datatables:Language:InfoFiltered' => 'Відфільтровано з _MAX_ елементів',
	'Portal:Datatables:Language:EmptyTable' => 'Інформація відсутня у даній таблиці',
	'Portal:Datatables:Language:DisplayLength:All' => 'Усі',
	'Portal:Datatables:Language:Paginate:First' => 'Перша',
	'Portal:Datatables:Language:Paginate:Previous' => 'Попередня',
	'Portal:Datatables:Language:Paginate:Next' => 'Наступна',
	'Portal:Datatables:Language:Paginate:Last' => 'Остання',
	'Portal:Datatables:Language:Sort:Ascending' => 'Сортувати за зростанням',
	'Portal:Datatables:Language:Sort:Descending' => 'Сортувати за спаданням',
	'Portal:Autocomplete:NoResult' => 'Інформація відсутня',
	'Portal:Attachments:DropZone:Message' => 'Перетягніть файли щоб завантажити як додаток',
	'Portal:File:None' => 'Немає файлу',
	'Portal:File:DisplayInfo' => '<a href="%2$s" class="file_download_link">%1$s</a>~~',
	'Portal:File:DisplayInfo+' => '%1$s (%2$s) <a href="%3$s" class="file_open_link" target="_blank">Open</a> / <a href="%4$s" class="file_download_link">Download</a>~~',
	'Portal:Calendar-FirstDayOfWeek' => 'uk', // from moment.js
	'Portal:Form:Close:Warning' => 'Ви дійсно хочете закрити форму? Введену інформацію буде втрачено',
));

// UserProfile brick
Dict::Add('uk ua', 'Ukraine', 'Українська', array(
	'Brick:Portal:UserProfile:Name' => 'Профіль користувача',
	'Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil' => 'Мій профіль',
	'Brick:Portal:UserProfile:Navigation:Dropdown:Logout' => 'Вийти',
	'Brick:Portal:UserProfile:Password:Title' => 'Пароль',
	'Brick:Portal:UserProfile:Password:ChoosePassword' => 'Новий пароль',
	'Brick:Portal:UserProfile:Password:ConfirmPassword' => 'Підтвердіть новий пароль',
	'Brick:Portal:UserProfile:Password:CantChangeContactAdministrator' => 'Для зміни паролю зверніться до адміністратора %1$s, або у Службу підтримки користувачів',
	'Brick:Portal:UserProfile:Password:CantChangeForUnknownReason' => 'Неможливо змінити пароль, будь ласка зверніться до адміністратора %1$s, або у Службу підтримки користувачів',
	'Brick:Portal:UserProfile:PersonalInformations:Title' => 'Особиста інформація',
	'Brick:Portal:UserProfile:Photo:Title' => 'Фото',
));

// AggregatePageBrick
Dict::Add('uk ua', 'Ukraine', 'Українська', array(
	'Brick:Portal:AggregatePage:DefaultTitle' => 'Дашборд',
));

// BrowseBrick brick
Dict::Add('uk ua', 'Ukraine', 'Українська', array(
	'Brick:Portal:Browse:Name' => 'Перегляд елементів',
	'Brick:Portal:Browse:Mode:List' => 'Список',
	'Brick:Portal:Browse:Mode:Tree' => 'Ієрархія',
	'Brick:Portal:Browse:Mode:Mosaic' => 'Блоками',
	'Brick:Portal:Browse:Action:Drilldown' => 'Деталізація',
	'Brick:Portal:Browse:Action:View' => 'Детальніше',
	'Brick:Portal:Browse:Action:Edit' => 'Редагувати',
	'Brick:Portal:Browse:Action:Create' => 'Створити',
	'Brick:Portal:Browse:Action:CreateObjectFromThis' => 'Новий %1$s~~',
	'Brick:Portal:Browse:Tree:ExpandAll' => 'Розгорнути все',
	'Brick:Portal:Browse:Tree:CollapseAll' => 'Згорнути все',
	'Brick:Portal:Browse:Filter:NoData' => 'Елементи відсутні',
));

// ManageBrick brick
Dict::Add('uk ua', 'Ukraine', 'Українська', array(
	'Brick:Portal:Manage:Name' => 'Керувати елементами',
	'Brick:Portal:Manage:Table:NoData' => 'елементи відсутні',
	'Brick:Portal:Manage:Table:ItemActions' => 'Дії',
	'Brick:Portal:Manage:DisplayMode:list' => 'Список',
	'Brick:Portal:Manage:DisplayMode:pie-chart' => 'Кругова діаграма',
	'Brick:Portal:Manage:DisplayMode:bar-chart' => 'Стовпчаста діаграма',
	'Brick:Portal:Manage:Others' => 'Інші',
	'Brick:Portal:Manage:All' => 'Усі',
	'Brick:Portal:Manage:Group' => 'Група',
	'Brick:Portal:Manage:fct:count' => 'Загалом',
	'Brick:Portal:Manage:fct:sum' => 'Сума',
	'Brick:Portal:Manage:fct:avg' => 'Середнє',
	'Brick:Portal:Manage:fct:min' => 'Мінімальне',
	'Brick:Portal:Manage:fct:max' => 'Максимальне',
));

// ObjectBrick brick
Dict::Add('uk ua', 'Ukraine', 'Українська', array(
	'Brick:Portal:Object:Name' => 'Об’єкт',
	'Brick:Portal:Object:Form:Create:Title' => 'Створити %1$s~~',
	'Brick:Portal:Object:Form:Edit:Title' => 'Оновлення %2$s (%1$s)~~',
	'Brick:Portal:Object:Form:View:Title' => '%1$s: %2$s~~',
	'Brick:Portal:Object:Form:Stimulus:Title' => 'Будь ласка, введіть наступну інформацію',
	'Brick:Portal:Object:Form:Message:Saved' => 'Збережено',
	'Brick:Portal:Object:Form:Message:ObjectSaved' => '%1$s збережено',
	'Brick:Portal:Object:Search:Regular:Title' => 'Вибрати %1$s (%2$s)',
	'Brick:Portal:Object:Search:Hierarchy:Title' => 'Вибрати %1$s (%2$s)~~',
	'Brick:Portal:Object:Copy:TextToCopy' => '%1$s: %2$s~~',
	'Brick:Portal:Object:Copy:Tooltip' => 'Копіювати посилання на об’єкт',
	'Brick:Portal:Object:Copy:CopiedTooltip' => 'Посилання скопійовано'
));

// CreateBrick brick
Dict::Add('uk ua', 'Ukraine', 'Українська', array(
	'Brick:Portal:Create:Name' => 'Швидке створення',
	'Brick:Portal:Create:ChooseType' => 'Будь ласка, виберіть тип',
));

// Filter brick
Dict::Add('uk ua', 'Ukraine', 'Українська', array(
	'Brick:Portal:Filter:Name' => 'фільтр',
	'Brick:Portal:Filter:SearchInput:Placeholder' => 'на приклад, підключити wifi',
	'Brick:Portal:Filter:SearchInput:Submit' => 'Знайти',
));
