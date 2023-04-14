@push('js')
    <script src="{{asset('js/formOperations.js')}}"></script>
@endpush

<div>
    <div class="text-info fs-4">8-800-555-35-35</div>
    <div class="text-info fs-4">8-800-555-35-35</div>
    <div class="d-flex">
        <div>Email:&nbsp</div>
        <div>
            ggwp@gmail.com
        </div>
    </div>
    <button type="button" class="btn btn-warning mt-2" onclick="showQuestionForm()">
        {{__('Отправить заявку')}}</button>
</div>
