<?php
// *   Аўтар: "БуслікДрэў" ( http://buslikdrev.by/ )
// *   © 2016-2020; BuslikDrev - Усе правы захаваныя.
// *   Спецыяльна для сайта: "OpenCart.pro" ( http://opencart.pro/ )

// Heading
$_['heading_title']                         = '<b>ЫМеню <span style="color:blue">Pro</span></b> v' . (isset($this->data['bus_menu_version']) ? $this->data['bus_menu_version'] : '1.0');

// Tab
$_['tab_setting']                           = 'Налады';
$_['tab_cat']                               = 'Кіраванне катэгорыямі';
$_['tab_design']                            = 'Дызайн';
$_['tab_boost']                             = 'Паскарэнне';
$_['tab_buns']                              = 'Плюшкі';
$_['tab_support']                           = 'Тэхнічная падтрымка';

// Text
$_['text_extension']                        = 'Пашырэньні';
$_['text_module']                           = 'Модулі';
$_['text_edit']                             = 'Рэдагаванне';
$_['text_min']                              = 'Ад';
$_['text_max']                              = 'Да';
$_['text_yes']                              = 'Так';
$_['text_no']                               = 'Не';
$_['text_enabled']                          = 'Уключана';
$_['text_disabled']                         = 'Адключана';
$_['text_all']                              = ' --- Усе --- ';
$_['text_none']                             = ' --- Не выбрана --- ';
$_['text_select']                           = ' --- Выбраць --- ';
$_['text_select_all']                       = 'Вылучыць усё';
$_['text_unselect_all']                     = 'Зняць вылучэнне';
$_['text_width']                            = 'Шырыня';
$_['text_height']                           = 'Вышыня';
$_['text_install']                          = 'Усталёўка модуля...';
$_['text_uninstall']                        = 'Выдаленне модуля...';
$_['text_uninstall_files']                  = 'Выдаленне файлаў модуля...';
$_['text_uninstall_files_log']              = 'Справаздача аб выдаленні файлаў модуля';
$_['text_ocmod_clear']                      = 'Чыстка мадыфікатараў...';
$_['text_ocmod_clearlog']                   = 'Чыстка лога мадыфікатараў...';
$_['text_ocmod_refresh']                    = 'Абнаўленьнне мадыфікатараў...';
$_['text_cache_clear']                      = 'Чыстка кэша...';
$_['text_processing']                       = 'Апрацоўка';
$_['text_loading']                          = 'Загрузка';
$_['text_start']                            = 'Старт';
$_['text_continue']                         = 'Працягнуць';
$_['text_pause']                            = 'Паўза';
$_['text_restart']                          = 'Рэстарт';
$_['text_horizontal']                       = 'Гарызантальна (Меню)';
$_['text_vertical']                         = 'Вертыкальна (Спіс)';
$_['text_cell']                             = 'У клетку (Вітрына)';
$_['text_filter']                           = 'Фільтр';
$_['text_site_name']                        = 'ЫМеню';
$_['text_ico']                              = 'Абразок';
$_['text_image']                            = 'Выява';
$_['text_width']                            = 'Шырыня';
$_['text_height']                           = 'Вышыня';
$_['text_left']                             = 'Злева';
$_['text_right']                            = 'Справа';
$_['text_top']                              = 'Зверху';
$_['text_bottom']                           = 'Знізу';
$_['text_left_top']                         = 'У левым верхнім куце';
$_['text_right_top']                        = 'У правым верхнім куце';
$_['text_left_bottom']                      = 'У левым ніжнім куце';
$_['text_right_bottom']                     = 'У правым ніжнім куце';
$_['text_blog_category']                    = 'Катэгорыя блога (OpenCart.Pro)';
$_['text_blog_article']                     = 'Артыкул блога (OpenCart.Pro)';
$_['text_article']                          = 'Артыкул блога (OpenCart.Pro)';
$_['text_category']                         = 'Катэгорыя';
$_['text_information']                      = 'Інфармацыйная старонка';
$_['text_manufacturer']                     = 'Вытворца';
$_['text_product']                          = 'Старонка тавару';
$_['text_other']                            = 'Свая спасылка';
$_['text_cats']                             = 'Спіс спасылак';
$_['text_design_1']                         = 'Стандартны (Дызайн модуля - Bootstrap 3)';
$_['text_design_2']                         = 'NG Features Categories (Избранные категории) 1.1.0';
$_['text_design_3']                         = 'Витрина Категорий / Стена категорий v_2.X';
$_['text_design_4']                         = 'Сима-ленд';
$_['text_design_5']                         = 'AliExpress';
$_['text_design_6']                         = 'YUMenu';
$_['text_design_7']                         = 'Gifts';
$_['text_design_8']                         = '220-volt';
$_['text_design_9']                         = 'OnlineTrade';
$_['text_design_10']                        = 'Disco';
$_['text_design_own']                       = 'Свой дызайн';
$_['text_design_own_help']                  = 'Стварыце свой шаблон на аснове гатовых з такой назвай па гэтым шляху: catalog/view/theme/default/template/module/bus_menu/<b>bus_menu_0_own_1</b>.tpl<br>Стварыце свой файл стыляў (калі трэба) на аснове гатовых з такой назвай па гэтым шляху: catalog/view/theme/default/stylesheet/bus_menu/<b>bus_menu_0_own_1</b>.css<br>- дзе:<br>0 - ўстаноўка лічбай тып модуля: 0 (гарызантальна), 1 (вертыкальна), 2 (у клетку), 3 (фільтр);<br>own_1 - id свайго дызайну.';
$_['text_design_not']                       = 'Без дызайну';
$_['text_cache_1']                          = 'SQL-запыт';
$_['text_cache_2']                          = 'PHP-масіваў';
$_['text_cache_3']                          = 'PHP-кантролер (Модуля) - максімальная хуткасць';
$_['text_ajax_1']                           = 'Уключыць яго цалкам';
$_['text_ajax_2']                           = 'З другой прыступкі катэгорый';
$_['text_ajax_3']                           = 'Калі не створаны файл-кэша';
$_['text_ajax_4']                           = 'З другой прыступкі катэгорый, калі не створаны файл-кэша';
$_['text_rating_count_check_1']             = ' Ацэнак з водгукаў';
$_['text_rating_count_check_2']             = ' Колькасці праглядаў';
$_['text_rating_count_check_3']             = ' Колькасці продажаў';
$_['text_product_count']                    = 'Толькі бягучых катэгорый';
$_['text_author']                           = 'Аўтар: <a href="http://buslikdrev.by/" title="Тавары рамеснай вытворчасці" target="_blank">БуслікДрэў</a>. Тэх. падтрымка: <a href="https://liveopencart.ru/buslikdrev" title="Тэхнічная дапамога па вырашэнні праблем звязаныя з модулем" target="_blank">ТУТ</a>. Тэма падтрымкі: <a href="https://forum.opencart.pro/topic/5750-ыменю-blmenu-максимальная-скорость/" title="Тэхнічная дапамога па вырашэнні праблем звязаныя з модулем" target="_blank">ТУТ</a>.';
$_['text_corp']                             = '© 2016-' . date('d.m.Y') . '; <a href="http://buslikdrev.by/" title="BuslikDrev" target="_blank">BuslikDrev</a> - Усе правы захаваны.';

