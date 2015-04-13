<?php

function activeliens($texte){
	    return preg_replace('@([^>"])(https?://[a-z0-9\./+,%#_-]+)@i', '$1<br /><a href="$2" class="spip_out">$2</a>', $texte);
}
