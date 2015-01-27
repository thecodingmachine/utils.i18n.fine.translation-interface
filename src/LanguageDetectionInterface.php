<?php 
/*
 * Copyright (c) 2012-2015 Marc TEYSSIER
 * 
 * See the file LICENSE.txt for copying permission.
 */
namespace Mouf\Utils\I18n\Fine;

/**
 * The language detection interface is used to fix the languagae detector.
 * It has only one method getLanguage to return the current language.
 * 
 * @author Marc TEYSSIER
 *
 */
interface LanguageDetectionInterface {
	
	/**
	 * Function return code language. 2 letters like 'en', 'fr' ...
	 * 
	 * @return string
	 */
	public function getLanguage();
}
