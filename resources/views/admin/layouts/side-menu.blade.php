@extends('admin.main')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    <div class="flex overflow-hidden">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="" class="intro-x flex items-center pl-5 pt-4 mt-3">
                <img alt="Tinker Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                <span class="hidden xl:block text-white text-lg ml-3">
                    Tink<span class="font-medium">er</span>
                </span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                @foreach ($side_menu as $menuKey => $menu)
                    <li>
                        <a
                            href="javascript:;"
                            data-href="{{ isset($menu->url) ? route($menu->url, $menu->params) : 'javascript:;' }}"
                            class="{{request()->routeIs($menu->url) ? 'side-menu side-menu--active' : 'side-menu'}}"
                        >
                            <div class="side-menu__icon">
                                <i data-feather="{{ $menu->icon }}"></i>
                            </div>
                            <div class="side-menu__title">
                                {{ $menu->title }}
                                @if(count($menu->children))
                                    <div class="side-menu__sub-icon transform rotate-180">
                                        <i data-feather="chevron-down"></i>
                                    </div>
                                @endif
                            </div>
                        </a>
                        @if(count($menu->children))
                            @include('admin.layouts.side-menu-children', ['menuChildren' => $menu->children])
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content @yield('content-modifier')">
            @include('admin.components.top-bar')
            @yield('subcontent')
        </div>
        <!-- END: Content -->
    </div>
@endsection
