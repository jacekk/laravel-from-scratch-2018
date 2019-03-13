@component('mail::message')
# Project has been created

The body of your message. Foo bar.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
