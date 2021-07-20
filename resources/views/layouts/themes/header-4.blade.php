<header class="text-gray-600 body-font" _msthidden="6">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center" _msthidden="6">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" _msthidden="1">
{{--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">--}}
{{--                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>--}}
{{--            </svg>--}}
            <span class="ml-3 text-xl" _msthash="511478" _msttexthash="156481" _msthidden="1">{{get_options("web_name","CodeFec")}}</span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center" _msthidden="4">
            @foreach(Itf()->get("core_menu") as $value)
                <a class="mr-5 hover:text-gray-900" href="{{$value['url']}}">{{$value['name']}}</a>
            @endforeach
        </nav>
        @include('plugins.Core.layouts.themes.search')
    </div>
</header>