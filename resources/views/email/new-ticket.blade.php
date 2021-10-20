<!DOCTYPE html>
<html>
<head>
    <title>Spaletta</title>
</head>
<body style="padding: 50px;">
    <p>Új jegyvásárlás</p>
    <p>
        <strong>Rendelési azonosító:</strong> {{ $data['order_number'] }}
    </p>
    <p>
        <strong>Esemény neve:</strong> {{ $data['event_name'] }}
    </p>
    <p>
        <strong>Esemény kezdete:</strong> {{ $data['event_started_at'] }}
    </p>
    <p>
        <strong>Név:</strong> {{ $data['name'] }}
    </p>
    <p>
        <strong>Email:</strong> {{ $data['email'] }}
    </p>
    <p>
        <strong>Telefonszám:</strong> {{ $data['phone_number'] }}
    </p>
    <p>
        <strong>Rendelési cím:</strong> {{ $data['address'] }}
    </p>
    <p>
        <strong>Jegyek száma</strong> {{ $data['quantity'] }}
    </p>

    <p>
        <strong>Teljes összeg::</strong> {{ $data['total'] }} Ft
    </p>

    <a href="{{ URL::to('/') . '/sikeres-vasarlas-visszaigazolasa/' . $data['ticket_id'] . '/' . $data['order_number'] }}">Jegyvásárlás visszaigazolása</a>
</body>
</html>
