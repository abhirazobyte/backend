<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        '/',
        '/formcountry',
        '/leads',
        
        // '/apply-submit',
        // '/learn-arabic-language',
        // '/learn-chinese-language',
        // '/learn-english-language',
        // '/learn-french-language',
        // '/learn-german-language',
        // '/learn-italian-language',
        // '/learn-japanese-language',
        // '/learn-korean-language',
        // '/learn-russian-language',
        // '/learn-spanish-language',
    ];
}
