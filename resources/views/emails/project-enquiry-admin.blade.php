<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Project Enquiry</title>
</head>
<body style="margin:0; padding:0; background:#f4f6f5; font-family:Arial, Helvetica, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="padding:20px 0;">
        <tr>
            <td align="center">
                <table width="620" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden;">
                    <tr>
                        <td style="background:#006039; padding:16px 20px; color:#fff;">
                            <h2 style="margin:0; font-size:18px;">New Project Enquiry Received</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:24px; color:#1f2937; font-size:14px;">
                            <p style="margin-top:0;">A new project enquiry was submitted from the website.</p>
                            <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse; background:#fafafa;">
                                <tr>
                                    <td width="32%" style="border:1px solid #e5e7eb;"><strong>Name</strong></td>
                                    <td style="border:1px solid #e5e7eb;">{{ $contact->name }}</td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #e5e7eb;"><strong>Email</strong></td>
                                    <td style="border:1px solid #e5e7eb;">{{ $contact->email }}</td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #e5e7eb;"><strong>Project Name</strong></td>
                                    <td style="border:1px solid #e5e7eb;">{{ $contact->company_name ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #e5e7eb;"><strong>Phone</strong></td>
                                    <td style="border:1px solid #e5e7eb;">{{ $contact->phone ?: 'Not provided' }}</td>
                                </tr>
                            </table>

                            <h4 style="margin:20px 0 8px; color:#006039;">Project Details</h4>
                            <div style="background:#f0f8f5; border-left:4px solid #006039; padding:12px;">
                                {{ $contact->message }}
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
