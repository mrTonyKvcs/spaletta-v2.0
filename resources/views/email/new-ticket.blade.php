<!DOCTYPE html>
<html>
<head>
    <title>Spaletta</title>
</head>
<body style="padding: 50px;">
    <h3>Új jegyvásárlás</h3>
    <p>
        <strong>Rendelési azonosító:</strong> {{ $data['order_number'] }}
    </p>
    <p>
        <strong>Esemény neve:</strong> {{ $data['event']->title }}
    </p>
    <p>
        <strong>Esemény kezdete:</strong> {{ $data['event']->started_at }}
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
        <strong>Jegyek: </strong> 
        @foreach($data['prices'] as $item)
            <p>{{ $item['category']['name'] . ': ' . $item['price'] . 'Ft/db' . ' Összesen: ' . $item['quantity'] }}</p>
        @endforeach
    </p>

    <p>
        <strong>Teljes összeg:</strong> {{ $data['total'] }} Ft
    </p>

</body>
</html>
