<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UrlController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $refChars = array (0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        

        $longUrl = request()->input('url');
        $shortUrl = '';
        for ($i=0; $i<6;   $i++) {
            $shortUrl .= $refChars[mt_rand(0,62)];
        }
        
        $url = new Url;

        $url->longUrl = $longUrl;

        $url->shortUrl = $shortUrl;

        $url->save();
       
        

        return view('welcome',compact('shortUrl'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function show( $url)
    {
        
        $url = Url::where('shortUrl',$url)->firstOrFail();

        $longUrl = $url->longUrl;

        return redirect($longUrl);
    }


}
