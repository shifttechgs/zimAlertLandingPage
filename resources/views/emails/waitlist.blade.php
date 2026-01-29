<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Waitlist Submission</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #006B3F 0%, #00944D 100%);
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }
        .content {
            padding: 40px 30px;
        }
        .info-box {
            background: #f9f9f9;
            border-left: 4px solid #FFC72C;
            padding: 20px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .info-row {
            display: flex;
            margin-bottom: 12px;
        }
        .info-row:last-child {
            margin-bottom: 0;
        }
        .info-label {
            font-weight: 600;
            color: #666;
            min-width: 140px;
        }
        .info-value {
            color: #333;
            font-weight: 500;
        }
        .badge {
            display: inline-block;
            padding: 4px 12px;
            background: #006B3F;
            color: #ffffff;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }
        .badge.beta {
            background: #FFC72C;
            color: #1A1A1A;
        }
        .footer {
            background: #f9f9f9;
            padding: 20px 30px;
            text-align: center;
            font-size: 12px;
            color: #999;
            border-top: 1px solid #e0e0e0;
        }
        .timestamp {
            color: #999;
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🎉 New Waitlist Submission</h1>
        </div>
        
        <div class="content">
            <p style="font-size: 16px; margin-bottom: 24px;">
                A new user has joined the ZimAlert waitlist!
            </p>
            
            <div class="info-box">
                <div class="info-row">
                    <span class="info-label">Email Address:</span>
                    <span class="info-value">{{ $userEmail }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Beta Testing:</span>
                    <span class="info-value">
                        @if($betaTesting)
                            <span class="badge beta">✓ Yes, Opted In</span>
                        @else
                            <span class="badge">Not Interested</span>
                        @endif
                    </span>
                </div>
            </div>
            
            <p class="timestamp">
                <strong>Submitted:</strong> {{ date('F j, Y \a\t g:i A') }}
            </p>
        </div>
        
        <div class="footer">
            <p style="margin: 0;">
                ZimAlert Waitlist System<br>
                This email was automatically generated from the waitlist form.
            </p>
        </div>
    </div>
</body>
</html>
