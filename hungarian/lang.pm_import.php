<?php

$L = array(

//----------------------------
// pM Imoprt
//----------------------------

"standby" =>
"Importálás... kérem várjon...",

"import_complete" =>
"Importálás befejezve",

"forum_name" =>
"Fórum neve:",

"posts_remaining" =>
"Hátralévő hozzászólások:",

"import_forum_posts" =>
"Hozzászólások importálása",

"forum_destination_instructions" =>
"Kérem válassza ki a megfelelő ExpressionEngine fórumot a hozzászólások betöltéséhez",

"forum_destination_note" =>
"Megjegyzés: Ha nem létezik a kívánt fórum, akkor a fórum modulba kell mennie és ott előbb létrehozni.",

"select_forum_destination" =>
"Válassza ki a fórum rendeltetési helyét",

"posts_per_cycle" =>
"Cikluson belüli fórum bejegyzések száma",

"forum_cycle_instructions" =>
"A fórum betöltő algoritmus elég processzor igényes. Az idő túllépési problémák elkerülése végett a pMachine fórum bejegyzéseit limitált csomagokban töltjük be. Az 1000 egy biztonságos mennyiség a szerverek többségének. Ha nagy teljesítményű vagy dedikált szervere van nagyobb számot is megadhat.",

"forum_instructions" =>
"Megjegyzés: Ez a lépes csak akkor hajtható végre, ha a pMachine Pro fórumot használja. Amennyiben nem, hagyja ki ezt a lépést.",

"forum_instructions2" =>
"Mivel a pMachine Pro nem tesz különbséget hírek és fórumok között, csak azokat a pM Pro híreket töltse be, amelyeket szeretné ha a fórum részeivé válnának. Hagyjon ki minden olyan hírt, amelyek nem lesznek a fórum részei ugyanis ezek a harmadik lépésben kerülnek betöltésre.",

"total_forum_posts" =>
"A bejegyzések teljes száma ebben a fórumban:",

"posts_imported" =>
"A fórum bejegyzések sikeresn importálva lettek",

"click_to_import_posts" =>
"Fórum bejegyzések importálása %x-tól %y-ig",

"step_six" =>
"Hatodik lépés",

"member_config_complete" =>
"A felhasználó configurációja befejeződött",

"pmachine_import_utitity" =>
"pMachine importáló eszköz",

"pmachine_import_welcome" =>
"Ezzel az eszközzel importálhatja a pMachine-ben tárolt adatait az ExpressionEngine-be",

"pmachine_import_disclaimer" =>
"Ha nem használja a pMachine programot, nincs szüksége erre az eszközre.",

"pmachine_import_information" =>
"Importálási tudnivalók",

"pmachine_import_removal" =>
"Megjegyzés: ne használja ezt az eszközt, ha nem használja a pMachine programot.",

"configuration_blurb" =>
"Az eszköz használatához először meg kell adnia pMachine adatbázis-információit.",

"configuration_blurb_cont" =>
"A szükséges információkat a pMachine config.php fájlban találja.",

"database_info" =>
"Adatbázis-információk",

"sql_server" =>
"A MySQL szerver címe",

"sql_username" =>
"MySQL felhasználónév",

"sql_password" =>
"MySQL jelszó",

"sql_database" =>
"MySQL adatbázis",

"sql_prefix" =>
"Tábla előtag",

"leave_prefix_blank" =>
"Ha nem használ egyéni előtagot, hagyja üresen",

"configure" =>
"Konfiguráció",

"empty_field_warning" =>
"Nem töltött ki minden mezőt",

"no_database_connection" =>
"A megadott beállításokkal nem sikerült csatlakozni az adatbázishoz",

"table_name" =>
"Tábla neve",

"table_rows" =>
"Tábla sorok",

"table_action" =>
"Tennivaló",

"table_status" =>
"Státusz",

"completed" =>
"Kész",

"no_rows_exist" =>
"Nem szükséges importálni",

"pending" =>
"Importálásra kész",

"pending_stats" =>
"Feldolgozásra kész",

"import_now" =>
"Adatok importálása",

"recalculate" =>
"Adatok feldolgozása",

"step_one" =>
"Első lépés",

"step_two" =>
"Második lépés",

"step_three" =>
"Harmadik lépés",

"step_four" =>
"Negyedik lépés",

"step_five" =>
"Ötödik lépés",

"import_options" =>
"Importálási opciók",

"import_members" =>
"Felhasználók importálása",

"import_weblog_entries" =>
"Bejegyzések importálása",

"recalculate_statistics" =>
"Statisztikák újraszámítása",

"click_to_reset_statistics" =>
"Kattintson ide a hír statisztikáinak frissítéséhez",

"reset_statistics_info" =>
"Most átirányítjuk az újraszámítási eszközbe. Ha végzett, térjen vissza erre az oldalra az ötödik lépés végrehajtásához",

"members" =>
"Felhasználók",

"member_stats" =>
"Felhasználói statisztikák",

"weblog_stats" =>
"Hír statisztikák",

"configure" =>
"Beállítások",

"total_members" =>
"összes felhasználó a pMachine adatbázisban:",

"select_your_account" =>
"Válassza ki a saját pMachine felhasználónevét",

"ignore_instructions" =>
"Mivel már van ExpressionEngine felhasználóneve, nincs értelme még egy hozzáférést létrehozni a pMachine információi alapján. (így két azonos hozzáférése lenne.)  Ha kiválasztja meglévő pMachine felhasználónevét, bejegyzéseit a jelenlegi ExpressionEngine hozzáféréséhez társítjuk",

"i_have_no_account" =>
"Nincs pMachine felhasználónevem",

"members_per_cycle" =>
"Felhasználók száma ciklusonként",

"cycle_instructions" =>
"Az időtúllépési (timeout) problémák elkerülése érdekében kisebb csoportokban importáljuk a pMachine adatokat.  Kérjük adja meg, egy-egy lépésben hány rekordot akar importálni.  Az 1000 a legtöbb szervernél nyugodtan megadható. Ha nagy teljesítményű vagy saját szervert használ, akár több ezer rekordot is importálhat egyszerre.",

"blog_cycle_instructions" =>
"A hír importáló program sok erőforrást használ, különösen, ha a bejegyzéseihez sok hozzászólás és visszajelzés tartozik. Az időtúllépési (timeout) problémák elkerülése érdekében kisebb csoportokban importáljuk a pMachine bejegyzéseit.  A 100 a legtöbb szervernél nyugodtan megadható.  Ha nagy teljesítményű vagy saját szervert használ, illetve ha bejegyzéseihez kevés hozzászólás tartozik, nagyobb számot is megadhat.",

"save_settings" =>
"Beállítások mentése",

"member_import_complete" =>
"A felhasználók importálása befejeződött.",

"return_to_overview" =>
"Vissza az importálás főoldalára",

"start_member_import" =>
"Kezdhetjük",

"members_remaining" =>
"Importálásra váró felhasználók:",

"click_to_import_members" =>
"%x. és %y. közötti felhasználók importálása",

"no_table_rows" =>
"Nincs adat",

"default_member_group" =>
"Felhasználói csoportok hozzárendelése",

"member_group_instructions" =>
"az importált felhasználókat hozzá kell rendelnie egy csoporthoz. Kérjük válassza ki, melyik csoporthoz rendeli hozzá az újonnan importált felhasználókat!",

"members_imported" =>
"Minden felhasználót importáltunk",

"return_to_main_menu" =>
"Vissza a főmenübe",

"import_weblog_entries" =>
"Hír-bejegyzések importálása",

"weblog_name" =>
"Hír neve:",

"total_weblog_entries" =>
"Összes bejegyzés ehhez a hírhez:",

"select_destination_blog" =>
"Válassza ki a cél-hírt",

"destination_instructions" =>
"Kérjük válassza ki, melyik ExpressionEngine hírben tároljuk a pMachine bejegyzéseket!",

"destination_note" =>
"Megjegyzés: ha nem létezik hír, előbb az ADMINISZTRÁCIÓ oldalon létre kell hoznia.",

"entries_per_cycle" =>
"Bejegyzések száma ciklusonként",

"select_destination_fields" =>
"Válassza ki a célmezőket",

"field_destination_instructions" =>
"Kérjük válassza ki, melyik ExpressionEngine mezőbe akarja importálni a pMachinemezők adatait!",

"field_destination_instructions_two" =>
"Ha egy mezőt nem akar importálni, válassza a &quot;Nem kell&quot; opciót.",

"fields_not_unique_warning" =>
"Egy-egy ExpressionEngine mezőhöz több pMachine mezőt is hozzárendelhet",

"no_fields_assigned" =>
"A választott hírhez nem tartozik mezőcsoport. Kérjük az ADMINISZTRÁCIÓ oldalon társítson egy mezőcsoportot a hírhez!",

"no_textarea_fields" =>
"A hírhez rendelt mezőcsoport nem tartalmaz szövegdoboz mezőt",

"pmachine_field" =>
"pMachine mező",

"ee_field" =>
"ExpressionEngine mező",

"none" =>
"Nem kell",

"blurb" =>
"Bevezető",

"body" =>
"Törzsszöveg",

"more" =>
"Tovább szöveg",

"custom1" =>
"Egyéni 1",

"custom2" =>
"Egyéni 2",

"custom3" =>
"Egyéni 3",

"you_must_select_fields" =>
"Nem adott meg mezőkapcsolatot",

"entries_remaining" =>
"Hátralévő bejegyzések:",

"entries_imported" =>
"Bejegyzések importálva",

"click_to_import_entries" =>
"%x. és %y. közötti bejegyzések importálása",

"batch_complete" =>
"Ciklus kész...",

"select_upload_blog" =>
"Válassza ki a képfeltöltés célkönyvtárát",

"upload_instructions" =>
"Ha pMachine bejegyzései képeket is tartalmaznak, át kell irányítanunk a jelenlegi képkönyvtárat az új helyre.",

"upload_note" =>
"Megjegyzés: az importálóeszköz NEM másolja át a meglévő képeit. Az összes képet kézzel kell áthelyeznie a választott célkönyvtárba.",

"note_regarding_categories" =>
"A hír-kategóriákról",

"category_note" =>
"Ha pMachine hír-bejegyzéseit kategóriákhoz társította, ugyanezeket a kategóriákat létre kell hoznia az ExpressionEngine-ben is. Az importálás során a program megpróbálja társítani a pMachine kategóriákat a megfelelő ExpressionEngine kategóriákkal. Ha nem talál egyezést, az adott bejegyzést nem rendeli kategóriához.",

"import_mailinglist" =>
"Levelezőlista importálása",

"total_emails" =>
"Összes email-cím:",

"emails_remaining" =>
"Hátralévő email-címek:",

"emails_per_cycle" =>
"Email-címek száma ciklusonként",

"email_instructions" =>
"Az időtúllépési (timeout) problémák elkerülése érdekében kisebb csoportokban importáljuk az email-címeket. mivel ez a feladat nem túl erőforrás-igényes, ciklusonként 5000 címet nyugodtan megadhat egy átlagos szervernél. Kérjük adja meg, mekkora csoportokban akarja importálni a címeket! ",

"mailinglist" =>
"Levelezőlista",

"mailinglist_imported" =>
"A Levelezőlistát importáltuk",

"click_to_import_mailinglist" =>
"%x. és %y. közötti email-címek importálása",


"clear_preferences" =>
"Beállítások törlése",

"click_to_clear_prefs" =>
"Kattintson ide a beállítások törléséhez",

"clear_preferences_info" =>
"Az importálás során minden egyes beállítását elmentettük a fő konfigurációs fájlba. Mivel végzett az importálással, javasoljuk, hogy törölje ezeket az adatokat.",

"you_are_done_importing" =>
"Sikeresen importálta bejegyzéseit!",


/* END */
''=>''
);
?>
