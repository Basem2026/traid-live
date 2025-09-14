<?php
session_start();
include 'db.php'; // تأكد من أن هذا الملف يحتوي على الاتصال بقاعدة البيانات

// إنشاء توكن CSRF إذا لم يكن موجوداً
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$user_id = $_SESSION['user_id'] ?? 1; // مؤقتًا لاختبار النظام

// إدراج طلب جديد
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_order'])) {
    // التحقق من توكن CSRF
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('خطأ في التحقق من النموذج.');
    }

    $type = $_POST['type'];
    $amount = floatval($_POST['amount']);
    $price = floatval($_POST['price']);

    if (in_array($type, ['buy', 'sell']) && $amount > 0 && $price > 0) {
        $status = 'open';
        $created_at = date('Y-m-d H:i:s');

        $sql_insert = "INSERT INTO p2p_trades (user_id, type, amount, price, status, created_at)
                       VALUES (?, ?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("isdsss", $user_id, $type, $amount, $price, $status, $created_at);

        if ($stmt_insert->execute()) {
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            echo "<div class='alert alert-danger text-center mt-3'>حدث خطأ أثناء إنشاء الطلب.</div>";
        }

        $stmt_insert->close();
    }
}

// استعلام لعرض الطلبات مع اسم المستخدم
$sql = "SELECT p.*, u.username 
        FROM p2p_trades p
        JOIN users u ON p.user_id = u.id
        ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>سوق التداول P2P</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="text-center mb-4">سوق التداول P2P</h1>

    <!-- زر إنشاء الطلب -->
    <div class="text-center mb-4">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createOrderModal">
            <i class="fa fa-plus"></i> إنشاء طلب جديد
        </button>
    </div>

    <!-- جدول الطلبات -->
    <?php if ($result && $result->num_rows > 0): ?>
        <table class="table table-bordered text-center bg-white">
            <thead class="table-dark">
                <tr>
                    <th>نوع الطلب</th>
                    <th>الكمية</th>
                    <th>السعر</th>
                    <th>الحالة</th>
                    <th>التاريخ</th>
                    <th>اسم العارض</th>
                    <th>تواصل</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['type'] == 'buy' ? 'شراء' : 'بيع') ?></td>
                    <td><?= htmlspecialchars($row['amount']) ?></td>
                    <td><?= htmlspecialchars($row['price']) ?></td>
                    <td><?= htmlspecialchars($row['status'] == 'open' ? 'مفتوح' : 'مغلق') ?></td>
                    <td><?= htmlspecialchars($row['created_at']) ?></td>
                    <td><?= htmlspecialchars($row['username']) ?></td>
                    <td>
                        <a href="user_profile.php?user_id=<?= htmlspecialchars($row['user_id']) ?>" class="btn btn-sm btn-outline-primary">
                            تواصل مع العارض
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="text-center">لا توجد طلبات بعد.</p>
    <?php endif; ?>
</div>

<!-- نافذة إنشاء طلب -->
<div class="modal fade" id="createOrderModal" tabindex="-1" aria-labelledby="createOrderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createOrderModalLabel">إنشاء طلب تداول</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
          <div class="mb-3">
            <label class="form-label">نوع الطلب</label>
            <select name="type" class="form-select" required>
              <option value="buy">طلب شراء</option>
              <option value="sell">عرض بيع</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">الكمية</label>
            <input type="number" name="amount" class="form-control" step="0.01" min="0.01" required>
          </div>
          <div class="mb-3">
            <label class="form-label">السعر</label>
            <input type="number" name="price" class="form-control" step="0.01" min="0.01" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="create_order" class="btn btn-primary">إنشاء</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body>
</html>
