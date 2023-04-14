
@if ($alert = session()->pull('alert'))

    <div class="alert alert-{{session()->pull('alert_status')}} mb-0 rounded-0 text-center" role="alert">
        @if(is_array($alert))
            <ul style="list-style-type: none">
                @foreach($alert as $alert_item)
                    <li>{{__($alert_item)}}</li>
                @endforeach
            </ul>
            @else
            {{__($alert)}}
        @endif
    </div>
@endif
