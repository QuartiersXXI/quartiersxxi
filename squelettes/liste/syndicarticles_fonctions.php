<?php

/*
 * Pour la syndication de seenthis on extraie le premier lien (s'il existe)
 * pour faire un lien direct
 */
function seenthis_premier_lien($desc, $url_defaut){
	$liens = extraire_balises($desc, 'a');
	$url = isset($liens[1])
		? extraire_attribut($liens[1], 'href')
		: $url_defaut;
	return quote_amp($url);
}

