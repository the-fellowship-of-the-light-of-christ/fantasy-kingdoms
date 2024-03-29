<?php defined('SYSPATH') OR die('No direct access allowed.');

$lang = Array
(
'pending_action_exists' => 'Ihr könnt diese Aktion nicht durchführen, Ihr seid bereits anderweitig beschäftigt.', 
'donate_ok' => 'Ihr habt die ausgewählten Gegenstände gespendet.', 
'take_ok' => 'Ihr habt Gegenstände gesammelt.', 
'donate_executeerror' => 'Ein Fehler ist während des Spendenprozesses aufgetreten. Bitte kontaktiere den Support.', 
'take_executeerror' => 'Ein Fehler ist während dieser Transaktion aufgetreten. Bitte kontaktiere den Support.', 
'take_maxweightreached' => 'Ihr seid überladen und könnt den Gegenstand nicht aufnehmen.', 
'global_notenoughmoney' => 'Ihr habt nicht genügend Geld.', 
'house_buyok' => 'Ihr habt ein/e %s fuer %s Silbermünzen gekauft.', 
'sellhouse_ok' => 'Ihr habt Euer/Eure %s für %s Silbermünzen verkauft. Ihr habt %s Münzen Steuern gezahlt.', 
'sellhouse_housenotfound' => 'Dieses Haus existiert nicht oder es gehört nicht Euch.', 
'sellhouse_itemsinhouse' => 'Ihr müsst Euer Haus ausräumen, bevor Ihr es verkauft.', 
'drop_storablecapacityfinished' => 'Die Lagerkapazität des Gebäudes ist überschritten.', 
'drop_ok' => 'Ihr habt Eure Gegenstände eingelagert.', 
'market_itemsnotowned' => 'Es gibt nicht so viele Gegenstände dieses Typs.', 
'item_notexist' => 'Der Gegenstand existiert nicht.', 
'item_notininventory' => 'Diese Menge ist nicht in Eurem Inventar.', 
'item_soldsubject' => 'Jemand hat von Euch Ware am Markt gekauft.', 
'item_soldbody' => 'Ihr habt %s %s für %s Silbermünzen verkauft.', 
'itemsquantitynotowned' => 'Ihr habt nicht so viele Gegenstände dieses Typs.', 
'marketsellitem_pricelessthanzero' => 'Der Verkaufspreis muss positiv sein.', 
'marketbuyitem_cannotbuyownitems' => 'Ihr könnt keine Ware kaufen, die Ihr selbst zum Verkauf anbietet.', 
'marketcancellsell_ok' => 'Ihr zieht Eure Marktangebote zurück.', 
'item_notwearable' => 'Ihr könnt diesen Gegenstand nicht anlegen.', 
'item_notundressable' => 'Ihr könnt diesen Gegenstand nicht ablegen.', 
'getwood_no_energy' => 'Ihr habt nicht genug Energie, um Holz zu schlagen.', 
'getwood_no_handaxe' => 'Ihr müsst ein Beil anlegen, um Holz zu schlagen.', 
'knifeneeded' => 'Ihr benötigt ein Messer, um diese Aktion durchzuführen.', 
'pickaxeneeded' => 'Ihr müsst eine Spitzhacke anlegen, um diese Aktion auszuführen.', 
'breedingbuy_ok' => 'Ihr habt eine Farm gekauft.', 
'terrainbuy_ok' => 'Ihr habt ein Feld für %s Silbermünzen gekauft.', 
'terrainsell_ok' => 'Ihr habt Euer Feld für %s Silbermünzen verkauft. Ihr habt %s Münzen Steuern gezahlt.', 
'royalp_appointvassal_ok' => 'Ihr habt den Posten des Vasallen von %s an %s übertragen.', 
'royalp_candidateisincharge' => 'Der Kandidat bekleidet bereits ein Amt.', 
'royalp_candidateisfromdifferentkingdom' => 'Der Kandidat gehört einem anderen Königreich an.', 
'resign_from_role_messagesubject' => '%s ist vom Amt zurückgetreten.', 
'resign_from_role_messagebody' => '%s ist vom Amt zurückgetreten und hat folgenden Grund angegeben: %s', 
'resign_from_role_ok' => 'Ihr seid von Eurem Amt zurückgetreten.', 
'revoke_role' => 'Posten entziehen', 
'revoke_role_ok' => 'Ihr habt den Posten %s %s entzogen.', 
'char_hasntrole' => 'Die ausgewählte Person bekleidet keinen Posten.', 
'castle_deletelaw_ok' => 'Ihr habt das Gesetz ausser Kraft gesetzt.', 
'castle_editlaw_ok' => 'Ihr habt das Gesetz geändert.', 
'askaudience_messagesubject' => '%s bittet um eine Audienz.', 
'royalp_askaudience_ok' => 'Ihr habt gerade um eine Audienz beim Regenten gebeten.', 
'appoint_priest' => 'einen Priester ernennen', 
'appoint_bishop' => 'einen Bischof ernennen', 
'appoint_cardinal' => 'einen Kardinal ernennen', 
'askaudience_ok' => 'Ihr habt ein Gesuch um eine Audienz versandt.', 
'marketbuy_maxweightreached' => 'Ihr tragt zu viel Gewicht, Ihr konntet den Gegenstand nicht kaufen.', 
'wear_ok' => 'Ihr habt angelegt: %s', 
'undress_ok' => 'Ihr habt abgelegt: %s', 
'shop_craftok' => 'Ihr habt mit der Herstellung eines Produkts begonnen.', 
'craft_cantcreateobject' => 'Ihr könnt diese Art von Ware nicht herstellen.', 
'craft_chardoesnthaveneededitems' => 'Ihr habt nicht alle benötigten Materialien für die Herstellung.', 
'negative_quantity' => 'Bitte gebt eine positive Zahl ein.', 
'free_motivationempty' => 'Ihr müsst einen Grund angeben, um den Gefangenen freizulassen.', 
'freeprisoner_ok' => 'Ihr entlasst %s.', 
'publishsentence_parametersempty' => 'Angabe von Empfänger und Urteilstext sind Pflicht.', 
'publishsentence_ok' => 'Ihr fällt das Urteil.', 
'publishsentence_characterhasarole' => 'Ihr könnt %s nicht verurteilen, die diplomatischen Beamten werden sich des Falls annehmen.', 
'publishsentence_messagesubject' => 'Der Richter fällt ein Urteil.', 
'publishsentence_sentencetoolong' => 'Urteilstext kann max. 250 Zeichen haben.', 
'deletesentence_notnew' => 'Es ist nicht möglich, ein bereits gefälltes Urteil aufzuheben.', 
'deletesentence_messagesubject_target' => 'Der Richter hat ein Urteil zurückgezogen.', 
'deletesentence_ok' => 'Ihr habt das Urteil zurückgezogen.', 
'castle_candidateisfromdifferentnode' => 'Ihr könnt nur Einwohner Eurer Region ernennen.', 
'castle_appointsheriff_ok' => 'Ihr habt %s zum Hauptmann von %s ernannt.', 
'castle_appointmagistrate_ok' => 'Ihr habt %s zum Richter von %s ernannt.', 
'charhasnomorerole' => 'Ihr könnt %s nicht des Amtes entheben.', 
'change_city_samecity' => 'Ihr könnt nicht nach %s umziehen, Ihr lebt bereits dort.', 
'change_city_ok' => 'Ihr seid umgezogen und seid nun Einwohner von %s.', 
'change_city_timenotexpired' => 'Ihr könnt nicht umziehen, weil zu wenig Zeit seit Eurem letzten Umzug vergangen ist.', 
'change_city_charhasarole' => 'Bitte tretet vor dem Umzug von Eurem Amt zurück.', 
'starving_subject' => '%s, ihr seid am Verhungern.', 
'starving_body' => '%s, wenn Du nichts isst, wirst Du morgen oder übermorgen sterben. Der Charakter %s und sein Besitz werden gelöscht und wenn Du wieder spielen möchtest, muss ein neuer Charakter erstellt werden.', 
'charinroledied_subject' => '%s ist des Hungertodes gestorben; der Posten ist vakant.', 
'item_notcure' => 'Ihr könnt Euch damit nicht selbst heilen.', 
'cure_ok' => 'Ihr habt Euch selbst geheilt und fühlt Euch sehr gut!', 
'shop_configure_ok' => 'Euer Werbetext wurde gespeichert.', 
'castle_addannouncement_ok' => 'Die Ankündigung wurde veröffentlicht.', 
'castle_editannouncement_ok' => 'Die Ankündigung wurde geändert.', 
'cannotcancelwardeclaration' => 'Ihr könnt die Kriegserklärung nicht zurückziehen, dazu ist es nun zu spät.', 
'deletewaraction_ok' => 'Die Kriegserklärung wurde zurückgezogen.', 
'senditem' => 'einen Gegenstand senden', 
'senditem_helper' => 'Hier könnt Ihr für ein paar Münzen einen Gegenstand an eine Person senden. Sendezeit und Preis hängen von Ort des Senders und Empfängers und dem Gewicht des zu sendenden Gegenstands ab.', 
'senditem_sendnormalitem' => 'Ihr sendet', 
'senditem_sendcoins' => 'Ihr sendet', 
'senditem_ok' => 'Ihr habt einen Gegenstand verschickt.', 
'senditem_shortmessage' => 'Gegenstand versenden', 
'senditem_longmessage' => 'Ihr sendet einen Gegenstand.', 
'equipped_item' => 'Ihr könnt keinen Gegenstand senden, den Ihr tragt.', 
'norole' => 'Ihr habt noch keinen Posten inne.', 
'cannotattackchurch' => 'Ihr könnt die Kirche nicht angreifen.', 
'bf_add_attack_ok' => 'Ihr habt Euch der Seite der Angreifer angeschlossen.', 
'bf_add_defend_ok' => 'Ihr habt Euch der Seite der Verteidiger angeschlossen.', 
'bf_retire_ok' => 'Ihr habt das Schlachtfeld verlassen.', 
'giveitems_ok' => 'gesandte Gegenstände', 
'toplist_doesnt_exist' => 'Diese Rankingliste ist (noch) nicht konfiguriert.', 
'buy_avatar_ok' => 'Du hast einen Avatar für Deinen Charakter gekauft. Die Administration hat eine Nachricht per Email erhalten und wird dein Profil bald aktualisieren.', 
'senditem_costmessage' => 'Ihr sendet <b>%d %s</b> an <b>%s</b>, gesamt <b>%s kg</b> zu einem Preis von <b>%d Silbermünze(n)</b>. Gegenstand wird ankommen in <b>%s</b>.', 
'sending_alreadysending' => 'Ihr sendet gerade <b>%d %s</b> an <b>%s</b>. Gegenstand wird in <b>%s</b> ankommen.', 
'renthorse_ok' => 'Ihr habt ein starkes Pferd gemietet.', 
'hirehelper_ok' => 'Ihr habt einen Arbeiter angeheuert.', 
'item_wrongsex' => 'Nach reiflicher Überlegung habt Ihr Euch entschieden, diese Art Kleidung nicht zu tragen.', 
'feedanimals_ok' => 'Ihr füttert Eure Tiere.', 
'sail_no_porto' => 'Die Region hat keinen Hafen.', 
'sail_no_route' => 'Diese Städte sind nicht per Seeweg verbunden.', 
'item_wrongrole' => 'Ihr habt nicht die Voraussetzungen, diese Art Kleidung zu tragen.', 
'item_not_enough_str' => 'Ihr seid nicht stark genug, diesen Gegenstand zu tragen oder anzulegen.', 
'incompatible_worn_items_1' => 'Ihr konntet das Kleidungsstück nicht anlegen. Ihr solltet erst andere Kleidungsstücke ablegen.', 
'incompatible_worn_items_2' => 'Ihr konntet das Kleidungsstück nicht anlegen. Ihr solltet erst andere Kleidungsstücke ablegen.', 
'change_city_destregionisfull' => '%s ist überbevölkert und kann zur Zeit keine neuen Einwohner aufnehmen.', 
'convertcurrency_ok' => 'Ihr habt die Münzen umgetauscht.', 
'volunteerworkhourscheck' => 'Ihr könnt 1 bis 9 Stunden unentgeltlich arbeiten.', 
'paidworkhourscheck' => 'Ihr könnt drei, sechs oder neun Stunden arbeiten.', 
'notenoughenergyglut' => 'Ihr seid zu müde oder hungrig, um diese Aktion durchzuführen.', 
'worknotenoughslots' => 'Eine Wache tritt an Euch heran und erklärt, dass keine bezahlte Arbeit mehr zu vergeben ist.', 
'workonproject_ok' => 'Ihr beginnt mit Eurer Arbeit an dem Projekt.', 
'sendmoneynotoldenough' => 'Euch ist es noch nicht gestattet, Geld per Kurier zu versenden.', 
'change_city' => 'hierher umsiedeln', 
'transfer' => 'Transfer', 
'changeattributes_ok' => 'Ihr habt Eure Eigenschaftswerte umverteilt.', 
'sellproperty_propertynotempty' => 'Der Lagerraum des Grundstücks ist nicht leer, kontaktiert den Besitzer, damit er ihn leert.', 
'sellproperty_pendingactionexists' => 'Der Besitzer arbeitet zur Zeit. Kontaktiert ihn und bittet ihn, die Arbeit zu unterbrechen.', 
'sendnotsendableitem' => 'Diese Art von Gegenstand könnt Ihr nicht versenden.', 
'restrain' => 'festsetzen', 
'craft_neededitemsmissing' => 'Es fehlen einige Materialien, die zur Herstellung benötigt werden. Bitte überprüft den Lagerbestand der Werkstatt.', 
'structure_fullinventory' => 'Der Lagerraum der Werkstatt ist voll. Versucht, einige Gegenstände loszuwerden, bevor Ihr weitere herstellt.', 
'change_city_destnodeisindependent' => 'Ihr könnt nicht in diese Region umziehen, da sie ohne Regierung ist.', 
'change_city_helper' => 'Wenn Ihr in diese Region (%s) umziehen möchtet, kostet Euch das <b>%s</b> Silbermünzen.', 
'sendnormalitemslimitation' => 'Ihr könnt nur einen Gegenstand versenden.', 
'senditem_totalitemsmessage' => 'Ihr besitzt gesamt <b>%d</b> %s.', 
'acquireclearancepermit_ok' => 'Ihr habt einen Passierschein erworben.', 
'onlyoneoccurrenceforthisitem' => 'Ihr könnt nur einen Gegenstand dieser Art tragen.', 
'acquiresupercart_ok' => 'Ihr habt einen grossen Karren erworben.', 
'itemtrashed_ok' => 'Ihr seid einige Gegenstände losgeworden.', 
'shovel_no_shovel' => 'Ihr braucht eine Schaufel, um Sand zu sammeln.', 
'fish_no_fishing_net' => 'Besorgt Euch ein Fischernetz.', 
'regionisindependent' => 'Als Ihr Euch dem Grundstück nähert, versperrt Euch eine Gruppe Eingeborener den Weg.', 
'canbuyonlyone' => 'Ihr könnt nur einen Gegenstand dieser Art erwerben.', 
'buyship_ok' => 'Ihr habt ein Handelsschiff gekauft.', 
'customerscantbemerchant' => 'Versender und Empfänger müssen unterschiedliche Personen sein. Ihr könnt nicht gleichzeitig Versender und Empfänger sein.', 
'exhibit_scroll' => 'Schriftstück vorlegen', 
'exhibit_scroll_helper' => 'Es kann vorkommen, dass ein Kapitän, Soldat, Richter oder eine andere Person ein Schriftstück vorgelegt bekommen möchten. Ihr könnt ein Schriftstück zeigen, indem ihr die Aktion vorlegen vom Tooltip des Dokuments auswählt. Ihr erhaltet ein Ereignis mit den Koordinaten, um das Schriftstück zu lesen. Ihr könnt ein Dokument nur an einen Charakter senden, der in derselben Region ist.', 
'only_generic_scroll' => 'Ihr könnt nur Schriftstücke und Dokumente vorlegen!', 
'travel_to_bf' => 'Ihr reist direkt zum Schlachtfeld.', 
'select_color_tint' => 'Farbe wählen', 
'tint_helper' => 'Ihr könnt eine Farbe wählen, in der Ihr Kleidung färben möchtet. Zum Färben benötigt Ihr eine Färbeschale.', 
'missing_dyebowl' => 'Um Stoff zu färben benötigt Ihr eine Färbeschale.', 
'dye_ok' => 'Ihr habt den Gegenstand erfolgreich gefärbt.', 
'move_charisrestrained' => 'Als Ihr die Region verlassen möchtet, versperrt Euch eine Wache den Weg.', 
'castle_candidateisfromdifferentregion' => 'Der Kandidat muss Einwohner dieser Region sein.', 
'acquirequeue_ok' => 'Ihr habt einige Ausdauertränke erworben.', 
'craft_toomanyslot' => 'Es werden nicht so viele Arbeitsschichten benötigt, um den Gegenstand fertigzustellen.', 
'marketsellitem_itemislocked' => 'Dies ist ein persönlicher Gegenstand, Ihr könnt ihn nicht wegwerfen.', 
'declarerevolt_notpossible' => 'Euch erreicht die Nachricht von aufkommenden Revolten; einen Brief zu schreiben scheint zur Zeit unnütz.', 
'house_declarerevolt_running_helper' => 'Die Revolte hat begonnen, der Regent wurde informiert. Eure Armee sammelt sich vor den Toren des Königlichen Palasts, die Schlacht wird in <b>%s</b> beginnen.', 
'revolt_kingcantsupportrevolt' => 'Ihr habt das Gefühl, dass es keine gute Idee ist, die Revolte zu unterstützen.', 
'revolt_choosefaction_ok' => 'Ihr habt Euch entschieden, wen ihr unterstützen werdet.', 
'revolt_charfactionnotchosen' => 'Ihr habt Euch noch nicht entschieden, wen ihr unterstützen möchtet.', 
'revolt_leaverevolt_ok' => 'Nach reiflicher Überlegung entscheidet Ihr Euch, keine der Seiten zu unterstüzen. Vielleicht wäre es besser, das Weite zu suchen.', 
'revolt_leadercantsupportking' => 'Nach einigen Überlegungen glaubt Ihr, dass es vielleicht nicht so gut wäre, den Regenten zu unterstützen.', 
'declarerevolt_alreadyfighting' => 'Ihr seid bereits in Aktion und in einem Kampfgebiet.', 
'revolt_charmustbekingdomresident' => 'Als Ihr Euch nähert, bemerkt ihr, dass die Menschen misstrauisch sind und keine Einmischung von Fremden wünschen.', 
'defender_underrevolt' => 'Ihr wurdet informiert, dass sich eine Revolte in %s abzeichnet. Ihr haltet es für besser abzuwarten, bevor ihr feindliche Aktionen erklärt.', 
'chooserevoltfaction_notoldenough' => 'Ihr lebt noch nicht lang genug in diesem Königreich, um an der Revolte teilzunehmen.', 
'bonus-hasalreadybonus' => 'Dieser Bonus ist bereits aktiv oder Du hast andere aktive Boni, die nicht mit diesem kompatibel sind.', 
'bonus-acquirebonusok' => 'Du hast den Bonus gekauft.', 
'travelmessage' => 'Ihr reist von %s nach %s.', 
'hammerneeded' => 'Ihr müsst einen Hammer angelegt haben, um diese Aktion auszuführen.', 
'hoeneeded' => 'Ihr müsst eine Hacke angelegt haben, um diese Aktion auszuführen.', 
'bucketneeded' => 'Ihr müsst einen Eimer angelegt haben, um diese Aktion auszuführen.', 
'bellowneeded' => 'Ihr müsst einen Gummibalg angelegt haben, um diese Aktion auszuführen.', 
'reason_cleanprisons' => 'Kerker schrubben', 
'reason_takefromstructure' => 'Verlassen der Struktur', 
'reason_boardvisibility' => 'Anzeige der Ankündigung', 
'reason_questreward' => 'Belohnung für den Questabschluss', 
'reason_travelerpackage' => 'Kauf Reisepaket', 
'reason_studycost' => 'Studium/Training', 
'reason_marketbuy' => 'Warenkauf Markt', 
'reason_supercartbonus' => 'Kauf Profikarren', 
'reason_basicpackage' => 'Kauf Adelspaket', 
'reason_senditems' => 'Itemversand', 
'reason_notspecified' => 'kein Grund angegeben', 
'reason_sailcost' => 'Schiffsreise', 
'reason_toplistvote' => 'Topliste Voting', 
'reason_structurebuy' => 'Gebäudekauf', 
'reason_referralbonus' => 'Empfehlungsbonus', 
'reason_structuresold' => 'Verkauf von Eigentum', 
'reason_marketsale' => 'Warenverkauf Markt', 
'reason_becomeking' => 'Kosten der Krönung', 
'reason_adminsend' => 'von der Administration gesandt', 
'loot' => 'durchsuchen', 
'reason_game_diceelite' => 'Würfelspiel (Nobelraum)', 
'reason_workerpackage' => 'Kauf Arbeiterpaket', 
'reason_buildsalary' => 'Arbeitslohn für Bauhilfe', 
'reason_game_dicesimple' => 'Würfelspiel (einfacher Raum)', 
'reason_purchase' => 'Kauf', 
'reason_duelpresence' => 'Anwesenheit zum Duell', 
'reason_duelabsence' => 'Abwesenheit vom Duell', 
'reason_lootdiscovered' => 'beim Plündern erwischt', 
'error-notenough-questpoints' => 'Ihr könnt dies nicht machen, wenn Ihr nicht mindestens %d Questpunkte habt.', 
'achievementmissing' => 'Euch ist es nicht gelungen, folgenden Erfolg für Euch zu verzeichnen: %s', 
'reason_prayer' => 'Gebet', 
'paperpieceneeded' => 'Ihr benötigt ein Blatt Papier.', 
'paperpieceandwaxsealneeded' => 'Ihr benötigt ein Blatt Papier und ein Wachssiegel.', 
'reason_questtoken' => '10 benötigte Questmarken verschickt', 
'reason_resttavern' => 'in Taverne übernachten', 
'reason_donatecoins' => 'Spende', 
'reason_goodsandservicestax' => 'Waren- und Leistungssteuer', 
'reason_wage' => 'Lohn', 
'reason_atelierlicense' => 'eine Atelierlizenz erwerben', 
'error-notenabledwhenrestrained' => 'Ihr steht unter Arrest, Ihr könnt diese Aktion nicht durchführen.', 
'reason_tavernincome' => 'Taverneneinnahmen', 
'reason_dailyrevenue' => 'täglicher Bonus aktive Charaktere', 
'reason_revokerole' => 'Aberkennung eines Postens', 
'reason_roleassignment' => 'Verleihung eines Postens', 
'userisnotactive' => 'Dein Konto wurde noch nicht validiert. Dazu befolge bitte die Anweisungen in der Email, die Du nach Deiner Registrierung erhalten hast.', 
'reason_suggestionsponsorship' => 'Vorschlag zum Sponsern', 
'reason_wardrobeapproval' => 'Bewilligung für individualisierte Garderobe', 
'battlefielddismountedcantgoback' => 'Das Schlachtfeld wurde aufgelöst, Ihr könnt nicht mehr zurückkehren.', 
'info-answered' => 'Ihr habt auf den Heiratsantrag geantwortet.', 
'error-proposalnotfound' => 'Antrag nicht gefunden', 
'error-weddingproposalnotaccepted' => 'Der Heiratsantrag wurde nicht versandt oder nicht akzeptiert.', 
'error-proposalalreadyanswered' => 'Ihr habt auf den Antrag bereits geantwortet.', 
'error-charnotavailableforregfunctions' => '%s hat Euren Antrag abgelehnt und steht für die Zeremonie nicht zur Verfügung.', 
'reason_coursegain' => 'Kursabschluss', 
'reason_wardrobeapprovalfree' => 'Bestätigung des Garderobenbonus kostenlos', 
'error-tooyoung' => 'Ihr seid zu jung, um diese Aktion auszuführen.', 
'reason_diamondring' => 'Bonuskauf: Diamantring', 
'reason_professionaldesk' => 'Bonuskauf: Profipult', 
'reason_atelier-license-weapon' => 'Kauf Garderobenlizenz: Waffe', 
'reason_atelier-license-avatar' => 'Kauf Garderobenlizenz: Avatar', 
'reason_elixirofhealth' => 'Bonuskauf: Gesundheitselixir', 
'reason_elixirofdexterity' => 'Bonuskauf: Elixir des Geschicks', 
'reason_elixirofstrength' => 'Bonuskauf: Stärkeelixir', 
'reason_elixirofconstitution' => 'Bonuskauf: Elixir der Konstitution', 
'reason_elixirofintelligence' => 'Bonuskauf: Elixir der Intelligenz', 
'reason_elixirofstamina' => 'Bonuskauf: Ausdauerelixir', 
'reason_sparringpartner' => 'mit Trainingspartner trainieren', 
'reason_applyelixirofhealth' => 'Verbrauchtes Elixier der Gesundheit', 
'reason_applyelixirofcuredisease' => 'Verbrauchten Elixier der Heilung von Krankheit', 
'reason_bleedingwounds' => 'Blutende Wunden', 
'reason_plague' => 'Schwarze Pest', 
'reason_starving' => 'Hunger', 
'glance' => 'betrachten', 
'equipment_failed' => 'Ihr seid nicht angemessen gekleidet, um dies durchzuführen.', 
'charissick' => 'Ihr könnt nicht meditieren, da Ihr Euch unwohl fühlt.', 
'reason_dailyreward' => 'Preis/Tag', 
'curedisease' => 'Heilung', 
'curehealth' => 'Gesundheitspflege', 
'initiation' => 'Taufe', 
'error_structure_tool_missing' => 'Im Gebäude liegen nicht die für diese Aktion benötigten Werkzeuge vor.', 
'confirm_operation_consume' => 'Bestätige Verzehr von %s %s?', 
'equipment_failed_craft' => 'Um diese Aktion durchzuführen, müssen Körper und Füsse bekleidet sein. Auch müsst Ihr das folgende Werkzeug in der rechten Hand halten: <strong>%s</strong>', 
'reason_ipcheckshield' => 'Bonus kaufen: Schutz bei geteilter IP', 
'reason_rosary' => 'Bonus kaufen: Rosenkranz', 
'reason_supercart' => 'Bonus kaufen: Profi-Karren', 
'reason_elixirofcuredisease' => 'Kaufbonus: Heiltrank', 
'attack' => 'angreifen', 
'error-moduleisdisabled' => 'Diese Funktion ist derzeit nicht aktiviert.', 
'equipmentfailed_missing' => 'Ihr müsst folgenden Gegenstand anlegen, um diese Aktion durchzuführen: %s', 
'equipmentfailed_wrong' => 'Ihr könnt diese Aktion nicht durchführen, da Ihr die falsche Ausrüstung am Körper tragt: <br/> %s.', 
'info-unequippedall' => 'Ihr habt all Eure Ausrüstung abgelegt.', 
'senditems_updatesponsorstats' => 'Update Dublonenkauf', 
'sendinfo' => 'Diesen Gegenstand zu versenden kostet Euch <span class=\'value\' id=\'cost\'>?</span> Silbermünzen. Ankunft: <span class=\'value\' id=\'time\'>?</span>.', 
'marketbuyitem_cannotbuyreserveditem' => 'Ihr könnt diese Ware nicht kaufen, sie ist für eine andere Person reserviert.', 
'error-characterisofenemykingdom' => 'Der% s-Charakter ist von einem feindlichen Königreich kämpfen ihn auf dem Schlachtfeld.', 
'reason_wardeclaration' => 'Kriegserklärung', 
'reason_droptostructure' => 'In das Gebäude einlagern', 
'reason_warexpenses' => 'Kriegsausgaben', 
'reason_buildcanceled' => 'Bautätigkeit abbrechen', 
'info-skillremoved' => 'Du hast die Fertigkeit entfernt: %s.', 
'info-scrollwritten' => 'Du hast eine Schriftrolle verfasst.', 
'error-toomanyskillslearned' => 'Sie können höchstens 3 Fähigkeiten erlernen.', 
'reason_taketostructure' => 'Nimm aus dem Gebäude', 
'info-scrollshown' => 'Sie haben die Schriftrolle vor gezeigt.', 
'senddoubloons' => 'Sende Dublonen', 
'reason_searchdump' => 'Durchsuchen Sie die Müllkippe', 
'reason_recovering' => 'Wiederherstellung der Gesundheit', 
'reason_drink' => 'Alkoholkonsum', 
'reason_arrest' => 'Verhaftung', 
'reason_butchering' => 'Tiere schlachten', 
'reason_cancelmarriage' => 'Ehe für nichtig zu erklären', 
'reason_celebratemarriage' => 'Hochzeitsfeier', 
'reason_cleanprison' => 'Gefängnisreinigung', 
'reason_collectwater' => 'Wassergewinnung', 
'reason_craft' => 'Gegensstände erstellen', 
'reason_curedisease' => 'Krankheit kurieren', 
'reason_curehealth' => 'Gesundheit wiederherstellen', 
'reason_damagestructure' => 'Gebäude schädigen.', 
'reason_excommunicate' => 'Exkommunikation', 
'reason_feedanimali' => 'Tiere füttern', 
'reason_fishing' => 'Fischen', 
'reason_gather' => 'Tierische Nebenprodukt sammeln', 
'reason_getwood' => 'Holzsammlung', 
'reason_glance' => 'Inspektion', 
'reason_harvest' => 'Ernte', 
'reason_imprison' => 'Haft', 
'reason_initiate' => 'Taufe', 
'reason_inspect' => 'Prüfung', 
'reason_move' => 'Reise', 
'reason_pray' => 'Gebet', 
'reason_recuperateiron' => 'Eisenrückgewinnung', 
'reason_repairstructure' => 'Gebäudereparatur', 
'reason_resting' => 'Ruhen', 
'reason_searchplant' => 'Kräuter suchen', 
'reason_seed' => 'Sähen', 
'reason_extractresources' => 'Rohstoffgewinnung', 
'reason_steal' => 'Diebstahl', 
'reason_study' => 'Studieren / Training', 
'reason_unlockcontainer' => 'Behälter öffnen', 
'reason_resetenergy' => 'Energie Wiederherstellung', 
'reason_workonstructure' => 'Arbeiten am Gebäude', 
'reason_respawn' => 'Wiederherstellung', 
'reason_sendingmessage' => 'Schicke Nachricht', 

);

?>