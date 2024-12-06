<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.5;
            background-color: #f7f7f7;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
        }

        p {
            font-size: 16px;
            color: #555555;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #888888;
            margin-top: 20px;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <img src="https://www.rentapartments.info/Gallery/logo/1/logovitalg.png" alt="Company Logo" class="logo">
        <h1>Thank You for Contacting Us!</h1>

        <p>Dear {{ $details['name'] }},</p>

        <p>Thank you for reaching out to us. We have received your message and will get back to you as soon as possible. Your message was:</p>

        <blockquote>
            <p><strong>Message:</strong> {{ $details['message'] }}</p>
        </blockquote>

        <p>We appreciate your interest and we are here to assist you with any questions or concerns. Our team will review your message and get back to you shortly.</p>

        <p>If you have any urgent queries, feel free to contact us directly at <strong>support@yourdomain.com</strong>.</p>

        <a href="{{ url('/') }}" class="btn">Go to Our Website</a>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </div>

</body>

</html>

<!-- MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=2a634e31fdf19d
MAIL_PASSWORD=b609bff95c8b21
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=no-reply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}" -->