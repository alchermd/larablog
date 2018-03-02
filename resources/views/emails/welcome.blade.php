@component('mail::message')
# Hello, {{ $user->username }}!

We are very happy to have you in our community. Exciting discussions await you! 

But before that, be aware of our rules and guidelines:

- be respectful to one another

- keep discussions on topic

- never share your account credentials to anyone!

@component('mail::button', ['url' => url('/')])
Shall we start?
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
