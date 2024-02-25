<?php
/**
 * includes/locale.php
 * 
 * German locale, because all of the users will be German speaking.
 */
$lang = [
  /**
   * Locale
   */
  'locale' => 'de',

  /**
   * Error pages and messages
   */
  'error' => [
    403 => 'Du hast keine Berechtigung auf die von dir angeforderte Ressource <code>%s</code> zuzugreifen.',
    404 => 'Die von dir angeforderte Ressource <code>%s</code> existiert nicht.',
    500 => [
      'includeFileNotFound' => 'Die zu inkludierende Datei existiert nicht auf dem Server.',
      'minConfigVersion' => 'Die vorhandene Konfigurationsdatei ist nicht ausreichend. Bitte lege eine neue Konfigurationsdatei mithilfe der im Repository vorhandenen <code>config.template.php</code> Datei an.',
      'unknownError' => 'Unbekannter Fehler.',
    ],
    'templateFileNotFound' => 'Templatedatei nicht gefunden.',
    'noCli' => 'Das Script kann nur im Terminal ausgeführt werden.'."\n\n",
  ],

  /**
   * CLI scripts
   */
  'cli' => [
    'addUser' => [
      'invalidUsername' => 'Der Name ist ungültig. Er muss zwischen 2 und 32 Zeichen lang sein und darf keine Sonderzeichen enthalten (0-9a-zA-Z).'."\n".'Beispielaufruf:'."\n".'php %s Hans'."\n".'Erstellt den Nutzer "Hans" mit einem zufälligen Passwort.'."\n\n",
      'success' => 'Account erfolgreich angelegt.'."\n\n".'User: %s'."\n".'Pass: %s'."\n\n",
      'duplicate' => 'Es existiert bereits ein Account mit diesem Namen.'."\n\n",
      'unknownError' => 'Unknown error: %s'."\n\n",
      'log' => '[CLI] User angelegt: %s',
    ],
    'delUser' => [
      'invalidUsername' => 'Der Name ist ungültig. Er muss zwischen 2 und 32 Zeichen lang sein und darf keine Sonderzeichen enthalten (0-9a-zA-Z).'."\n".'Beispielaufruf:'."\n".'php %s Hans'."\n".'Löscht den Nutzer "Hans".'."\n\n",
      'success' => 'Account erfolgreich entfernt.'."\n\n",
      'notFound' => 'Es existiert kein Account mit diesem Namen.'."\n\n",
      'log' => '[CLI] User gelöscht: %s',
    ],
    'passwd' => [
      'invalidUsername' => 'Der Name ist ungültig. Er muss zwischen 2 und 32 Zeichen lang sein und darf keine Sonderzeichen enthalten (0-9a-zA-Z).'."\n".'Beispielaufruf:'."\n".'php %s Hans'."\n".'Setzt ein neues, zufälliges Passwort für den Nutzer "Hans".'."\n\n",
      'success' => 'Passwort erfolgreich geändert.'."\n\n".'User: %s'."\n".'Pass: %s'."\n\n",
      'notFound' => 'Es existiert kein Account mit diesem Namen.'."\n\n",
      'log' => '[CLI] User-Passwort geändert: %s',
    ],
    'resetWholeOrga' => [
      'invalidId' => 'Die Organisations-ID ist ungültig.'."\n\n",
      'question' => 'Möchtest du wirklich die ganze Organisation "%s" zurücksetzen? STRG+C zum Abbrechen oder "ok" eingeben und Enter drücken zum Fortfahren.'."\n\n",
      'aborting' => 'Abbruch.'."\n\n",
      'log' => '[CLI] Organisation zurückgesetzt.',
      'done' => 'Erledigt.'."\n\n",
    ],
    'crawler' => [
      'startFull' => '[CRON, Crawl] Crawlvorgang gestartet (groß); Beginnend bei itemId %s.',
      'startSmall' => '[CRON, Crawl] Crawlvorgang gestartet (klein); Beginnend bei itemId %s.',
      'finished' => '[CRON, Crawl] Crawlvorgang beendet (total: %d, new: %d, updated: %d.',
      'transmitToAi' => '[CRON, KI] Übergabe von %d Post%s an die KI.',
      'transmitToAiSuccessful' => '[CRON, KI] Übergabe an die KI erfolgreich.',
      'transmitToAiFailed' => '[CRON, KI] Übergabe an die KI NICHT erfolgreich. Response: %s',
    ],
  ],

  /**
   * API
   */
  'api' => [
    'getJPG' => [
      'log' => '[KI, JPG] KI Anfrage JPG',
    ],
  ],

  /**
   * metaLogLevel
   */
  'logLevel' => [
    'system' => 'User-/Systemaktion',
    'firstsight' => 'Erstsichtung',
    'confirmingReset' => 'Zweitsichtung - zurückgesetzt',
    'confirmingOk' => 'Zweitsichtung - ok',
    'reset' => 'Post zurückgesetzt',
    'perk' => 'Belohnung und Badge',
    'fake' => 'Fakes',
    'note' => 'Notiz',
  ],

  /**
   * Navigation elements
   */
  'nav' => [
    'login' => 'Login',
    'contact' => 'Kontakt per PN',
    'github' => 'GitHub',
    'overview' => 'Übersicht',
    'evaluation' => 'Bewertung',
    'organization' => 'Organisationen',
    'itemInfo' => 'PostInfo',
    'log' => 'Log',
    'stats' => 'Statistiken',
    'logout' => 'Logout',
    'delList' => 'Löschliste',
    'fakes' => 'Fälschungen',
    'fastOrga' => 'fastOrga',
    'queue' => 'Queue',
  ],

  /**
   * 
   * Pages
   * 
   */
  /**
   * Login
   */
  'login' => [
    'title' => 'Login',
    'cookieNote' => 'Ab diesem Punkt werden Cookies verwendet! Mit dem Fortfahren stimmst du dem zu!',
    'form' => [
      'name' => 'Name',
      'password' => 'Passwort',
      'submit' => 'Login',
    ],
    'loginFailed' => [
      'title' => 'Login gescheitert',
      'warnBox' => 'Die Zugangsdaten sind falsch.',
      'tryAgain' => 'Erneut versuchen',
    ],
  ],

  /**
   * Logout
   */
  'logout' => [
    'title' => 'Logout',
    'form' => [
      'question' => 'Möchtest du dich ausloggen?',
      'submit' => 'Logout',
    ],
    'logoutFailed' => [
      'invalidToken' => 'Ungültiges Token.',
      'back' => 'Zurück zur Übersicht',
    ],
  ],

  /**
   * Overview
   */
  'overview' => [
    'title' => 'Übersicht',
    'general' => 'Eingeloggt als: <span class="warn bold">%s</span> - (<a href="/logout">Ausloggen</a>)',
    'dkmsInfo' => [
      'Siehe <a href="https://pr0gramm.com/top/dkms%20sms/2465205" target="_blank" rel="noopener">hier</a>:',
      'Alle <span class="highlight">DKMS5, DKMS10, DKMSxx</span> SMS sind <span class="highlight">FÜNF</span> Euro wert.',
      'Alle <span class="highlight">LEBEN</span> SMS sind <span class="highlight">EINEN</span> Euro wert.',
      '<span class="warn bold">WICHTIG! Wenn keine Antwort von der DKMS kommt, dann zählt die Spende nicht (Drittanbietersperre)!</span>',
    ],
    'search' => [
      'title' => 'Suchparameter',
      'newer' => 'Crawlen neuer als Post-ID',
      'tags'=> 'Suchquery',
    ],
    'total' => [
      'title' => 'Posts / Bewertungen',
      'items' => [
        'total' => [
          'title' => 'Gesamt',
          'description' => 'Anzahl der Posts, die in das o.g. Suchmuster fallen',
        ],
        'isDonation' => [
          'title' => 'Spendenposts',
          'description' => 'Anzahl der bestätigten Spendenposts',
        ],
        'isGoodAct' => [
          'title' => 'Gute Taten',
          'description' => 'Anzahl der bestätigten guten Taten',
        ],
        'isNoDonation' => [
          'title' => 'Nicht-Spendenposts',
          'description' => 'Anzahl der bestätigten Nicht-Spendenposts',
        ],
        'pendingFirst' => [
          'title' => 'ausstehende Erstsichtung',
          'description' => 'Anzahl der Posts, bei denen noch keine Erstsichtung stattgefunden hat.',
        ],
        'pendingSecond' => [
          'title' => 'ausstehende Zweitsichtung',
          'description' => 'Anzahl der Posts, bei denen noch keine Zweitsichtung stattgefunden hat.',
        ],
        'pendingOrgaFirst' => [
          'title' => 'ausstehende Orga-Erstsichtung',
          'description' => 'Anzahl der Spendenposts, bei denen noch keine Orga-Erstsichtung stattgefunden hat.',
        ],
        'pendingOrgaSecond' => [
          'title' => 'ausstehende Orga-Zweitsichtung',
          'description' => 'Anzahl der Spendenposts, bei denen noch keine Orga-Zweitsichtung stattgefunden hat.',
        ],
      ],
    ],
    'sums' => [
      'title' => 'Summen',
      'items' => [
        'unconfirmedTotalsum' => [
          'title' => 'Gesamtsumme nach Erstsichtung',
          'description' => 'Gesamtsumme der Erstsichtungen',
        ],
        'confirmedTotalsum' => [
          'title' => 'bestätigte Gesamtsumme nach Zweitsichtung',
          'description' => 'Gesamtsumme der Zweitsichtungen (Bei der Zweitsichtung wurde der Wert aus der Erstsichtung bestätigt und ist damit gültig)',
        ],
      ],
    ],
    'organizations' => [
      'title' => 'Organisationen',
      'name' => 'Name der Organisation',
      'confirmedValue' => 'bestätigte Spendensumme',
      'confirmedCount' => 'bestätigte Spendenposts',
      'average' => 'Ø pro Spende',
    ],
  ],

  /**
   * Evaluation
   */
  'evaluation' => [
    'title' => 'Bewertung',
    'invalidToken' => 'Ungültiges Token',
    'itemNotFound' => 'Der Post existiert nicht (mehr).',
    'log' => [
      'confirmingReset' => 'Erstsichtung',
      'goodAct' => 'Orga: 9',
      'noDonation' => 'Kein Spendenpost',
    ],
    'success' => 'Spendenwert eingetragen.',
    'resetItem' => 'Post zurücksetzen',
    'aiPrefix' => 'KI-',
    'firstsight' => 'Erstsichtung',
    'firstsightGoodAct' => 'Erstsichtung: Gute Tat',
    'clickImage' => 'Zur Post-Ansicht einfach auf das Bild klicken',
    'video' => 'Video auf pr0gramm ansehen',
    'value' => 'Geldbetrag',
    'seeInfo' => 'Siehe Info unten',
    'fastEvaluation' => 'Schnellbewertung',
    'submit' => 'Eintragen',
    'links' => 'Links',
    'itemInfo' => 'PostInfo',
    'info' => 'Informationen zur Auswertung',
    'infoText' => 'Spendenpost: Geldwert eintragen (Komma oder Punkt als Dezimaltrennung ist egal),<br>kein Spendenpost: die Zahl 0 eintragen,<br>unsicher: leer lassen und Formular absenden, dann kommt ein neues Bild.<br>Wenn der Post eine Spende ist, man aber den Wert nicht erkennt 0,01 eintragen!<br>CHF und USD einfach 1:1 eintragen.<br>DKMS siehe Info <a href="/overview">hier</a>!<br><span class="warn">NEU IN 2024:</span> Gute Tat = g, G oder + eintragen!',
    'allDone' => 'Alles erledigt. Nächster Crawl alle 5 Minuten. (in %d Sekunden)',
    'evaluateOrganizations' => 'Organisationen bewerten',
  ],

  /**
   * Organization
   */
  'organization' => [
    'title' => 'Organisationen',
    'organizationNotFound' => 'Die Organisation existiert nicht.',
    'invalidToken' => 'Ungültiges Token',
    'itemNotFound' => 'Der Post existiert nicht (mehr) oder ist nicht als Spendenpost klassifiziert.',
    'log' => [
      'organization' => 'Orga',
      'confirmingReset' => 'Erstsichtung',
    ],
    'success' => 'Organisation eingetragen.',
    'resetItem' => 'Post zurücksetzen',
    'resetOrga' => 'Organisation zurücksetzen',
    'aiPrefix' => 'KI-',
    'firstsight' => 'Erstsichtung',
    'clickImage' => 'Zur Post-Ansicht einfach auf das Bild klicken',
    'confirmedValue' => 'Bestätigter Betrag',
    'video' => 'Video auf pr0gramm ansehen',
    'value' => 'Organisation',
    'seeInfo' => 'Siehe Organisationen',
    'fastEvaluation' => 'Schnellbewertung',
    'submit' => 'Eintragen',
    'links' => 'Links',
    'itemInfo' => 'PostInfo',
    'allDone' => 'Alles erledigt.',
    'evaluateItems' => 'Posts bewerten',
  ],

  /**
   * itemInfo
   */
  'itemInfo' => [
    'title' => 'PostInfo',
    'form' => [
      'placeholder' => 'Post-ID / Link',
      'submit' => 'Info',
    ],
    'notFound' => 'Der Post existiert nicht in der Datenbank. Wenn du ihn dort erwartet hast, dann prüfe auf pr0gramm, ob er richtig getaggt wurde und dass die Tags nicht rausgevoted wurden.',
    'heading' => 'Info: itemId %d',
    'links' => 'Links',
    'itemInfo' => 'Info',
    'reset' => 'Reset',
    'resetItem' => 'Post',
    'resetOrga' => 'Orga',
    'unlockUser' => 'User erneut freischalten',
    'dbDump' => 'DB-Dump',
    'commentForm' => [
      'title' => 'Logeintrag hinzufügen',
      'note' => 'Notiz',
      'submit' => 'Eintragen',
    ],
    'addNote' => [
      'invalidToken' => 'Ungültiges Token.',
      'success' => 'Notiz eingetragen.',
    ],
    'log' => [
      'title' => 'Log',
      'id' => 'ID',
      'username' => 'Username',
      'timestamp' => 'Zeitpunkt',
      'itemId' => 'Post-ID',
      'text' => 'Text',
      'system' => 'System',
    ],
    'logLevel' => 'Loglevel',
    'invalid' => 'Eingabe ungültig',
  ],

  /**
   * Log
   */
  'log' => [
    'title' => 'Log',
    'itemInfo' => 'Info',
    'reset' => 'Reset',
    'resetItem' => 'Post',
    'resetOrga' => 'Orga',
    'log' => [
      'title' => 'Log',
      'id' => 'ID',
      'username' => 'Username',
      'timestamp' => 'Zeitpunkt',
      'itemId' => 'Post-ID',
      'text' => 'Text',
      'system' => 'System',
    ],
    'older' => 'Älter',
    'logLevel' => 'Loglevel',
    'highscore' => [
      'title' => 'Highscore (Logeinträge)',
      'place' => 'Platz',
      'name' => 'Username',
      'delta' => 'Einträge',
    ],
    'highscoreSystem' => [
      'title' => 'Highscore (System / KI)',
      'symbol' => 'Symbol',
      'name' => 'System / KI',
      'entrys' => 'Einträge',
      'system' => 'System',
      'ai' => 'KI',
    ],
  ],

  /**
   * Statistics
   */
  'stats' => [
    'title' => 'Statistiken',
    '1000title' => 'Zeitpunkte der Tausender-Überschreitungen',
    '10000title' => 'Zeitpunkte der Zehntausender-Überschreitungen',
    '100000title' => 'Zeitpunkte der Hunderttausender-Überschreitungen',
    'none' => 'keine',
    'mostFrequentAmounts' => 'Häufigste Spendenbeträge',
    'biggestAmounts' => 'Größte Spendenbeträge (ab 500€)',
    'from' => 'von',
  ],

  /**
   * Reset
   */
  'reset' => [
    'title' => 'Post zurücksetzen',
    'titleOrganization' => 'Organisation zurücksetzen',
    'noId' => 'Es wurde keine Post-ID übergeben.',
    'invalidId' => 'Ein Post mit der Post-ID existiert nicht in der Datenbank.',
    'confirmationQuestion' => 'Soll %s zurückgesetzt werden?',
    'item' => 'der Post',
    'organization' => 'die Organisation',
    'confirmation' => 'Ja, zurücksetzen.',
    'invalidToken' => 'Ungültiges Token.',
    'log' => [
      'resetItem' => 'Post zurückgesetzt.',
      'resetOrganization' => 'Organisation zurückgesetzt.',
    ],
    'success' => 'Post zurückgesetzt.',
    'successOrga' => 'Organisation zurückgesetzt.',
    'itemInfo' => 'PostInfo',
    'evaluateItems' => 'Posts bewerten',
  ],

  /**
   * Fakes
   */
  'fakes' => [
    'title' => 'Fälschungen',
    'noPermission' => 'Du hast keine Berechtigung auf diese Seite zuzugreifen.',
    'notFound' => 'Ein Fälschungseintrag mit der ID existiert nicht.',
    'invalidToken' => 'Ungültiges Token.',
    'del' => [
      'log' => 'Fakevermutung gelöscht.',
      'success' => 'Fakevermutung gelöscht.',
    ],
    'toggleCertain' => [
      'log' => [
        'certain' => 'Fake als sicher eingestuft.',
        'uncertain' => 'Fake als unsicher eingestuft.',
      ],
      'success' => [
        'certain' => 'Fake als sicher eingestuft.',
        'uncertain' => 'Fake als unsicher eingestuft.',
      ],
    ],
    'add' => [
      'invalidIds' => 'Die eingegebenen Post-IDs sind nicht korrekt.',
      'sameIds' => 'Du musst unterschiedliche Post-IDs eingeben.',
      'idsNotFound' => 'Mindestens einer der eingegebenen Post-IDs existiert nicht.',
      'fakeExists' => 'Dieser Fakeeintrag existiert bereits.',
      'log' => [
        'message' => 'Fake eingetragen (%s), Originalpost: %d',
        'certain' => 'sicher',
        'uncertain' => 'unsicher',
      ],
      'success' => 'Fake eingetragen.',
    ],
    'fakeFinder' => [
      'title' => 'Fälschungen finden',
      'queryTitles' => [
        'alle ohne 1, 2 & 9',
        'alle DKMS',
        'alle dt. Krebshilfe',
        'alle diversen Organisationen',
        'alle guten Taten',
        'alle sortiert nach gleichem Wert/Orga',
      ],
      'invalidQueryId' => 'Ungültige Query ID.',
    ],
    'addForm' => [
      'title' => 'Eintrag hinzufügen',
      'items' => 'Posts',
      'original' => 'Originalpost',
      'fake' => 'Fakepost',
      'certain' => 'Sicher?',
      'yes' => 'Ja',
      'no' => 'Nein',
      'submit' => 'Eintragen',
    ],
    'fakes' => [
      'title' => 'Fälschungen',
      'noEntrys' => 'Es sind keine Einträge vorhanden.',
      'id' => 'ID',
      'original' => 'Original',
      'fake' => 'Fälschung',
      'timestamp' => 'Zeitpunkt der Feststellung',
      'certain' => 'sicher',
      'uncertain' => 'unsicher',
      'actions' => 'Aktionen',
      'certainButton' => 'sicher umschalten',
      'delButton' => 'löschen',
    ],
  ],

  /**
   * Queue
   */
  'queue' => [
    'title' => 'Queue',
    'noPermission' => 'Du hast keine Berechtigung auf diese Seite zuzugreifen.',
    'noElements' => 'Keine Elemente vorhanden',
    'id' => 'ID',
    'name' => 'Username',
    'action' => 'Aktion',
    'error' => 'Fehler',
    'lock' => 'Sperren',
    'unlock' => 'Entsperren',
    'yes' => 'Ja',
    'no' => 'Nein',
  ],
];
?>
