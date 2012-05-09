<?php

//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

function admin_notify_mailinglist_title()
{
return <<<EOF
Valaki feliratkozott a levelezőlistádra.
EOF;
}

function admin_notify_mailinglist()
{
return <<<EOF
Az új levelezőlista feliratkozás elfogadásra került.

Email cím: {email}
Levelező lista: {mailing_list}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

function admin_notify_entry_title()
{
return <<<EOF
Egy uj webblog lett bejegyezve
EOF;
}

function admin_notify_entry()
{
return <<<EOF
Egy új bejegyzés került a következő kategóriába:
{weblog_name}

A bejegyzés címe:
{entry_title}

Feladó: {name}
Email: {email}

A bejegyzés olvasásához folytasd itt:
http://www.freestate.hu{entry_url}

UI: A link nem biztos, hogy korrekt, mert a bejegyzés óta megváltozhatott az URL-je vagy még zárolt.

EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

function admin_notify_reg_title()
{
return <<<EOF
Ertesites uj felhasznalo regisztralasarol
EOF;
}

function admin_notify_reg()
{
return <<<EOF
Az alábbi felhasználó szeretné regisztráltatni magát: {name}

A honlap neve: {site_name}

Vezérlőpult URL: {control_panel_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

function admin_notify_comment_title()
{
return <<<EOF
Uj hozzaszolas erkezett
EOF;
}

function admin_notify_comment()
{
return <<<EOF
Új hozzászólás érkezett az alábbi hírhez:
{weblog_name}

A bejegyzés címe:
{entry_title}

Itt nézheted meg: 
{comment_url}

Feladó: {name}
Email: {email}
WWW: {url}
Cím: {location}

{comment}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Trackback
//--------------------------------------------------

function admin_notify_trackback_title()
{
return <<<EOF
Uj Visszajelzes erkezett
EOF;
}

function admin_notify_trackback()
{
return <<<EOF
Új Visszajelzés érkezett az alábbi bejegyzéshez:
{entry_title}

Itt nézheted meg: 
{comment_url}

A visszajelzés az alábbi hírhez érkezett:
{sending_weblog_name}

A bejegyzés címe:
{sending_entry_title}

Hír URL:
{sending_weblog_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

function mbr_activation_instructions_title()
{
return <<<EOF
Az aktivalasi kodod / Your activation code
EOF;
}

function mbr_activation_instructions()
{
return <<<EOF
Köszönjük, hogy regisztráltad magad portálunkon.

felhasználóneved aktiválásához látogass el az alábbi címre:

{unwrap}{activation_url}{/unwrap}

Köszönjük!

             {site_name}

{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

function forgot_password_instructions_title()
{
return <<<EOF
Bejelentkezesi informaciok / Login information
EOF;
}

function forgot_password_instructions()
{
return <<<EOF
Kedves {name},

Jelszavad átállításához kérjük, látogassd meg az alábbi oldalt:

{reset_url}

A rendszer automatikusan megváltoztatja jelszavad, majd e-mailben elküldi Neked az új jelszót.

Ha mégsem szeretnéd megváltoztatni jelszavad, semmit nem kell tenned. A jelszóváltoztatási kérelem 24 óra múlva lejár.

Üdvözlettel,

             {site_name}

{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Reset Password Notification
//--------------------------------------------------

function reset_password_notification_title()
{
return <<<EOF
Uj bejelentkezesi adatok
EOF;
}

function reset_password_notification()
{
return <<<EOF
Kedves {name},

Íme az új bejelentkezési adataid:

Felhasználónév: {username}
Jelszó: {password}

Üdvözlettel,
             {site_name}

{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

function validated_member_notify_title()
{
return <<<EOF
Hozzaferesed aktivaltuk / You account was activated
EOF;
}

function validated_member_notify()
{
return <<<EOF
Kedves {name},

Hozzáférésed aktiváltuk, már bejelentkezhetsz!

Köszönettel,

             {site_name}

{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

function decline_member_validation_title()
{
return <<<EOF
Hozzaferesi keresed elutasitottak / Activation declined
EOF;
}

function decline_member_validation()
{
return <<<EOF
{name},

Sajnáljuk, de a honlap szerkesztője úgy döntött, nem hagyja jóvá a felhasználói hozzáférésed.

{site_name}

{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

function mailinglist_activation_instructions_title()
{
return <<<EOF
Email-cím megerositese / Email confirmation
EOF;
}

function mailinglist_activation_instructions()
{
return <<<EOF
Köszönjük, hogy feliratkoztál "{mailing_list}" levelezőlistánkra!

Email-címed megerősítéséhez kérjük, kattints az alábbi linkre!

Ha mégsem akarsz feliratkozni a listára, kérjük ne válaszolj erre az üzenetre.

{unwrap}{activation_url}{/unwrap}

Köszönettel,

             {site_name}

{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

function comment_notification_title()
{
return <<<EOF
{name_of_commenter} valaszolt a hozzaszolasodra
EOF;
}

function comment_notification()
{
return <<<EOF
{name_of_commenter} válaszolt a hozzászólásodra az alábbi kategóriában:
{weblog_name}

A bejegyzés címe:
{entry_title}

A hozzászólást az alábbi címen olvashatod el:
{comment_url}

Ha nem szeretnél több értesítést kapni további hozzászólásokról, kattints ide:
{notification_removal_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Gallery Comment
//--------------------------------------------------

function admin_notify_gallery_comment_title()
{
return <<<EOF
Uj hozzaszolas
EOF;
}

function admin_notify_gallery_comment()
{
return <<<EOF
Új hozzászólás érkezett a fotógalériádhoz:
{gallery_name}

A fotó ill. bejegyzés címe:
{entry_title}

A hozzászólást itt olvashatod el: 
{comment_url}

{comment}
EOF;
}
/* END */

//---------------------------------------------------
//	Gallery Comment Notification
//--------------------------------------------------

function gallery_comment_notification_title()
{
return <<<EOF
{name_of_commenter} valaszolt a hozzaszolasodra
EOF;
}

function gallery_comment_notification()
{
return <<<EOF
{name_of_commenter} válaszolt a fotó-hozzászólásodra az alábbi galériában:
{gallery_name}
az alábbi képnél:
{entry_title}

A hozzászólást az alábbi címen olvashatod el:
{comment_url}

Ha nem szeretnél több értesítést kapni további hozzászólásokról, kattints ide:
{notification_removal_url}
EOF;
}
/* {comment} - removed */
/* END */



//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

function admin_notify_forum_post_title()
{
return <<<EOF
Valaki epp letrehozta a {forum_name} forumot
EOF;
}

function admin_notify_forum_post()
{
return <<<EOF
{name} új üzenetet hagyott a {forum_name} fórumban

A téma címe:
{title}

Amely itt található:
{thread_url}

{body}
EOF;
}
/* END */


//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

function forum_post_notification_title()
{
return <<<EOF
Valaki epp letrehozta a {forum_name} forumot
EOF;
}

function forum_post_notification()
{
return <<<EOF
Valaki üzent a témához, amelyre feliratkoztál:
{forum_name}

A téma címe:
{title}

Amely itt található:
{thread_url}

{body}

Ha nem szeretnél több értesítést kapni további hozzászólásokról, kattints ide:
{notification_removal_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

function private_message_notification_title()
{
return <<<EOF
Szemelyes Uzeneted erkezett
EOF;
}

function private_message_notification()
{
return <<<EOF

{recipient_name},

{sender_name} felhasználótól Személyes Üzenetet kaptál ezzel a címmel '{message_subject}'.

Az üzenet megtekinthető belépés után a Bejövő üzeneteknél:
{site_url}

Ha nem szeretnél több értesítést kapni Személyes Üzenetetedről, kapcsold ki ezt a lehetőséget az Email beállításoknál.
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Full PM InBox
/* -------------------------------------*/

function pm_inbox_full_title()
{
return <<<EOF
A Szemelyes uzenet postaladad megtelt
EOF;
}

function pm_inbox_full()
{
return <<<EOF
Kedves {recipient_name},

{sender_name} épp most szerett volna Személyes üzenetet küldeni Neked,
de a postaládád megtelt, túllépted a maximumot ({pm_storage_limit}).

Kérünk, lépj be és töröld néhány korábbi üzeneted:
{site_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/

function forum_moderation_notification_title()
{
return <<<EOF
Moderatori figyelmeztetes a {forum_name} forumbol
EOF;
}

function forum_moderation_notification()
{
return <<<EOF
Kedves {name_of_recipient},

egy moderátor '{moderation_action}' műveletet hajtott végre a témádban.

A téma címe:
{title}

A téma elérési útvonala:
{thread_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/

function forum_report_notification_title()
{
return <<<EOF
Uj jelentes erkezett a {forum_name} forumhoz
EOF;
}

function forum_report_notification()
{
return <<<EOF
{reporter_name} épp most jelentett egy hozzászóllást melyet
{author} küldött a '{forum_name}' fórumba.

A jelentés oka:
{reasons}

{reporter_name} további megjegyzései:
{notes}

A hozzászóllás élerési útvonala:
{post_url}

A jelentett hozzászóllás tartalma:
{body}
EOF;
}
/* END */


/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/

function offline_template()
{
return <<<EOF
<html>
<head>

<title>FREESTATE.hu - OFFLINE</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<style type="text/css">

body { 
  background-color:	#F5F5F5;
  margin:	50px; 
  font-family: Verdana, Arial, "Geneva CE", Helvetica, sans-serif;
  font-size: 11px;
  color: #000;
  text-align: center;
}

a, a:visited, a:active {
  font-family: Verdana, Arial, "Geneva CE", Helvetica, sans-serif;
  letter-spacing: .09em;
  text-decoration: none;
  border-bottom:	1px dashed #711719;
  color: #711719;
  background-color: transparent;
}
  
a:hover {
  color: #711719;
  background-color:	#F5F5F5;
}

#content  {
  background: white url('/img/site/sofad01/comBGRed.gif') repeat-x top left;
  border:	1px dashed #711719;
  padding:		22px 25px 14px 25px;
  width: 650px;
  text-align: center;
}

.contentInnner  {
  background: transparent url('/img/site/sofad01/imgWIMSW3.gif') no-repeat center left;
  padding-left: 80px;
  text-align: left;
}

h1 {
  font-family: Verdana, Arial, "Geneva CE", Helvetica, sans-serif;
  font-weight: bold;
  font-size: 14px;
  color: #000;
  margin-top:	0;
  margin-bottom: 14px;
}

p {
  font-family: Verdana, Arial, "Geneva CE", Helvetica, sans-serif;
  font-size: 12px;
  font-weight: normal;
  margin-top: 12px;
  margin-bottom: 14px;
  color: #000;
}

ul {
  margin-bottom: 16px;
}

li {
  list-style: square;
  font-family: font-family: Verdana, Arial, "Geneva CE", Helvetica, sans-serif;
  font-size: 12px;
  font-weight: normal;
  margin-top: 8px;
  margin-bottom: 8px;
  color: #000;
}

</style>

</head>

<body>

<center>

<div id="content"><div class="contentInnner">

<br />
<h1>FREESTATE.hu -  Offline</h1>

<p>A rendszer karbantartás alatt áll.</p>
<br />
<p> .................................. </p>
<p>System is under maintenance.</p>
<br />

<br />

</div></div>

</center>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/

function message_template()
{
return <<<EOF
<html>
<head>

<title>{title}</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

{meta_refresh}

<style type="text/css">

body { 
  background-color:	#F5F5F5;
  margin:	50px; 
  font-family: Verdana, Arial, "Geneva CE", Helvetica, sans-serif;
  font-size: 11px;
  color: #000;
  text-align:center;
}

a, a:visited, a:active {
  font-family: Verdana, Arial, "Geneva CE", Helvetica, sans-serif;
  letter-spacing: .09em;
  text-decoration: none;
  border-bottom:	1px dashed #711719;
  color: #711719;
  background-color: transparent;
}
  
a:hover {
  color: #711719;
  background-color:	#F5F5F5;
}

#content  {
  background: white url('/img/site/sofad01/comBGRed.gif') repeat-x top left;
  border:	1px dashed #711719;
  padding:		22px 25px 14px 25px;
  width: 650px;
  text-align: left;
}

.contentInnner  {
  background: transparent url('/img/site/sofad01/imgWIMSW3.gif') no-repeat center left;
  padding-left: 80px;
  text-align: left;
}

h1 {
  font-family: Verdana, Arial, "Geneva CE", Helvetica, sans-serif;
  font-weight: bold;
  font-size: 14px;
  color: #000;
  margin-top:	0;
  margin-bottom: 14px;
}

p {
  font-family: Verdana, Arial, "Geneva CE", Helvetica, sans-serif;
  font-size: 12px;
  font-weight: normal;
  margin-top: 12px;
  margin-bottom: 14px;
  color: #000;
}

ul {
  margin-bottom: 16px;
}

li {
  list-style: square;
  font-family: font-family: Verdana, Arial, "Geneva CE", Helvetica, sans-serif;
  font-size: 12px;
  font-weight: normal;
  margin-top: 8px;
  margin-bottom: 8px;
  color: #000;
}

</style>

</head>

<body>

<center>

<div id="content"><div class="contentInnner">

<h1>{heading}</h1>

{content}

<p>{link}</p>

</div></div>

</center>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/

function mailinglist_template()
{
return <<<EOF
{message_text}

Ha le szeretnél iratkozni a levelező listáról látogasd meg a következő linket:
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
}
/* END */


?>
