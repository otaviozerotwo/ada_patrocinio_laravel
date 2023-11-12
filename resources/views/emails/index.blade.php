@component('mail::message')

<p>Olá, {{ $user->name }}</p>

@component('mail::button', ['url' => url('verify/' .$user->remember_token)])
Clique aqui para validar seu cadastro

@endcomponent

{{ config('app.name') }}

@endcomponent