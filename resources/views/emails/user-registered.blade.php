<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Mirashka</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <div style="text-align: center; margin-bottom: 30px;">
            <h1 style="color: #2c3e50; margin: 0;">Mirashka</h1>
            <p style="color: #7f8c8d; margin-top: 5px;">Your Trusted Media Partner</p>
        </div>

        <h2 style="color: #2c3e50;">Welcome, {{ $user->name }}!</h2>

        <p>Your account has been successfully created. You can now access our client portal with your credentials.</p>

        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin: 20px 0;">
            <h3 style="margin-top: 0; color: #495057;">Your Login Details:</h3>
            <p style="margin: 5px 0;"><strong>Email/Username:</strong> {{ $user->email }}</p>
            <p style="margin: 5px 0;"><strong>Login URL:</strong> <a href="{{ route('clientportallogin') }}" style="color: #3498db;">{{ route('clientportallogin') }}</a></p>
        </div>

        <p>With your account, you can:</p>
        <ul>
            <li>Access exclusive content and resources</li>
            <li>Register for webinars and events</li>
            <li>View your case studies and project updates</li>
            <li>Connect with our team</li>
        </ul>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; text-align: center;">
            <p style="color: #7f8c8d; font-size: 14px;">
                If you have any questions, please contact us at info@mirashka.in
            </p>
            <p style="color: #7f8c8d; font-size: 14px;">
                &copy; {{ date('Y') }} Mirashka. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>

