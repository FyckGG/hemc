@props(['description'=>null, 'characteristics' => null, 'terms'=>null])

<div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active link-secondary" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                {{__('Полное описание')}}</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-secondary" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                {{__('Характеристики')}}</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-secondary" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                {{__('Условния доставки/покупки')}}</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
{{--        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">ssvsvsvsdvsdvsdvsdv</div>--}}
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <div>
                @if(empty($description))
                    <div>{{__('Описание отсутствует')}}</div>
                @else
{{--                    {!! $description !!}--}}
                <x-item.product-description :description="$description"/>
                    @endif
            </div>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div>
                @if(empty($characteristics))
                    <div>{{__('Характеристики отсутствуют')}}</div>
                @else
                <x-item.product-characteristics :characteristics="$characteristics"/>
                @endif
            </div>
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            @if(empty($terms))
                <div>{{__('Условия доставки/оплаты отсутствуют')}}</div>
            @else
                <x-item.product-terms-of-purchase :terms="$terms"/>
            @endif
        </div>
    </div>
</div>
</div>
