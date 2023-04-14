@php
    //use Illuminate\Support\Facades\Config;
  // Config::set('constants.urlNames.Product1', 'products/1/product/1');
     //$gg =  Config::get('constants.urlNames');
    // dd($gg);
        $currentPaths = get_current_routes();
        $pathNames = config('constants.urlNames');
        //dd($pathNames);
        $regExpIgnoreUrl = config('constants.regExpIgnoreUrl');
        $namedPaths = [];
        foreach ($currentPaths as $key => $value) {
            if (in_array($value, $pathNames)) {
                $key = array_search($value, $pathNames);
                $namedPaths[$key] = $value;
            }
            else {
                $is_ignore = false;
                foreach ($regExpIgnoreUrl as $item) {
                    $is_ignore = (boolean) preg_match($item, $value);
                }
                if (!$is_ignore) {
                 $namedPaths[$key] = $value;
                }
            };
        }
    @endphp

<nav aria-label="breadcrumb" class="ms-2 p-2">
{{--    @if (count($currentPath) > 1)--}}
    @if ($currentPaths[0] != '/')

    <ol class="breadcrumb">
        <li class="breadcrumb-item fs-6"><a href="{{url('/')}}" class="link-dark text-decoration-none">{{__('Главная')}}</a></li>
        @foreach ($namedPaths as $key => $item)
        <li class="breadcrumb-item fs-6"><a href="{{url($item)}}" class="link-dark text-decoration-none">{{__($key)}}</a></li>
{{--        <li class="breadcrumb-item"><a href="#">{{__('О нас')}}</a></li>--}}
{{--        <li class="breadcrumb-item active" aria-current="page">{{__('О нас')}}</li>--}}
        @endforeach
    </ol>

    @endif
</nav>

{{--<a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>--}}
{{--dd(Route::currentRouteName());--}}
