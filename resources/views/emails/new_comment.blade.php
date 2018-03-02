@component('mail::message')
# You've got a new comment!

@component('mail::panel')
{{ $comment->user->username }} said:

**{{ $comment->body }}**
@endcomponent

@component('mail::button', ['url' => config('app.url') . 'posts/' . $comment->post->id ])
Reply
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
