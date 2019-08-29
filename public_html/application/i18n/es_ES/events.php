<?php defined('SYSPATH') OR die('No direct access allowed.');

$lang = Array
(
'addlaw_announcement' => '%s %s %s %s, ha proclamado una nueva ley: <i>%s</i>.', 
'appointment_announcement' => '%s, %s %s %s, ha nominado %s %s %s %s.', 
'otherresign_announcement' => '%s - %s de la Región %s, ha renunciado al rol.', 
'kingresign_announcement' => '%s - Regente %s, ha renunciado al título.', 
'publishsentence_announcement' => '%s %s %s %s emitió una oración hacia %s: <i>%s</i>', 
'citychange_event' => 'Has tranferido tu residencia a %s.', 
'wardeclaration_event' => 'Un mensajero te trajo una Declaración de Guerra de %s %s %s %s.', 
'wardeclaration_event2' => 'Has recibido un pergamino que contiene una declaración de guerra de %s! (%s, región: %s)!', 
'wardeclaration_announcement2' => '%s %s  has lanzado un ataque contra %s %s! (%s, Región: %s)', 
'itemreceived_event' => '%s te envió %d %s.', 
'appointrole_event' => '%s le designó como %s %s %s. Puedes rechazar este rol desde el perfil de tu personaje.', 
'cdbcreated_def' => 'El preocupado Capitán de la Guardia te advierte que un ejército enemigo está reunido a las afueras de la ciudad (Región: %s)', 
'imprisonjudgemess_event' => '%s ha sido encarcelado.', 
'imprisontarget_event' => 'Has sido encarcelado en las mazmorras de %s por la siguiente razón: <i>%s</i>.', 
'itemsbroke' => '¡Uno de tus objetos (%s) se ha roto!', 
'fightlost' => 'Perdiste una pelea, el oponente tomó tus bienes mientras estabas incapacitado.', 
'structureraided' => '¡Volviendo de %s %s, te diste cuenta de que alguien rompió la cerradura y robó <b>%s</b> monedas!', 
'structureraideditems' => '¡Volviendo de %s %s, te diste cuenta de que alguien rompió la cerradura y robó <b>%s</b> %s!', 
'charraided' => '¡Mientras estabas en %s, algunos soldados te golpearon y robaron monedas de %d !', 
'battleendedwinner' => 'La batalla (%s) entre %s y %s ha sido ganada por %s. Informes: %s', 
'battleendedtie' => 'La batalla (%s) entre %s y %s terminó en empate. Informes: %s', 
'cdbcreated_att' => 'El Capitán de la Guardia te dijo que el campo de batalla estaba listo y que era hora de armar el ejército.', 
'roundended' => '%s ha atacado a %s en una sangrienta batalla. Mira aquí los resultados: %s ', 
'doubloons_received' => 'Tus doblones han sido actualizados (%d).', 
'deletedallevents' => 'Borrar todos los eventos.', 
'deletedevent' => 'Evento borrado.', 
'charinroledied_announcement' => '<b>%s, %s %s %s</b> murió, el rol está vacante.', 
'chardied_announcement' => '%s murió de inanición.', 
'kingchrowned' => '%s ha sido coronado Soberano %s %s!', 
'rewardgiven' => 'Has recibido una recompensa de %d %s por tu voto (toplist: %s).', 
'atelieritembought' => 'Has comprado un articulo del Atelier (%s) que se te ha enviado a la direccion de correo electronico que has utilizado para registrarte. Si no recibe este articulo dentro de las 24 horas, envie un ticket a nuestro equipo de soporte.', 
'city_change_eventtext' => 'Cambiaste tu residencia.', 
'raidloot' => 'Lote de la Redada (%d monedas) han sido llevadas al inventario del Palacio Real.', 
'animaldeath' => 'Uno o más animales en su granja murieron debido a la mala alimentación', 
'allanimaldeath' => '¡Todos tus animales murieron de hambre! Debes comprar otra licencia.', 
'market_boughtitem' => 'Compraste %s %s de %s por %s monedas.', 
'factorydeleted' => 'La licencia de su granja ha expirado. Si deseas criar más animales, ve al Castillo.', 
'structuredonation' => '%s has donado %d %s.', 
'structurepropertytax' => 'Recibes %s monedas de %s (Impuesto a la propiedad)', 
'structuresellingtax' => 'Recibes %s monedas de %s (Impuesto a las ventas)', 
'terrainbought' => 'Has comprado tierras por la suma de %d monedas.', 
'terrainsold' => 'Has vendido tierras por la suma de %s monedas.', 
'charstructurebought' => 'Usted compro un edificio (%s) por %s monedas de plata.', 
'charstructuresold' => 'Vendió un edificio (%s) por %s monedas de plata.', 
'castlestructurebought' => '%s compro un edificio (%s) por %s monedas de plata.', 
'castlestructuresold' => '%s vendio un edificio (%s) por %s monedas de plata.', 
'shopbought' => 'Has comprado una licencia para abrir una tienda por la suma de %s monedas.', 
'shopsold' => 'Has vendido la licencia de una tienda por la suma de %s monedas.', 
'structure_events_helper' => 'Aquí puede monitorear eventos relacionados con esta estructura. Los eventos anteriores a un mes se eliminan automáticamente.', 
'referralcoins' => 'Recibió una bonificación de referencia de %d monedas de %s.', 
'boughtbreeding' => 'Has comprado algunos animales de granja por el precio de %d monedas de plata, ahora tienes un/una %s', 
'itemstolenby' => '¡ %s te robó %d %s mientras estabas inconsciente!', 
'itemstolen' => 'Has robado %d %s de %s mientras estaba inconsciente.', 
'kingdethroned' => '¡ %s, Regente %s %s, ha sido destronado!', 
'structuredestroyed' => 'Mientras asaltaban su región, ¡Los soldados prendieron fuego a %s %s!', 
'structurecompletelydamaged' => 'El Edificio: %s en %s ha sido completamente destruida!', 
'imprisonjudge_event' => '%s ha sido encarcelado por el Capitán de la Guardia.', 
'freeprisoner_judge' => 'El prisionero %s ha sido liberado por %s por la siguiente razón: <i>%s</i>', 
'freeprisoner_prisoner' => 'Has sido liberado de la prisión de %s por la siguiente razón: <i>%s</i>', 
'strength_boost_event' => '¡De repente te sientes bien y muy fuerte!', 
'market_solditem' => 'Has vendido <b>%s</b> <b>%s</b> a <b>%s</b> por <b>%s</b> monedas de plata en el mercado de: <b>%s</b>.', 
'communityproject_completed' => '%s ha completado la construcción: <b>%s</b> en: <b>%s</b>.', 
'churchcommunityproject_completed' => 'La construccion del edificio: <b> %s </b> a <b> %s </b> se completo.', 
'structuregain' => 'Has recibido %s monedas de %s (curso: %s)', 
'coursestax' => 'Impuestos recibidos: %s monedas (lecciones, %s).', 
'coursecompleted' => '¡Has completado con éxito el curso %s! Has aumentado tu atributo %s de %d a %d.', 
'coursecompletedskill' => 'Has completado el  siguiente curso satisfactoriamente: %s!', 
'projectwork' => '%s ha trabajado en el proyecto durante %d horas de forma gratuita.', 
'coinsrefunded' => 'Se devolvieron %d monedas porque %s no completó su turno de trabajo.', 
'structuredrop' => '%s ha depositado %d %s.', 
'playerdrop' => 'Has depositado %s %s en la estructura: %s (propietario:%s) en: %s.', 
'playertake' => 'Tomaste %s %s de la estructura: %s (propietario: %s) en: %s.', 
'structuretake' => '%s has tomado %d %s del inventario.', 
'itemsent_event' => 'Enviaste %d %s a %s. Tiempo estimado de entrega: %s', 
'city_change_info_source' => '%s cambió de residencia y dejó %s - %s para %s - %s.', 
'city_newcharacterborn' => '%s - %s tiene un nuevo ciudadano: %s', 
'city_change_info_dest' => '%s - %s tiene un nuevo ciudadano: %s (transferido de %s - %s).', 
'structuredonationchar' => 'Has donado %d %s  a: %s en: %s.', 
'doubloons_sent' => '%d doblones han sido asignados a %s.', 
'taxfromsail' => 'Recibió %d monedas por los impuestos de navegación.', 
'projectworkpaid' => '%s ha trabajado en el proyecto durante %d horas para %d monedas.', 
'shopownershiptransfered' => '%s ha transferido la propiedad a %s-%s-%s.', 
'shopownershipoldowner' => 'Has transferido la propiedad de tu taller a %s.', 
'shopownershipnewowner' => '%s ha transferido la propiedad de su taller.', 
'market_transferedpropertyownership' => '%s ha transferido la propiedad n.1 %s a %s.', 
'jail_attributelost' => 'La humedad, la escasa comida y la dureza de la cárcel son demasiado difíciles para ti. Has perdido 1 punto de %s .', 
'restraincanceled_sourceinfo' => 'Cancelaste una orden de arresto por el siguiente motivo: <i>%s</i>.', 
'restraincanceled_targetinfo' => '%s canceló su orden de arresto por el siguiente motivo: <i>%s</i>.', 
'freeprisoner_sheriff' => 'Has sido liberado %s por la siguiente razón: <i>%s</i>.', 
'confiscateditem_sourceinfo' => 'Has confistado a %s n. %d %s por el siguiente motivo: <i>%s</i>.', 
'confiscateditem_targetinfo' => '%s confiscó tu n. %d %s por las siguientes razones: <i>%s</i>.', 
'restrain_targetinfo' => 'El Capitán de la Guardia ordenó que no se pueda salir de la región duras las siguientes horas: %d por la razón: <i>%s</i>.', 
'restrain_sourceinfo' => 'Has dispuesto que %s no pueda abandonar el reino por %d horas (motivo: <i>%s</i>).', 
'confiscateditem_sourceinfovassal' => '%s confisco a %s n. %d %s por el siguiente motivo: <i>%s </i> (mercado, region: %s)', 
'dumpobjectfound' => 'Has encontrado en la basura %d %s', 
'milkingfinished' => 'Has terminado de ordeñar las vacas. La leche ha sido almacenada en la sala de existencias de la granja.', 
'butcheringfinished' => 'Has completado la matanza de tus animales de granja. Encontrará los productos en la sala de almacenamiento de la granja. Deshágase de ellos o elimínelos antes de que caduque su licencia.', 
'itemtrashed' => 'Arrojas %d %s al vertedero.', 
'digitemok' => 'Has terminado el proceso de excavación. Has extraído <b>n. %d %s</b>.', 
'digitemnotok' => 'Has terminado el proceso de excavación, pero desafortunadamente no había nada que extraer.', 
'searchitemok' => 'Has terminado de buscar. Has obtenido <b n. %d %s</b>.', 
'searchitemnotok' => 'Has terminado de buscar, pero desafortunadamente no obtuviste nada.', 
'fishok' => 'Terminaste de pescar. Capturaste <b>%d %s</b>.', 
'fishnotok' => '¡Terminaste de pescar, pero no capturaste nada!', 
'gatheringfinished' => 'Ha terminado de recoger material de su criadero, lo encontrará en el almacén.', 
'cutwoodok' => 'Terminaste de cortar madera. Has recolectado <b>%d %s</b>.', 
'cutwoodnotok' => 'Acaba de cortar madera, pero desafortunadamente no ha logrado encontrar nada decente.', 
'char_invite_join_group' => '<b>%s</b> te ha invitado a unirte al grupo <b>%s</b>. Click <a href=%s>aquí</a> para aceptar. La petició estará disponible durante 24h.', 
'cancelling_group' => '<b>%s</b> ha disuelto el grupo <b>%s</b>.', 
'invite_accepted' => '¡ <b>%s</b> ha aceptado tu invitación y ahora forma parte del grupo <b>%s</b>!', 
'conquerirfailure' => '%s ha intentado conquistar una Región independiente. %s, pero falló, mira el %s de la batalla.', 
'conquerirsuccess' => '%s ha conquistado la región independiente: %s; ver el %s de la batalla.', 
'conquerrfailure' => '%s ha atacado %s pero perdió; ver batalla %s.', 
'conquerrsuccess' => '%s conquistó la región %s - %s; ver batalla %s.', 
'conquerrsuccessnewking' => '%s conquistó el Reino: %s, el nuevo Regente es: %s.', 
'conquerrsuccessnoking' => '%s conquistó el Reino: %s, pero la silla del Regente está aun vacante.', 
'assign_region_announcement' => '<b>%s - %s %s %s %s</b>, ha donado la región: <b>%s</b> al Vasallo: <b>%s</b>.', 
'assign_region_sourcevassal' => '%s %s %s %s %s, te ha asignado la región: %s.', 
'kingdomprojectcanceled' => '%s ha abortado la construicción de: %s en la Región de: %s.', 
'jewellost' => 'Solo te das cuenta ahora que has perdido tu %s. ¡Maldita desconsideración!', 
'dumpobjectfoundnothing' => 'Has estado hurgando en la basura, pero desafortunadamente no has encontrado nada.', 
'crowningmoneyreceived' => 'Recibió %d monedas de plata para la coronación del nuevo Rey.', 
'exhibit_scroll' => '<b>%s</b> le mostró un documento titulado <b>%s</b> que contiene el siguiente texto: <i>%s</i>, firmado por <b>%s</b>', 
'exhibit_scroll_sender' => 'Mostró a <b>%s</b> el documento titulado <b>%s</b> que contiene el siguiente texto: <i>%s</i>, firmado por <b>%s</b>', 
'wardeclaration_event3' => '¡Has hecho arreglos para: %s Región %s - Reino: %s !', 
'imprisonedtowncrier' => '%s ha estado encarcelado durante %d horas en la prisión de: %s por el siguiente motivo: <i>%s</i>', 
'flash_invite_accepted' => 'Has aceptado la invitación y te has unido a %s.', 
'admin_item_given' => 'Modificó algunos articulos (<b>%d %s</b>) para: %s (%s).', 
'admin_item_received' => 'El personal de ME modificó sus articulos (<b>%d %s</b>, Motivo: %s).', 
'meditating' => 'Comenzó su período de meditación que terminará el: <b>%s</b>.', 
'completedprojectitemtransfered' => 'Estructura: %s en la región: %s ha sido completada. N. %d %s ha sido llevado al inventario del castillo.', 
'arrest' => '¡ %s te arrestó! Estas siendo transferido a donde te juzgarán.', 
'arrest_restrained' => 'Has llegado al destino donde esperas ser juzgado, no podrá abandonar el Reino durante 48 horas.', 
'imprisoned' => 'Estas siendo transferido a la prisión (Región: %s). Serás encarcelado hasta: %s.', 
'releasedfromjail' => 'Has sido liberado de la prisión. Ahora estás libre.', 
'arrested' => 'Has arrestado a %s y estás transfiriendo al criminal.', 
'imprisonedjudge' => 'Ordenó transferir a %s a la prisión de: %s.', 
'gottitle' => 'Has obtenido el siguiente logro: <b>%s!</b>', 
'cleanprison_finished' => 'Terminaste de limpiar las prisiones.', 
'kingdethronedkingmessage' => '¡Algunos tipos te han expulsado del Palacio Real! Has sido destronado.', 
'kingchrownedkingmessage' => '¡Has sido coronado Regente del Reino de: %s!', 
'structureraidedraider' => 'Has robado <b>%d %s</b> del edificio: <b>%s</b> pertenencientes a: <b>%s</b>. ', 
'charraidedraider' => 'Durante la redada has golpeado y robado <b>%s</b> de <b>%d monedas</b>', 
'itemraided' => 'Depositaste n. <b>%d</b> %s, fruto de la redada (<b>%s</b>, de: <b>%s</b>).', 
'itemmugged' => 'Depositaste <b>%d</b> %s, robados de: <b>%s</b>.', 
'raidedmarketitem' => '¡Algunos de tus articulos (<b>%d %s</b>) han sido puesto a la venta en mercado %s han sido robados!', 
'battlefield_enter' => 'Has entrado al campo de batalla.', 
'battlefield_leave' => 'Dejaste el campo de batalla.', 
'move_start' => 'Dejaste <b>%s</b> para alcanzar <b>%s</b>.', 
'move_end' => 'Has llegado a <b>%s</b>.', 
'currentkingrevoltfailedmsg' => 'La revuelta fue un fracaso; Algunas consecuencias ocurrirán después de esta acción, por lo que sería mejor escapar a alguna tierra lejana.', 
'revoltorganizerrevolterfailedmsg' => 'La revuelta no tuvo éxito, seguramente ahora habrá repercusiones, tal vez es hora de huir.', 
'revoltfailure' => 'Se libró una batalla entre los rebeldes y los guardias reales (%s). Los rebeldes han perdido. Puede ver los resultados de la batalla aquí: %s', 
'revoltdeclaration_event' => 'Usted recibe una misiva que le ha sido entregada por uno de sus emisarios. Cuando abres la misiva, te sorprende el mensaje irrespetuoso que hay escrito: el remitente te acusa de tener habilidades de liderazgo débiles y falta de previsión. Puedes sentir que se acerca una revuelta; todo esto lo confirma uno de tus guardias, aparentemente una gran muchedumbre ya se está reuniendo fuera de la ciudad. La misiva está firmada por <b>%s</b>.', 
'revoltdeclarationtowncrier_event' => '%s ha declarado una revuelta contra %s - Regente %s %s!', 
'revoltsuccessnoking' => 'Se libró una batalla entre los rebeldes y los guardias reales (%s). Los rebeldes han ganado, pero nadie ha sido coronado Regente. Puede ver los resultados de la batalla aquí: %s', 
'revoltsuccessnewking' => 'Se libró una batalla entre los rebeldes y los guardias reales (%s). Los rebeldes han ganado. Puede ver los resultados de la batalla aquí: %s', 
'market_posteditemforsale' => 'Puso a la venta <b>%d %s</b> por un precio base de <b>%s monedas de plata </b>, en el mercado de <b>%s</b>.', 
'market_posteditemforprivatesale' => 'Has estado vendiendo por %s, <b> %d %s </b> a un precio de %s monedas de plata en el mercado de: <b> %s </b>.', 
'market_posteditemforprivatesalerecipient' => '%s ha puesto a la venta para usted <b>%d%s</b> a un precio de %s monedas de plata en el mercado de: <b>%s</b>.', 
'market_canceleditemsale' => 'Has elimado <b>%d %s</b> del <b>%s</b> mercado.', 
'characterboughtbreeding' => '%s compraste una licencia para una granja en: %s.', 
'startedproject' => '%s dio el visto bueno para el proyecto: <b>%s</b> en: <b>%s</b>.', 
'prayok' => 'Has terminado de orar. Sientes que tu fe se esta volviendo mas fuerte. Como resultado, ha ganado <b> %d </b> puntos de fe para su Iglesia.', 
'initiatetargetok' => 'El ritual de iniciacian se completo y ahora formas parte de: %s', 
'initiation' => '<b>%s</b> se introdujo en el sacramento de la confesion de: <b>%s</b>.', 
'structure_boughtitem_c' => 'Has comprado desde <b> %s </b> (%s): <b> %d </b> <b> %s </b> por la suma de monedas <b> %d </b> .', 
'structure_boughtitem_s' => '%s ha comprado <b> %s %s </b> por la suma de monedas <b> %d </b>.', 
'donatecoins' => 'Has donado <b>%d</b> monedas a la Iglesia. Tu nivel de fe ha aumentado a <b>%d%%</b>.', 
'structure_donatedcoins' => 'Donacion recibida de monedas <b>%s</b>: <b>%d</b>.', 
'harvestok' => 'Has completado el proceso de recoleccion.', 
'seedok' => 'Has terminado de sembrar el cultivo.', 
'churchresign_announcement' => '<b>%s, %s %s %s</b>, renuncio al cargo.', 
'churchleadernominee' => '<b>%s</ b> ha sido nominado <b>%s</b> de la Iglesia <b>%s</b>.', 
'initiatesourceok' => 'Has terminado de oficiar la ceremonia: <b>Iniciacion</b>. El personaje <b>%s</b> ahora es un seguidor de la Iglesia.', 
'newappointment_announcement' => '<b>%s, %s %s %s</b> ha designado <b>%s %s %s</b> (Región:%s)!', 
'newappointmentchurch_announcement' => '<b>%s, %s %s %s</b> ha llamado <b> %s %s %s %s %s</b>.', 
'newappointrole_event' => '<b>%s, %s %s %s</b> le ha asignado <b>%s %s %s</b>.', 
'newappointchurchrole_event' => '<b>%s, %s %s %s </b> lo ha designado como <b>%s %s %s</b>.', 
'newrevokerole_announcement' => '<b>%s, %s %s %s</b> ha revocado el cargo <b>%s %s %s</b> <b> a %s </b> (Región:%s)!', 
'newrevokerolechurch_announcement' => '<b>%s, %s %s %s</b> ha revocado la función <b>%s %s %s %s</b> a <b>%s</b>.', 
'newrevokerole_event' => '%s, %s %s %s, ha revocado tu rol.', 
'prayfp' => '<b>%s</b> ha terminado su oracion, esta accion ha ayudado al edificio a recibir puntos de fe <b>%d</b>.', 
'sailcost' => 'Monedas retiradas: <b>%d</b> (gastos de navegacion).', 
'structuredamagedamager' => 'Has dañado el edificio:%s en la Región:%s (%s%%)', 
'structurerepairrepairer' => 'Reparo el edificio:% ​s en la Región:%s (%s%%)', 
'structuredamage' => '%s daño el edificio (%s%%).', 
'structurerepair' => '%s reparo el edificio (%s%%).', 
'fppointstranferedsource' => 'Se transfirieron %d puntos de fe a la construccion %s - %s (costo total:%d).', 
'fppointstranferedtarget' => '%s ha enviado %d puntos de fe a este edificio.', 
'excommunicationtarget' => '%s te ha excomulgado! Ya no eres parte de la Iglesia. Motivo: <b>%s</b>', 
'excommunicatedplayer' => '%s excomulgado <b>%s</b>. Motivo: <b>%s</b>', 
'excommunicationsource' => 'Has excomulgado <b>%s</ b>. Motivo: <b>%s</b>', 
'structuredamageowner' => 'Advertencia: el edificio %s en la region %s ha sido dañado.', 
'structure_lentarmoryitem' => '%s prestado 1%s a:%s.', 
'structure_returnedlentarmoryitem' => '%s devolvio 1%s.', 
'target_lentarmoryitem' => 'Armería de la Región:%s te presto 1%s. Tiempo de entrega esperado:%s.', 
'returnedlentarmoryitem' => 'Has devuelto 1%s a Armeria de la Region:%s.', 
'groupleadershiptransferedoldleader' => 'Has transferido el liderazgo del grupo <b>%s</b> a <b>%s</b>', 
'groupleadershiptransferednewleader' => '<b>%s</ b> transferido al liderazgo del grupo <b>%s</b>.', 
'charremovedfromgroupremoved' => '<b>%s</b> lo elimino del grupo <b>%s</b>.', 
'charremovedfromgroupleader' => 'Has eliminado <b>%s </b> del grupo <b>%s</b>.', 
'armoryaccessgrantrevoked' => '<b>%s</b> elimino sus derechos de acceso a <b>%s</b> Armeria.', 
'armoryaccessgrantgiven' => '<b>%s</b> le dio derechos de acceso a <b>%s</b> Armeria.', 
'structure_armoryaccessgrantrevoked' => '%s elimino los derechos de acceso de la Armería a %s.', 
'structure_accessprofilerevoked' => 'Revoca el acceso a: <b>%s</b> a <b>%s</b>.', 
'structure_accessprofilegiven' => 'Concedido perfil de acceso <b>%s</ b> a <b>%s</b>', 
'target_accessprofilegiven' => '%s le dio acceso al perfil: <b>%s</b> para: <b>%s -%s</b>', 
'target_accessprofilerevoked' => '%s ha revocado el perfil de acceso:%s para: <b>%s</b>.', 
'structure_upgradesessiondone' => '%s ha trabajado durante %d horas para mejorar el edificio.', 
'structureupgradedlevel' => 'El edificio <b>%s - Region:%s</b> ahora es nivel <b>%d</b>!', 
'structureupgradedinventory' => 'La estructura <b>%s - Region:%s </b> ahora tiene una capacidad de almacenamiento de <b>%d</b>', 
'jobposted' => 'Se ha publicado un aviso (Categoría:%s, Título:%s) en el tablero de anuncios en <b>%s, %s</b>.', 
'startcraft' => ' <b>%s</b> ha comenzado la construccion de: <b>%s</b>.', 
'endcraftpartialitem' => ' <b>%s</b> ha finalizado parcialmente: <b>%s (%s%%)</b>.', 
'endcraftitem' => ' <b>%s</b> ha finalizado la creación: <b>%s (%d)</b>.', 
'actioncanceled' => ' <b>%s</b> tiene accion cancelada: <b>(%s)</b>.', 
'startseed' => ' <b>%d</b> comenzo a sembrar <b>(%s)</b>.', 
'endseed' => '<b>%s</b> ha terminado de sembrar <b>(%s)</b>.', 
'startharvest' => '<b>%s</b> ha comenzado la cosecha.', 
'endharvest' => '<b>%s</b> ha terminado la cosecha.', 
'startupgradeinventory' => '<b>%s</b> comenzo a actualizar el almacen del edificio.', 
'endupgradeinventory' => '<b>%s</b> completo la actualizacion del almacen del edificio.', 
'jobacceptedemployee' => 'ha aceptado el contrato de trabajo n. <b>%d</b> (Empleador:%s).', 
'jobacceptedemployer' => '<b>%s</b> ha aceptado el contrato de trabajo n. <b>%d</b>.', 
'jobclosed' => '<b>%s</b> ha cerrado el contrato n. <b>%d</b>.', 
'jobcanceled' => ' <b>%s</b> ha cancelado el contrato n. <b>%d</b>.', 
'startgather' => ' <b>%s</b> comenzo a recoger los productos agricolas.', 
'endgather' => ' <b>%s</b> ha terminado de recoger los productos agricolas.', 
'startfeed' => ' <b>%s</b> comenzo a alimentar a los animales.', 
'endfeed' => ' <b>%s</b> ha terminado de alimentar a los animales.', 
'startbutcher' => ' <b>%s</b> comenzo a matar animales.', 
'endbutcher' => ' <b>%s</b> ha terminado la tarea de matar animales.', 
'suggestionposted' => 'Se ha agregado una nueva sugerencia: Título: <b>%s</b>.', 
'suggestionedited' => 'Se ha modificado una nueva sugerencia: Título: <b>%s</b>.', 
'suggestionfundable' => 'La sugerencia: <b>%s</b> es patrocinable.', 
'suggestiondeleted' => 'La sugerencia: <b>%s</b> ha sido rechazada y cancelada por <b>%s</b>. Razones', 
'craftingcompleted' => 'Terminaste de crear <b>%d %s</b>.', 
'referralcoinsgiven' => 'Obtuvo %s monedas de plata (bonificación por recomendacion).', 
'dicesimplewin1' => '%s acaba de ganar jugando dados %d monedas de plata en la taberna en %s!', 
'dicesimplewin2' => '¡Acabas de ganar jugando a los dados monedas de plata %d en la taberna en %s!', 
'dicesimplewin3' => 'Gana jugando dados %d monedas de plata en la taberna en %s.', 
'diceelitewin1' => '%s acaba de ganar jugando dados %d doblones en la taberna en %s!', 
'diceelitewin2' => '¡Acabas de ganar jugando dados %d doblones en la taberna en %s!', 
'diceelitewin3' => 'Ganó al jugar con dados %d doblones en la taberna en %s.', 
'adminmessageposted' => 'Atencion, se ha publicado un nuevo Mensaje Administrativo. Título: <b>%s</b>.', 
'gdrtitleappointment_announcement' => '<b>%s</b> ha recibido un titulo nobiliario: <b><i>%s de %s!</ i></b>', 
'gdrtitleappointed_announcement' => '¡Se te ha otorgado Titulo Noble!', 
'gdrroleappointment_announcement' => '<b>%s</b> recibió una tarea: <b><i>%s de%s</i></b>!', 
'gdrroleappointed_announcement' => '¡Le han asignado un cargo!', 
'gdrtitlerevoked_announcement' => 'Se ha revocado uno de tus titulos nobiliarios.', 
'gdrrolerevoked_announcement' => '¡Tu cargo ha sido revocado!', 
'gdrtitlerevokedsource' => 'Ha retirado el titulo: <b>%s %s %s</b> a: <b>%s</b>.', 
'gdrtitleassignedsource' => 'Ha asignado el titulo: <b>%s %s %s</b> a: <b>%s</b>.', 
'startedcrafting' => 'Empezaste a crear <b>%s (x %d)</ b>.', 
'finishedcrafting' => 'Terminaste de crear <b>%s (%d)</b>.', 
'nowagefunds' => 'Salario por hora no otorgado <b>(%s monedas de plata)</b>; no se encontraron fondos en la estructura <b>%s en %s, propiedad de%s</b>.', 
'hourlywagegiven' => 'Se recibieron %s monedas de plata (salario por hora, estructura: <b>%s en %s, propiedad de %s </b>.', 
'wagegiven' => 'Pago <b>%s</b> monedas de plata a <b>%s</b>.', 
'wagefundsmissing' => '<b>%s</b> no se pago porque no había fondos suficientes en la estructura.', 
'suggestionsponsorised' => '%s ha patrocinado CR :%s con %d doblones.', 
'suggestionfullysponsorised' => '¡Cr: %s ha sido completamente patrocinado!', 
'studystart' => 'Comenzo una sesion de estudio/entrenamiento para el curso: %s', 
'studyfinished' => 'Ha completado una sesion de estudio o capacitacion (%d horas, curso: %s).', 
'procartbreaks' => '¡Tu carro profesional se rompe y ya no se puede usar!', 
'diplomacyproposaltarget' => '<b>%s</b> cambio la relacion diplomatica. La nueva relacion es <b>%s</b>.', 
'diplomacyproposalsource' => 'La relaci0n diplomatica con: <b>%s</b> ha cambiado. La nueva relacion es: <b>%s</b>.', 
'diplomacyproposalann' => '<b>%s</b> cambio la relacion diplomatica con: <b>%s</b>. Nueva relacion es: <b>%s</b>.', 
'valueaddedtaxchange' => '<b>%s</b> cambio el impuesto sobre bienes y servicios para la region: <b>%s</b>. %s: %d%%, %s: %d%%, %s: %d%%, %s: %d%%.', 
'info-itemsoldatmarket' => '%s comprado por %s monedas de plata %d %s desde %s en el mercado en: %s.', 
'valueaddedtaxincome' => 'Recibio %s monedas (Impuestos por bienes y servicios) de %s (%s) - Region: %s.', 
'accesspermitassignedsource' => 'Has dado acceso al Reino a %s. Este permiso vence el: %s.', 
'accesspermitassignedtarget' => '%s te ha dado permiso para acceder al reino: %s. El permiso expira el: %s.', 
'lostattributepoint' => 'En la ultima batalla tu oponente te golpeo severamente. Perdiste 1 punto en el atributo: %s.', 
'queststepcompleted' => 'Busqueda: %s: has completado el paso: %d.', 
'questcompleted' => 'Has completado la mision:%s! [%s]', 
'questcompletedbychar' => '%s busqueda completa: %s.', 
'scoreawarded' => 'Asignado %d Puntos de juego', 
'moneyupdated' => 'Actualizacion. %s monedas de plata (%s).', 
'doubloonupdated' => 'Actualizacion: %s doblones (%s).', 
'finishedquestpath_tutorial' => 'Has completado el Tutorial.', 
'resttaverncomplete' => 'Has terminado de descansar en la taberna.', 
'resttavernstartnew' => 'Te recostaste para descansar en la taberna a costa de %s monedas y de %s. Al final de su período de descanso, su nivel de energía será: %s%%.', 
'restcomplete' => 'Te despertaste en buena forma.', 
'reststart' => 'Usted se acosto para descansar a %s. (Recuperación del nivel de energía: %s%% por hora).', 
'restcancel' => 'Has interrumpido tu descanso.', 
'collectwaterok' => 'Has llenado %s botellas con agua.', 
'gainedenergyfromdrink' => 'Has calmado tu sed. Has ganado %d %% en energia.', 
'gottipsyfromdrink' => 'Has calmado tu sed, pero te sientes un poco aturdido.', 
'coinsupdateroleassignment' => 'Gasto en monedas (-%s): Asignacion de Funcion: %s %s %s a % s.', 
'coinsupdaterevokal' => 'Gasto en monedas (-%s): Se elimino %s de la función: %s %s %s.', 
'fpupdateroleassignment' => 'Puntos de fe modificados (-%s): Asignación de roles:% s% s% s% s% s a% s.', 
'fpupdaterolerevokal' => 'Puntos de fe modificados (-%s): eliminado de la funcion: %s %s %s %s %s, %s.', 
'basicpackageexpires' => 'Advertencia: Su paquete Premium Proteccion de IP compartida caducara en %s. Extiendalo antes de que caduque o la proteccion compartida IP no estara mas activa.', 
'plagueeffect' => 'De repente sientes un espasmo y fiebre. Notaras que tu piel se ha hinchado y tambien tiene algunas manchas de color azulado. (%d HP).', 
'bleedingwoundeffect' => '¡Ay! La herida duele y continua sangrando, es mejor buscar tratamiento inmediato. (%d HP)', 
'curefinishedoktarget' => 'El tratamiento ha sido completado; definitivamente te sientes mucho mejor.', 
'curefinishedoksource' => 'Has completado el tratamiento. %s ahora esta curado.', 
'curefinishedoknotcuredtarget' => 'El tratamiento se completo pero no parecio efectivo.', 
'curefinishedoknotcuredsource' => 'Ha completado el tratamiento, pero parece que %s no se ha curado. ¿Estás seguro de que usaste la pocion correcta?', 
'curefinished' => 'El caracter %s se ha curado de %s.', 
'curestartedsource' => 'Comenzaste a curar %s.', 
'curestartedtarget' => '%s comenzo a curarte.', 
'launchdueltarget' => 'Le acaban de entregar un pergamino: %s desea desafiarlo a que se enfrente a duelo en: %s, el: %s! Puede enviar su confirmación antes de: %s. <a href="%s">[Aceptar]/a> <a href="%s">[Rechazar]</a>.', 
'launchduelsource' => 'Has enviado un pergamino a %s desafiandolo en:%s el:%s.', 
'duelacceptedtarget' => '¡Has aceptado un desafío de duelo con %s!', 
'duelacceptedsource' => '%s ha aceptado tu desafio a un duelo!', 
'duelacceptedtowncrier' => '%s y %s se enfrentaran en un duelo en: %s!', 
'looterdisappeareditems' => 'Un transeunte ha robado algunos elementos de %s, pero fue demasiado rapido para que usted pueda tomar medidas de inmediato.', 
'gotdisease_tipsyness' => 'Despues de este ultimo trago, usted se siente un poco achispado, tal vez seria mejor si disminuye la velocidad.', 
'eatdrinkitem' => 'Ha consumido <b> n. %d %s</b>.', 
'gotdisease_drunkness' => '¡Has exagerado el consumo de alcohol, y como resultado, ahora estas totalmente borracho!', 
'looteddiscoveredintelligence' => 'Durante uno de tus raros momentos de lucidez recuerdas que reconociste a %s que estaba hurgando en tus cosas mientras descansabas.', 
'gotdisease_plague' => 'De repente, comienzas a sentirte mal. Te sientes debil y desenfocado, las inflamaciones azuladas cubren nuestros brazos.', 
'looteddiscoveredcharisma' => 'Durante uno de tus raros momentos de lucidez recuerdas que una persona te dijo que había visto %s hurgar en tus cosas mientras te recuperabas.', 
'lootednotdiscoverd' => 'Durante uno de tus raros momentos de lucidez recuerdas que viste a alguien rebuscar entre tus cosas mientras descansabas.', 
'finishedpartialcrafting' => 'Usted creó parcialmente un objeto (%s). El progreso es <b>%s%%</b>.', 
'looterdiscovered' => 'Sientes la sensacion de que has sido descubierto mientras saqueaste el cuerpo de %s.', 
'honorpointsupdated' => 'Actualización de puntos de honor: %d (%s).', 
'duelwinner' => 'Ganaste el duelo con: %s!', 
'duellooser' => 'Perdiste el duelo con: %s.', 
'duelfinishedtowncrier' => 'El duelo entre %s y %s ocurrido en %s ha sido ganado por: <b>%s</b>!. %s', 
'duelrefusedsource' => '%s rechazo tu propuesta de duelo.', 
'duelrefusedtarget' => 'Rehusaste una propuesta de duelo de %s.', 
'looteditemsource' => 'Tomaste del cuerpo inerte de %s n. %d %s.', 
'looteditemtarget' => 'Mientras recuperabas la salud, alguien te quito n. %d %s.', 
'duelopponentdidntshow' => '%s no se presento en el lugar del duelo.', 
'duelfinishedtowncrierbothnoshow' => 'El Duelo entre %s y %s en %s no sucedio porque los contendientes no se presentaron.', 
'duelfinishedtowncriernoshow' => 'El Duelo entre %s y %s en %s no ocurrio porque %s no se presento.', 
'error-automaticsleep' => 'Tu personaje no pudo dormir por la siguiente razon: %s', 
'losttipsydisease' => 'Ahora te sientes menos desorientado, puedes pensar con claridad y sentir que has recuperado tu fuerza, seria mejor si te mantienes alejado del alcohol por un tiempo mas.', 
'diseasecured' => 'Has sanado de la enfermedad: %s', 
'structurecoinsreceived' => 'Modifico: %s monedas (%s).', 
'questtokencounter' => 'Se recibio el token y fue util para completar el tutorial. Has enviado hasta ahora %d tokens.', 
'resignevent' => 'Has renunciado a tu funcion: %s %s %s.', 
'nativeattackdeclaration' => 'Se descubrio un grupo de nativos armados que se dirigen a la region: %s (%s).', 
'nativerevoltfailure' => 'Los nativos no han podido recuperar %s. %s', 
'nativerevoltsuccess' => 'Los nativos han recuperado %s. %s', 
'watcharea_start' => 'Has comenzado a monitorear el area circundante.', 
'structurecastledailyrevenue' => 'Bonificación para ciudadanos activos: %s.%s monedas de plata.', 
'kingdomsmerge' => '%s y %s Se han unido para formar la Region: <b>%s</b>.', 
'move_canceled' => 'Interrumpiste tu viaje y vuelves a estar en: <b>%s</b>.', 
'sail_canceled' => 'Has interrumpido tu viaje y estas de vuelta en: <b>%s</b>.', 
'celebrateweddingofficer' => 'Acaba de oficia el matrimonio entre %s y %s.', 
'celebrateweddingspouses' => 'El matrimonio con %s acaba de ser oficiado en %s - %s. ¡Felicitaciones!', 
'weddingcelebrated' => '%s oficio en %s - %s el matrimonio entre %s y %s.', 
'cancelweddingofficer' => 'Acaba de anular el matrimonio entre %s y %s.', 
'cancelweddingspouses' => 'El matrimonio con %s acaba de anularse en %s - %s.', 
'weddingcanceled' => '%s ha anulado en %s - %s el matrimonio entre %s y %s.', 
'admin_package_received' => 'El administrador le ha otorgado un paquete: <b>%s</b> por <b>%d</b>días. Razones; %s .', 
'gift' => '<b>%s</b> te ha obsequiado: <b>%s</b>.', 
'gifted' => 'Le ha otorgado un obsequio a: <b>%s</b>: <b>%s</b>.', 
'celebratemarriage_start' => 'El casamiento ha comenzado.', 
'celebratemarriage_end' => 'El casamiento ha terminado.', 
'cancelmarriage_start' => 'El proceso de anulación de su matrimonio ha comenzado.', 
'cancelmarriage_end' => 'La anulación se completo, el matrimonio ha terminado.', 
'weddingproposalaccepted' => '%s ha aceptado su propuesta de matrimonio!', 
'weddingproposalrefused' => 'Lamentablemente, %s ha rechazado su propuesta de matrimonio.', 
'weddingproposalreceived' => '¡Recibió una propuesta de matrimonio de <b>%s</b>!', 
'weddingproposalsent' => '¡Enviaste una propuesta de matrimonio a <b>%s</b>!', 
'gottitleandpoints' => 'Has alcanzado la siguiente recompensa: <b>%s</b> y has recibido <b>%d</b> puntos.', 
'studycanceactionrestoredassets' => '%s interrumpio su sesion de estudio / entrenamiento. %d %s se ha devuelto a la estructura.', 
'boughtbonus' => 'Recibio Bonus: %s, %d % s.', 
'giftedbonus' => 'Has donado el Bonus %s, n. %d %s a: %s.', 
'receivedbonus' => '%s le dono el Bonus: %s, n. %d %s.', 
'startprojectwork' => 'Comenzaste a trabajar en la obra en construccion', 
'endprojectwork' => 'Terminaste de trabajar en la obra en construcción (%d horas).', 
'endprojectworkpaid' => 'Ha realizado su trabajo en la obra en construcción (%d horas, %d monedas).', 
'newkingdom' => 'Un nuevo Reino: <b>%s</b> ha sido creado.', 
'newkingdom_message' => 'Se ha agregado una nueva publicacion: %s en el foro del Reino.', 
'churchleaderremoval' => '<b>%s</b> ya no es %s de %s.', 
'nativerevoltsuccessdestroyedresource' => 'Los nativos han recuperado %s y han destruido el recurso: <b>%s</b> - %s.', 
'lostachievement' => 'Has perdido la insignia <b>%s</b>', 
'foundbycharacterglanced' => '%s ha descubierto que estabas observando de cerca su propiedad.', 
'curecanceled' => '%s ha detenido el tratamiento para la cura.', 
'gotdisease_bleedingwound' => 'Has recuperado un poco de fuerza y ​​has vuelto a ti mismo. Lo único que te preocupa es una herida que no ha dejado de sangrar.', 
'tutorassigned' => '¡Hola y bienvenidos a la Europa medieval! Ha sido asignado como tutor para su personaje: <strong>%s</strong>. Su tutor se comunicará con usted en breve para ayudarlo a comenzar su aventura.', 
'newbornassigned' => 'Se te ha asignado un nuevo jugador <strong>%s</strong>.', 
'initiatecanceled' => '%s ha interrumpido la iniciacion.', 
'raidedreliq' => 'El <b>%s</b> acaba de saquear la Reliquia: <b>%s</b>, que se habia puesto a salvo en la estructura: <b>%s (%s)</b>.', 
'doubloonsreferral_sent' => '%s doblones enviados a %s (bonificación por recomendacion)', 
'npcatefood' => '%s acaba de comer %d %s que habias puesto a la venta en el mercado %s.', 
'npcboughtfood' => '%s acaba de comprar %d %s que tenias a la venta en el mercado %s.', 
'pcvsnpcwon' => 'Has atacado y matado %s. %s', 
'pcvsnpctie' => 'Has atacado a %s, pero ninguno de los dos ha ganado. %s.', 
'pcvsnpclost' => 'Has atacado a %s pero has sido derrotado. %s.', 
'itemtakenfromground' => 'Has recogido del suelo %d %s en: %s.', 
'proxywarning' => 'Nuestro Sistema detecto que usted se esta conectando desde un Proxy / VPN (IP:%s). Considere esto como una advertencia y ya no use un proxy. Si continúa utilizando Proxy o VPN, su cuenta sera suspendida. Si cree que hay un error, pongase en contacto con el Soporte de inmediato. Gracias', 
'revoltleaderlostcharisma' => 'Usted declaro una revuelta pero no peleo, perdio 1 punto de Carisma.', 
'privatesaleexpired' => 'Su venta privada de %s %s para %s en el mercado %s ha expirado y los artículos ahora pueden ser comprados por cualquier persona.', 
'diplomacyproposalrefused' => '%s ha rechazado tu relacion diplomatica.', 
'warcompleted' => 'Terminaste la guerra con: %s.', 
'warterminated' => 'La guerra entre %s y %s ha terminado.', 
'diplomacyproposal' => 'Recibio una propuesta diplomatica de %s; Nueva relacion: %s.', 
'warstarted' => '%s ha declarado la guerra a %s!', 
'wardeclarationtarget' => '%s te envio una declaracion de guerra!', 
'prize-item' => 'Encontraste en el contenedor un pequeño trozo de papel con el número %s escrito en el.', 
'charjoinedfaction' => '%s se unio a: %s  en la batalla id: %s.', 
'startedupgrade' => '%s comenzo a trabajar en la construccion de %s (Nivel %s) en: %s.', 
'structureupgraded' => '%s acaba de terminar de construir la estructura: %s, en %s.', 
'courseinstallation' => '%s instalo el curso: %s en %s (%s).', 
'skilladded' => 'Acabas de aprender la habilidad: %s.', 
'skilladdfailtoomanyskills' => 'La habilidad %s no puede ser adquirida, ya has aprendido demasiadas habilidades', 
'itemputinfurnace' => 'Has colocado %d %s (calidad: %d%%) en el horno.', 
'ironrecuperated' => 'Has recuperado %s piezas de hierro', 
'skillincreasedproficiency' => 'Acabas de mejorar el dominio de tu habilidad: %s por %s%%', 
'skilldecreasedproficiency' => 'Su dominio de la habilidad: %s ha disminuido en %s%%', 
'energymodified' => 'Energía modificada (%s%%), razon: %s.', 
'modifyhealth' => 'Salud modificada: (%s) Motivo: %s.', 

);

?>