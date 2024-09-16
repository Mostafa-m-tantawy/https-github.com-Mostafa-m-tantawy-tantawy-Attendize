@extends('Emails.Layouts.Master')

@section('message_content')
    <pre>
مرحباً : {{$order->full_name}}
سعدنا بتسجيلك للقاء الحواري : {{$order->event->title}}

مرفق لكم من خلال هذا البريد تذكرة الحضور
<a href="{{route('showOrderTickets', ['order_reference' => $order->order_reference])}}">{{route('showOrderDetails', ['order_reference' => $order->order_reference])}}</a>

لإضافة موعد اللقاء للتقويم
<a href="{!! route('downloadCalendarIcs', ['event_id' => $order->event->id]) !!}">أضف إلى التقويم</a>
<strong>
    يوجد شهادات حضور لمن يقوم بتعبئة نموذوج استطلاع الرآي
</strong>

رابط نموذج الاستطلاع سيرسل لكم عبر البريد
<strong>
سيتم احتساب حضور الجلسات في سجل مهاري لطلبة جامعة الملك سعود
</strong>


        شاكرين ومقدرين لكم أهتمامكم
والله يحفظكم ويرعاكم،،،

    </pre>
@stop
