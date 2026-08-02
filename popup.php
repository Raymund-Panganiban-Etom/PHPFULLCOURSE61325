<?php
session_start();
// Generate CSRF token if not exists
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="popup.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Form Example</title>
   
</head>
<body>
    <div class="main-container">
        <button class="open-popup-btn" id="openPopupBtn">
            ➕ Add New Entry
        </button>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="overlay">
        <div class="popup-card">
            <div class="popup-header">
                <h2>Add New Entry</h2>
                <button class="close-btn" id="closePopupBtn">&times;</button>
            </div>
            
            <div class="message" id="messageBox"></div>
            
            <form id="entryForm">
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" placeholder="your@email.com" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="+63...">
                </div>
                
                <div class="form-group">
                    <label for="city">City *</label>
                    <input type="text" id="city" name="city" placeholder="e.g., Manila, Cebu" required>
                </div>
                
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Tell us about yourself..."></textarea>
                </div>
                
                <div class="button-group">
                    <button type="button" class="cancel-btn" id="cancelBtn">Cancel</button>
                    <button type="submit" class="submit-btn" id="submitBtn">
                        <span class="btn-text">Submit</span>
                        <span class="spinner"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="popup.js">  </script>
</body>
</html>


<!-- db can paste it

CREATE TABLE entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    city VARCHAR(100) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_city (city)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; -->
