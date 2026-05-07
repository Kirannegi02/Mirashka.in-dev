<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thanks for your enquiry</title>
</head>
<body style="margin:0; padding:0; background:#f4f6f5; font-family:Arial, Helvetica, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="padding:20px 0;">
        <tr>
            <td align="center">
                <table width="620" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden;">
                    <tr>
                        <td style="background:#006039; padding:20px; text-align:center; color:#fff;">
                            <h2 style="margin:0; font-size:20px;">Thank You for Your Project Enquiry</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:28px; color:#1f2937;">
                            <p style="margin-top:0; font-size:15px;">Hi <strong>{{ $contact->name }}</strong>,</p>
                            <p style="font-size:15px; line-height:1.6;">
                                Thank you for sharing your project requirements with Mirashka.
                                Our team has received your enquiry and will get in touch shortly.
                            </p>

                            <div style="background:#f0f8f5; border-left:4px solid #006039; padding:12px; margin:18px 0;">
                                <p style="margin:0; font-size:14px;"><strong>Project:</strong> {{ $contact->company_name ?? 'N/A' }}</p>
                                <p style="margin:8px 0 0; font-size:14px;"><strong>Details:</strong> {{ $contact->message }}</p>
                            </div>

                            <p style="font-size:14px; color:#4b5563;">We typically respond within 24 business hours.</p>
                            <p style="margin-bottom:0; font-size:14px; color:#4b5563;">
                                Regards,<br>
                                <strong style="color:#006039;">Team Mirashka</strong>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
