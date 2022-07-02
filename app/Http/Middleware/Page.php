<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\View\Factory;

use App\Models\MPage;

class Page
{
    private Factory $factory;

    /**
     * ページミドルウェアのコンストラクタ
     *
     * @param Factory $factory
     */
    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $pageData = MPage
            ::where('name', '=', $request->route()->getName())
            ->firstOrFail();
        $pageData->canonical = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $pageData->ogp_url = $pageData->canonical;
        if (intval($pageData->ogp_is_original_image) === 1) {
        }
        $this->factory->share('pageData', $pageData);

        return $next($request);
    }
}
