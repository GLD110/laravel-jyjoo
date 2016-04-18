<?php

namespace App\Http\Controllers\Application;

use App\Base\Controllers\ApplicationController;
use App\Page;

class PageController extends ApplicationController
{
    /**
     * Show the page
     *
     * @param Page $page
     * @return Response
     */
    public function index(Page $page)
    {
        return view('application.page.index', compact('page'));
    }

    /**
     * Show the application homepage to the user.
     *
     * @return Response
     */
    /*public function index()
    {
        $articles = $this->language->articles()->published()->orderBy('published_at', 'desc')->paginate(5);
        return view('application.home.index', compact('articles'));
    }*/
}
