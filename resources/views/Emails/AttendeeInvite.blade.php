@extends('en.Emails.Layouts.Master')

@section('message_content')
مرحبا {{$attendee->first_name}},<br><br>

لقد تمت دعوتك إلى الحدث  <b>{{$attendee->order->event->title}}</b>.<br/>
تم إرفاق تذكرتك للحدث بهذا البريد الإلكتروني.
<br><br>
Regards
@stop
