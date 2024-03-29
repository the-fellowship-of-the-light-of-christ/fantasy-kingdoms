<?php defined('SYSPATH') OR die('No direct access allowed.');

$lang = Array
(
'addlaw_announcement' => '%s %s %s %s, провозгласил новый закон: <i> %s </i>.', 
'appointment_announcement' => '%s, %s %s %s, назначил %s %s %s %s.', 
'otherresign_announcement' => '%s - %s области %s, отказался от должности.', 
'kingresign_announcement' => '%s - попечитель %s, отрёкся от престола.', 
'publishsentence_announcement' => '%s %s %s %s объявил приговор %s: <i> %s </i>', 
'citychange_event' => 'Вы переехали в %s.', 
'wardeclaration_event' => 'Посыльный вручил вам объявление войны от %s %s %s %s.', 
'wardeclaration_event2' => 'Вы получили свиток, который содержит объявление войны от %s! (%s, область: %s)!', 
'wardeclaration_announcement' => '%s, %s %s %s, объявил войну %s %s!', 
'wardeclaration_announcement2' => '%s %s объявил войну %s %s (%s, область: %s)', 
'itemreceived_event' => '%s послал вам %d %s.', 
'revokerole_event' => '%s отменил вашу должность.', 
'appointrole_event' => '%s назначил вас %s %s %s. Вы можете отказаться от должности на странице персонажа.', 
'cdbcreated_def' => 'Начальник стражи с озабоченным видом доложил вам, что армия разобьёт лагерь только за пределами области.', 
'imprisonjudgemess_event' => '%s был заключен в тюрьму.', 
'imprisontarget_event' => 'Вы были заключены в тюрьму в %s по следующей причине: <i>%s</i>.', 
'itemsbroke' => 'Один из ваших предметов (%s) сломался!', 
'fightlost' => 'Вы проиграли, противник забрал ваши вещи, воспользовавшись тем, что вы были без сознания.', 
'structureraided' => 'Вернувшись %s %s вы понимаете, что кто-то взломал замок и украл <b>%s</b> монет!', 
'structureraideditems' => 'Вернувшись %s %s вы понимаете, что кто-то взломал замок и украл <b>%s</b> %s!', 
'charraided' => 'В то время, когда вы были в %s, несколько солдат избили вас и отняли %d монет!', 
'battleendedwinner' => 'Сражение (%s) между  %s и %s закончилось. Победитель %s. Отчет: %s', 
'battleendedtie' => 'Сражение (%s) между %s и %s закончилось вничью. Отчет: %s', 
'cdbcreated_att' => 'Начальник страэи доложил вам, что поле битвы было выбрано и самое время собрать армию.', 
'roundended' => '%s вероломно напал на %s.  См. здесь результат здесь:  %s', 
'doubloons_received' => 'Количество дублонов изменилось (%d).', 
'deletedallevents' => 'Удалить все события.', 
'deletedevent' => 'Событие удалено.', 
'charinroledied_announcement' => '<b> %s, %s %s %s </b> умер, должность свободна.', 
'chardied_announcement' => '%s умер от голода.', 
'kingchrowned' => '%s был коронован Государем %s %s!', 
'rewardgiven' => 'Вы получили вознаграждение %d %s за голосования на сайте %s', 
'atelieritembought' => ' Вы купили предмет в ателье (%s). Извещение об этом было послано на указанный вами e-mail при регистрации. Если вы не получили ваш заказ в течение 24 часов, пожалуйста, обратитесь в техподдержку.', 
'city_change_eventtext' => 'Вы изменили своё место жительства.', 
'raidloot' => 'Добыча от набега (%d монет) была помещена на склад дворца.', 
'animaldeath' => 'Одно или несколько животных в вашем хозяйстве подохли от голода.', 
'allanimaldeath' => 'Все животные подохли от голода! Придется покупать другую грамоту.', 
'market_boughtitem' => 'Вы купили %s %s у %s за %s монет.', 
'factorydeleted' => 'Грамота на ваше хозяйство истекла. Если Вы хотите продолжать разводить животных, зайдите в замок, пожалуйста.', 
'structuredonation' => '%s пожертвовал %d %s.', 
'structurepropertytax' => 'Получено %s монет от %s (налог на собственность)', 
'structuresellingtax' => 'Получено %s монет от %s (налог с продаж)', 
'terrainbought' => 'Вы купили землю за %d монет.', 
'terrainsold' => 'Вы продали землю за %s монет.', 
'charstructurebought' => 'Вы купили здание (%s) за %s серебряных.', 
'charstructuresold' => 'Вы продали здание (%s) за %s серебряных.', 
'castlestructurebought' => '%s приобрел здание (%s) за %s серебряных.', 
'castlestructuresold' => '%s продал здание (%s) за %s серебряных.', 
'shopbought' => 'Вы купили грамоту на открытие лавки за %s монет.', 
'shopsold' => 'Вы продали грамоту на лавку за %s монет.', 
'structure_events_helper' => 'Здесь описаны события, связанные с этим зданием. Срок хранения -- 1 месяц.', 
'referralcoins' => 'Вы получили бонус за приглашение: %d монет за %s.', 
'boughtbreeding' => 'Вы купили несколько скотин за %d серебряных, теперь их у вас %s', 
'itemstolenby' => '%s стащил у вас %d %s пока вы были без сознания!', 
'itemstolen' => 'Вы стащили %d %s у %s пока как он/она был без сознания.', 
'kingdethroned' => '%s, попечитель %s %s, был свергнут!', 
'cleanprisons' => 'Налоги были получены за %s чисток тюрем: %d монет.', 
'structuredestroyed' => 'Во время набега на вашу область налётчики предали огню %s %s!', 
'structurecompletelydamaged' => 'Здание: %s в %s было полностью уничтожено!', 
'imprisonjudge_event' => '%s был заключен в тюрьму начальником стражи.', 
'freeprisoner_judge' => ' Заключенный %s был освобожден начальником стражи по следующей причине: <i>%s</i>', 
'freeprisoner_prisoner' => 'Вы были выпущены из тюрьмы %s по следующей причине: <i>%s</i>', 
'strength_boost_event' => 'Внезапно вы почувствовали себя очень хорошо и полным сил!', 
'market_solditem' => 'Вы продали <b>%s</b> <b>%s</b>  <b>%s</b> за <b>%s</b> серебряных на рынке в: <b>%s</b>.', 
'communityproject_completed' => '%s построил здание: <b>%s</b> в: <b> %s </b>.', 
'churchcommunityproject_completed' => 'Строительство здания: <b> %s </b> <b> %s </b> завершено.', 
'structuregain' => 'Получено %s монет от %s (курс: %s)', 
'coursestax' => 'Получены налоги: %s монет (уроки, %s).', 
'coursecompleted' => 'Вы успешно улучшили %s! Ваш показатель %s был увеличен на 1!', 
'projectwork' => '%s работал над проектом в течение %d часов бесплатно.', 
'coinsrefunded' => '%d монет было возмещено, так как %s не доработал его/ее смену.', 
'structuredrop' => '%s внёс %d %s.', 
'playerdrop' => ' Вы положили %s %s в строение: %s (владелец: %s) в: %s.', 
'playertake' => ' Вы взяли %s %s из строения: %s (владелец :%s) в: %s.', 
'structuretake' => '%s взял %d %s из инвентаря.', 
'itemsent_event' => 'Вы послали %d %s в %s. Будет доставлено %s.', 
'city_change_info_source' => '%s изменил место жительства и покинул %s - %s ради %s - %s.', 
'city_newcharacterborn' => 'В %s - %s новый гражданин: %s', 
'city_change_info_dest' => 'В %s - %s новый гражданин: %s (переехал из %s - %s).', 
'structuredonationchar' => 'Вы пожертвовали %d %s: %s в: %s.', 
'doubloons_sent' => '%d дублонов были добавлены %s.', 
'taxfromsail' => 'Получено %d монеты за счет корабельного налога.', 
'projectworkpaid' => '%s работал над проектом в течение %d часов за %d монет.', 
'shopownershiptransfered' => '%s передал право собственности на своё имущество %s-%s-%s.', 
'shopownershipoldowner' => 'Вы передали право собственности на лавку %s.', 
'shopownershipnewowner' => '%s передал право собственности на лавку.', 
'market_transferedpropertyownership' => '%s передал право собственности на n. 1 %s для %s.', 
'jail_attributelost' => 'Влажность, скудная еда и суровость заключения терзают вас. Вы потеряли 1 пункт %s.', 
'restraincanceled_sourceinfo' => 'Вы отменили запрет на выезд на %s по следующей причине: <i>%s</i>.', 
'restraincanceled_targetinfo' => '%s отменил запрет на ваш выезд по следующей причине: <i>%s</i>.', 
'freeprisoner_sheriff' => 'Вы освободили %s со следующей причине: <i>%s</i>.', 
'confiscateditem_sourceinfo' => 'Вы изъяли %s %d %s по следующей причине: <i>%s</i>.', 
'confiscateditem_targetinfo' => '%s изъял у вас %d %s по следующей причине: <i>%s</i>.', 
'restrain_targetinfo' => 'Начальник стражи приказалвВам не покидать область в течение %d часа(ов) по следующей причине: <i>%s</i>.', 
'restrain_sourceinfo' => 'Вы запретили %s покидать Государство в течение %d часа(ов) (причина: <i>%s</i>).', 
'confiscateditem_sourceinfovassal' => '%s изъял у %s %d %s по следующей причине: <i>%s</i> (Рынок, область: %s)', 
'dumpobjectfound' => 'На свалке вы нашли %d %s', 
'milkingfinished' => 'Вы закончили доить коров. Молоко было доставлено на склад хозяйства.', 
'butcheringfinished' => 'Вы закончили забивать скот. Все продукты на складе хозяйства. Заберите их прежде, чем срок вашей грамоты истечёт.', 
'itemtrashed' => 'Вы выбросили %d %s на свалку.', 
'digitemok' => 'Вы закончили копать. Вы добыли <b>%d %s</b>.', 
'digitemnotok' => 'Вы закончили копать, но, к сожалению, ничего не добыли.', 
'searchitemok' => 'Вы закончили поиски. Вы обнаружили <b>%d %s</b>.', 
'searchitemnotok' => 'Вы закончили поиски, но, к сожалению, ничего не обнаружили.', 
'fishok' => 'Вы закончили ловить рыбу. Вы поймали <b>%d %s</b>.', 
'fishnotok' => 'Вы закончили ловить рыбу, но ваши сети оказались пусты!', 
'gatheringfinished' => 'Вы положили добытые продукты на склад.', 
'cutwoodok' => 'Вы закончили рубить лес. У Вас <b>%d %s</b>.', 
'cutwoodnotok' => 'Вы только что закончили рубить лес, но, к сожалению, вокруг лишь никчёмные щепки.', 
'char_invite_join_group' => '<b>%s</b> пригласил Вас присоединиться к <b>%s</b>. Щелкните <a href=%s>тут</a>, чтобы принять приглашение. Запрос будет действителен в течение 24 часов', 
'cancelling_group' => '<b>%s</b> распустил <b>%s</b>.', 
'invite_accepted' => '<b>%s</b> принял ваше приглашение и теперь является частью <b>%s</b>!', 
'conquerirfailure' => '%s предпринял попытку завоевать независимую область %s, но потерпел неудачу;  см. сражение %s.', 
'conquerirsuccess' => '%s завоевал независимую область %s;  см. сражение %s.', 
'conquerrfailure' => '%s напал на %s, но проиграл; см. сражение %s.', 
'conquerrsuccess' => '%s завоевал область %s - %s; см. сражение %s.', 
'conquerrsuccessnewking' => '%s завоевал государство %s, новый попечитель %s.', 
'conquerrsuccessnoking' => '%s завоевал государство %s, но попечитель пока не назначен.', 
'assign_region_announcement' => '<b>%s - %s %s %s %s</b>, даровал область: <b>%s</b> наместнику: <b>%s</b>.', 
'assign_region_sourcevassal' => '%s - %s %s %s, даровал вам область: %s.', 
'kingdomprojectcanceled' => '%s прервал строительство %s в области %s.', 
'jewellost' => 'Вы только сейчас обнаружили, что потеряли %s. Проклятая рассеянность!', 
'dumpobjectfoundnothing' => 'Вы битый час рылись на свалке, но, к сожалению, ничего путного не нашли.', 
'crowningmoneyreceived' => 'Получено %d серебряных для коронации нового князя.', 
'exhibit_scroll' => '<b>%s</b> предъявил вам грамоту, озаглавленную <b>%s</b> и содержащую следующее: <i>%s</i>. Подписано: <b>%s</b>', 
'exhibit_scroll_sender' => 'Вы показали <b>%s</b> грамоту озаглавленную <b>%s</b> и содержащую следующее: <i>%s</i>. Подписано: <b>%s</b>', 
'wardeclaration_event3' => 'Вы приняли меры, чтобы преобразовать %s область %s в государство %s!', 
'imprisonedtowncrier' => '%s был заключен под стражу на %d часов в тюрьме %s по следующей причине: <i> %s </i>', 
'flash_invite_accepted' => 'Вы приняли приглашение и присоединились к %s.', 
'admin_item_given' => 'Администрация Medieval Europe дает вам %d %s, причина: %s.', 
'admin_item_received' => 'Администрация Medieval Europe дает вам %d %s, причина: %s.', 
'meditating' => 'Медитация началась. Вы закончите в %s.', 
'completedprojectitemtransfered' => 'Строительство: %s в области: %s завершено. N. %d %s был принесён на склад замка.', 
'arrest' => '%s задержал вас! Вы будете доставлены к месту суда.', 
'arrest_restrained' => 'Вы прибыли к месту назначения. Ожидая судебного заседания, вы не можете покинуть государство в течение 48 часов.', 
'imprisoned' => 'Вы помещены в тюрьму (область: %s). Вы будете в заключеннии до: %s.', 
'releasedfromjail' => 'Вы были освобождены из заключения. Вот она - свобода!', 
'arrested' => 'Вы задержали %s и передаёте преступника.', 
'imprisonedjudge' => 'Вы приказали передать %s в тюрьму: %s.', 
'gottitle' => 'Вы получили следующее признание достижений: <b>%s!</b>', 
'kingdethronedkingmessage' => 'Несколько парней выгнали вас из дворца! Вы были низложены.', 
'kingchrownedkingmessage' => 'Вы коронованы попечителем государства: %s!', 
'structureraidedraider' => 'Вы украли <b>%d %s</b> из здания:  <b>%s</b> принадлежащего:  <b>%s</b>.', 
'charraidedraider' => 'Во время набега вы кого-то избили и забрали <b>%s</b> по <b>%d монет</b>', 
'itemraided' => 'В результате набега <b>%d</b> %s получены вещи (<b>%s</b>, владелец: <b>%s</b>).', 
'itemmugged' => 'Получены <b>%d</b> %s, украденны у: <b>%s</b>.', 
'raidedmarketitem' => 'Некоторые ваши товары, (<b>%d %s</b>) выставленные на продажу на рынке %s, были разграблены!', 
'battlefield_enter' => 'Вы вышли на поле битвы.', 
'battlefield_leave' => 'Вы покинули поле битвы.', 
'move_start' => 'Вы покинули <b>%s</b>, направляясь в <b>%s</b>.', 
'move_end' => 'Вы прибыли в <b>%s</b>.', 
'currentkingrevoltfailedmsg' => 'Восстание не достигло успеха; чтобы избежать репрессий, было бы лучше убраться подальше.', 
'revoltorganizerrevolterfailedmsg' => 'Восстание оказалось неудачным, теперь начнутся гонения, возможно сейчас самое время, чтобы убежать.', 
'revoltfailure' => 'Доблестный бой между мятежниками и стражниками (%s) закончился. Мятежники разбиты. Ход сражения Вы можете посмотреть здесь: %s', 
'revoltdeclaration_event' => 'Вы получаете послание, доставленное одним из эмиссаров. Прочитав его, Вы потрясены непочтительностью тона: отправитель обвиняет Вас в слабости навыков лидерства и нехватке предвидения. Вы предчувствуете, что восстание приближается. Это же подтверждает один из охранников, ставший свидетелем тому, что многочисленная толпа уже собирается на окраине города. Письмо подписано <b> %s </b>.', 
'revoltdeclarationtowncrier_event' => '%s инициировал восстание против %s, регента %s %s!', 
'revoltsuccessnoking' => 'Яростный бой между мятежниками и стражниками (%s) завершён. Мятежники победили, но регент коронован не был. Ход сражения Вы можете посмотреть здесь: %s', 
'revoltsuccessnewking' => 'Яростный бой между мятежниками и стражниками (%s) завершён. Мятежники победили. Ход сражения Вы можете посмотреть здесь: %s', 
'market_posteditemforsale' => 'Вы выставили на продажу <b>%d %s</b> за базовую цену в <b>%s серебряных монет</b>, на <b>%s</b> рынке.', 
'market_posteditemforprivatesale' => 'Вы продали %s, <b>%d %s</b> по цене %s денег на рынке: <b>%s</b>.', 
'market_posteditemforprivatesalerecipient' => '%s было продано вам <b>%d %s </b> по цене %s денег на рынке: <b>%s</b>.', 
'market_canceleditemsale' => 'Вы забрали <b>%d %s</b> с рынка <b>%s</b>.', 
'characterboughtbreeding' => '%s купил лицензию на ферму в: %s.', 
'startedproject' => '%s дал добро на проект: <b>%s</b> в: <b>%s</b>.', 
'prayok' => 'Вы закончили молиться. Вы чувствуете, что ваша вера окрепла. В результате вы заработали <b>%d</b> Пунктов Веры для вашей церкви.', 
'initiatetargetok' => 'Ритуал посвящения был закончен, и теперь Вы являетесь частью: %s', 
'initiation' => '<b>%s</b> было проведено таинство посвящения:  <b>%s</b>.', 
'structure_boughtitem_c' => 'Вы купили у <b>%s</b> (%s): <b>%d</b> <b>%s</b> за <b>%d</b> монет.', 
'structure_boughtitem_s' => '%s купил <b> %s %s </b> за <b>%d</b> монет.', 
'donatecoins' => 'Вы пожертвовали <b>%d</b> монеты церкови. Ваш уровень Веры увеличился до <b>%d%%</b>.', 
'structure_donatedcoins' => 'Получено пожертвование от <b>%s</b>: <b>%d</b> монеты.', 
'harvestok' => 'Вы закончили собирать урожай.', 
'seedok' => 'Вы закончили посев урожая.', 
'churchresign_announcement' => '<b>%s, %s %s %s</b>, отказался от роли.', 
'churchleadernominee' => '<b>%s</b> был назначен <b>%s</b> церкви <b>%s</b>!', 
'initiatesourceok' => 'Вы закончили церемонию <b>посвящения</b>. Персонаж <b>%s</b> теперь преверженец Церкви.', 
'newappointment_announcement' => '<b> %s, %s %s %s</b> назначил <b>%s %s %</b> (область: %s)!', 
'newappointmentchurch_announcement' => '<b> %s, %s %s %s %s %s</b> назначил <b>%s %s %s %s %s %s</b> (область: %s)!', 
'newappointrole_event' => '<b> %s, %s %s %s </b> назначил Вас <b>%s %s %s (область: %s)</b>', 
'newrevokerole_announcement' => '<b> %s, %s %s %s </b> отменил должность <b> %s %s %s </b> принадлежавшую <b>%s</b> (область: %s)!', 
'newrevokerolechurch_announcement' => '<b> %s, %s %s %s %s %s</b> отозвал должность <b> %s %s %s %s  %s </b> у <b>%s</b>!', 
'newrevokerole_event' => '%s, %s %s %s отменил Вашу должность.', 
'prayfp' => '<b> %s </b> закончил молитву, это действие помогло строению получить <b>%d</b> пункта веры.', 
'sailcost' => 'Потрачено монет: <b>%d</b> (корабельные затраты).', 
'structuredamagedamager' => 'Вы разрушили строение: %s в регионе: %s (%s%%)', 
'structurerepairrepairer' => 'Вы восстановили строение: %s в регионе: %s (%s%%)', 
'structuredamage' => '%s разрушил строение (%d)', 
'structurerepair' => '%s восстановил строение (%d)', 
'fppointstranferedsource' => 'Переданы баллы веры в %s - %s (всего: %d).', 
'fppointstranferedtarget' => '%s передал %d баллов веры строению.', 
'excommunicationtarget' => '%s отлучил Вас. Вы больше не часть Церкви. Причина: <b>%s</b>', 
'excommunicatedplayer' => '%s отлучил <b>%s</b>. Причина: <b>%s</b>', 
'excommunicationsource' => 'Вы отлучили <b>%s</b>. Причина: <b>%s</b>', 
'structuredamageowner' => 'Внимание: строение %s в регионе %s было повреждено.', 
'structure_lentarmoryitem' => '%s дано взаймы 1 %s to: %s.', 
'structure_returnedlentarmoryitem' => '%s возвращено 1 %s.', 
'target_lentarmoryitem' => 'Оружейная Региона: %s дано взаймы Вам 1 %s. Ожидаемое время доставки: %s.', 
'returnedlentarmoryitem' => 'Вы возвратили 1 %s в Оружейную Региона: %s.', 
'groupleadershiptransferedoldleader' => 'Вы перемещены в лидеры группы <b>%s</b> to <b>%s</b>', 
'groupleadershiptransferednewleader' => '<b>%s</b>  передал вам управление группой <b>%s</b> .', 
'charremovedfromgroupremoved' => '<b>%s</b> удалил Вас из группы <b>%s</b>.', 
'charremovedfromgroupleader' => 'Вы удалены <b>%s</b> из группы <b>%s</b>.', 
'armoryaccessgrantrevoked' => '<b>%s</b> отменил Ваше право доступа в <b>%s</b> Оружейную.', 
'armoryaccessgrantgiven' => '<b>%s</b> дал Вам право доступа в <b>%s</b> Оружейную.', 
'structure_armoryaccessgrantrevoked' => '%sотозваны права на досту в Оружейную для %s.', 
'structure_accessprofilerevoked' => 'Отменен доступ для:  <b>%s</b> a <b>%s</b>.', 
'structure_accessprofilegiven' => 'Предоставлено право доступа <b>%s</b>  к <b>%s</b>', 
'target_accessprofilegiven' => '%s выдал вам право доступа: <b>%s</b> для <b>%s - %s</b>.', 
'target_accessprofilerevoked' => 'Право доступа: <b%s</b> для <b>%s - %s</b> отменено. ', 
'structure_upgradesessiondone' => '%s работал %d часов для улучшения здания.', 
'structureupgradedlevel' => 'Здание <b>%s - В регионе: %s</b> сейчас <b>%d</b> уровня!', 
'structureupgradedinventory' => 'Здание <b>%s - В регионе: %s</b>имеет  вместимость склада <b>%d</b>', 
'jobposted' => 'Объявление (Категория: %s, Название: %s)  размещено на доске объявлений в <b>%s, %s</b>. ', 
'startcraft' => ' <b>%s</b> начал строительство: <b>%s</b>.', 
'endcraftpartialitem' => ' <b>%s</b> частично завершил: <b>%s (%s%%)</b>.', 
'endcraftitem' => ' <b>%s</b> прекратил строительство здания: <b>%s(%d)</b>.', 
'actioncanceled' => ' <b>%s</b> отменил действие: <b>(%s) </b>.', 
'startseed' => '<b>%d</b> приступил к посеву <b>(%s) </b>.', 
'endseed' => '<b>%s</b> завершил посев <b>(%s)</b>', 
'startharvest' => '<b>%s</b> приступил к сбору урожая.', 
'endharvest' => '<b>%s</b> завершил сбор урожая.', 
'startupgradeinventory' => '<b>%s</b> приступил к улучшению склада.', 
'endupgradeinventory' => '<b>%s</b> завершил улучшение склада.', 
'jobacceptedemployee' => 'Принят трудовой договор № <b>%d</b> (Наниматель: %s)', 
'jobacceptedemployer' => '<b>%s</b> принял трудовой договор № <b>%d</b>.', 
'jobclosed' => '<b>%s</b> закрыл контракт № <b>%d</b>.', 
'jobcanceled' => ' <b>%s</b> отменил контракт  № <b>%d</b>.', 
'startgather' => ' <b>%s</b> приступил к сбору фермерской продукции.', 
'endgather' => ' <b>%s</b> завершил сбор фермерской продукции.', 
'startfeed' => ' <b>%s</b> приступил к кормлению животных.', 
'endfeed' => ' <b>%s</b> завершил кормление животных.', 
'startbutcher' => '<b>%s</b> начал забой животных.', 
'endbutcher' => ' <b>%s</b> закончил забой.', 
'suggestionposted' => 'Новое предложение - Название: <b>%s</b> было добавлено.', 
'suggestionedited' => 'Новое предложение - Название: <b>%s</b> было отредактировано.', 
'craftingcompleted' => 'Вы закончили изготавливать <b>%d %s</b>. Продукция помещена на склад Вашего магазина.', 
'referralcoinsgiven' => 'Получено %.2f монеты (реферальный бонус).', 
'dicesimplewin1' => '%s выиграл игрой в кости %d серебряных монет в таверне %s!', 
'dicesimplewin2' => 'Вы выиграли игрой в кости %d серебряных монет в таверне %s!', 
'dicesimplewin3' => 'Выиграно игрой в кости %d серебряных монет в таверне %s.', 
'diceelitewin1' => '%s только что выиграл игрой в кости%d дублонов в таверне %s!', 
'diceelitewin2' => 'Вы только что выиграли игрой в кости %d дублонов в таверне %s!', 
'diceelitewin3' => 'Выиграно игрой в кости %d дублонов в таверне %s.', 
'adminmessageposted' => 'Внимание, новое сообщение Администрации опубликовано. Страница: <b>%s</b>.', 
'gdrtitleappointment_announcement' => '<b> %s </b> получил дворянский титул: <b><i>%s of %s!</i></b>', 
'gdrtitleappointed_announcement' => 'Вам дарован дворянский титул!', 
'gdrroleappointment_announcement' => '<b> %s </b> получил придворную должность:  <b><i>%s of %s</i></b>!', 
'gdrroleappointed_announcement' => 'Вы получили дворянский титул!', 
'gdrtitlerevoked_announcement' => 'Один из ваших дворянских титулов был отменён.', 
'gdrrolerevoked_announcement' => 'Один из ваших дворянских титулов был отменён.', 
'gdrtitlerevokedsource' => 'Вы отозвали титул <b>%s %s %s</b> у <b>%s</b>.', 
'gdrtitleassignedsource' => 'Вы даровали титул <b>%s %s %s  %s</b>.', 
'startedcrafting' => 'Вы приступили к изготовлению <b>%s (x %d)</b>.', 
'finishedcrafting' => 'Вы закончили изготовление <b>%s (%d)</b>', 
'nowagefunds' => 'Не выдана зарплата <b<( %s серебряных монет)</b>; не найдено средств в строении %s которым владеет %s </b>.', 
'hourlywagegiven' => 'Получено %s серебряных монет (запрплата, строение: <b>%s в %s которым владеет %s</b>.', 
'wagegiven' => 'Оплачено <b>%s</b> серебрянных монет <b>%s</b>.', 
'wagefundsmissing' => '<b>%s</b> не был оплачен, потому что не было достаточно средств в здании.', 
'suggestionfullysponsorised' => 'Предложение: %s было полностью проспонсированно!', 
'studystart' => 'Вы начали учебную/тренировочную сессию для курса: %s', 
'procartbreaks' => 'Ваша профессиональная телега сломалась и теперь бесполезна!', 
'diplomacyproposaltarget' => '<b>%s</b> изменили дипломатические отношения. Новые отношения <b>%s</b>.', 
'diplomacyproposalsource' => 'Вы изменили дипломатические отношения с; <b>%s</b>. Новые отношения: <b>%s</b>.', 
'diplomacyproposalann' => '<b>%s</b> изменили дипломатические отношения с: <b>%s</b>. Новый статус: <b>%s</b>.', 
'valueaddedtaxchange' => '<b>%s</b> изменили товарный и сервисный налог для региона: <b>%s</b>. %s: %d%%, %s: %d%%, %s: %d%%, %s: %d%%.', 
'info-itemsoldatmarket' => '%s купил за %s серебряных монет %d %s из %s на рынке в: %s.', 
'valueaddedtaxincome' => 'Получил %s серебряных монет (налог на товары и услуги) из %s (%s) - регион: %s', 
'accesspermitassignedsource' => 'Вы получили доступ в королевстве %s. Оно истечет в: %s.', 
'accesspermitassignedtarget' => '%s дал вам разрешение на доступ в королевство: %s. Разрешение истекает в: %s.', 
'lostattributepoint' => 'В последнем бою ваш противник сильно ударил вас.  Вы потеряли 1 очко атрибута: %s.', 
'queststepcompleted' => 'Задание: %s: вы завершили этап: %d.', 
'questcompleted' => 'Вы завершили задание %s!', 
'questcompletedbychar' => '%s только что завершил квест: %s.', 
'scoreawarded' => 'Вы награждены %d Очками', 
'moneyupdated' => '%s серебряных монет %s.', 
'doubloonupdated' => '%s дублонов %s.', 
'finishedquestpath_tutorial' => 'Вы завершили линию: Обучение.', 
'resttaverncomplete' => 'Вы закончили отдыхать в таверне. Вы восстановили %s очков Энергии.', 
'resttavernstartnew' => 'Вы начали отдыхать в таверне за %s монет (восстановление энергии: %s в час). Когда вы проснетесь (через %s часов), вы восстановите %s очков энергии.', 
'restcomplete' => 'Вы проснулись в хорошем расположении духа.', 
'reststart' => 'Вы уснули в %s (восстановление энергии: %s в час).', 
'restcancel' => 'Вы внезапно проснулись, восстановив свою энергию.', 
'collectwaterok' => 'Вы наполнили %s бутылок водой.', 
'gainedenergyfromdrink' => 'Вы утолили жажду. Вы получили %d%% энергии.', 
'gottipsyfromdrink' => 'Вы утолили жажду, но немного захмелели.', 
'coinsupdateroleassignment' => 'Изменено монет (-%s): Назначение Роли:  %s %s %s на %s.', 
'coinsupdaterevokal' => 'Изменено монет (-%s): Отстранен %s с роли:  %s %s %s.', 
'fpupdateroleassignment' => 'Изменено Очков Веры (-%s): Назначение Роли: %s %s %s %s %s на %s.', 
'fpupdaterolerevokal' => 'Изменено Очков Веры (-%s): Отстранен с роли:  %s %s %s %s %s, %s.', 
'basicpackageexpires' => 'Предупреждение: базовый премиумный пакет истечет через %s. Пожалуйста, продлите его до того, как он истечет или IP защита больше не будет активна. ', 
'plagueeffect' => 'Неожиданно вы почувствовали спазмы и лихорадку. Ваша кожа стала раздутой и на ней появились пятна голубоватого цвета. (%d HP).', 
'bleedingwoundeffect' => 'Вот хрень! Рана болит и не прекращает кровоточить, не мешало бы срочно получить медицинскую помощь (%d здоровья)', 
'curefinishedoktarget' => 'Лечение закончилось, вы почувствовали себя лучше.', 
'curefinishedoksource' => 'Лечение %s закончилось.', 
'curefinishedoknotcuredtarget' => 'Лечение закончилось, но недостаточно эффективно.', 
'curefinishedoknotcuredsource' => 'Вы завершили лечение, но кажется, что  %s не вылечен. Вы уверены, что использовали правильное зелье?', 
'curefinished' => 'Персонаж %s был излечен %s', 
'curestartedsource' => 'Вы начали лечить %s.', 
'curestartedtarget' => '%s начал лечить Вас.', 
'launchdueltarget' => 'Вы получаете свиток: %s желает вызвать вас на дуэль в: %s,  %s! Вы можете отослать подтверждение не позднее: %s. <a href="%s">[Принять]</a> <a href="%s">[Отклонить]</a>.', 
'launchduelsource' => 'Вы отослали свиток %s вызывая его/ее в: %s  %s.', 
'duelacceptedtarget' => 'Вы приняли вызов на дуэль с %s!', 
'duelacceptedsource' => '%s принимает ваш вызов на дуэль!', 
'duelacceptedtowncrier' => '%s и %s встретятся на дуэли: %s!', 
'looterdisappeareditems' => 'Прохожий украл вещи у %s но убежал слишком быстро, чтобы можно было что-то предпринять!', 
'gotdisease_tipsyness' => 'После последнего стакана вы чувствуете себя слегка навеселе, может, не стоит налегать.', 
'eatdrinkitem' => 'Вы съели <b> %d %s</b>.', 
'gotdisease_drunkness' => 'Вы напились вдрызг!', 
'looteddiscoveredintelligence' => 'В один из моментов просветления вы вспоминиаете, что видели, как %s копается в ваших вещах.', 
'gotdisease_plague' => 'Вам вдруг поплохело. Вы чувствуете себя слабым и и у вас кружится голова. А еще эти станные синие пятна на руках...', 
'looteddiscoveredcharisma' => 'В один из моментов просветления вы вспоминаете, что некто говорил вам о %s кто копался в ваших вещах, пока вы отдыхали.', 
'lootednotdiscoverd' => 'В один из моментов просветления вы вспоминаете, что видели кого-то, копавшегося в ваших вещах, пока вы отдыхали.', 
'finishedpartialcrafting' => ' Вы частично изготовили(%s). Сделано  <b>%s%</b>.', 
'looterdiscovered' => 'Вы понимаете, что вас обнаружили, когда вы обирали труп %s.', 
'honorpointsupdated' => 'Очков чести: %d (%s).', 
'duelwinner' => 'Вы выиграли поединок с %s!', 
'duellooser' => 'Вы проиграли поединок с %s.', 
'duelfinishedtowncrier' => 'Дуэль между %s и %s состоявшаяся в %s была выиграна: <b>%s</b>! %s', 
'duelrefusedsource' => '%s отклонил(а) ваш вызов на дуэль.', 
'duelrefusedtarget' => 'Вы отклонили вызов %s на дуэль.', 
'looteditemsource' => 'С бездыханного тела %s вы забрали  %d %s .', 
'looteditemtarget' => 'Пока вы были без сознания, кто-то украл у вас  %d %s.', 
'duelopponentdidntshow' => '%s не присутствует на месте дуэли.', 
'duelfinishedtowncrierbothnoshow' => 'Дуэль между  %s и %s в %s не состоялась, оба участника не явились на место встречи.', 
'duelfinishedtowncriernoshow' => 'Дуэль между %s и %s в %s не состоялась,%s не явился(лась).', 
'error-automaticsleep' => 'Ваш персонаж не может лечь спать по следующей причине: %s', 
'losttipsydisease' => ' На данный момент вы чувствуете себя более-менее трезво, вы можете ясно мыслить и чувствуете, что ваши силы восстанавливаются. Было бы хорошо держаться от алкоголя подальше ещё некоторое время.', 
'diseasecured' => ' Вы излечились от болезни: %s', 
'structurecoinsreceived' => ' Получено %s серебряных монет (%s).', 
'questtokencounter' => ' Жетон был получен и это помогло в выполнении квеста. Вы отправили %d жетонов.', 
'resignevent' => ' Вы были сняты с роли: %s %s %s.', 
'nativeattackdeclaration' => 'Группа вооруженных повстанцев обнаружена направляющейся к региону %s (%s).', 
'nativerevoltfailure' => 'Повстанцы не смогли захватить %s. %s.', 
'nativerevoltsuccess' => 'Повстанцы захватили %s. %s.', 
'watcharea_start' => 'Вы приступаете к осмотру окрестностей.', 
'structurecastledailyrevenue' => 'Бонус за активных жителей: %s.%s серебряных монет.', 
'kingdomsmerge' => '%s и %s объединены в: <b>%s</b>.', 
'move_canceled' => 'Вы прервали свое перемещение и вернулись в:<b>%s</b>.', 
'sail_canceled' => 'Вы прервали свое путешествие и вернулись в: <b>%s</b>.', 
'celebrateweddingofficer' => 'Вы только что заключили брак между %s и %s.', 
'celebrateweddingspouses' => 'Брак с %s был заключен в %s - %s. Поздравляю!', 
'weddingcelebrated' => '%s Заключил брак в %s - %s между %s и %s.', 
'cancelweddingofficer' => 'Вы разорвали брачный договор между %s и %s.', 
'cancelweddingspouses' => 'Свадьба с %s была отменена в %s - %s .', 
'weddingcanceled' => '%s расторгнул брак в %s - %s между %s и %s. ', 
'admin_package_received' => 'Администрация Medieval Europe дает вам Премиумный Пакет: %s на %d дней, причина: %s.', 
'gift' => '<b>%s</b> вручил вам подарок: <b>%s</b>!', 
'gifted' => 'Вы вручили подарок: <b>%s</b>: <b>%s</b>.', 
'celebratemarriage_start' => 'Бракосочетание началось.', 
'celebratemarriage_end' => 'Бракосочетание завершено.', 
'cancelmarriage_start' => 'Начался процесс расторжения брачного договора. ', 
'cancelmarriage_end' => 'Расторжение брака завершено.', 
'weddingproposalaccepted' => '%s принял ваше предложение руки и сердца!', 
'weddingproposalrefused' => 'К сожалению %s отклонил ваше предложение руки и сердца.', 
'weddingproposalreceived' => 'Вы получили предложение руки и сердца от <b>%s</b>!', 
'weddingproposalsent' => 'Вы отправили предложение руки и сердца <b>%s</b>!', 
'gottitleandpoints' => 'Вы добились следующей награды: <b>%s</b> и получили <b>%d</b>очков!', 
'studycanceactionrestoredassets' => '%s прервал обучение/тренировку. %d %s возвращен в здание.', 
'boughtbonus' => 'Вы приобрели бонус: %s,  %d %s (%d дублонов)', 
'giftedbonus' => 'Вы подарили бонус %s, n. %d %s to: %s (%d дублонов)', 
'receivedbonus' => '%s подарил вам бонус: %s, n. %d %s', 
'startprojectwork' => 'Вы начали работать на строительной площадке ', 
'endprojectwork' => 'Вы закончили работать на строительной площадке (%d часов).', 
'endprojectworkpaid' => 'Вы отработали на строительной площадке (%d часов, %d монет)', 
'newkingdom' => 'Было основано новое королевство: <b>%s</b>.', 
'newkingdom_message' => 'На форуме королевства появилось новое сообщение: %s.', 
'churchleaderremoval' => '<b>%s</b> больше не %s %s.', 
'nativerevoltsuccessdestroyedresource' => 'Повстанцы захватили %s и уничтожили ресурс: <b>%s</b> - %s.', 
'lostachievement' => 'Вы потеряли значок <b>%s</b>', 
'foundbycharacterglanced' => '%s узнал, что вы слишком пристально разглядывали его добро.', 
'curecanceled' => '%s отменил лечение.', 
'gotdisease_bleedingwound' => 'Силы уже немного возвратились к вам, и вам чуть лучше. Вот только эта кровоточащая рана...', 
'tutorassigned' => 'Приветсвую, добро пожаловать в Средневековую Европу! Вашим ментором назначен <strong>%s</strong>, он скоро с вами свяжется и поможет в вашем приключении.', 
'newbornassigned' => 'Вас назначили ментором <strong>%s</strong>.', 
'initiatecanceled' => '%s прервал посвящение.', 
'raidedreliq' => '<b>%s</b> только что захватили <b>%s</b> и спрятали ее в <b>%s(%s)</b>.', 
'doubloonsreferral_sent' => '%s дублонов отправлено %s (реферальный бонус)', 
'npcatefood' => '%s съел(а) %d %s, которые вы выставили на продажу на рынке в %s.', 
'npcboughtfood' => '%s купил %d %s которые вы продавали на %s рынке.', 
'pcvsnpcwon' => 'Вы атаковали и победили %s. %s.', 
'pcvsnpctie' => 'Вы атаковали  %s, но поединок завершился ничьей. %s.', 
'pcvsnpclost' => 'Вы атаковали %s и были побеждены %s.', 
'itemtakenfromground' => 'Вы подняли с земли %d %s в: %s.', 
'proxywarning' => 'Наша система обнаружила, что ваше подключение осуществляется через прокси или VPN (IP: %s). Рассмотрите это как предупреждение и больше не используйте прокси. Если вы продолжите использовать прокси или VPN, ваша учетная запись будет заблокирована. Если вы считаете, что есть место ошибке, или вы считаете, что у вас есть веские причины для использования прокси-сервера или VPN, пожалуйста обратитесь в службу поддержки.', 
'revoltleaderlostcharisma' => 'Вы объявили революцию, но не участвовали в битве, тем самым потеряли 1 очко обаяния.', 
'privatesaleexpired' => 'Ваша частная продажа %s %s для %s на рынке была просрочена и теперь эти предметы могут быть проданы кому угодно.', 

);

?>