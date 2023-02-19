<?php
function getQuote()
{
    return Cache::remember('quote', 60, function () {// Cache for 60 minutes
       return json_decode(file_get_contents('https://api.quotable.io/random?minLength=60&maxLength=140'));
    });
}
