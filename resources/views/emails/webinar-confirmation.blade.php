<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Webinar Registration Confirmed</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f5; font-family:Arial, Helvetica, sans-serif;">
   <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f5; padding:20px 0;">
      <tr>
         <td align="center">
            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden;">
               <!-- Header -->
               <tr>
                  <td style="background:#006039; padding:20px; text-align:center;">
                     <img src="https://elevateonemedia.com/assets/img/elevateone-logo.png" alt="Mirashka" width="160" style="display:block; margin:0 auto; background-color:#ffffff; padding:10px; border-radius:12px;">
                  </td>
               </tr>
               <!-- Content -->
               <tr>
                  <td style="padding:30px; color:#333333;">
                     <h2 style="margin-top:0; color:#006039;">Webinar Registration Confirmed!</h2>
                     <p style="font-size:15px; line-height:1.6;">
                        Hello <strong>{{ $registration->name }}</strong>,
                     </p>
                     <p style="font-size:15px; line-height:1.6;">
                        Thank you for registering for our upcoming webinar. Your spot has been confirmed!
                     </p>
                     
                      <!-- Webinar Details -->
                      <div style="background:#f0f8f5; border-left:4px solid #006039; padding:15px; margin:20px 0;">
                         <h3 style="margin:0 0 10px 0; color:#006039;">{{ $webinar->title }}</h3>
                         <p style="margin:5px 0; font-size:14px;">
                            <strong>Date:</strong> {{ $webinar->formatted_date }}
                         </p>
                         <p style="margin:5px 0; font-size:14px;">
                            <strong>Time:</strong> {{ $webinar->formatted_time }} ({{ $webinar->timezone }})
                         </p>
                         <p style="margin:5px 0; font-size:14px;">
                            <strong>Duration:</strong> {{ $webinar->duration ?? '60 mins' }}
                         </p>
                         <p style="margin:5px 0; font-size:14px;">
                            <strong>Speaker:</strong> {{ $webinar->speaker_name }}
                            @if($webinar->speaker_designation)
                               - {{ $webinar->speaker_designation }}
                            @endif
                         </p>
                         @if($webinar->meeting_link)
                         <p style="margin:15px 0 5px 0; text-align:center;">
                            <a href="{{ $webinar->meeting_link }}" style="background:#28a745; color:#ffffff; padding:14px 28px; text-decoration:none; border-radius:6px; display:inline-block; font-weight:bold; font-size:16px;">Join Webinar Now</a>
                         </p>
                         @else
                         <p style="margin:15px 0 5px 0; font-size:13px; color:#666; font-style:italic;">
                            Meeting link will be shared via email before the event.
                         </p>
                         @endif
                      </div>
                     
                     <p style="font-size:14px; color:#666;">
                        A reminder will be sent to you before the webinar starts.
                     </p>
                     
                     <hr style="border:none; border-top:1px solid #e5e5e5; margin:30px 0;">
                     <p style="font-size:13px; color:#777;">
                        Regards,<br>
                        <strong style="color:#006039;">Mirashka</strong>
                     </p>
                  </td>
               </tr>
               <!-- Bottom -->
               <tr>
                  <td style="background:#006039; text-align:center; padding:12px; color:#ffffff; font-size:12px;">
                     © {{ date('Y') }} Mirashka. All rights reserved.
                  </td>
               </tr>
            </table>
         </td>
      </tr>
   </table>
</body>
</html>

