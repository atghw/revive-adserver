<?

$strHome = "Home";
$date_format = "%d.%m.%Y";
$time_format = "%H:%i:%S";
$strMySQLError = "MySQL-Fehler:";
$strAdminstration = "Adminstration";
$strAddClient = "Neuen Kunden hinzuf�gen";
$strModifyClient = "Kunde �ndern";
$strDeleteClient = "Kunde l�schen";
$strViewClientStats = "Kundenstatistik ansehen";
$strClientName = "Kunde";
$strContact = "Kontakt";
$strEMail = "EMail";
$strViews = "AdViews";
$strClicks = "AdClicks";
$strTotalViews = "Summe AdViews";
$strTotalClicks = "Summe AdClicks";
$strCTR = "Click-Through Ratio";
$strTotalClients = "Total clients";
$strActiveClients = "Active clients";
$strActiveBanners = "Active banners";
$strLogout = "Logout";
$strCreditStats = "Credit Stats";
$strViewCredits = "Adview credits";   
$strClickCredits = "Adclick credits";
$strPrevious = "Previous";
$strNext = "Next";
$strNone = "None";
$strViewsPurchased = "Gekaufte AdViews";
$strClicksPurchased = "Gekaufte AdClicks";
$strDaysPurchased = "Gekaufte AdDays";
$strHTML = "HTML";
$strAddSep = "Bitte entweder die Felder oben oder das Feld unten ausf�llen!"; //unused? mm, 22.11.1999
$strTextBelow = "Bildunterschrift";
$strSubmit = "Fertigstellen";
$strUsername = "Username";
$strPassword = "Passwort";
$strBannerAdmin = "Banner Adminstration f�r";
$strBannerAdminAcl = "Banner ACL adminstration f�r";
$strNoBanners = "Keine Banner gefunden";
$strBanner = "Banner";
$strCurrentBanner = "Aktuelles Banner";
$strDelete = "L�schen";
$strAddBanner  = "Neues Banner hinzuf�gen";
$strModifyBanner  = "Banner bearbeiten";
$strModifyBannerAcl  = "Banner ACL bearbeiten";
$strURL = "Klick-URL (inkl. http://)";
$strKeyword = "Schl�sselwort"; //Babelfish translation. - <weston@infinityteldata.net>
$strWeight = "Gewicht";
$strAlt = "Alt-Text";
$strAccessDenied = "Zugriff verweigert";
$strNotAdmin = "Sie haben keine Administrationsrechte";
$strClientAdded = "Der Benutzer wurde hinzugef�gt.";
$strClientModified = "Der Benutzer wurde ge�ndert.";
$strClientDeleted = "Der Benutzer wurde gel�scht.";
$strBannerAdmin = "Banner Adminstration";
$strBannerAdded = "Das Banner wurde hinzugef�gt.";
$strBannerModified = "Das Banner wurde ge�ndert";
$strBannerDeleted = "Das Banner wurde gel�scht";
$strBannerChanged = "Das Banner wurde ge�ndert";
$strStats = "Statistiken";
$strDailyStats = "T�gliche Statistik";
$strDetailStats = "Detaillierte Statistik";
$strCreditStats = "Credit statistics";
$strActive = "aktiv";
$strActivate = "Aktivieren";
$strDeActivate = "Deaktivieren";
$strAuthentification = "Authentifizierung";
$strGo = "Ok";
$strLinkedTo = "Klick URL";
$strBannerID = "Banner-ID";
$strClientID = "Kunden-ID";
$strMailSubject = "Banner-Report";
$strMailSubjectDeleted = "Deaktiviertes Banner";
$strMailHeader = 'Guten Tag, ".$clients[$i][contact].",\n\n';
$strMailBannerStats = 'hiermit �bersenden wir Ihnen die Bannerstatistik f�r ".$clients[$i][clientname].":';
$strMailFooter = 'Mit freundlichen Gr��en,\n   $phpAds_admin_fullname';
$strMailNothingLeft = 'die AdViews Ihrer Banner haben das vorgegebene Ziel erreicht. Deshalb wurden Ihre Banner deaktiviert.\n\nWenn Sie die Kampagne weiterhin fortsetzen m�chten, setzen Sie sich bitte mit uns in Verbindung.\nWir freuen und auf Ihre Antwort.';
$strLogMailSent = "[phpAds] Statistik erfolgreich verschickt.";
$strLogErrorClients = "[phpAds] Ein Fehler ist aufgetreten beim Versuch, den Benutzer in der Datenbank zu finden.";
$strLogErrorBanners = "[phpAds] Ein Fehler ist aufgetreten beim Versuch, die Banner in der Datenbank zu finden.";
$strLogErrorViews = "[phpAds] Ein Fehler ist aufgetreten beim Versuch, die Adviews in der Datenbank zu finden.";
$strLogErrorClicks = "[phpAds] Ein Fehler ist aufgetreten beim Versuch, die Adclicks in der Datenbank zu finden.";
$strLogErrorDisactivate = "[phpAds] Ein Fehler ist aufgetreten beim Versuch ein Banner zu deaktivieren.";
$strRatio = "Klickrate";
$strChooseBanner = "Bitte einen Bannertyp ausw�hlen.";
$strMySQLBanner = "Bild lokal verwalten";
$strURLBanner = "Bild �ber URL verwalten";
$strHTMLBanner = "HTML Banner";
$strNewBannerFile = "Bilddateiname";
$strNewBannerURL = "Bild-URL (inkl. http://)";
$strWidth = "Breite";
$strHeight = "H�he";
$strTotalViews7Days = "Summe AdViews der letzten 7 Tage";
$strTotalClicks7Days = "Summe AdClicks der letzten 7 Tage";
$strAvgViews7Days = "AdViews pro Tag (Durchschnitt der letzten 7 Tage)";
$strAvgClicks7Days = "AdClicks pro Tag (Durchschnitt der letzten 7 Tage)";
$strTopTenHosts = "Top ten anfordernde Hosts/Rechner";
$strConfirmDeleteClient = "M�chten Sie diesen Kunden wirklich l�schen?";
$strClientIP = "Client IP";
$strUserAgent = "RegExp f�r Browser";
$strWeekDay = "Wochentag (0 - 6)";
$strDomain = "Domain (ohne Punkt)";
$strSource = "Quelle";
$strTime = "Time";
$strAllow = "Erlauben";
$strDeny = "Verweigern";
$strResetStats = "Reset Statistics";
$strConfirmResetStats = "Do you really want to reset stats for this client ?";
$strExpiration = "Expiration";
$strDaysLeft = "Days left";
$strEstimated = "Estimated expiration";
$strConfirm = "Are you sure ?";
$strBannerNoStats = "Keine Statistikdaten f�r diesen Banner gespeichert!";
$strWeek = "Kalenderwoche";
$strWeeklyStats = "Wochen�bersicht";
$strWeekDay = "Wochentag";
$strDate = "Datum";
$strCTRShort = "CTR";
$strDayShortCuts=array("So","Mo","Di","Mi","Do","Fr","Sa");
$strShowWeeks="Anzahl der anzuzeigenden Wochen (max.)";
$strAll="Alle";
$strAvg="&Oslash;";
$strHourly="Tageszeitliche Verteilung der Zugriffe";
$strTotal = "Gesamt";
$strUnlimited = "Unbegrenzt";
$strUp = "Vor";
$strDown = "Zur|ck";
$strSave="Speichern";
$strSaved="wurde gespeichert!";
$strDelete = "Lvschen";
$strMovedUp = "wurde vorgesetzt";
$strMovedDown = "wurde zur|ckgesetzt";
$strUpdated = "wurde gedndert";
$strACL = "Zugriffsregel";
$strNoMoveUp = "Erste Zeile kann nicht vorgesetzt werden";
$strACLAdd = "Neue Regel hinzuf|gen:";
$strACLExist = "Bestehende Regeln:";
$strLogin = "Login";

$strTrackerImage = "Tracker image:";
?>
