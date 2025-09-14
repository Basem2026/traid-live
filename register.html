// Placeholder for register.php<?php
include 'includes/config.php';
include 'includes/header.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (!$username || !$password || !$confirm_password) {
        $message = 'يرجى ملء جميع الحقول.';
    } elseif ($password !== $confirm_password) {
        $message = 'كلمتا المرور غير متطابقتين.';
    } else {
        // تحقق من وجود المستخدم مسبقًا
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->execute([$username]);
        if ($stmt->fetch()) {
            $message = 'اسم المستخدم موجود مسبقًا.';
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (username, password, role, balance) VALUES (?, ?, 'user', 0)");
            if ($stmt->execute([$username, $hashed])) {
                $message = 'تم التسجيل بنجاح، يمكنك الآن تسجيل الدخول.';
            } else {
                $message = 'حدث خطأ أثناء التسجيل.';
            }
        }
    }
}
?>

<h2>تسجيل عضوية جديدة</h2>

<?php if ($message): ?>
    <div class="alert alert-error"><?=htmlspecialchars($message)?></div>
<?php endif; ?>

<form method="post" action="register.php">
    <label>اسم المستخدم:</label>
    <input type="text" name="username" required />
    <label>كلمة المرور:</label>
    <input type="password" name="password" required />
    <label>تأكيد كلمة المرور:</label>
    <input type="password" name="confirm_password" required />
    <button type="submit">تسجيل</button>
</form>

<?php include 'includes/footer.php'; ?>
