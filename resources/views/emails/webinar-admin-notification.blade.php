<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>New Webinar Registration</title>
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
                     <h2 style="margin-top:0; color:#006039;">New Webinar Registration</h2>
                     <p style="font-size:15px; line-height:1.6;">
                        A new participant has registered for your webinar.
                     </p>
                     
                     <!-- Webinar Details -->
                     <div style="background:#f0f8f5; border-left:4px solid #006039; padding:15px; margin:20px 0;">
                        <h3 style="margin:0 0 10px 0; color:#006039;">{{ $webinar->title }}</h3>
                        <p style="margin:5px 0; font-size:14px;">
                           <strong>Date:</strong> {{ $webinar->formatted_date }}
                        </p>
                        <p style="margin:5px 0; font-size:14px;">
                           <strong>Time:</strong> {{ $webinar->formatted_time }}
                        </p>
                     </div>
                     
                     <!-- Participant Details -->
                     <div style="background:#fff3cd; border-left:4px solid #ffc107; padding:15px; margin:20px 0;">
                        <h4 style="margin:0 0 10px 0; color:#333;">Participant Details</h4>
                        <p style="margin:5px 0; font-size:14px;">
                           <strong>Name:</strong> {{ $registration->name }}
                        </p>
                        <p style="margin:5px 0; font-size:14px;">
                           <strong>Email:</strong> {{ $registration->email }}
                        </p>
                        <p style="margin:5px 0; font-size:14px;">
                           <strong>Phone:</strong> {{ $registration->phone }}
                        </p>
                        @if($registration->company)
                        <p style="margin:5px 0; font-size:14px;">
                           <strong>Company:</strong> {{ $registration->company }}
                        </p>
                        @endif
                        @if($registration->job_title)
                        <p style="margin:5px 0; font-size:14px;">
                           <strong>Job Title:</strong> {{ $registration->job_title }}
                        </p>
                        @endif
                        @if($registration->industry)
                        <p style="margin:5px 0; font-size:14px;">
                           <strong>Industry:</strong> {{ $registration->industry }}
                        </p>
                        @endif
                     </div>
                     
                     <hr style="border:none; border-top:1px solid #e5e5e5; margin:30px 0;">
                     <p style="font-size:13px; color:#777;">
                        This is an automated notification from the Mirashka website.
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

