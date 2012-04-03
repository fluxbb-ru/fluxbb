<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'Обновить FluxBB',
'Update message'				=>	'Ваша база FluxBB устарела и должна быть обновлена перед тем как продолжить. Если вы Админ этого форума, пожалуйста следуйте инструкциям ниже чтобы завершить обновление.',
'Note'							=>	'Замечание:',
'Members message'				=>	'Это действие только для администраторов. Если вы простой пользователь, не волнуйтесь - форум вскоре продолжит работу!',
'Administrator only'			=>	'Это действие только для администраторов!',
'Database password info'		=>	'Чтобы провести обновление базы пожалуйста введите пароль с которым FluxBB был установлен. Если не помните, он сохранен в \'config.php\'.',
'Database password note'		=>	'Если вы работаете под SQLite (и пароль не используется) пожалуйста введите путь до базы. Он должен в точности совпасть с тем, что хранится в вашем файле конфигурации.',
'Database password'				=>	'Пароль базы',
'Maintenance'					=>	'Обслуживание',
'Maintenance message info'		=>	'Сообщение пользователям, которое будет показано пока идет процесс обновления. Этот текст может содержать HTML.',
'Maintenance message'		    =>	'Сообщение об обслуживании',
'Next'							=>	'Далее',

'You are running error'			=>	'Вы работаете на %1$s версия %2$s. FluxBB %3$s необходим хотябы %1$s %4$s для корректной работы. Вам необходимо обновить установку %1$s чтобы продолжить.',
'Version mismatch error'		=>	'Версия не совпадает. База \'%s\' кажется не содержит схему FluxBB с которой может работать этот скрипт.',
'Invalid file error'			=>	'Неправильное имя файла. Когда используется база SQLite, имя файла базы должно быть введено в точности как в \'%s\'',
'Invalid password error'		=>	'Неправильный пароль. Чтобы обновить FluxBB, вы должны ввести пароль в точности как в \'%s\'',
'No password error'				=>	'Не указан пароль базы',
'Script runs error'				=>	'Кажется скрипт обновления уже запущен кем то. В противном случае, вручную удалите файл \'%s\' и попробуйте снова',
'No update error'				=>	'Ваш форум не нуждается в обновлении',

'Intro 1'						=>	'Этот скрипт обновит вашу базу. Время обновления может быть от секунд до часов, в зависимости от скорости сервера и размера базы. Не забудте сделать бэкап базы до обновления.',
'Intro 2'						=>	'Вы прочли инструкцию по обновлению в документации? Если нет, сделайте это сейчас.',
'No charset conversion'			=>	'<strong>ВАЖНО!</strong> FluxBB обнаружил, что окружение PHP не поддерживает механизм перекодирования, необходимый для конвертации в UTF-8 из кодировки, отличной от ISO-8859-1. Это значит, что если текущая кодировка не ISO-8859-1, FluxBB не сможет перевести текст в UTF-8 и вам придется сделать это самостоятельно. Вы найдете как это сделать в инструкции по обновлению.',
'Enable conversion'				=>	'<strong>Разрешить конвертацию:</strong> Если включено, скрипт обновления после структурных обновлений сконвертирует все тексты в базе из текущей кодировки в UTF-8. Этот шаг требуется при обновлении с версии 1.2.',
'Current character set'			=>	'<strong>Текущая кодировка:</strong> Если основной язык форума Английский, вы можете оставить это как есть. иначе вам необходимо ввести кодовую страницу, используемую на данном форуме. <em>Это действие может повредить данные в базе, так что не стоит заниматься угадыванием!</em> Замечание: это необходимо даже если ваша база уже в UTF-8.',
'Charset conversion'			=>	'Смена кодировки',
'Enable conversion label'		=>	'<strong>Разрешить конвертацию</strong> (выполнить перекодирование БД).',
'Current character set label'	=>	'Текущая кодировка',
'Current character set info'	=>	'Оставить по умолчанию для англоязычных форумов иначе кодовая страница, соответствующая вашему языку.',
'Start update'					=>	'Начать обновление',
'Error converting users'		=>	'Ошибка преобразования пользователей',
'Error info 1'					=>	'Произошла ошибка при преобразовании некоторых пользователей. Такое может случиться при конвертации из FluxBB v1.2 если несколько пользователей имеют очень похожие имена, например "bob" и "bГ¶b".',
'Error info 2'					=>	'Ниже список пользователей на которых возникает ошибка. Пожалуйста выберите новые имена для каждого из них. Переименованным пользователям автоматически будут высланы письма с предупреждением.',
'New username'					=>	'Новое имя',
'Required'						=>	'(Обязательно)',
'Correct errors'				=>	'Следующие ошибки необходимо исправить:',
'Rename users'					=>	'Переименование пользователей',
'Successfully updated'			=>	'База вашего форума была успешно обновлена. Вы можете %s.',
'go to index'					=>	'перейти на главную страницу',

'Unable to lock error'			=>	'Невозможно поставить блокировку. Пожалуйста убедитесь, что PHP имеет доступ на запись в директории \'%s\' и никто другой в настоящее время не производит обновление.',

'Converting'					=>	'Конвертация %s вЂ¦',
'Converting item'				=>	'Конвертация %1$s %2$s вЂ¦',
'Preparsing item'				=>	'Пре-парсинг %1$s %2$s вЂ¦',
'Rebuilding index item'			=>	'Перестройка индекса для %1$s %2$s',

'ban'							=>	'бан',
'categories'					=>	'категории',
'censor words'					=>	'цензура',
'configuration'					=>	'конфигурация',
'forums'						=>	'форумы',
'groups'						=>	'группы',
'post'							=>	'сообщение',
'ranks'							=>	'ранги',
'report'						=>	'сингал',
'topic'							=>	'тема',
'user'							=>	'пользователь',
'signature'						=>	'подпись',

'Username too short error'		=>	'Имя пользователя должно быть не менее 2 символов длиной. Пожалуйста выберите другое (длинное) имя.',
'Username too long error'		=>	'Имя пользователя должно быть не более 25 символов длиной. Пожалуйста выберите другое (короткое) имя.',
'Username Guest reserved error'	=>	'Имя guest зарезервировано. Пожалуйста выберите другое имя.',
'Username IP format error'		=>	'Имя пользователя не может выглядеть как IP адрес. Пожалуйста выберите другое имя.',
'Username bad characters error'	=>	'Имя пользователя не может содержать символы \', " или [ и ] одновременно. Пожалуйста выберите другое имя.',
'Username BBCode error'			=>	'Имя пользователя не может содержать символы формата (BBCode) которые используются на форуме. Пожалуйста выберите другое имя.',
'Username duplicate error'		=>	'Кто-то уже занял имя %s. Имя, которое вы выбрали слишком похоже на него. Имя должно отличаться хотябы одним алфавитноцифровым символом (a-z или 0-9). Пожалуйста выберите другое имя.',

);
