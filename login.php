<?php
include 'includes/config.php';
include 'includes/header.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (!$username || !$password) {
        $message = 'يرجى ملء جميع الحقول.';
    } else {
        $stmt = $pdo->prepare("SELECT id, password, role FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $user['role'];

            header("Location: dashboard/index.php");
            exit;
        } else {
            $message = 'اسم المستخدم أو كلمة المرور غير صحيحة.';
        }
    }
}
?>

<h2>تسجيل الدخول</h2>

<?php if ($message): ?>
    <div class="alert alert-error"><?=htmlspecialchars($message)?></div>
<?php endif; ?>

<form method="post" action="login.php">
    <label>اسم المستخدم:</label>
    <input type="text" name="username" required />
    <label>كلمة المرور:</label>
    <input type="password" name="password" required />
    <button type="submit">دخول</button>
</form>

<?php include 'includes/footer.php'; ?>
