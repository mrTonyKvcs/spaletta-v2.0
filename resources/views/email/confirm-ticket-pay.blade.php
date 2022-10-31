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
    <hr/>
    <p>
        <strong>Esemény neve:</strong> {{ $data['event'] }}
    </p>
    <p>
        <strong>Esemény kezdete:</strong> {{ $data['started_at'] }}
    </p>
    <p>
        <strong>Jegyek száma</strong> {{ $data['quantity'] }}
    </p>

    <p>
        <strong>Teljes összeg::</strong> {{ $data['total'] }} Ft
    </p>

    <img src="{{ URL::to('/') . '/qr-codes/' . $data['orderNumber'] . '.png'}}" alt="">
</body>
</html>
