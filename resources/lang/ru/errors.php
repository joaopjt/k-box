<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Generic Errors Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines are used inside for rendering error messages
	|
	*/

	'unknown' => 'Неизвестная ошибка в запросе',

	'upload' => array(
		'simple' => 'Ошибка загрузки :description',
		'filenamepolicy' => 'Файл :filename не отвечает правилам названия документов.',
		'filealreadyexists' => 'Файл :filename уже существует.',
	),

	'group_already_exists_exception' => array(
		'only_name' => 'Коллекцие с именем ":name" уже существует.',
		'name_and_parent' => 'Коллекция ":name" под ":parent" уже существует.',
	),


	'reindex_all' => 'Переиндексация всех процедур не может быть завершена в связи с ошибкой. Посмотрите журнал ошибок или свяжитесь с администратором.', //logs as list of errors

	'token_mismatch_exception' => 'Время вашей сессии вышло, пожалуиста, обновите страницу для продолжения работы. Спасибо.',

	'not_found' => 'Искомый вами ресурс не найден.',
	
	'document_not_found' => 'Нужный вам документ не может быть найден или был удален.',

	'forbidden_exception' => 'У вас нет доступа к странице.',
	
	'fatal' => 'Фатальная ошибка :reason',

	'panels' => array(
		'title' => 'Ой! непредвиденная ошибка.',
	),

	'import' => array(
		'folder_not_readable' => 'Папка :folder не доступна для чтения. Убедитесь что у вас есть права на чтение.',
	),


	'group_edit_institution' => "Вы не можете изменять группы созданные на организационном уровне.",
	'group_edit_else' => "Вы не можете вносить изменения в чужую группу.",

	'503_title' => 'Обслуживание К-Линк СУД',
	'503_text' => '<strong>СУД</strong> в данный момент находится<br/><strong>на техническом обслуживании</strong><br/><small>скоро вернемся :)</small>',

	'500_title' => 'Ошибка - К-Линк СУД',
	'500_text' => 'Опаньки! Что-то <strong>плохое</strong><br/>и неожиданное <strong>произошло</strong>,<br/>мы жутко извиняемся.',

	'404_title' => 'Не найден в СУД К-Линк ',
	'404_text' => 'Ой! <strong>Страница</strong><br/>искомая вами<br/>больше<strong>не существует</strong>.',
	
	'401_title' => 'Вы не можете просмотреть страницу К-Линк СУД',
	'401_text' => 'Ой! Скорее всего вы <strong>не можете</strong> просмотреть страницу<br/>из-за вашей <strong>Авторизации</strong>.',

	'405_title' => 'Данный метод не разрешен на СУД К-Линк',
	'405_text' => 'Не называй меня больше так.',
	
	'413_title' => 'Чрезмерно большой размер документа',
	'413_text' => 'Файл, который вы пытаетесь загрузить превышает максимально допустимый размер.',

	'klink_exception_title' => 'Ошибка сервисов К-Линк',
	'klink_exception_text' => 'Ошибка в подключении к сервисам К-Линк.',
];
