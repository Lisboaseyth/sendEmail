<x-mail::message>
# Subject: {{ $data['subject'] }}

<p>Message: {{ $data['message'] }}</p>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
