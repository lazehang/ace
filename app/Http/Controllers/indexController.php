<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index() {
        return view('website.index');
    }

    public function cache() {
        $view = \View::make('website.index');

        $html = $view->render();
        try {
            $file = \File::class;
            $file::copy(public_path('/css/app.css'), public_path('/html/css/app.css'));
            $file::copy(public_path('/js/app.js'), public_path('/html/js/app.js'));
            $file::copyDirectory(public_path('/images/'), public_path('/html/images/'));            

            $file::put(public_path('/html/cache.html'), $html);
            return response()->json(['message' => 'success']);

        }catch(\Exception $e) {
            return response()->json($e);
        }
        
    }

    public function inactive() {
        return view('welcome');
    }
}
