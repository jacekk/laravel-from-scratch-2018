@component('mail::message')
# New Project: {{ $project->title }}

{{ $project->description }}

@component('mail::button', ['url' => $buttonUrl])
Check it out
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
