<?php
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

// Email validate
if (!Validator::email($email)) {
    $errors['email'] = "Please provide a valid email address";
}

// Password validate
if (!Validator::string($password, 8, 255)) {
    $errors['password'] = "Please provide a valid password";
}

// Agar errors hain to wahi return karo
if (!empty($errors)) {
    return view('sessions/create.view.php', [
        'errors' => $errors
    ]);
}

// User check
$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if (!$user) {
    $errors['email'] = "No user with that email address";
    return view('sessions/create.view.php', [
        'errors' => $errors
    ]);
}

// Password check
if (!password_verify($password, $user['password'])) {
    $errors['password'] = "Invalid password";
    return view('sessions/create.view.php', [
        'errors' => $errors
    ]);
}

// ✅ Agar sab sahi hai to login function call karo
login([
    'email' => $user['email']
]);

// Redirect to homepage (ya jahan chaho)
header('Location: /');
exit();
