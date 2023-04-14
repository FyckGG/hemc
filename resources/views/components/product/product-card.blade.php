@props(['ref'=>'',
'img_src'=>'storage/default-imgs/default-product-photo.png',
'name'=>'name',
])

{{--<div class="card" >--}}
{{--    <a class="link-dark text-decoration-none"--}}
{{--href="{{url()->current()}}/{{$type->id}}">--}}
{{--        <div class="card-body">--}}
{{--            <img src="{{asset($type->path_to_directory)}}" height="140px" width="140px"/>--}}
{{--            <h5 class="card-title">{{$type->type_name}}</h5>--}}
{{--        </div>--}}
{{--    </a>--}}
{{--</div>--}}

<div class="card" >
    <a class="link-dark text-decoration-none"
       href="{{url()->current()}}/{{$ref}}">
        <div class="card-body">
            <img src="{{asset($img_src)}}" height="140px" width="140px"/>
            <h5 class="card-title">{{__($name)}}</h5>
        </div>
    </a>
</div>
