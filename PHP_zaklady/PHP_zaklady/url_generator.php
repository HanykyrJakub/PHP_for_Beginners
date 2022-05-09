<?php
function ToSafeUrlString($urlString)
{
    $urlString = strtolower(trim($str));
    $transliterator = Transliterator::createFromRules('::Any-Latin; :: Latin-ASCII; ');
    $urlString = $transliterator->transliterate($urlString);
    $urlString = preg_replace('','-',$urlString);
    $urlString = preg_replace();
    return trim($urlString, '-');
}
 
echo ToSafeUrlString('Thomas Leti Na Nebe');
?>