<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with http://www.network-science.de/ascii/
    const COPYRIGHT = "
.____                         __________    
|    |    ____  ____   ____   \______   \   
|    |  _/ __ \/  _ \ /    \   |       _/   
|    |__\  ___(  <_> )   |  \  |    |   \   
|_______ \___  >____/|___|  /  |____|_  / /\
        \/   \/           \/          \/  \/
     //
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
