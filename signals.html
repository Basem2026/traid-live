<?php
require_once "db.php";

// جلب التوصيات من قاعدة البيانات - الأحدث أولاً
$result = $conn->query("SELECT * FROM signals ORDER BY created_at DESC");

$signals = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $signals[] = $row;
    }
} else {
    $signals = [];
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <title>توصيات التداول - Fx traid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background: #f5f7fa;
            padding-top: 80px;
        }
        header {
            position: fixed; top: 0; width: 100%; height: 70px;
            background-color: #1a2a6c; color: white;
            display: flex; align-items: center; justify-content: space-between;
            padding: 0 30px; box-shadow: 0 3px 8px rgba(0,0,0,0.3);
            z-index: 1000;
        }
        header .logo { font-weight: bold; font-size: 1.5rem; }
        .container-signals {
            max-width: 1200px; margin: auto;
        }
        .signal-card {
            border: 0; border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .signal-card:hover { transform: scale(1.01); }
        .card-header.buy { background: #28a745; color: white; }
        .card-header.sell { background: #dc3545; color: white; }
        .card-body p {
            margin-bottom: 0.3rem;
            font-size: 1.05rem;
        }
        .time-stamp {
            font-size: 0.9rem; color: #666;
        }
        .no-signals {
            text-align: center;
            padding: 60px 0;
            color: #888;
            font-size: 1.3rem;
        }
        .signal-image {
            max-width: 100%;
            max-height: 200px;
            margin-top: 10px;
            border-radius: 10px;
            object-fit: contain;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Fx traid</div>
</header>

<div class="container-signals px-3">
    <h2 class="text-center my-4">أحدث التوصيات</h2>

    <?php if (empty($signals)): ?>
        <div class="no-signals">لا توجد توصيات حالياً</div>
    <?php else: ?>
        <div class="row gy-4">
            <?php foreach ($signals as $sig): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card signal-card">
                        <div class="card-header <?php echo strtolower($sig['action']) === 'buy' ? 'buy' : 'sell'; ?>">
                            <strong><?php echo strtoupper(htmlspecialchars($sig['symbol'])); ?></strong> - 
                            <?php echo strtolower($sig['action']) === 'buy' ? 'شراء 📈' : 'بيع 📉'; ?>
                        </div>
                        <div class="card-body">
                            <p><strong>نقطة الدخول:</strong> <?php echo htmlspecialchars($sig['entry']); ?></p>
                            <p><strong>وقف الخسارة:</strong> <?php echo htmlspecialchars($sig['sl']); ?></p>
                            <p><strong>الهدف 1:</strong> <?php echo htmlspecialchars($sig['tp1']); ?></p>
                            <p><strong>الهدف 2:</strong> <?php echo htmlspecialchars($sig['tp2']); ?></p>
                            <p><strong>الهدف 3:</strong> <?php echo htmlspecialchars($sig['tp3']); ?></p>
                            <?php if (!empty($sig['image_url'])): ?>
                                <img src="<?php echo htmlspecialchars($sig['image_url']); ?>" alt="صورة التوصية" class="signal-image" />
                            <?php endif; ?>
                            <p class="time-stamp">📅 بتاريخ: <?php echo date("Y-m-d", strtotime($sig['created_at'])); ?> 🕒 الساعة: <?php echo date("H:i", strtotime($sig['created_at'])); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
