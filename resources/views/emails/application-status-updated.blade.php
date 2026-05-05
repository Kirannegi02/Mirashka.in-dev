<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Application Status Update</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .container {
            background: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
            margin-bottom: 20px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #2563eb;
        }
        .content {
            padding: 20px 0;
        }
        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            margin: 10px 0;
        }
        .status-shortlisted {
            background: #dcfce7;
            color: #166534;
        }
        .status-rejected {
            background: #fee2e2;
            color: #991b1b;
        }
        .status-selected {
            background: #dbeafe;
            color: #1e40af;
        }
        .status-reviewed {
            background: #fef3c7;
            color: #92400e;
        }
        .message-box {
            background: #f9fafb;
            border-left: 4px solid #2563eb;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #e5e5e5;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">{{ $companyName }}</div>
        </div>
        
        <div class="content">
            <h2>Dear {{ $candidateName }},</h2>
            
            <p>We are writing to inform you about the status of your application for the position of <strong>{{ $jobTitle }}</strong>.</p>
            
            <div style="text-align: center; margin: 25px 0;">
                <span class="status-badge status-{{ $status }}">
                    Status: {{ ucfirst($status) }}
                </span>
            </div>
            
            <div class="message-box">
                <strong>Message:</strong> {{ $statusMessage }}
            </div>
            
            @if($status === 'shortlisted')
                <p>We were impressed with your application and would like to inform you that you have been shortlisted for the next round. Our team will contact you soon with further details about the interview process.</p>
            @elseif($status === 'rejected')
                <p>Thank you for taking the time to apply for this position. After careful consideration, we have decided to move forward with other candidates. We appreciate your effort and wish you the best in your future endeavors.</p>
            @elseif($status === 'selected')
                <p>Congratulations! We are pleased to inform you that you have been selected for the position. Our HR team will reach out to you shortly with the offer details and next steps.</p>
            @else
                <p>Your application has been reviewed by our team. We will keep your profile on file for future opportunities that may match your skills and experience.</p>
            @endif
            
            <p>If you have any questions, please feel free to reach out to us.</p>
        </div>
        
        <div class="footer">
            <p>Best regards,<br>
            <strong>{{ $companyName }}</strong></p>
            <p style="font-size: 12px; color: #999; margin-top: 15px;">
                This is an automated email. Please do not reply to this message.
            </p>
        </div>
    </div>
</body>
</html>