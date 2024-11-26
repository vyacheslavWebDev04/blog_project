<x-mail::message>
# Introduction

Ваш пароль: {{ $password }}

<x-mail::button :url="'http://127.0.0.1:8000/admin/users'">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
