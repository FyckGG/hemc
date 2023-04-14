@extends('layouts.base')


@section('content')
    <section>
        <x-question-form></x-question-form>
        <x-container>
            @yield('main.content')
        </x-container>
    </section>

@endsection
