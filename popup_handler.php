<?php
session_start();
header('Content-Type: application/json');

// Database connection
include('regdb.php'); // Your database connection file

// Initialize response
$response = ['success' => false, 'message' => ''];

try {
    // CSRF Validation
    if (empty($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        throw new Exception('Invalid security token. Please refresh the page.');
    }

    // Validate required fields
    $requiredFields = ['name', 'email', 'city'];
    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            throw new Exception("Please fill in all required fields.");
        }
    }

    // Sanitize inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $city = htmlspecialchars(trim($_POST['city']));
    $description = htmlspecialchars(trim($_POST['description'] ?? ''));

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid email format.');
    }

    // Validate name length
    if (strlen($name) < 2 || strlen($name) > 100) {
        throw new Exception('Name must be between 2 and 100 characters.');
    }

    // Validate phone number (Philippines format)
    if (!empty($phone) && !preg_match('/^(\+63|0)?[0-9]{10}$/', $phone)) {
        throw new Exception('Invalid phone number format.');
    }

    // Insert into database (modify table name and columns as needed)
    $stmt = $connection->prepare("INSERT INTO entries (name, email, phone, city, description, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
    
    if (!$stmt) {
        throw new Exception('Database preparation failed.');
    }

    $stmt->bind_param("sssss", $name, $email, $phone, $city, $description);
    
    if (!$stmt->execute()) {
        throw new Exception('Failed to save entry. Please try again.');
    }

    // Regenerate CSRF token after successful submission
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    
    $response['success'] = true;
    $response['message'] = 'Entry added successfully!';
    $response['new_csrf_token'] = $_SESSION['csrf_token'];

    $stmt->close();

} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

// Close database connection
if (isset($connection)) {
    $connection->close();
}

echo json_encode($response);
exit;
