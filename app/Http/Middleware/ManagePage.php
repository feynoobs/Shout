<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\View\Factory;

use App\Models\MManagePage;

class ManagePage
{

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
        if ($request->method() === 'GET') {
            $pageData = MManagePage
                ::where('name', '=', $request->route()->getName())
                ->firstOrFail();
            $pankzu[] = $pageData;
            $prevData = $pageData;
            for (;!is_null($prevData->parent_id);) {
                $prevData = MManagePage::findOrFail($prevData->parent_id);
                $pankzu[] = $prevData;
            }
            $pageData->pankzu = array_reverse($pankzu);
            $this->factory->share('pageData', $pageData);

            $sideMenu = MManagePage
                ::where('group', '=', $pageData->group)
                ->where('is_sidemenu', '=', 1)
                ->whereNull('parent_id')
                ->orderBy('id', 'asc')
                ->get();
            foreach ($sideMenu as &$data) {
                $subMenu = MManagePage
                    ::where('is_sidemenu', '=', 1)
                    ->where('parent_id', '=', $data->id)
                    ->orderBy('id', 'asc')
                    ->get();
                $data->subMenu = $subMenu;
            }
            unset($data);
            $this->factory->share('sideMenu', $sideMenu);
        }
        return $next($request);
    }
}
