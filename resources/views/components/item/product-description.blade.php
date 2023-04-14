{{--@php--}}
{{--    $description = "<div><img src='http://hemc/storage/default-imgs/default-product-photo.png'></img></div>--}}
{{--    <div><img src='http://hemc/storage/default-imgs/default-product-photo.png'></img></div>--}}
{{--    <h3>Product1 description</h3>";--}}
{{--@endphp--}}

@props(['description'=>null])



<div class="mt-5">
    {!!$description!!}
{{--    {{htmlentities($description)}}--}}
</div>
