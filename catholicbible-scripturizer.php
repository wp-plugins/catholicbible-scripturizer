<?php
/*
Plugin Name: Catholic Bible Scripturizer
Plugin URI: http://www.bibliacatolica.com.br/
Description: Catholic Bible Scripturizer will convert Bible references in your posts and comments into hyperlinks to online Bibles.
Author: Wellington Campos Pinho
Version: 1.0.0
Author URI: http://www.bibliacatolica.com.br/
*/

function r($b){
    switch(true){
        case preg_match('/Genesis|Gênesis|Gen/i', $b): $n = 1; break;
        case preg_match('/Exodus|Exod?|Ex/i', $b): $n = 2; break;
        case preg_match('/Leviticus|Levitico|Lev|Levit?/i', $b): $n = 3; break;
        case preg_match('/Numbers|Números|Numeros|Nmb|Numb?/i', $b): $n = 4; break;
        case preg_match('/Deuteronomy|Deuteronômio|Deut?|Dt/i', $b): $n = 5; break;
        case preg_match('/Joshua|Josue|Josh?/i', $b): $n = 6; break;
        case preg_match('/Judges|Jdg|Judg?|Judite|Jdt/i', $b): $n = 7; break;
        case preg_match('/Ruth|Ru/i', $b): $n = 8; break;
        case preg_match('/1Samuel|1Sam|1Sml/i', $b): $n = 9; break;
        case preg_match('/2Samuel|2Sam|2Sml/i', $b): $n = 10; break;
        case preg_match('/1Reis|1Re/i', $b): $n = 11; break;
        case preg_match('/2Reis|2Re/i', $b): $n = 12; break;
        case preg_match('/1Cronicas|1Cr/i', $b): $n = 13; break;
        case preg_match('/2Cronicas|2Cr/i', $b): $n = 14; break;
        case preg_match('/Esdras|Esd/i', $b): $n = 15; break;
        case preg_match('/Neemias|Ne/i', $b): $n = 16; break;
        case preg_match('/Tobias|Tb/i', $b): $n = 17; break;
        case preg_match('/Judite|Jud/i', $b): $n = 18; break;
        case preg_match('/Ester/i', $b): $n = 19; break;
        case preg_match('/Jó|Job/i', $b): $n = 20; break;
        case preg_match('/Salmos|Salmo|Sl/i', $b): $n = 21; break;
        case preg_match('/1Macabeus|1Mc/i', $b): $n = 22; break;
        case preg_match('/2Macabeus|2Mc/i', $b): $n = 23; break;
        case preg_match('/Provérbios|Pr/i', $b): $n = 24; break;
        case preg_match('/Eclesiastes|Ecle/i', $b): $n = 25; break;
        case preg_match('/Cântico|Ct/i', $b): $n = 26; break;
        case preg_match('/Sabedoria|Sb/i', $b): $n = 27; break;
        case preg_match('/Eclesiástico|Eclo/i', $b): $n = 28; break;
        case preg_match('/Isaías|Is/i', $b): $n = 29; break;
        case preg_match('/Jeremias|Jr/i', $b): $n = 30; break;
        case preg_match('/Lamentações|Lm/i', $b): $n = 31; break;
        case preg_match('/Baruc|Br/i', $b): $n = 32; break;
        case preg_match('/Ezequiel|Ez/i', $b): $n = 33; break;
        case preg_match('/Daniel|Dn/i', $b): $n = 34; break;
        case preg_match('/Oséias|Os/i', $b): $n = 35; break;
        case preg_match('/Joel|Jl/i', $b): $n = 36; break;
        case preg_match('/Amós|Am/i', $b): $n = 37; break;
        case preg_match('/Abdias|Ab/i', $b): $n = 38; break;
        case preg_match('/Jonas|Jn/i', $b): $n = 39; break;
        case preg_match('/Miquéias|Mq/i', $b): $n = 40; break;
        case preg_match('/Naum|Na/i', $b): $n = 41; break;
        case preg_match('/Habacuc|Hab/i', $b): $n = 42; break;
        case preg_match('/Sofonias|Sf/i', $b): $n = 43; break;
        case preg_match('/Ageu|Ag/i', $b): $n = 44; break;
        case preg_match('/Zacarias|Zc/i', $b): $n = 45; break;
        case preg_match('/Malaquias|Ml/i', $b): $n = 46; break;
        case preg_match('/Mateus|Mt/i', $b): $n = 47; break;
        case preg_match('/Marcos|Mc/i', $b): $n = 48; break;
        case preg_match('/Lucas|Lc/i', $b): $n = 49; break;
        case preg_match('/João|Jo/i', $b): $n = 50; break;
        case preg_match('/Atos|At/i', $b): $n = 51; break;
        case preg_match('/Romanos|Rm/i', $b): $n = 52; break;
        case preg_match('/1Coríntios|1Cor/i', $b): $n = 53; break;
        case preg_match('/2Coríntios|2Cor/i', $b): $n = 54; break;
        case preg_match('/Gálatas|Gl/i', $b): $n = 55; break;
        case preg_match('/Efésios|Ef/i', $b): $n = 56; break;
        case preg_match('/Filipenses|Fl/i', $b): $n = 57; break;
        case preg_match('/Colossenses|Cl/i', $b): $n = 58; break;
        case preg_match('/1Tessalonicenses|1Ts/i', $b): $n = 59; break;
        case preg_match('/2Tessalonicenses|2Ts/i', $b): $n = 60; break;
        case preg_match('/1Timóteo|1Tm/i', $b): $n = 61; break;
        case preg_match('/2Timóteo|2Tm/i', $b): $n = 62; break;
        case preg_match('/Tito|Tt/i', $b): $n = 63; break;
        case preg_match('/Filemon|Fm/i', $b): $n = 64; break;
        case preg_match('/Hebreus|Hb/i', $b): $n = 65; break;
        case preg_match('/Tiago|Tg/i', $b): $n = 66; break;
        case preg_match('/1Pedro|1Pd/i', $b): $n = 67; break;
        case preg_match('/2Pedro|2Pd/i', $b): $n = 68; break;
        case preg_match('/1João|1Jo/i', $b): $n = 69; break;
        case preg_match('/2João|2Jo/i', $b): $n = 70; break;
        case preg_match('/3João|3Jo/i', $b): $n = 71; break;
        case preg_match('/Judas|Jd/i', $b): $n = 72; break;
        case preg_match('/Apocalipse|Ap/i', $b): $n = 73; break;
        
        default: $n = 1; break;
    }
    return $n;
}

