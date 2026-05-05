<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Enquiry Submission Via The Website </title>
</head>

<body style="margin:0; padding:0; background-color:#f4f6f5; font-family:Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f5; padding:20px 0;">
        <tr>
            <td align="center">

                <!-- Main Container -->
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff; border-radius:6px; overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td style="background:#006039; padding:16px 20px;">
                            <h2 style="margin:0; color:#ffffff; font-size:18px;">
                                📩 New Enquiry From {{ $contact->name }} </h2>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding:25px; color:#333333; font-size:14px;">

                            <p style="margin-top:0;">
                                You have received a new enquiry via the website contact form.
                                Below are the details:
                            </p>

                            <!-- Details Table -->
                            <table width="100%" cellpadding="8" cellspacing="0"
                                style="border-collapse:collapse; background:#fafafa;">

                                <tr>
                                    <td width="30%" style="border:1px solid #e0e0e0;"><strong>Name</strong></td>
                                    <td style="border:1px solid #e0e0e0;">{{ $contact->name }}</td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #e0e0e0;"><strong>Email</strong></td>
                                    <td style="border:1px solid #e0e0e0;">{{ $contact->email }}</td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #e0e0e0;"><strong>Phone</strong></td>
                                    <td style="border:1px solid #e0e0e0;">{{ $contact->phone }}</td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #e0e0e0;"><strong>Company</strong></td>
                                    <td style="border:1px solid #e0e0e0;">
                                        {{ $contact->company_name ?? 'N/A' }}
                                    </td>
                                </tr>

                            </table>

                            <!-- Message -->
                            <h4 style="margin:20px 0 8px; color:#006039;">
                                Message
                            </h4>

                            <div style="background:#f0f8f5; border-left:4px solid #006039; padding:12px;">
                                {{ $contact->message }}
                            </div>

                            <!-- Action Hint -->
                            <p style="margin-top:20px; font-size:13px; color:#555;">
                                👉 Please respond to this enquiry within <strong>24 hours</strong> for best conversion.
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f9f9f9; padding:12px 20px; font-size:12px; color:#777;">
                            This email was generated from the website contact form.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>