// Entry
$_['entry_type']                            = 'Тып модуля';
$_['entry_name']                            = 'Назва модуля ў адмінку';
$_['entry_store']                           = 'Крамы';
$_['entry_main_menu']                       = 'Замяніць галоўнае меню';
$_['entry_status']                          = 'Статус';
$_['entry_site_name']                       = 'Назва модуля на сайце';
$_['entry_site_link']                       = 'Спасылка назвы модуля';
$_['entry_site_ico']                        = 'Абразок назвы модуля';
$_['entry_site_ico_position']               = 'Размяшчэнне абразкі модуля';
$_['entry_site_image_resize']               = 'Дазвол выявы';
$_['entry_image_status']                    = 'Уключыць выяву';
$_['entry_image_resize_1']                  = 'Дазвол 1й прыступкі';
$_['entry_image_resize_2']                  = 'Дазвол 2й прыступкі';
$_['entry_image_resize_3']                  = 'Дазвол 3й-X прыступкі';
$_['entry_name_status_1']                   = 'Уключыць назву 1й прыступкі';
$_['entry_name_status_2']                   = 'Уключыць назву 2й прыступкі';
$_['entry_name_status_3']                   = 'Уключыць назву 3й-X прыступкі';
$_['entry_desc_status']                     = 'Уключыць апісанне';
$_['entry_desc_limit']                      = 'Колькасць знакаў';
$_['entry_cats_status']                     = 'Уключыць свае катэгорыі';
$_['entry_cats_vertical_status']            = 'Уключыць вертыкальнае меню';
$_['entry_cats_vertical_name']              = 'Назва вертыкальнага меню';
$_['entry_cats_vertical_link']              = 'Спасылка назвы вертыкальнага меню';
$_['entry_cats_vertical_ico']               = 'Абразок назвы вертыкальнага меню';
$_['entry_cats_vertical_ico_position']      = 'Размяшчэнне абразкі вертыкальнага меню';
$_['entry_cats_vertical_image_resize']      = 'Дазвол выявы';
$_['entry_cats_vertical_position']          = 'Размяшчэнне вертыкальнага меню';
$_['entry_cats_vertical_route']             = 'Дзе раскрываць вертыкальнае меню';
$_['entry_cats_vertical_reverse']           = 'Памяняць месцамі <i class="fa fa-long-arrow-up"></i><i class="fa fa-long-arrow-down"></i>';
$_['entry_cats_sticker']                    = 'Стыкер';
$_['entry_cats_sticker_position']           = 'Размяшчэнне стыкера';
$_['entry_cats_name']                       = 'Назва спасылкі';
$_['entry_cats_link']                       = 'Спасылка';
$_['entry_cats_title']                      = 'Title - падказка';
$_['entry_cats_desc']                       = 'Апісанне спасылкі';
$_['entry_cats_column']                     = 'Стоўбцы';
$_['entry_seo_now']                         = 'Генераваць спасылкі загадзя';
$_['entry_seo_then']                        = 'Запаўняць пустыя мета-тэгі';
$_['entry_path_status']                     = 'Уключыць падкатэгорыі';
$_['entry_path_lvl']                        = 'Падкатэгорыі на ўзроўні першай прыступкі';
$_['entry_path_lvl_limit']                  = 'Ліміт ўкладзенасці падкатэгорый';
$_['entry_path_limit']                      = 'Ліміт падкатэгорый';
$_['entry_design']                          = 'Дызайн';
$_['entry_design_id']                       = 'ID Дызайна';
$_['entry_designoptimiz']                   = 'Спрасціць дызайн';
$_['entry_lg']                              = 'Колькасьць блокаў lg';
$_['entry_md']                              = 'Колькасьць блокаў md';
$_['entry_sm']                              = 'Колькасьць блокаў sm';
$_['entry_xs']                              = 'Колькасьць блокаў xs';
$_['entry_cover_status']                    = 'Уключыць вокладку';
$_['entry_cover']                           = 'Вокладка';
$_['entry_cover_resize']                    = 'Дазвол вокладкі';
$_['entry_cover_position']                  = 'Размяшчэнне вокладкі';
$_['entry_menu_color']                      = 'Колер меню';
$_['entry_menu_text_color']                 = 'Колер тэксту меню';
$_['entry_style']                           = 'Стыль';
$_['entry_script']                          = 'Скрыпт';
$_['entry_cache']                           = 'Уключыць КЭШ';
$_['entry_ajax']                            = 'Уключыць AJAX-падгрузку';
//$_['entry_lazy']                            = 'Уключыць Lazy-подгрузку';
//$_['entry_gzip_style']                      = 'Уключыць сціск стией';
//$_['entry_gzip_script']                     = 'Уключыць сціск скриптов';
//$_['entry_gzip_template']                   = 'Уключыць сціск шаблона';
$_['entry_rating_count']                    = 'Уключыць падлік рэйтынгу';
$_['entry_rating_count_check']              = 'Будаваць рэйтынг на аснове';
$_['entry_rating_count_path_not']           = 'Ці не выводзіць рэйтынг у падкатэгорыі';
$_['entry_price_count']                     = 'Уключыць падлік цэны ад/да';
$_['entry_price_count_path_not']            = 'Ці не выводзіць цану ў падкатэгорыі';
$_['entry_cat_count']                       = 'Уключыць падлік катэгорый';
$_['entry_product_count']                   = 'Уключыць падлік тавару';
$_['entry_debug']                           = 'Уключыць адладку';

