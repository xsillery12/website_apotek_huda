<div style="background-color: #f9fafb; padding: 20px; font-family: Arial, sans-serif;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
      <!-- Header -->
      <div style="background-color: #30533E; padding: 20px; text-align: center;">
        <img src="{{ asset('assets/img/login-3.webp') }}" alt="" style="margin: auto;">
      </div>
  
      <!-- Body -->
      <div style="padding: 20px;">
        <h2 style="font-size: 18px; color: #333333; text-align: center; margin-bottom: 20px;">Reset Your Password</h2>
        <p style="font-size: 14px; color: #555555; text-align: center; margin-bottom: 30px;">
          You requested to reset your password. Click the button below to proceed.
        </p>
        <div style="text-align: center; margin-bottom: 30px;">
          <a href="{{ $resetLink }}" style="display: inline-block; background-color: #30533E; color: white; padding: 10px 20px; font-size: 14px; text-decoration: none; border-radius: 5px;">
            Reset Password
          </a>
        </div>
        <p style="font-size: 12px; color: #888888; text-align: center;">
          If you did not request this, please ignore this email. Your password will remain unchanged.
        </p>
      </div>
  
      <!-- Footer -->
      <div style="background-color: #f3f4f6; padding: 20px; text-align: center; font-size: 12px; color: #888888;">
        <p>If you’re having trouble clicking the “Reset Password” button, copy and paste the URL below into your web browser:</p>
        <a href="{{ $resetLink }}" style="color: #ef4444; text-decoration: underline;">{{ $resetLink }}</a>
      </div>
    </div>
  </div>
  