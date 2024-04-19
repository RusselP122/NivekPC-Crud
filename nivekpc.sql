-- Create a table for storing user information
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL, -- Add phone column
    address VARCHAR(255) NOT NULL -- Add address column
);

INSERT INTO users (username, email, password, phone, address) 
VALUES ('admin', 'admin@gmail.com', 'admin123', '', '');


-- Create a table for storing password reset requests
CREATE TABLE password_reset (
    reset_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    token VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);
