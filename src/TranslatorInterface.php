<?php
/*
 * Copyright (c) 2012-2015 Marc TEYSSIER
 *
 * See the file LICENSE.txt for copying permission.
 */
namespace Mouf\Utils\I18n\Fine;


/**
 * The language translation interface is used to fix the the model of the translate object to make a translation
 * This interface contain only on method getTranslation.
 *
 * @author Marc TEYSSIER
 *
 */
interface TranslatorInterface
{
    /**
     * Get the translation of a message or a code
     * This funcvtion return the translate string
     *
     * @param  string                     $message           Message or code to translate
     * @param  array                      $parameters        List of parameters to replace in the translation. In key the value between {} in your translation and in value the value
     * @param  LanguageDetectionInterface $languageDetection It's possile to force the language detection to the value set in parameter
     * @return string                     translation
     */
    public function getTranslation($message, array $parameters = array(), LanguageDetectionInterface $languageDetection = null);
}
