@push('css')
    <link href="{{asset('css/form.css') }}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/close.css') }}" type="text/css" rel="stylesheet">
@endpush

@props(['id' => '', 'header' => 'form'])


<div class="custom_form bg-light border p-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded"
id="{{$id}}" style="display: none">
    <div class="close" id="{{$id}}-close"></div>
    <h3>{{__($header)}}</h3>
    <div class="mt-5">
        <form {{$attributes}}>
            {{$slot}}
        </form>
    </div>

</div>
