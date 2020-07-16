@component('mail::message')
# LaraDev

Olá, você recebeu um novo contato a partir do seu site!

{{--@php var_dump($email); die(); @endphp--}}

Nome: <b>{{ $email['first_name'] }} {{ $email['last_name'] }}</b>

Email: {{ $email['email']  }}

Sobre: {{ $email['subject']  }}

Menssagem:

@component('mail::panel')
    {{ $email['message']  }}
@endcomponent

@endcomponent
