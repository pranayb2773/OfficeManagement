
<ul class="">
    @foreach($menuChildren as $childMenu)
        <li>
            <a

                data-href="{{ isset($childMenu->url) ? route($childMenu->url, $childMenu->params) : 'javascript:;' }}"
                class="{{request()->routeIs($childMenu->url) ? 'side-menu side-menu--active' : 'side-menu'}}"
            >
                <div class="side-menu__icon">
                    <i data-feather="activity"></i>
                </div>
                <div class="side-menu__title">
                    {{$childMenu->title}}
                    @if(count($childMenu->children))
                        <div class="side-menu__sub-icon">
                            <i data-feather="chevron-down"></i>
                        </div>
                    @endif
                </div>
            </a>
            @if(count($childMenu->children))
                @include('admin.layouts.side-menu-children', ['menuChildren' => $childMenu->children])
            @endif
        </li>
    @endforeach
</ul>
