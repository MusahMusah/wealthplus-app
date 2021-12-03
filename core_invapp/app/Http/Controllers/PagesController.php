<?php
namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
    public function __invoke($page)
    {
        $metaTitle = __('Meta Title: '.$page); 
        $template = 'frontendnew.pages.'. $page;
        
        ($metaTitle === 'Meta Title: '. $page)
        ? $metaTitle === 'Meta Title: '. $page 
        : $metaTitle = null;

        $page = Page::where('slug', $page)->firstOrFail();
        
        $data = [
          'pgtitle' => data_get($page, 'seo.title') ? data_get($page, 'seo.title') : data_get($page, 'name'),
          'pgdesc' => data_get($page, 'seo.description') ? data_get($page, 'seo.description') : gss('seo_description', ''),
          'pgkeyword' => data_get($page, 'seo.keyword') ? data_get($page, 'seo.keyword') : gss('seo_keyword', ''),
          'title' => data_get($page, 'title') ? data_get($page, 'title') : data_get($page, 'name'),
        ];

        return (View::exists($template)) 
        ? view($template, ['metaTitle' => $metaTitle])->with($data) 
        : abort(404);            
        
    }

}
