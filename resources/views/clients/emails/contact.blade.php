<!DOCTYPE html>
<html>
<head>
    <title>Informations</title>
</head>
<body>
    <h2>Informations</h2>
    <ul>
        <li><strong>Nom:</strong> {{ $mailData['name'] }}</li>
        <li><strong>Email:</strong> {{ $mailData['email'] }}</li>
        <li><strong>Sujet:</strong> {{ $mailData['sujet'] }}</li>
        <li><strong>Message:</strong> {{ $mailData['message'] }}</li>
    </ul>
</body>
</html>
