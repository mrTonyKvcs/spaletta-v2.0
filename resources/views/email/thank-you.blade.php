<!DOCTYPE html>
<html>
<head>
    <title>Spaletta</title>
</head>
<body style="padding: 50px;">
    <p>Köszönjük a rendelését! Rendelését <a href="{{ route('pages.order', $mail->id) }}">itt</a> tudja követni.</p>
    <p>
        <strong>Név:</strong> {{ $mail->user->name }}
    </p>
    <p>
        <strong>Email:</strong> {{ $mail->user->email }}
    </p>
    <p>
        <strong>Telefonszám:</strong> {{ $mail->user->phone_number }}
    </p>
    <p>
        <strong>Rendelési cím:</strong> {{ $mail->delivery_address->name }}
    </p>
    <p>
        <strong>Rendelési cím megjegyzés:</strong> {{ $mail->delivery_address->comment }}
    </p>
    <p>
        <strong>Üzenet:</strong> {{ $mail->comment }}
    </p>

    @component('mail::table')
        <table>
            <tr style="text-align: center;">
                <th style="text-align: center;">Étel</th>
                <th style="text-align: center;">Mennyiség</th>
                <th style="text-align: center;">Ár</th>
            </tr>
            @foreach($mail->items as $item)
                <tr style="text-align: center;">
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }} db</td>
                    <td>{{ $item->product->price }}Ft</td>
                </tr>
            @endforeach
        </table>
    @endcomponent

    <p>
        <strong>Teljes összeg::</strong> {{ $mail->total }} Ft
    </p>
</body>
</html>
