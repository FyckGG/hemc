@php
        $currentPaths = get_current_routes();
        //dd($currentPaths);
        $pathNames = config('constants.urlNames');
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
                    preg_match('#[a-zA-Z0-9]+\/([a-zA-Z0-9-_.]+$)#', $value, $matches);
                    if (count($matches) > 1)
                $namedPaths[$matches[1]] = $value;
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
        @endforeach
    </ol>

    @endif
</nav>

