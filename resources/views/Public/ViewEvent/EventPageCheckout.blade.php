@extends('Public.ViewEvent.Layouts.EventPage')

@section('head')
    @php
        App::setLocale('ar');
    @endphp

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
            $('#university_id , #type ').on('change', function () {
                if ($('#type').val() == 'stud_domain')
                    $('#domainHTML').html($('#university_id').find(':selected').data('stud_domain') );
                else
                    $('#domainHTML').html($('#university_id').find(':selected').data('staff_domain'));

                $('#domain').val($('#domainHTML').html());


                  });


            $('.order_last_name').on('input', function () {
                $('.ticket_holder_first_name').val($(this).val());
            });
            $('.order_first_name').on('input', function () {
                $('.ticket_holder_last_name').val($(this).val());

            });
            $('.order_email').on('input', function () {
                $('.ticket_holder_email').val($(this).val());

            });
        });
    </script>
@stop

