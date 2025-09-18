<!DOCTYPE html>
<html>

<head>
    <title>Spaletta</title>
</head>

<body style="padding: 50px;">
    <p>Köszönjük. Sikeres tranzakció és jegyvásárlás.</p>
    <p>
        <strong>SimplePay tranzakció azonosító:</strong> {{ $data['transaction_id'] }}
    </p>
    <p>
        <strong>Rendelési azonosító:</strong> {{ $data['orderNumber'] }}
    </p>
    <hr />
    <p>
        <strong>Esemény neve:</strong> {{ $data['event'] }}
    </p>
    <p>
        <strong>Esemény kezdete:</strong> {{ $data['started_at'] }}
    </p>
    <p>
        <strong>Jegyek: </strong>
        @foreach ($data['prices'] as $item)
            <p>{{ $item['category']['name'] . ': ' . $item['price'] . 'Ft/db' . ' Összesen: ' . $item['quantity'] }}</p>
        @endforeach
    </p>

    <p>
        <strong>Teljes összeg::</strong> {{ $data['total'] }} Ft
    </p>

    <hr>

    <p style="font-size: 20px;">
        <strong>Jegyek letöltéséhez használd az alábbi linket:</strong> <a
            href="{{ route('ticket.download', $data['encrypted']) }}" style="color: #ffb606; font-weight: bold">Jegyek
            letöltése</a>
    </p>

</body>

</html>