// Help
$_['help_type']                             = 'Выберыце варыянт выкарыстання модуля.';
$_['help_name']                             = 'Адлюстроўваецца ў спісе модуляў і ў макетах.';
$_['help_main_menu']                        = 'Калі так, то галоўнае меню будзе заменена. У наладах іншых модуляў гэтая функцыя будзе аўтаматычны адключаная.';
$_['help_site_name']                        = 'Калі не хочаце выводзіць імя модуля, то пакіньце поле пустым. У гарызантальным меню выводзіцца да 768px.';
$_['help_site_link']                        = 'Тут вы можаце задаць спасылку на імя модуля.';
$_['help_site_ico']                         = 'Вылучыце выяву або пакажыце html-код абразкі (&lt;i class=&quot;fa fa-list&quot;&gt;&lt;/i&gt;).';
$_['help_site_ico_position']                = 'Выберыце з якога боку размясціць выяву або абразок.';
$_['help_site_image_resize']                = 'Дазвол (памер) выявы ў пікселях.';
$_['help_width']                            = 'Пазначце шырыню выявы ў пікселях.';
$_['help_height']                           = 'Пазначце вышыню выявы ў пікселях.';
$_['help_image_status']                     = 'Калі Так, то выявы будуць уключаны. Ўключэнне дадзенай функцыі можа павялічыць час загрузкі старонак.';
$_['help_image_resize']                     = 'Дазвол (памер) выявы ў пікселях.';
$_['help_name_status']                      = 'Калі Так, то назву катэгорый будуць уключаны (Даная функцыя не будзе працаваць, калі адключана выява).';
$_['help_desc_status']                      = 'Калі Так, то апісанне галоўных катэгорый будуць уключаны. Толькі для тыпу: <Меню> і <Вітрына>.';
$_['help_desc_limit']                       = 'Колькасць знакаў кароткага апісання. Калі няма кароткага, тады стандартнае апісанне. Па-змаўчанню 50 знакаў.';
$_['help_cats_status']                      = 'Калі Не, то будуць працаваць стандартныя катэгорыі.';
$_['help_cats_vertical_status']             = 'Калі Так, то вертыкальнае меню будзе ўключана.';
$_['help_cats_vertical_name']               = 'Калі не хочаце выводзіць імя вертыкальнага меню, то пакіньце поле пустым.';
$_['help_cats_vertical_link']               = 'Тут вы можаце задаць спасылку на імя вертыкальнага меню.';
$_['help_cats_vertical_ico']                = 'Вылучыце выяву або пакажыце html-код абразкі (&lt;i class=&quot;fa fa-list&quot;&gt;&lt;/i&gt;).';
$_['help_cats_vertical_ico_position']       = 'Выберыце з якога боку размясціць выяву або абразок.';
$_['help_cats_vertical_image_resize']       = 'Дазвол (памер) выявы ў пікселях.';
$_['help_cats_vertical_position']           = 'Размяшчэнне вертыкальнага меню ў адносінах да гарызантальнага.';
$_['help_cats_vertical_route']              = 'Выберыце ў якіх шаблонах (роутов, макетаў, схемах) разгортваць вертыкальнае меню. Ўключэнне дадзенай функцыі можа павялічыць час загрузкі старонак.';
$_['help_cats_vertical_reverse']            = 'Калі Так, то дадзеныя горзинотального меню на фронтенде будуць памяняць месцамі з дадзенымі вертыкальнага.';
$_['help_cats_image']                       = 'Вылучыце выяву. Калі не абрана, выява будзе адключана.';
$_['help_cats_image_position']              = 'Размяшчэнне выявы ў адносінах да назве спасылкі.';
$_['help_cats_image_status']                = 'Статус выявы';
$_['help_cats_sticker']                     = 'Выберыце стыкер. Калі не абрана, стыкер будзе адключаны.';
$_['help_cats_sticker_position']            = 'Размяшчэнне стыкера ў назве спасылкі.';
$_['help_cats_sticker_status']              = 'Статус стыкера';
$_['help_cats_name']                        = 'Дайце назву спасылцы, напрыклад, кантакты.';
$_['help_cats_link']                        = 'Пазначце ўнутраную або знешнюю спасылку. Напрыклад:<br>/contacts<br>або<br>https://buslikdrev.by/contacts';
$_['help_cats_title']                       = 'Title отображется пры навядзенні на спасылку, таксама на выяву ў alt. Абмежавання колькасці сімвалаў няма.';
$_['help_cats_desc']                        = 'Апісанне адлюстроўваецца пад спасылкай над падкатэгорыі. Калі поле пакінуць пустым, выводзіцца кароткае, калі няма кароткага, тады стандартнае апісанне. Толькі для тыпу: <Меню> і <Вітрына>.';
$_['help_cats_column']                      = 'Колькасьць калёнак ў спісе і ў вітрыне катэгорый (толькі для катэгорый першай прыступкі).';
$_['help_seo_now']                          = 'Калі Так, то спасылкі катэгорый будуць апрацаваны seo_url.php або seo_pro.php загадзя, гэта павялічыць хуткасць аддачы кантэнту пры вялікай колькасці спасылак. Пры змене seo_url трэба пересохранять налады модуля.';
$_['help_seo_then']                         = 'Калі Так, то пустыя палі (назва, тайтлов, апісанне) спасылкі (катэгорыі) будуць запаўняцца пры загрузкі фронтенда. Ўключэнне дадзенай функцыі можа павялічыць час загрузкі старонак.';
$_['help_path_status']                      = 'Калі Так, то падкатэгорыі будуць уключаны. Ўключэнне дадзенай функцыі можа павялічыць час загрузкі старонак.';
$_['help_path_lvl']                         = 'Пазначце лічбай да якой прыступкі іерархіі матэрыялы па тэме выводзіць на роўным з катэгорыямі першай ступені (катэгорыі артыкулаў і тавару). Дадзеная функцыя працуе, калі адключаныя свае катэгорыі або ўключана функцыя аўтаматычнага вываду існуючых матэрыялы па тэме ў сваёй спасылцы. Ўключэнне дадзенай функцыі можа павялічыць час загрузкі старонак.';
$_['help_path_lvl_limit']                   = 'Пазначце лічбай да якой прыступкі іерархіі матэрыялы па тэме выводзіць. Ліміт ўкладзенасці па-змаўчанню 2.';
$_['help_path_limit']                       = 'Пакажыце лічбай якая колькасць матэрыялы па тэме выводзіць. Ліміт па-змаўчанні 5.';
$_['help_design']                           = 'Абярыце неабходны для сябе дызайн. Стандартны дызайн мае найменшую нагрузку.';
$_['help_design_id']                        = 'Пазначце нумар свайго дызайну для выкарыстання. Па-змаўчанню 1.';
$_['help_designoptimiz']                    = 'Калі Так, то дадзены дызайн будзе максімальна спрошчаны для павелічэння хуткасці загрузкі старонкі.';
$_['help_lg']                               = 'Колькасьць блокаў пры дазволе экрана больш за 1200 px.';
$_['help_md']                               = 'Колькасьць блокаў пры дазволе экрана 992-1199 px.';
$_['help_sm']                               = 'Колькасьць блокаў пры дазволе экрана 768-991 px.';
$_['help_xs']                               = 'Колькасьць блокаў пры дазволе экрана менш за 768 px.';
$_['help_cover_status']                     = 'Калі Так, то вокладка будзе ўключана. Ўключэнне дадзенай функцыі можа павялічыць час загрузкі старонак.';
$_['help_cover']                            = 'Вокладка меню другой ступені катэгорый (вылучаўся меню).';
$_['help_cover_resize']                     = 'Дазвол (памер) выявы ў пікселях.';
$_['help_cover_position']                   = 'Размяшчэнне вокладкі.';
$_['help_menu_color']                       = 'Колер фону меню катэгорый першай прыступкі. Для вяртання стандарту пакіньце поле пустым.';
$_['help_menu_text_color']                  = 'Колер тэксту меню катэгорый першай прыступкі. Для вяртання стандарту пакіньце поле пустым.';
$_['help_style']                            = 'Тут вы можаце задаць стылі для адаптацыі стыляў модуля пад дызайн свайго сайта. Ўказваць тэгі &lt;style&gt;&lt;/style&gt; ня трэба.';
$_['help_script']                           = 'Тут вы можаце задаць скрыпты для адаптацыі стыляў модуля пад дызайн свайго сайта. Ўказваць тэгі &lt;script&gt;&lt;/script&gt; ня трэба.';
$_['help_cache']                            = 'Калі Так, то дадзеныя з БД па sql-запытам модуля будуць захаваны ў файл і загружацца кожны раз з яго. Ўключэнне кэша знізіць нагрузку на БД і нязначна павялічыць на PHP. Кэш выдаляецца стандартна.';
$_['help_ajax']                             = 'Уключэнне ajax-падгрузкі паскорыць прагляд.';
//$_['help_lazy']                             = 'Уключэнне Lazy-падгрузкі дазваляе паскорыць загрузку кантэнту адкладаючы загрузку малюнкаў загружаючы іх паступова.';
//$_['help_gzip_style']                       = 'Уключэнне сціску стыляў паменшыць памер файлаў шляхам выдалення лішніх сімвалаў тым самым паскараем іх загрузку.';
//$_['help_gzip_script']                      = 'Уключэнне сціску скрыптоў паменшыць памер файлаў шляхам выдалення лішніх сімвалаў тым самым паскараем іх загрузку.';
//$_['help_gzip_template']                    = 'Уключэнне сціску шаблону паменшыць памер файлаў шляхам выдалення лішніх сімвалаў тым самым паскараем яго загрузку.';
$_['help_rating_count']                     = 'Калі Так, то будзе выведзена сярэдняя адзнака тавару або артыкулаў (у гарызантальным меню зрух на ступень). Ўключэнне дадзенай функцыі можа павялічыць час загрузкі старонак.';
$_['help_rating_count_check']               = 'Па-змаўчанню адзнака будуецца на ацэнках з водгукаў.';
$_['help_rating_count_path_not']            = 'Калі Так, то рэйтынг будзе выводзіцца толькі ў першай па іерархіі катэгорыі.';
$_['help_price_count']                      = 'Калі Так, то будзе выведзена цана тавару ад / да (у гарызантальным меню зрух на ступень). Ўключэнне дадзенай функцыі можа павялічыць час загрузкі старонак.';
$_['help_price_count_path_not']             = 'Калі Так, то цана будзе выводзіцца толькі ў першай па іерархіі катэгорыі.';
$_['help_cat_count']                        = 'Калі Так, то будзе выведзена колькасць катэгорый. Ўключэнне дадзенай функцыі можа павялічыць час загрузкі старонак.';
$_['help_product_count']                    = 'Калі толькі бягучых катэгорый, то тавар або артыкула ўлічвацца не будуць з матэрыялы па тэме. Ўключэнне дадзенай функцыі можа павялічыць час загрузкі старонак.';
$_['help_debug']                            = 'Адладка хуткасці працы модуля выводзіцца на фронденде. Дадзеныя загрузкі шаблону могуць быць з хібнасцю.';

