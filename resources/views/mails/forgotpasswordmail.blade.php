@component('mail::message')
<p>Hello {{ $user->name }}</p>

@component('mail::button', ['url' => url('reset/' . $user->remember_token)])
Reset Your Password
@endcomponent

<p>In case of any issue please contact our team</p>

Thanks.
{{ config('app.name') }}

@endcomponent