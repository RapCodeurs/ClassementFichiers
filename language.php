<?php

function loadLanguage(string $language){
    if($language === 'fr'){
        require_once 'language/language_fr.php';
    }else {
        require_once 'language/language_en.php';
    }
} 