function CButURLLinks($url){
    $array = explode(" ", $url[0]);
    $b = $array[0];
    $c = explode(",", $array[1]);
    return '<a href="http://www.bibliacatolica.com.br/01/' . r($b) . '/'. $c[0] .'.php" target="_blank">' . $url[0] . '</a>';
}

function CatholicBible($content){
    $vol = 'I+|1st|2nd|3rd|First|Second|Third|1|2|3';
    $bok = 'Genesis|Gênesis|Gen|Exodus|Êxodo|Exod?|Leviticus|Lev|Levit?|Nummeros|Númmeros|Numbers|Nmb|Numb?|Deuteronomy|Deut?|Joshua|Josh?|Judges|Jdg|Judg?|Ruth|Ru|1Samuel|1Sam|2Samuel|2Sam|Sml|1Reis|2Reis|Kings|Kngs?|Kin?|Chronicles|Chr|Chron|1Cronicas|1Cr|2Cronicas|2Cr|1Crônicas|2Crônicas|Ezra|Ez|';
    $bok .= 'Nehemiah|Nehem?|Esther|Esth?|Job|Jb|Salmos|Salmo|Psalms?|Psa?|Proverbs?|Prov?|Ecclesiastes|Eccl?|Songs?ofSolomon|Song?|Songs|Isaiah|Isa|Jeremiah|Jer|Jerem|Lamentations|Lam|Lament?|Ezekiel|Ezek?|Daniel|Dan|Hosea|';
    $bok .= 'Hos|Joel|Amos|Am|Obadiah|Obad?|Jonah|Jon|Micah|Mic|Nahum|Nah|Habakkuk|Hab|Habak|Zephaniah|Zeph|Haggai|Hag|Hagg|Zechariah|Zech?|Malachi|Malac?|Mal|Mat{1,2}hew|Mat?|Mark|Mrk|Luke|Lu?k|John|João|1João|2João|3João|1Jo|2Jo|3Jo|Jhn|1Pedro|2Pedro|';
    $bok .= 'Acts?|Ac|Romans|Rom|Corinthians|1Cor|2Cor|Cor|Corin|Galatians|Gal|Galat|Ephesians|Eph|Ephes|Philippians|Phili?|Colossians|Col|Colos|Thessalonians|Thes?|Timothy|Tim|Titus|Tts|Tit|Philemon|Phil?|';
    $bok .= 'Hebrews|Hebr?|James|Jam|Jms|Peter|Pete?|Pedro|Marcos|Lucas|Jude|Judas|Ju|Revelations?|Rev|Revel|Apocalipse|';
    $bok .= 'Gn|Ex|Lv|Nm|Dt|Js|Jz|Rt|1Sm|2Sm|1Rs|2Rs|1Cr|2Cr|Esd|Ne|Tb|Jud|Jdt|Est|1Mc|2Mc|Jó|Job|Sl|Pr|Ecl|Ct|Sb|Eclo|Is|Jr|Lm|Br|Ez|Dn|Os|Jl|Am|Ab|Jn|Mq|Na|Hab|Sf|Ag|Zc|Ml|Mt|Mc|Lc|Jo|At|Rm|Gl|Ef|Fl|Cl|1Ts|2Ts|1Tm|2Tm|Tt|Fm|Hb|Tg|1Pd|2Pd|1Jo|2Jo|3Jo|Jd|Ap';
    
    $ver = '\\d+(:\\d+)?(?:\\s?[-&]\\s?\\d+)?';
    $regex = '\\b(?:('.$vol.')\\s+)?('.$bok.')\\s+('.$ver.'(?:\\s?,\\s?'.$ver.')*)\\b';
    
    preg_match_all(".$regex.", $content, $urls);
    $urls = preg_replace('/\//', '\/', $urls[0]);

    $n = count($urls);
    for($i = 0; $i < $n; $i++){
        $urls[$i] = '/' . $urls[$i] . '/';
    }

    $content = preg_replace_callback($urls, 'CButURLLinks', $content);

    return $content;      
}
add_filter('the_content', 'CatholicBible');

?>