<?php

namespace App\Main;

use App\Models\Sitelinks;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return Sitelinks::where('parentId', 0)->get();
    }
}
