<!DOCTYPE html>
<html>
<head>
    <title>Spaletta</title>
</head>
<body style="padding: 50px;">
    <h2>Köszönjük a jegyvásárlását!</h2>
    <h3>Az email-hez csatolva megtalálja az átutalásos számlát.<br><br><strong>Fizetési  határidő: </strong> <span style="color: red;">{{ $data['payment_expired'] }}</span><br><br> Ennek teljesítese után a regisztrált email címre({{ $data['email'] }}) küldjük ki a jegyeket.</h3>
    <br>
    <hr>
    <h3>Rendelési adatok:</h3>
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
</body>
</html>
