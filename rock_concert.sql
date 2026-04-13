CREATE DATABASE rock_concert;

USE rock_concert;

CREATE TABLE attendees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    ticket_type VARCHAR(50),
    concert_date DATE,
    payment_status VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO attendees (full_name, email, ticket_type, concert_date, payment_status)
VALUES
('John Mayer', 'john@email.com', 'VIP', '2026-05-10', 'Paid'),
('Ariana Cruz', 'ariana@email.com', 'General Admission', '2026-05-10', 'Pending'),
('Mark Santos', 'mark@email.com', 'VIP', '2026-05-11', 'Paid'),
('Liza Reyes', 'liza@email.com', 'Balcony', '2026-05-11', 'Paid');