//Button
$_['button_save']                           = 'Захаваць';
$_['button_apply']                          = 'Прымяніць';
$_['button_apply_piecemeal']                = 'Прымяніць часткамі';
$_['button_export']                         = 'Экспарт';
$_['button_import']                         = 'Імпарт';
$_['button_files_clear']                    = 'Выдаліць таксама файлы модуля? - калі няма, проста абновіце старонку ад граху. Справаздача аб выдаленні файлаў глядзіце ў логах мадыфікатараў.';
$_['button_link_add_group']                 = 'Націсніце на кнопку, каб дадаць групу матэрыялы па тэме, калі яны ёсць.';
$_['button_link_add_group_status']          = 'Націсніце на кнопку для аўтаматычнага вываду ўсіх матэрыялы па тэме: на фронтенде, калі яны ёсць. Пры ўключаным статусе, ўручную дададзеныя катэгорыі працаваць не будуць. Ўключэнне дадзенай функцыі можа павялічыць час загрузкі старонак.';
$_['button_link_add_groups']                = 'Націсніце на кнопку, каб дадаць ўсе катэгорыі.';
$_['button_link_level_groups']              = 'Узровень вложённости.';

// Error
$_['error_permission']                      = 'У вас недастаткова правоў для ўнясення змяненняў!';
$_['error_warning']                         = 'Уважліва праверце форму на памылкі!';
$_['error_install']                         = 'Нешта пайшло не так!';
$_['error_uninstall']                       = 'Нешта пайшло не так!';
$_['error_uninstall_pro']                   = '<b>Увага!</b> Модуль з\'яўляецца часткай зборкі OpenCart.Pro і не можа быць выдалены цалкам!';
$_['error_name']                            = 'Назва павінна ўтрымліваць ад 3 да 64 знакаў!';
$_['error_width']                           = 'Пазначце Шырыню!';
$_['error_height']                          = 'Пазначце Вышыню!';
$_['error_max_input_vars']                  = '<b>Увага! Будзе перавышаны ліміт параметру %s</b>, калі перавысіць, дадзеныя могуць не захавацца. Павялічце значэнне на серверы або звярніцеся з дадзенай просьбай да хостеру для павелічэння ліміту. Або скарыстайцеся кнопкай прымянення часткамі.<br>Ліміт на сэрвэру: %s <br>Ліміт ад модуля: %s - адсечка %s каб пазбегнуць страты дадзеных<br>Бягучы значэнне: ';
$_['error_setting_import']                  = 'Файл не ўтрымлівае налады модуля, імпарту адмоўлена!';
$_['error_setting_import_format']           = 'Модуль не ведае пра такі фармат, імпарту адмоўлена! - модуль мякка вас паслаў.';
$_['error_not_required']                    = 'Не патрабуецца!';

