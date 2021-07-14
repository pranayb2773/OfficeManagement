<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Main\TopMenu;
use App\Main\SideMenu;
use App\Main\SimpleMenu;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $pageName = request()->route()->getName();
        $layout = $this->layout($view);

        $view->with('top_menu', TopMenu::menu());
        $view->with('side_menu', SideMenu::menu());
        $view->with('page_name', $pageName);
        $view->with('layout', $layout);
    }

    /**
     * Specify used layout.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function layout($view)
    {
        if (isset($view->layout)) {
            return $view->layout;
        } else if (request()->has('layout')) {
            return request()->query('layout');
        }

        return 'side-menu';
    }
}
