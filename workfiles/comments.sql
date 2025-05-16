CREATE TABLE comments (
    comment_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT(5) NOT NULL,
    city VARCHAR(25) NOT NULL,
    comment_text TEXT NOT NULL,
    rating INT(1) CHECK (rating BETWEEN 1 AND 5)
);