// Success
$_['success_install']                       = ' - паспяхова ўсталявана!';
$_['success_uninstall']                     = ' - паспяхова выдалены!';
$_['success_uninstall_data_base']           = '◄ База дадзеных выдаленая ►: ';
$_['success_uninstall_modification']        = '◄ Мадыфікатар выдалены ►: ';
$_['success_uninstall_folder']              = '◄ Папка выдаленая бо файлаў няма ►: ';
$_['success_uninstall_file']                = '◄ Файл выдалены ►: ';
$_['success_update']                        = ' - паспяхова абноўлены!';
$_['success_setting']                       = 'Налады паспяхова зменены!';
$_['success_setting_apply']                 = 'Налады паспяхова ужытыя!';
$_['success_setting_save']                  = 'Налады паспяхова захаваны!';
$_['success_setting_new']                   = 'Новы модуль паспяхова дададзены!';
$_['success_setting_redirect']              = 'Вы былі перанакіраваны на патрэбную старонку налад!';
$_['success_setting_import']                = 'Налады модуля "%s" паспяхова імпартаваныя ў модуль, вам засталося іх прымяніць!';
$_['success_add']                           = 'Паспяхова дададзена!';
$_['success_delete']                        = 'Паспяхова выдалена!';
$_['success_clear']                         = 'Паспяхова ачышчана!';