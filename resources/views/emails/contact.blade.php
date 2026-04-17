<!DOCTYPE html>
<html>
<head>
    <title>Contact Message</title>
</head>
<body style="font-family: Arial; background-color:#f4f4f4; padding:20px;">

    <div style="background:white; padding:20px; border-radius:8px;">
        <h2 style="color:#0d6efd;">New Contact Message</h2>

        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>

        <hr>

        <p><strong>Message:</strong></p>
        <p>{{ $data['message'] }}</p>
    </div>

</body>
</html>
