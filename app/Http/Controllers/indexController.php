<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contentful;

class indexController extends Controller
{
    private $contentful;

    public function __construct(Contentful $client) {
        $this->contentful = $client;
    }
    public function index() {
        $news = $this->contentful->getNews()->getItems();
        $latest = array_slice($news, 0, 2);
        return view('website.index', [
            'entries' => $news,
            'latest' => $latest
        ]);
    }

    public function cache() {
        $news = $this->contentful->getNews()->getItems();
        $latest = array_slice($news, 0, 2);
        $view = \View::make('website.index', [
            'entries' => $news,
            'latest' => $latest
        ]);

        $html = $view->render();
        try {
            $file = \File::class;
            $file::put(public_path('/html/index.html'), $html);
            return response()->json(['message' => 'success']);

        }catch(\Exception $e) {
            return response()->json($e);
        }
        
    }

    public function inactive() {
        return view('welcome');
    }

    public function news($slug)
    {
        $news = $this->contentful->getNews($slug)->getItems();

        return view('website.post', [
            'news' => $news[0]
        ]);
    }


}
