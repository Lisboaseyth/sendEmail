<x-mail::message>
# {{ $data['subject'] }}

<p>{{ $data['message'] }}</p>

<x-mail::button :url="'https://github.com/Lisboaseyth/sendEmail'">
Repositório do Projeto
</x-mail::button>

Atenciosamente,<br>
{{ config('app.name') }}
</x-mail::message>
