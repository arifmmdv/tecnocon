<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Page;
use Illuminate\Support\Facades\App;

class FrontEndController extends Controller
{
    public function index() {
        $page = Page::find(1);
        return view('templates.home',compact('page'));
    }
    public function locale($locale) {
        App::setLocale($locale);
        $page = Page::find(1);
        return view('templates.home',compact('page'));
    }
    public function page($locale,$slug) {
        App::setLocale($locale);
        $page = Page::where('parent_id',null)->where('slug',$slug)->firstOrFail();
        if (isset($page->template)) {
            $template_name = $page->template->name;
        } else {
            $template_name = 'content';
        }
        return view("templates.{$template_name }",compact('page'));
    }

    public function child($locale, $parent, $slug) {
        App::setLocale($locale);
        $page = Page::where('parent_id','!=',0)->where('slug',$slug)->firstOrFail();
        if (isset($page->template)) {
            $template_name = $page->template->name;
        } else {
            $template_name = 'content';
        }
        return view("templates.{$template_name}",compact('page'));
    }

    public function product($locale, $slug) {
        App::setLocale($locale);
        $page = Page::where('parent_id',null)->where('slug','mehsullar')->firstOrFail();
        $product = Product::where('is_visible',1)->where('slug',$slug)->firstOrFail();
        return view("templates.product",compact('page','product'));
    }
}
