<!DOCTYPE html>
<html>
<head>
    <title>HTcons Reply</title>
</head>
<body>
    <p>Hi {{ $parentMessage->name }},</p>
    <p>Thank you for contacting us. Here is our reply to your message:</p>

    <blockquote style="border-left: 4px solid #ccc; padding-left: 15px; margin-left: 0; color: #555;">
        <p><strong>Your original message:</strong></p>
        <p><em>{{ $parentMessage->message }}</em></p>
    </blockquote>

    <div style="background-color: #f5f5f5; padding: 15px; border-radius: 5px; margin-top: 20px;">
        <p><strong>Our reply:</strong></p>
        <p>{{ $reply->message }}</p>
    </div>

    <p>Best regards,</p>
    <p>The HTcons Team</p>
</body>
</html>
