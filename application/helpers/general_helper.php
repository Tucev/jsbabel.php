<?php

function set_user($user) {
    if (isset($_SESSION))
        $_SESSION["user"] = serialize($user);
}

function get_user() {
    $CI = & get_instance();
    $CI->load->model('User_model');
    return (isset($_SESSION) && isset($_SESSION['user'])) ? unserialize($_SESSION["user"]) : NULL;
}

function encode_URI_Component($str) {
    $revert = array('%21' => '!', '%2A' => '*', '%27' => "'", '%28' => '(', '%29' => ')');
    return strtr(rawurlencode($str), $revert);
}

function htmlSpaceIfEmpty($string) {
    return empty($string) ? '&nbsp;' : html_escape($string);
}

function get_country($locale) {
    switch ($locale) {
        case 'ar-SA': return 'SA';
        case 'bg-BG': return 'BG';
        case 'ca-ES': return 'ES';
        case 'zh-TW': return 'TW';
        case 'cs-CZ': return 'CZ';
        case 'da-DK': return 'DK';
        case 'de-DE': return 'DE';
        case 'el-GR': return 'GR';
        case 'en-US': return 'US';
        case 'fi-FI': return 'FI';
        case 'fr-FR': return 'FR';
        case 'he-IL': return 'IL';
        case 'hu-HU': return 'HU';
        case 'is-IS': return 'IS';
        case 'it-IT': return 'IT';
        case 'ja-JP': return 'JP';
        case 'ko-KR': return 'KR';
        case 'nl-NL': return 'NL';
        case 'nb-NO': return 'NO';
        case 'pl-PL': return 'PL';
        case 'pt-BR': return 'BR';
        case 'rm-CH': return 'CH';
        case 'ro-RO': return 'RO';
        case 'ru-RU': return 'RU';
        case 'hr-HR': return 'HR';
        case 'sk-SK': return 'SK';
        case 'sq-AL': return 'AL';
        case 'sv-SE': return 'SE';
        case 'th-TH': return 'TH';
        case 'tr-TR': return 'TR';
        case 'ur-PK': return 'PK';
        case 'id-ID': return 'ID';
        case 'uk-UA': return 'UA';
        case 'be-BY': return 'BY';
        case 'sl-SI': return 'SI';
        case 'et-EE': return 'EE';
        case 'lv-LV': return 'LV';
        case 'lt-LT': return 'LT';
        case 'tg-Cyrl-TJ': return 'TJ';
        case 'fa-IR': return 'IR';
        case 'vi-VN': return 'VN';
        case 'hy-AM': return 'AM';
        case 'az-Latn-AZ': return 'AZ';
        case 'eu-ES': return 'ES';
        case 'hsb-DE': return 'DE';
        case 'mk-MK': return 'MK';
        case 'tn-ZA': return 'ZA';
        case 'xh-ZA': return 'ZA';
        case 'zu-ZA': return 'ZA';
        case 'af-ZA': return 'ZA';
        case 'ka-GE': return 'GE';
        case 'fo-FO': return 'FO';
        case 'hi-IN': return 'IN';
        case 'mt-MT': return 'MT';
        case 'se-NO': return 'NO';
        case 'ms-MY': return 'MY';
        case 'kk-KZ': return 'KZ';
        case 'ky-KG': return 'KG';
        case 'sw-KE': return 'KE';
        case 'tk-TM': return 'TM';
        case 'uz-Latn-UZ': return 'UZ';
        case 'tt-RU': return 'RU';
        case 'bn-IN': return 'IN';
        case 'pa-IN': return 'IN';
        case 'gu-IN': return 'IN';
        case 'or-IN': return 'IN';
        case 'ta-IN': return 'IN';
        case 'te-IN': return 'IN';
        case 'kn-IN': return 'IN';
        case 'ml-IN': return 'IN';
        case 'as-IN': return 'IN';
        case 'mr-IN': return 'IN';
        case 'sa-IN': return 'IN';
        case 'mn-MN': return 'MN';
        case 'bo-CN': return 'CN';
        case 'cy-GB': return 'GB';
        case 'km-KH': return 'KH';
        case 'lo-LA': return 'LA';
        case 'gl-ES': return 'ES';
        case 'kok-IN': return 'IN';
        case 'syr-SY': return 'SY';
        case 'si-LK': return 'LK';
        case 'iu-Cans-CA': return 'CA';
        case 'am-ET': return 'ET';
        case 'ne-NP': return 'NP';
        case 'fy-NL': return 'NL';
        case 'ps-AF': return 'AF';
        case 'fil-PH': return 'PH';
        case 'dv-MV': return 'MV';
        case 'ha-Latn-NG': return 'NG';
        case 'yo-NG': return 'NG';
        case 'quz-BO': return 'BO';
        case 'nso-ZA': return 'ZA';
        case 'ba-RU': return 'RU';
        case 'lb-LU': return 'LU';
        case 'kl-GL': return 'GL';
        case 'ig-NG': return 'NG';
        case 'ii-CN': return 'CN';
        case 'arn-CL': return 'CL';
        case 'moh-CA': return 'CA';
        case 'br-FR': return 'FR';
        case 'ug-CN': return 'CN';
        case 'mi-NZ': return 'NZ';
        case 'oc-FR': return 'FR';
        case 'co-FR': return 'FR';
        case 'gsw-FR': return 'FR';
        case 'sah-RU': return 'RU';
        case 'qut-GT': return 'GT';
        case 'rw-RW': return 'RW';
        case 'wo-SN': return 'SN';
        case 'prs-AF': return 'AF';
        case 'gd-GB': return 'GB';
        case 'ar-IQ': return 'IQ';
        case 'zh-CN': return 'CN';
        case 'de-CH': return 'CH';
        case 'en-GB': return 'GB';
        case 'es-MX': return 'MX';
        case 'fr-BE': return 'BE';
        case 'it-CH': return 'CH';
        case 'nl-BE': return 'BE';
        case 'nn-NO': return 'NO';
        case 'pt-PT': return 'PT';
        case 'sr-Latn-CS': return 'CS';
        case 'sv-FI': return 'FI';
        case 'az-Cyrl-AZ': return 'AZ';
        case 'dsb-DE': return 'DE';
        case 'se-SE': return 'SE';
        case 'ga-IE': return 'IE';
        case 'ms-BN': return 'BN';
        case 'uz-Cyrl-UZ': return 'UZ';
        case 'bn-BD': return 'BD';
        case 'mn-Mong-CN': return 'CN';
        case 'iu-Latn-CA': return 'CA';
        case 'tzm-Latn-DZ': return 'DZ';
        case 'quz-EC': return 'EC';
        case 'ar-EG': return 'EG';
        case 'zh-HK': return 'HK';
        case 'de-AT': return 'AT';
        case 'en-AU': return 'AU';
        case 'es-ES': return 'ES';
        case 'fr-CA': return 'CA';
        case 'sr-Cyrl-CS': return 'CS';
        case 'se-FI': return 'FI';
        case 'quz-PE': return 'PE';
        case 'ar-LY': return 'LY';
        case 'zh-SG': return 'SG';
        case 'de-LU': return 'LU';
        case 'en-CA': return 'CA';
        case 'es-GT': return 'GT';
        case 'fr-CH': return 'CH';
        case 'hr-BA': return 'BA';
        case 'smj-NO': return 'NO';
        case 'ar-DZ': return 'DZ';
        case 'zh-MO': return 'MO';
        case 'de-LI': return 'LI';
        case 'en-NZ': return 'NZ';
        case 'es-CR': return 'CR';
        case 'fr-LU': return 'LU';
        case 'bs-Latn-BA': return 'BA';
        case 'smj-SE': return 'SE';
        case 'ar-MA': return 'MA';
        case 'en-IE': return 'IE';
        case 'es-PA': return 'PA';
        case 'fr-MC': return 'MC';
        case 'sr-Latn-BA': return 'BA';
        case 'sma-NO': return 'NO';
        case 'ar-TN': return 'TN';
        case 'en-ZA': return 'ZA';
        case 'es-DO': return 'DO';
        case 'sr-Cyrl-BA': return 'BA';
        case 'sma-SE': return 'SE';
        case 'ar-OM': return 'OM';
        case 'en-JM': return 'JM';
        case 'es-VE': return 'VE';
        case 'bs-Cyrl-BA': return 'BA';
        case 'sms-FI': return 'FI';
        case 'ar-YE': return 'YE';
        case 'en-029': return '029';
        case 'es-CO': return 'CO';
        case 'sr-Latn-RS': return 'RS';
        case 'smn-FI': return 'FI';
        case 'ar-SY': return 'SY';
        case 'en-BZ': return 'BZ';
        case 'es-PE': return 'PE';
        case 'sr-Cyrl-RS': return 'RS';
        case 'ar-JO': return 'JO';
        case 'en-TT': return 'TT';
        case 'es-AR': return 'AR';
        case 'sr-Latn-ME': return 'ME';
        case 'ar-LB': return 'LB';
        case 'en-ZW': return 'ZW';
        case 'es-EC': return 'EC';
        case 'sr-Cyrl-ME': return 'ME';
        case 'ar-KW': return 'KW';
        case 'en-PH': return 'PH';
        case 'es-CL': return 'CL';
        case 'ar-AE': return 'AE';
        case 'es-UY': return 'UY';
        case 'ar-BH': return 'BH';
        case 'es-PY': return 'PY';
        case 'ar-QA': return 'QA';
        case 'en-IN': return 'IN';
        case 'es-BO': return 'BO';
        case 'en-MY': return 'MY';
        case 'es-SV': return 'SV';
        case 'en-SG': return 'SG';
        case 'es-HN': return 'HN';
        case 'es-NI': return 'NI';
        case 'es-PR': return 'PR';
        case 'es-US': return 'US';

        default :return "";
    }
}

