<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Thank You for Reaching Out</title>
   </head>
   <body style="margin:0; padding:0; background-color:#f4f6f5; font-family:Arial, Helvetica, sans-serif;">
      <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f5; padding:20px 0;">
         <tr>
            <td align="center">
               <table width="600" cellpadding="0" cellspacing="0"
                  style="background:#ffffff; border-radius:8px; overflow:hidden;">
                  <!-- Header -->
                  <tr>
                     <td style="background:#006039; padding:20px; text-align:center;">
                        <!-- PNG LOGO (Email Safe) -->
                        <img src="https://elevateonemedia.com/assets/img/elevateone-logo.png"
                           alt="Elevate One Media" width="160" style="display:block;
                           margin:0 auto;
                           background-color:#ffffff;
                           padding:10px;
                           border-radius:12px;">
                     </td>
                  </tr>
                  <!-- Content -->
                  <tr>
                     <td style="padding:30px; color:#333333;">
                        <h2 style="margin-top:0; color:#006039;">
                           Thank you for reaching out!
                        </h2>
                        <p style="font-size:15px; line-height:1.6;">
                           Hello <strong>{{ $contact->name ?? 'there' }}</strong>,
                        </p>
                        <p style="font-size:15px; line-height:1.6;">
                           Thank you for reaching out to us.
                           Our team will contact you within <strong>24 hours</strong>.
                        </p>
                        <div
                           style="background:#f0f8f5; border-left:4px solid #006039; padding:15px; margin:20px 0;">
                           <p style="margin:0; font-size:14px;">
                              <strong>Your Message:</strong><br>
                              {{ $contact->message }}
                           </p>
                        </div>
                        <!-- WhatsApp CTA -->
                        <p style="text-align:center; margin:25px 0;">
                           <a href="https://wa.me/918287938388" style="background:#25D366; color:#ffffff; padding:12px 22px;
                              text-decoration:none; border-radius:30px; font-size:15px;
                              display:inline-block;">
                           Chat on WhatsApp
                           </a>
                        </p>
                        <hr style="border:none; border-top:1px solid #e5e5e5; margin:30px 0;">
                        <!-- Footer -->
                        <p style="font-size:13px; color:#777;">
                           Regards,<br>
                           <strong style="color:#006039;">Elevate One Media</strong>
                        </p>
                        <!-- Social Media Icons (IMAGE BASED) -->
                        <p style="margin-top:15px;">
                           <a href="https://www.facebook.com/ElevateOne" style="margin-right:10px;">
                           <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" width="24"
                              alt="Facebook">
                           </a>
                           <a href="https://www.instagram.com/elevateonemedia/" style="margin-right:10px;">
                           <img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" width="24"
                              alt="Instagram">
                           </a>
                           <a href="https://www.linkedin.com/company/elevateonemedia">
                           <img src="https://cdn-icons-png.flaticon.com/512/733/733561.png" width="24"
                              alt="LinkedIn">
                           </a>
                        </p>
                     </td>
                  </tr>
                  <!-- Bottom -->
                  <tr>
                     <td style="background:#006039; text-align:center; padding:12px; color:#ffffff; font-size:12px;">
                        © {{ date('Y') }} Elevate One Media. All rights reserved.
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
   </body>
</html>