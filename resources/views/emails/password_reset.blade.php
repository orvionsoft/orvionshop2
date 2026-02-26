<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .header {
            background-color: #1a1a1a;
            color: white;
            padding: 20px;
            border-radius: 5px 5px 0 0;
            text-align: center;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .code-box {
            background-color: #fff;
            border: 2px solid #1a1a1a;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            margin: 20px 0;
        }
        .code {
            font-size: 32px;
            font-weight: bold;
            color: #1a1a1a;
            letter-spacing: 5px;
        }
        .footer {
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $site_name }}</h1>
            <p>পাসওয়ার্ড রিসেট করুন</p>
        </div>
        
        <div class="content">
            <p>নমস্কার {{ $customer_name }},</p>
            
            <p>আপনি আপনার পাসওয়ার্ড রিসেট করার জন্য অনুরোধ করেছেন। আপনার অ্যাকাউন্ট নিরাপদ রাখতে, নীচের কোডটি ব্যবহার করুন:</p>
            
            <div class="code-box">
                <div class="code">{{ $reset_code }}</div>
            </div>
            
            <p><strong>দ্রষ্টব্য:</strong> এই কোডটি ৩০ মিনিটের জন্য বৈধ।</p>
            
            <p>যদি আপনি এই অনুরোধ না করেন, তাহলে এই ইমেইল উপেক্ষা করুন এবং আপনার পাসওয়ার্ড পরিবর্তন করবেন না।</p>
            
            <p>সুরক্ষার কারণে, আমরা কখনো ইমেইলের মাধ্যমে আপনার পাসওয়ার্ড জিজ্ঞাসা করব না।</p>
        </div>
        
        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ $site_name }}. সকল অধিকার সংরক্ষিত।</p>
        </div>
    </div>
</body>
</html>