function get_display_name($locale) {
    switch ($locale) {
        case 'ar-SA': return 'العربية (المملكة العربية السعودية)';
        case 'bg-BG': return 'български (България)';
        case 'ca-ES': return 'català (català)';
        case 'zh-TW': return '中文(台灣)';
        case 'cs-CZ': return 'čeština (Česká republika)';
        case 'da-DK': return 'dansk (Danmark)';
        case 'de-DE': return 'Deutsch (Deutschland)';
        case 'el-GR': return 'Ελληνικά (Ελλάδα)';
        case 'en-US': return 'English (United States)';
        case 'fi-FI': return 'suomi (Suomi)';
        case 'fr-FR': return 'français (France)';
        case 'he-IL': return 'עברית (ישראל)';
        case 'hu-HU': return 'magyar (Magyarország)';
        case 'is-IS': return 'íslenska (Ísland)';
        case 'it-IT': return 'italiano (Italia)';
        case 'ja-JP': return '日本語 (日本)';
        case 'ko-KR': return '한국어 (대한민국)';
        case 'nl-NL': return 'Nederlands (Nederland)';
        case 'nb-NO': return 'norsk, bokmål (Norge)';
        case 'pl-PL': return 'polski (Polska)';
        case 'pt-BR': return 'Português (Brasil)';
        case 'rm-CH': return 'Rumantsch (Svizra)';
        case 'ro-RO': return 'română (România)';
        case 'ru-RU': return 'русский (Россия)';
        case 'hr-HR': return 'hrvatski (Hrvatska)';
        case 'sk-SK': return 'slovenčina (Slovenská republika)';
        case 'sq-AL': return 'shqipe (Shqipëria)';
        case 'sv-SE': return 'svenska (Sverige)';
        case 'th-TH': return 'ไทย (ไทย)';
        case 'tr-TR': return 'Türkçe (Türkiye)';
        case 'ur-PK': return 'اُردو (پاکستان)';
        case 'id-ID': return 'Bahasa Indonesia (Indonesia)';
        case 'uk-UA': return 'українська (Україна)';
        case 'be-BY': return 'Беларускі (Беларусь)';
        case 'sl-SI': return 'slovenski (Slovenija)';
        case 'et-EE': return 'eesti (Eesti)';
        case 'lv-LV': return 'latviešu (Latvija)';
        case 'lt-LT': return 'lietuvių (Lietuva)';
        case 'tg-Cyrl-TJ': return 'Тоҷикӣ (Тоҷикистон)';
        case 'fa-IR': return 'فارسى (ایران)';
        case 'vi-VN': return 'Tiếng Việt (Việt Nam)';
        case 'hy-AM': return 'Հայերեն (Հայաստան)';
        case 'az-Latn-AZ': return 'Azərbaycan­ılı (Azərbaycan)';
        case 'eu-ES': return 'euskara (euskara)';
        case 'hsb-DE': return 'hornjoserbšćina (Němska)';
        case 'mk-MK': return 'македонски јазик (Македонија)';
        case 'tn-ZA': return 'Setswana (Aforika Borwa)';
        case 'xh-ZA': return 'isiXhosa (uMzantsi Afrika)';
        case 'zu-ZA': return 'isiZulu (iNingizimu Afrika)';
        case 'af-ZA': return 'Afrikaans (Suid Afrika)';
        case 'ka-GE': return 'ქართული (საქართველო)';
        case 'fo-FO': return 'føroyskt (Føroyar)';
        case 'hi-IN': return 'हिंदी (भारत)';
        case 'mt-MT': return 'Malti (Malta)';
        case 'se-NO': return 'davvisámegiella (Norga)';
        case 'ms-MY': return 'Bahasa Melayu (Malaysia)';
        case 'kk-KZ': return 'Қазақ (Қазақстан)';
        case 'ky-KG': return 'Кыргыз (Кыргызстан)';
        case 'sw-KE': return 'Kiswahili (Kenya)';
        case 'tk-TM': return 'türkmençe (Türkmenistan)';
        case 'uz-Latn-UZ': return 'U\'zbek (U\'zbekiston Respublikasi)';
        case 'tt-RU': return 'Татар (Россия)';
        case 'bn-IN': return 'বাংলা (ভারত)';
        case 'pa-IN': return 'ਪੰਜਾਬੀ (ਭਾਰਤ)';
        case 'gu-IN': return 'ગુજરાતી (ભારત)';
        case 'or-IN': return 'ଓଡ଼ିଆ (ଭାରତ)';
        case 'ta-IN': return 'தமிழ் (இந்தியா)';
        case 'te-IN': return 'తెలుగు (భారత దేశం)';
        case 'kn-IN': return 'ಕನ್ನಡ (ಭಾರತ)';
        case 'ml-IN': return 'മലയാളം (ഭാരതം)';
        case 'as-IN': return 'অসমীয়া (ভাৰত)';
        case 'mr-IN': return 'मराठी (भारत)';
        case 'sa-IN': return 'संस्कृत (भारतम्)';
        case 'mn-MN': return 'Монгол хэл (Монгол улс)';
        case 'bo-CN': return 'བོད་ཡིག (ཀྲུང་ཧྭ་མི་དམངས་སྤྱི་མཐུན་རྒྱལ་ཁབ།)';
        case 'cy-GB': return 'Cymraeg (y Deyrnas Unedig)';
        case 'km-KH': return 'ខ្មែរ (កម្ពុជា)';
        case 'lo-LA': return 'ລາວ (ສ.ປ.ປ. ລາວ)';
        case 'gl-ES': return 'galego (galego)';
        case 'kok-IN': return 'कोंकणी (भारत)';
        case 'syr-SY': return 'ܣܘܪܝܝܐ (سوريا)';
        case 'si-LK': return 'සිංහල (ශ්‍රී ලංකා)';
        case 'iu-Cans-CA': return 'ᐃᓄᒃᑎᑐᑦ (ᑲᓇᑕᒥ)';
        case 'am-ET': return 'አማርኛ (ኢትዮጵያ)';
        case 'ne-NP': return 'नेपाली (नेपाल)';
        case 'fy-NL': return 'Frysk (Nederlân)';
        case 'ps-AF': return 'پښتو (افغانستان)';
        case 'fil-PH': return 'Filipino (Pilipinas)';
        case 'dv-MV': return 'ދިވެހިބަސް (ދިވެހި ރާއްޖެ)';
        case 'ha-Latn-NG': return 'Hausa (Nigeria)';
        case 'yo-NG': return 'Yoruba (Nigeria)';
        case 'quz-BO': return 'runasimi (Qullasuyu)';
        case 'nso-ZA': return 'Sesotho sa Leboa (Afrika Borwa)';
        case 'ba-RU': return 'Башҡорт (Россия)';
        case 'lb-LU': return 'Lëtzebuergesch (Luxembourg)';
        case 'kl-GL': return 'kalaallisut (Kalaallit Nunaat)';
        case 'ig-NG': return 'Igbo (Nigeria)';
        case 'ii-CN': return 'ꆈꌠꁱꂷ (ꍏꉸꏓꂱꇭꉼꇩ)';
        case 'arn-CL': return 'Mapudungun (Chile)';
        case 'moh-CA': return 'Kanien\'kéha';
        case 'br-FR': return 'brezhoneg (Frañs)';
        case 'ug-CN': return 'ئۇيغۇرچە (جۇڭخۇا خەلق جۇمھۇرىيىتى)';
        case 'mi-NZ': return 'Reo Māori (Aotearoa)';
        case 'oc-FR': return 'Occitan (França)';
        case 'co-FR': return 'Corsu (France)';
        case 'gsw-FR': return 'Elsässisch (Frànkrisch)';
        case 'sah-RU': return 'саха (Россия)';
        case 'qut-GT': return 'K\'iche (Guatemala)';
        case 'rw-RW': return 'Kinyarwanda (Rwanda)';
        case 'wo-SN': return 'Wolof (Sénégal)';
        case 'prs-AF': return 'درى (افغانستان)';
        case 'gd-GB': return 'Gàidhlig (An Rìoghachd Aonaichte)';
        case 'ar-IQ': return 'العربية (العراق)';
        case 'zh-CN': return '中文(中华人民共和国)';
        case 'de-CH': return 'Deutsch (Schweiz)';
        case 'en-GB': return 'English (United Kingdom)';
        case 'es-MX': return 'Español (México)';
        case 'fr-BE': return 'français (Belgique)';
        case 'it-CH': return 'italiano (Svizzera)';
        case 'nl-BE': return 'Nederlands (België)';
        case 'nn-NO': return 'norsk, nynorsk (Noreg)';
        case 'pt-PT': return 'português (Portugal)';
        case 'sr-Latn-CS': return 'srpski (Srbija i Crna Gora (Prethodno))';
        case 'sv-FI': return 'svenska (Finland)';
        case 'az-Cyrl-AZ': return 'Азәрбајҹан (Азәрбајҹан)';
        case 'dsb-DE': return 'dolnoserbšćina (Nimska)';
        case 'se-SE': return 'davvisámegiella (Ruoŧŧa)';
        case 'ga-IE': return 'Gaeilge (Éire)';
        case 'ms-BN': return 'Bahasa Melayu (Brunei Darussalam)';
        case 'uz-Cyrl-UZ': return 'Ўзбек (Ўзбекистон)';
        case 'bn-BD': return 'বাংলা (বাংলাদেশ)';
        case 'mn-Mong-CN': return 'ᠮᠤᠨᠭᠭᠤᠯ ᠬᠡᠯᠡ (ᠪᠦᠭᠦᠳᠡ ᠨᠠᠢᠷᠠᠮᠳᠠᠬᠤ ᠳᠤᠮᠳᠠᠳᠤ ᠠᠷᠠᠳ ᠣᠯᠣᠰ)';
        case 'iu-Latn-CA': return 'Inuktitut (Kanatami)';
        case 'tzm-Latn-DZ': return 'Tamazight (Djazaïr)';
        case 'quz-EC': return 'runasimi (Ecuador)';
        case 'ar-EG': return 'العربية (مصر)';
        case 'zh-HK': return '中文(香港特別行政區)';
        case 'de-AT': return 'Deutsch (Österreich)';
        case 'en-AU': return 'English (Australia)';
        case 'es-ES': return 'Español (España, alfabetización internacional)';
        case 'fr-CA': return 'français (Canada)';
        case 'sr-Cyrl-CS': return 'српски (Србија и Црна Гора (Претходно))';
        case 'se-FI': return 'davvisámegiella (Suopma)';
        case 'quz-PE': return 'runasimi (Piruw)';
        case 'ar-LY': return 'العربية (ليبيا)';
        case 'zh-SG': return '中文(新加坡)';
        case 'de-LU': return 'Deutsch (Luxemburg)';
        case 'en-CA': return 'English (Canada)';
        case 'es-GT': return 'Español (Guatemala)';
        case 'fr-CH': return 'français (Suisse)';
        case 'hr-BA': return 'hrvatski (Bosna i Hercegovina)';
        case 'smj-NO': return 'julevusámegiella (Vuodna)';
        case 'ar-DZ': return 'العربية (الجزائر)';
        case 'zh-MO': return '中文(澳門特別行政區)';
        case 'de-LI': return 'Deutsch (Liechtenstein)';
        case 'en-NZ': return 'English (New Zealand)';
        case 'es-CR': return 'Español (Costa Rica)';
        case 'fr-LU': return 'français (Luxembourg)';
        case 'bs-Latn-BA': return 'bosanski (Bosna i Hercegovina)';
        case 'smj-SE': return 'julevusámegiella (Svierik)';
        case 'ar-MA': return 'العربية (المملكة المغربية)';
        case 'en-IE': return 'English (Ireland)';
        case 'es-PA': return 'Español (Panamá)';
        case 'fr-MC': return 'français (Principauté de Monaco)';
        case 'sr-Latn-BA': return 'srpski (Bosna i Hercegovina)';
        case 'sma-NO': return 'åarjelsaemiengiele (Nöörje)';
        case 'ar-TN': return 'العربية (تونس)';
        case 'en-ZA': return 'English (South Africa)';
        case 'es-DO': return 'Español (República Dominicana)';
        case 'sr-Cyrl-BA': return 'српски (Босна и Херцеговина)';
        case 'sma-SE': return 'åarjelsaemiengiele (Sveerje)';
        case 'ar-OM': return 'العربية (عمان)';
        case 'en-JM': return 'English (Jamaica)';
        case 'es-VE': return 'Español (Republica Bolivariana de Venezuela)';
        case 'bs-Cyrl-BA': return 'босански (Босна и Херцеговина)';
        case 'sms-FI': return 'sääm´ǩiõll (Lää´ddjânnam)';
        case 'ar-YE': return 'العربية (اليمن)';
        case 'en-029': return 'English (Caribbean)';
        case 'es-CO': return 'Español (Colombia)';
        case 'sr-Latn-RS': return 'srpski (Srbija)';
        case 'smn-FI': return 'sämikielâ (Suomâ)';
        case 'ar-SY': return 'العربية (سوريا)';
        case 'en-BZ': return 'English (Belize)';
        case 'es-PE': return 'Español (Perú)';
        case 'sr-Cyrl-RS': return 'српски (Србија)';
        case 'ar-JO': return 'العربية (الأردن)';
        case 'en-TT': return 'English (Trinidad y Tobago)';
        case 'es-AR': return 'Español (Argentina)';
        case 'sr-Latn-ME': return 'srpski (Crna Gora)';
        case 'ar-LB': return 'العربية (لبنان)';
        case 'en-ZW': return 'English (Zimbabwe)';
        case 'es-EC': return 'Español (Ecuador)';
        case 'sr-Cyrl-ME': return 'српски (Црна Гора)';
        case 'ar-KW': return 'العربية (الكويت)';
        case 'en-PH': return 'English (Philippines)';
        case 'es-CL': return 'Español (Chile)';
        case 'ar-AE': return 'العربية (الإمارات العربية المتحدة)';
        case 'es-UY': return 'Español (Uruguay)';
        case 'ar-BH': return 'العربية (البحرين)';
        case 'es-PY': return 'Español (Paraguay)';
        case 'ar-QA': return 'العربية (قطر)';
        case 'en-IN': return 'English (India)';
        case 'es-BO': return 'Español (Bolivia)';
        case 'en-MY': return 'English (Malaysia)';
        case 'es-SV': return 'Español (El Salvador)';
        case 'en-SG': return 'English (Singapore)';
        case 'es-HN': return 'Español (Honduras)';
        case 'es-NI': return 'Español (Nicaragua)';
        case 'es-PR': return 'Español (Puerto Rico)';
        case 'es-US': return 'Español (Estados Unidos)';


        default :return "";
    }
}

?>