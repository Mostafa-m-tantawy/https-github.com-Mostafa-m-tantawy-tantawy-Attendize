@extends('Public.ViewEvent.Layouts.EventPage')

@section('head')
    @php
        App::setLocale('ar');
    @endphp

@stop

@section('content')
    @include('Public.ViewEvent.Partials.EventHeaderSection')

    @include('Public.ViewEvent.Partials.EventCreateOrderSection')
    <script>var OrderExpires = {{strtotime($expires)}};</script>
    @include('Public.ViewEvent.Partials.EventFooterSection')


@stop
@section('scripts')
{{--    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>--}}
    <script>

        $('document').ready(function () {
            $('.order_last_name').on('input',function () {
                console.log($(this).val())
                    $('.ticket_holder_first_name').val($(this).val());
            });
            $('.order_first_name').on('input',function () {
                console.log($(this).val())
                $('.ticket_holder_last_name').val($(this).val());

            });
            $('.order_email').on('input',function () {
                console.log($(this).val())
                $('.ticket_holder_email').val($(this).val());

            });
        });
    </script>
@stop

