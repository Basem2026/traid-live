<?php
// 1. استقبال زوج العملة والفريم من الرابط
$pairs = ['EURUSD', 'GBPUSD', 'USDJPY', 'BTCUSD'];
$timeframes = ['M1','M5','M15','M30','H1','H4','D1','W1','MN'];

$pair = isset($_GET['pair']) && in_array($_GET['pair'], $pairs) ? $_GET['pair'] : 'EURUSD';
$tf   = isset($_GET['tf']) && in_array($_GET['tf'], $timeframes) ? $_GET['tf'] : 'D1';

// 2. تحميل ملف البيانات
$filename = __DIR__ . "/{$pair}_{$tf}.csv";

$rows = [];
if (file_exists($filename)) {
    $lines = file($filename);
    foreach ($lines as $i => $line) {
        if ($i === 0) continue;
        $parts = explode(';', trim($line));
        if (count($parts) >= 6) {
            $datetime = str_replace('.', '-', explode(' ', $parts[0])[0]) . ' ' . explode(' ', $parts[0])[1];
            $timestamp = strtotime($datetime);
            if ($timestamp !== false) {
                $rows[] = [
                    'time'  => $timestamp * 1000,
                    'open'  => (float)$parts[1],
                    'high'  => (float)$parts[2],
                    'low'   => (float)$parts[3],
                    'close' => (float)$parts[4],
                ];
            }
        }
    }
} else {
    echo "ملف البيانات غير موجود: $filename";
    exit;
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title><?= $pair ?> - <?= $tf ?> Chart</title>
    <script src="https://unpkg.com/lightweight-charts@4.1.1/dist/lightweight-charts.standalone.production.js"></script>
    <style>
        body {
            margin: 0; background: #111;
            color: #eee;
            font-family: Arial, sans-serif;
        }
        #topbar {
            display: flex;
            padding: 10px;
            background: #222;
            align-items: center;
            justify-content: space-between;
        }
        select {
            background: #333;
            color: #eee;
            border: none;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 4px;
        }
        #chart {
            width: 100%;
            height: 92vh;
        }
    </style>
</head>
<body>
    <div id="topbar">
        <div>
            <label>زوج العملة:</label>
            <select id="pair">
                <?php foreach ($pairs as $p): ?>
                    <option value="<?= $p ?>" <?= $p === $pair ? 'selected' : '' ?>><?= $p ?></option>
                <?php endforeach; ?>
            </select>

            <label style="margin-left: 15px;">الفريم:</label>
            <select id="tf">
                <?php foreach ($timeframes as $t): ?>
                    <option value="<?= $t ?>" <?= $t === $tf ? 'selected' : '' ?>><?= $t ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div><strong><?= $pair ?> / <?= $tf ?></strong></div>
    </div>

    <div id="chart"></div>

    <script>
        const chart = LightweightCharts.createChart(document.getElementById('chart'), {
            layout: { backgroundColor: '#111', textColor: '#DDD' },
            grid: { vertLines: { color: '#222' }, horzLines: { color: '#222' } },
            timeScale: { timeVisible: true },
        });

        const candles = chart.addCandlestickSeries({
            upColor: '#26a69a',
            downColor: '#ef5350',
            wickUpColor: '#26a69a',
            wickDownColor: '#ef5350',
            borderVisible: false,
        });

        const data = <?= json_encode($rows, JSON_NUMERIC_CHECK) ?>;
        candles.setData(data);

        document.getElementById('pair').addEventListener('change', updateChart);
        document.getElementById('tf').addEventListener('change', updateChart);

        function updateChart() {
            const pair = document.getElementById('pair').value;
            const tf = document.getElementById('tf').value;
            window.location.href = `?pair=${pair}&tf=${tf}`;
        }
    </script>
</body>
</html>
