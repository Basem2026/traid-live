<?php
session_start();

// تأكد من تسجيل الدخول (مثال)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// باقات VIP - مثال بيانات ثابتة (يمكن تعديلها لاحقاً لتكون من قاعدة بيانات)
$vip_packages = [
    [
        "name" => "باقة الفضية",
        "price" => "50 USD",
        "duration" => "شهر واحد",
        "features" => [
            "دعم فني 24/7",
            "تداول تلقائي مدمج",
            "تحليلات يومية للسوق"
        ]
    ],
    [
        "name" => "باقة الذهبية",
        "price" => "120 USD",
        "duration" => "3 أشهر",
        "features" => [
            "كل مميزات الباقة الفضية",
            "دورات تعليمية متقدمة",
            "إشعارات تنبيهات مخصصة"
        ]
    ],
    [
        "name" => "باقة البلاتينية",
        "price" => "400 USD",
        "duration" => "سنة كاملة",
        "features" => [
            "كل مميزات الباقة الذهبية",
            "مدير حساب خاص",
            "تحليل شخصي وتوصيات يومية"
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <title>باقات VIP | موقع hyp-invest</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f9f9f9;
            margin: 0; padding: 20px;
            color: #333;
        }
        .container {
            max-width: 960px;
            margin: auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #2c3e50;
        }
        .packages {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .package {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
            width: 280px;
            transition: transform 0.3s ease;
            text-align: center;
        }
        .package:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .package h2 {
            margin-top: 0;
            color: #2980b9;
        }
        .price {
            font-size: 28px;
            margin: 15px 0;
            color: #27ae60;
            font-weight: bold;
        }
        .duration {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }
        ul.features {
            list-style: none;
            padding: 0;
            text-align: right;
            margin-bottom: 20px;
        }
        ul.features li {
            margin: 10px 0;
            padding-right: 10px;
            position: relative;
        }
        ul.features li::before {
            content: "✓";
            color: #27ae60;
            position: absolute;
            right: 0;
        }
        .btn-buy {
            display: inline-block;
            padding: 12px 30px;
            background-color: #2980b9;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .btn-buy:hover {
            background-color: #1c5980;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>باقات VIP</h1>
        <div class="packages">
            <?php foreach ($vip_packages as $package): ?>
                <div class="package">
                    <h2><?= htmlspecialchars($package['name']) ?></h2>
                    <div class="price"><?= htmlspecialchars($package['price']) ?></div>
                    <div class="duration"><?= htmlspecialchars($package['duration']) ?></div>
                    <ul class="features">
                        <?php foreach ($package['features'] as $feature): ?>
                            <li><?= htmlspecialchars($feature) ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="process-payment.php?package=<?= urlencode($package['name']) ?>" class="btn-buy">اشترك الآن</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
