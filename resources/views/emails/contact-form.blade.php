<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #fdbe33, #e6a400);
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            color: #fff;
            margin: 0;
            font-size: 28px;
        }
        .content {
            padding: 30px;
        }
        .field {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e5e5e5;
        }
        .field:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: 600;
            color: #fdbe33;
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            text-transform: uppercase;
        }
        .value {
            color: #333;
            font-size: 16px;
        }
        .message-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 10px;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
        .service-badge {
            display: inline-block;
            background: #fdbe33;
            color: #fff;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
        </div>
        
        <div class="content">
            <div class="field">
                <span class="label">Name:</span>
                <span class="value">{{ $data['name'] }}</span>
            </div>
            
            <div class="field">
                <span class="label">Email:</span>
                <span class="value">{{ $data['email'] }}</span>
            </div>
            
            @if(!empty($data['phone']))
            <div class="field">
                <span class="label">Phone:</span>
                <span class="value">{{ $data['phone'] }}</span>
            </div>
            @endif
            
            @if(!empty($data['service']))
            <div class="field">
                <span class="label">Service Interested:</span>
                <span class="service-badge">{{ $data['service'] }}</span>
            </div>
            @endif
            
            <div class="field">
                <span class="label">Subject:</span>
                <span class="value">{{ $data['subject'] }}</span>
            </div>
            
            <div class="field">
                <span class="label">Message:</span>
                <div class="message-box">
                    {{ $data['message'] }}
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>This message was sent from the Aseno-Tek Construction contact form.</p>
            <p>&copy; {{ date('Y') }} Aseno-Tek Construction. All rights reserved.</p>
        </div>
    </div>
</body>
</html>