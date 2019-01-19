{{--@component('mail::message')--}}
    {{----}}
    {{--<h4>Your Question : {{ $inquiry->message }}</h4>--}}
    {{--<h4>Answer : </h4>--}}
    {{--<p>--}}
        {{--{{ $answer }}--}}
    {{--</p>--}}
    {{----}}
    {{--Thanks,<br>--}}
    {{--{{ config('app.name') }}--}}
    {{----}}
{{--@endcomponent--}}<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<h4>Your Question : {{ $inquiry->message }}</h4>
<h4>Answer : </h4>
<p>
{{ $answer }}
</p>

Thanks,<br>
{{ config('app.name') }}

</body>
</html>