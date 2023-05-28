CREATE TABLE users (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   fullname VARCHAR(255) NOT NULL,
   email VARCHAR(255) NOT NULL,
   phone VARCHAR(15) NOT NULL,
   password VARCHAR(255) NOT NULL
);

INSERT INTO users (fullname, email, phone, password)
VALUES ('Nguyễn Văn A', 'nguyenvana@example.com', '0123456789', 'mypass123');