<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omi Portfolio Email</title>
</head>
<body>

    <p>Hi there,</p>

    <p>
        You have received a new message from your portfolio contact form.
    </p>

    <hr>

    <p><strong>Name:</strong> {{ $mailData['name_of_sender'] }}</p>

    <p><strong>Email:</strong> {{ $mailData['email_of_sender'] }}</p>

    <p><strong>Subject:</strong> {{ $mailData['subject_of_email'] }}</p>

    <p><strong>Message:</strong></p>
    <p>{{ $mailData['message_of_interview'] }}</p>

    <hr>

    <p>
        Thank you for contacting me. I will get back to you within 48 hours.
    </p>

    <p>
        Kind regards,<br>
        Omi
    </p>

</body>
</html>