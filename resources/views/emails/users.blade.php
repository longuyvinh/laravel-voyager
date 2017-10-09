@component('mail::message')
# {{ $content['title'] }}

{{ $content['body'] }}

Thanks,
{{ config('app.name') }}
@endcomponent