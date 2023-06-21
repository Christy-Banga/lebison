<!DOCTYPE html>
<html>
<head>
    <title>Nouvelle réservation de table</title>
</head>
<body>
    <h2>Nouvelle réservation de table</h2>
    <ul>
        <li><strong>Nom:</strong> {{ $mailData['name'] }}</li>
        {{-- <li><strong>Email:</strong> {{ $mailData['email'] }}</li> --}}
        <li><strong>Téléphone:</strong> {{ $mailData['phone'] }}</li>
        <li><strong>Date:</strong> {{ $mailData['date'] }}</li>
        <li><strong>Heure:</strong> {{ $mailData['heure'] }}</li>
        <li><strong>Nombre de personnes:</strong> {{ $mailData['nbpersonne'] }}</li>
        <li><strong>Message:</strong> {{ $mailData['message'] }}</li>
    </ul>
</body>
</html>
