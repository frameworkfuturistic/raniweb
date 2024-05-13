@component('mail::message')
<p>Hello {{ $user->name }}</p>

@component('mail::button', ['url' => url('verify/' . $user->remember_token)])
Verify
@endcomponent

<p>In case of any issue please contact our team</p>

Thanks.
{{ config('app.name') }}

@endcomponent