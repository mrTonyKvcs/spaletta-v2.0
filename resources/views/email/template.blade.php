<!DOCTYPE html>
<html>
<head>
    <title>Spaletta</title>
</head>
<body>
    <p>Új asztalfoglalás érkezett!</p>
    <p>
        <strong>Név:</strong> {{ $mail['name'] }}
    </p>
    <p>
        <strong>Email:</strong> {{ $mail['email'] }}
    </p>
    <p>
        <strong>Telefonszám:</strong> {{ $mail['phone'] }}
    </p>
    <p>
        <strong>Dátum:</strong> {{ $mail['checkin'] }}
    </p>
    <p>
    <strong>Időpont:</strong> {{ $mail['time'] }}
    </p>
    <p>
        <strong>Vendégek száma:</strong> {{ $mail['persons'] }} fő
    </p>
    <p>
        <strong>Helyszín:</strong> {{ $mail['locale'] }}
    </p>
    <p>
        <strong>Asztalfoglalás meccsnézésre:</strong> {{ $mail['matchmaker'] }}
    </p>
    {{-- @if(isset($mail['carnival']))
        <p>
            <strong>Asztalfoglalás a "Szülinapi farsang" eseményünkre:</strong> {{  $mail['carnival'] }}
        </p>
    @endif --}}
    <p>
        <strong>Megjegyzés:</strong> {{ $mail['comment'] }}
    </p>
</body>
</html>
