<?php
/**
 * Resource Russian lexicon topic
 *
 * @language ru
 * @package modx
 * @subpackage lexicon
 */
$_lang['access'] = 'Доступ';
$_lang['cache_output'] = 'Кэшировать вывод';
$_lang['changes'] = 'Изменения';
$_lang['class_key'] = 'Ключ класса';
$_lang['context'] = 'Контекст';
$_lang['createedit_document'] = 'Создать/редактировать документ';
$_lang['createedit_static'] = 'Создать/редактировать  статический ресурс';
$_lang['createedit_symlink'] = 'Создать/редактировать  символическую ссылку';
$_lang['createedit_weblink'] = 'Создать/редактировать  ссылку';
$_lang['document'] = 'Документ';
$_lang['document_create'] = 'Создать документ';
$_lang['document_create_here'] = 'Дочерний документ';
$_lang['document_new'] = 'Новый документ';
$_lang['documents'] = 'Ресурсы';
$_lang['duplicate_alias_found'] = 'Ресурс [[+id]] уже использует псевдоним [[+alias]]. Пожалуйста введите уникальный псевдоним.';
$_lang['empty_template'] = '(пустой шаблон)';
$_lang['general'] = 'Настройки ресурса';
$_lang['markup'] = 'Разметка/структура ресурса';
$_lang['none'] = 'Нет';
$_lang['page_settings'] = 'Настройки страницы';
$_lang['preview'] = 'Просмотреть';
$_lang['resource_access_message'] = 'Здесь вы можете выбрать, к каким группам принадлежит ресурс.';
$_lang['resource_add_children_access_denied'] = 'У вас нет прав на создание ресурса здесь.';
$_lang['resource_alias'] = 'Псевдоним';
$_lang['resource_alias_help'] = 'Здесь вы можете выбрать псевдоним для ресурса. Псевдоним позволяет обращаться к ресурсу по адресу: http://yourserver/псевдоним. <strong>Важно!</strong> Эта функция будет работать только если включёна настойка &laquo;Дружественные URL&raquo;.';
$_lang['resource_change_template_confirm'] = 'Вы уверены в том, что хотите сменить шаблон? Это действие удалит текущие значения дополнительных параметров для этого ресурса.';
$_lang['resource_cacheable'] = 'Кэшируемый';
$_lang['resource_cacheable_help'] = 'Если активировано, ресурс будет сохранён в кеш после первого обращения к нему.';
$_lang['resource_cancel_dirty_confirm'] = 'У вас есть отложенные изменения. Вы действительно хотите отменить?';
$_lang['resource_class_key_help'] = 'Это  ключ класса ресурса, показывающий его тип в MODx.';
$_lang['resource_content'] = 'Содержимое ресурса';
$_lang['resource_contentdispo'] = 'Местонахождение содержимого';
$_lang['resource_contentdispo_help'] = 'Этот параметр определяет, как браузер должен обработать ресурс. Для того, чтобы ресурс стал доступным для скачивания, а не отображался в окне браузера, выберите параметр «Прикреплённый».';
$_lang['resource_content_type'] = 'Тип содержимого';
$_lang['resource_content_type_help'] = 'Выберите тип содержимого для этого ресурса. Если вы не уверены в том, какой тип данных должен быть у документа, оставьте text/html. Если включён &laquo;Дружественный URL&raquo;, то к псевдониму документа будет добавляться расширение файла в соответствии с выбранным типом содержимого. Сменить расширение файла можно в Система->Типы содержимого';
$_lang['resource_create'] = 'Новый документ';
$_lang['resource_create_access_denied'] = 'У вас нет прав на создание ресурса';
$_lang['resource_create_here'] = 'Дочерний документ';
$_lang['resource_createdby'] = 'Автор';
$_lang['resource_createdon'] = 'Создан';
$_lang['resource_delete'] = 'Удалить ресурс';
$_lang['resource_delete_confirm'] = 'Вы уверенны, что хотите удалить этот ресурс?<br /><strong>Внимание!</strong> Все дочерние ресурсы также будут удалены!';
$_lang['resource_description'] = 'Описание';
$_lang['resource_description_help'] = 'Здесь можно ввести описание ресурса.';
$_lang['resource_duplicate'] = 'Сделать копию ресурса';
$_lang['resource_duplicate_confirm'] = 'Вы уверенны, что хотите сделать копию этого ресурса? Все дочерние ресурсы также будут скопированы.';
$_lang['resource_edit'] = 'Редактировать ресурс';
$_lang['resource_editedby'] = 'Редактировал';
$_lang['resource_editedon'] = 'Изменён';
$_lang['resource_err_change_parent_to_folder'] = 'Произошла ошибка при попытке изменить тип родительского документа';
$_lang['resource_err_class'] = 'The resource is not a valid [[+class]].';
$_lang['resource_err_create'] = 'Произошла ошибка при попытке создания ресурса.';
$_lang['resource_err_delete'] = 'Произошла ошибка при попытке удаления ресурса.';
$_lang['resource_err_delete_children'] = 'Произошла ошибка при попытке удалить дочерние ресурсы этого ресурса.';
$_lang['resource_err_delete_container_sitestart'] = 'Ресурс, который вы пытаетесь удалить, является папкой и содержит ресурс с id [[+id]]. Этот ресурс указан в настройках системы как «Главная страница сайта», и он не может быть удалён. Пожалуйста, укажите другой ресурс в настройках системы как «Главная страница сайта» и повторите попытку удаления.';
$_lang['resource_err_delete_container_siteunavailable'] = 'Ресурс, который вы пытаетесь удалить, является папкой и содержит ресурс с id [[+id]]. Этот ресурс указан в настройках системы как страница «Сайт недоступен» и не может быть удалён. Пожалуйста, назначьте другой ресурс страницей «Сайт недоступен» в настройках системы и повторите попытку удаления.';
$_lang['resource_err_delete_sitestart'] = 'Ресурс указан в настройках системы как «Главная страница сайта» и не может быть удалён!';
$_lang['resource_err_delete_siteunavailable'] = 'Ресурс используется как страница «Сайт недоступен» и не может быть удалён!';
$_lang['resource_err_duplicate'] = 'Произошла ошибка при создании копии ресурса.';
$_lang['resource_err_move_to_child'] = 'Вы не можете переместить ресурс ниже его дочернего ресурса.';
$_lang['resource_err_nf'] = 'Ресурс не найден.';
$_lang['resource_err_nfs'] = 'Ресурс с идентификатором [[+id]] не найден';
$_lang['resource_err_ns'] = 'Ресурс не указан.';
$_lang['resource_err_own_parent'] = 'Ресурс не может быть своим собственным родительским ресурсом.';
$_lang['resource_err_publish'] = 'Произошла ошибка при попытке опубликовать ресурс.';
$_lang['resource_err_new_parent_nf'] = 'Новый родительский ресурс с идентификатором [[+id]] не найден.';
$_lang['resource_err_remove'] = 'Произошла ошибка при попытке удалить ресурс';
$_lang['resource_err_save'] = 'Произошла ошибка при попытке сохранить ресурс.';
$_lang['resource_err_select_parent'] = 'Пожалуйста, выберите родительский ресурс.';
$_lang['resource_err_undelete'] = 'Произошла ошибка при попытке восстановить ресурс.';
$_lang['resource_err_undelete_children'] = 'Произошла ошибка при попытке восстановить дочерние ресурсы этого ресурса.';
$_lang['resource_err_unpublish'] = 'Произошла ошибка при попытке отменить публикацию  ресурса';
$_lang['resource_err_unpublish_sitestart'] = 'Ресурс указан в настройках системы как «Главная страница сайта» и его публикация не может быть отменена!';
$_lang['resource_err_unpublish_sitestart_dates'] = 'Ресурс указан в настройках системы как «Главная страница сайта» и не может иметь указанные в настройках ресурса дату публикации или дату снятия с публикации!';
$_lang['resource_folder'] = 'Контейнер';
$_lang['resource_folder_help'] = 'Включение этой опции позволяет ресурсу быть контейнером для других ресурсов. «Контейнер» походит на папку, только он может иметь записи дочерних ресурсов.';
$_lang['resource_group_resource_err_ae'] = 'Ресурс уже является частью этой группы ресурсов.';
$_lang['resource_group_resource_err_nf'] = 'Ресурс не является частью этой группы ресурсов.';
$_lang['resource_hide_from_menus'] = 'Не показывать в меню';
$_lang['resource_hide_from_menus_help'] = 'Включение этой опции запрещает отображение ресурса в веб-меню. Имейте в виду, что некоторые дополнения и модули, создающие веб-меню, могут проигнорировать эту опцию.';
$_lang['resource_link_attributes'] = 'Атрибуты ссылки';
$_lang['resource_link_attributes_help'] = 'Здесь вы можете ввести атрибуты ссылки для этого ресурса, такие как target= или rel=.';
$_lang['resource_locked_by'] = 'Ресурс с id [[+id]] сейчас заблокированн [[+user]]';
$_lang['resource_longtitle'] = 'Расширенный заголовок';
$_lang['resource_longtitle_help'] = 'Здесь вы можете ввести расширенный заголовок ресурса. Это удобно для поисковой оптимизации и делает текст более информативным.';
$_lang['resource_menuindex'] = 'Позиция в меню';
$_lang['resource_menuindex_help'] = 'Позиция (индекс) в меню — это порядковый номер ресурса в меню. Это значение также можно использовать в разработке сниппетов.';
$_lang['resource_menutitle'] = 'Пункт меню';
$_lang['resource_menutitle_help'] = 'Пункт меню — это параметр, который можно использовать для отображения краткого заголовка ресурса в меню.';
$_lang['resource_new'] = 'Новый ресурс';
$_lang['resource_notcached'] = 'Ресурс (еще) не кэшировался.';
$_lang['resource_pagetitle'] = 'Заголовок';
$_lang['resource_pagetitle_help'] = 'Введите имя/заголовок ресурса. Нежелательно использовать при этом обратный слэш (\)!';
$_lang['resource_parent'] = 'Родительский ресурс';
$_lang['resource_parent_help'] = ' Идентификатор (id) родительского ресурса.';
$_lang['resource_parent_select_node'] = 'Пожалуйста, выберите узел в древовидном меню слева.';
$_lang['resource_publish'] = 'Опубликовать ресурс';
$_lang['resource_publish_confirm'] = 'Публикация ресурса в этот момент удалит любые даты отмены публикации, которые, возможно, были назначены. Если вы желаете установить или сохранить дату публикации или отмены публикации, пожалуйста, используйте редактирование ресурса.<br/><br/>Продолжить?';
$_lang['resource_publishdate'] = 'Дата публикации';
$_lang['resource_publishdate_help'] = 'Если вы установите дату публикации, ресурс будет опубликован по наступлении этой даты. Нажмите на иконку календаря, чтобы выбрать дату. Оставив это поле пустым, вы исключите автоматическую публикацию ресурса.';
$_lang['resource_published'] = 'Опубликован';
$_lang['resource_published_help'] = 'Если ресурс отмечен как опубликованный, то сразу после сохранения он будет доступен для просмотра посетителями сайта.';
$_lang['resource_publishedby'] = 'Опубликовал(а)';
$_lang['resource_publishedon'] = 'Дата публикации';
$_lang['resource_publishedon_help'] = 'Дата, начиная с которой ресурс будет опубликован.';
$_lang['resource_refresh'] = 'Обновить ресурс';
$_lang['resource_richtext'] = 'Использовать HTML-редактор';
$_lang['resource_richtext_help'] = 'Отметьте, чтобы использовать HTML-редакто рдля редактирования ресурса. Если документ содержит JavaScript или формы — снимите отметку, чтобы редактировать его в режиме HTML-кода во избежание внесения HTML-редактором изменений в код.';
$_lang['resource_searchable'] = 'Доступен для поиска';
$_lang['resource_searchable_help'] = 'Отметьте, чтобы разрешить поиск в содержимом этого документа . Этот параметр может использоваться вашими сниппетами и в других целях.';
$_lang['resource_settings'] = 'Настройки ресурса';
$_lang['resource_status'] = 'Статус ресурса';
$_lang['resource_status_help'] = 'Если ресурс опубликован, то  после сохранения он сразу же доступен для просмотра посетителями сайта. В противном случае для посетителей он не видим.';
$_lang['resource_summary'] = 'Аннотация (введение)';
$_lang['resource_summary_help'] = ' Краткое описание ресурса.';
$_lang['resource_syncsite'] = 'Очистить кэш';
$_lang['resource_syncsite_help'] = 'Отметьте, чтобы очистить кэш после сохранения изменений этого ресурса. В этом случае посетители увидят свежую версию документа.';
$_lang['resource_template'] = 'Шаблон';
$_lang['resource_template_help'] = 'Здесь вы можете указать, какой шаблон должен использовать ресурс. ';
$_lang['resource_undelete'] = 'Восстановить ресурс';
$_lang['resource_unpublish'] = 'Отменить публикацию ресурса';
$_lang['resource_unpublish_confirm'] ='При отмене публикации этого ресурса будут сброшены даты публикации/отмены публикации, установленные раннее. Если вы хотите изменить или оставить дату публикации/отмены публикации, то сначала отредактируйте ресурс.<br /><br />Продолжить?';
$_lang['resource_unpublishdate'] = 'Дата отмены публикации';
$_lang['resource_unpublishdate_help'] = 'Если вы установите дату отмены публикации, ресурс будет снят с публикации по наступлении этой даты. Нажмите на иконку календаря, чтобы выбрать дату. Оставив это поле пустым, вы исключите автоматическую отмену публикации ресурса.';
$_lang['resource_unpublished'] = 'Не опубликован';
$_lang['resource_untitled'] = 'Ресурс без названия';
$_lang['resource_with_id_not_found'] = 'Ресурс с id %s не найден!';
$_lang['resource_view'] = 'Информация о ресурсе';
$_lang['show_sort_options'] = 'Показать опции сортировки';
$_lang['site_schedule'] = 'Расписание';
$_lang['site_schedule_desc'] = 'Здесь показаны текущие ресурсы, которые запланированы для публикации или отмены публикации по определенным датам. Используя кнопки в заголовке, вы можете настроить параметры сортировки и отображения списка.';
$_lang['source'] = 'Кэшированный код ресурса';
$_lang['static_resource'] = 'Статический ресурс';
$_lang['static_resource_create_here'] = 'Дочерний статический ресурс';
$_lang['static_resource_new'] = 'Новый статический ресурс';
$_lang['status'] = 'Статус ресурса';
$_lang['symlink'] = 'Символическая ссылка';
$_lang['symlink_create'] = 'Создать символическую ссылку';
$_lang['symlink_create_here'] = 'Дочерняя символическая ссылка';
$_lang['symlink_message'] = 'Символическая ссылка — это ссылка на другой ресурс вашего сайта, при переходе на который URL сайта не изменяется.';
$_lang['symlink_new'] = 'Новая символическая ссылка';
$_lang['template_variables'] = 'Дополнительные поля';
$_lang['untitled_resource'] = 'Ресурс без названия';
$_lang['weblink'] = 'Ссылка';
$_lang['weblink_create'] = 'Создать ссылку';
$_lang['weblink_create_here'] = 'Дочернюю ссылку';
$_lang['weblink_help'] ='Адрес объекта, на который вы хотите указать этой ссылкой.';
$_lang['weblink_message'] ='Веб-ссылка является ссылкой на объект в интернете. Это может быть ресурс в MODx, страница на другом сайте, изображения или другие файлы в Интернете.<p>';
$_lang['weblink_new'] = 'Новая ссылка';
