<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if (!isset($_GET['package'])) {
    die("لم يتم تحديد الباقة.");
}

// بيانات الباقات (نفسها في vip-packages.php)
$vip_packages = [
    "باقة الفضية" => [
        "price" => "50 USD",
        "duration" => "شهر واحد"
    ],
    "باقة الذهبية" => [
        "price" => "120 USD",
        "duration" => "3 أشهر"
    ],
    "باقة البلاتينية" => [
        "price" => "400 USD",
        "duration" => "سنة كاملة"
    ],
];

$package_name = $_GET['package'];

if (!array_key_exists($package_name, $vip_packages)) {
    die("الباقة المختارة غير موجودة.");
}

$package = $vip_packages[$package_name];

// إذا استلمنا طلب POST لإتمام الدفع
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // هنا يمكنك إضافة كود التحقق من الدفع أو تسجيل العملية في قاعدة البيانات
    // مثلاً: تخزين الطلب مع حالة "في الانتظار" للموافقة لاحقاً من لوحة الإدارة
    
    // مثال تسجيل العملية (تحتاج إعداد قاعدة بيانات وربطها في includes/config.php)
    /*
    require_once 'includes/config.php';
    $user_id = $_SESSION['user_id'];
    $amount = $package['price'];
    $sql = "INSERT INTO payments (user_id, package_name, amount, status, created_at) VALUES (?, ?, ?, 'pending', NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $user_id, $package_name, $amount);
    $stmt->execute();
    */

    // رسالة تأكيد مبدئية
    echo "<h2>شكراً لك على طلب الاشتراك في {$package_name}.</h2>";
    echo "<p>سيتم مراجعة طلبك والموافقة عليه في أقرب وقت ممكن.</p>";
    echo '<a href="dashboard/index.php">العودة إلى لوحة التحكم</a>';
    exit;
}

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <title>إتمام الدفع - <?= htmlspecialchars($package_name) ?></title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f0f0;
            padding: 40px 20px;
            color: #333;
        }
        .container {
            max-width: 480px;
            background: white;
            padding: 30px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #2980b9;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: 600;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box;
        }
        button {
            margin-top: 25px;
            width: 100%;
            padding: 14px;
            background-color: #27ae60;
            border: none;
            color: white;
            font-size: 18px;
            font-weight: 700;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #1e8449;
        }
        .info {
            background: #e8f5e9;
            border: 1px solid #c3e6cb;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            color: #2e7d32;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>إتمام الدفع - <?= htmlspecialchars($package_name) ?></h1>
        <div class="info">
            <p>السعر: <strong><?= htmlspecialchars($package['price']) ?></strong></p>
            <p>المدة: <strong><?= htmlspecialchars($package['duration']) ?></strong></p>
            <p>الدفع متاح عبر USDT فقط.</p>
            <p>يرجى إرسال المبلغ إلى المحفظة التالية:</p>
            <p><strong>USDT Wallet: </strong> <code>TX9x...1234</code></p>
            <p>ثم أدخل بيانات الإيصال أدناه لتأكيد الدفع.</p>
        </div>
        
        <form method="POST" action="">
            <label for="txid">رقم المعاملة (Transaction ID)</label>
            <input type="text" id="txid" name="txid" placeholder="أدخل رقم المعاملة" required />

            <label for="email">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" placeholder="البريد الإلكتروني" required />

            <button type="submit">تأكيد الدفع</button>
        </form>
    </div>
</body>
</html>
