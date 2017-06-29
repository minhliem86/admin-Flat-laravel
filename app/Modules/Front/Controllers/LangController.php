<?php

namespace App\Modules\Front\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Tintuc;

class LangController extends Controller
{
    public function getContact()
    {
        return view('Front::pages.lang');
    }

    public function getNews()
    {
        return view('Front::pages.news');
    }

    public function getNewsdetail($slug = null){

    }

    public function creatNews(){
        $data = [
                'en' => ['title' => 'How are you', 'slug' => \LP_lib::Unicode('How are you'), 'content' => 'Lorem  text'],
                'vi' => ['title' => 'Khỏe không', 'slug' => \LP_lib::Unicode('Khỏe không'), 'content' => 'Bạn có khỏe không'],
        ];
        $tin = new Tintuc;
        $tin->fill($data);
        $tin->save();
        return redirect()->route('f.news', compact('tin'));
    }
}
