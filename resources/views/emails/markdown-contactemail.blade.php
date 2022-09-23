@component('mail::message')
# Introduction

This email is send from bcs contact form

@component('mail::button', ['url' => $first_name])
Test Button
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
