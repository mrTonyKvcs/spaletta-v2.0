<!DOCTYPE html>
<html>
<head>
    <title>Spaletta</title>
</head>
<body style="padding: 50px;">
    <p>Utálását sikeresen megkaptuk. A jegyet az üzenet alján találja (QR kód).</p>
    <p>
        <strong>Rendelési azonosító:</strong> {{ $data['orderNumber'] }}
    </p>
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
