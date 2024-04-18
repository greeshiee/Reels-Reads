-- Insert sample data into USER
INSERT INTO USER_INFO (ID, FName, LName, Email, Password) VALUES
(1, 'Alice', 'Smith', 'alice.smith@example.com', 'pass123'),
(2, 'Bob', 'Johnson', 'bob.johnson@example.com', 'password456');

-- Insert sample data into MEDIA (Books and Movies)
INSERT INTO MEDIA (ID, Title, Genre, ImageName, Description) VALUES
('B1001', 'The Great Gatsby', 'Fiction', 'image0.jpg', 'A novel set in the Jazz Age...'),
('M2001', 'Inception', 'Action', 'image1.jpg', 'A thief who steals corporate secrets...');

-- Insert specific book and movie details
INSERT INTO BOOKS (ISBN, Author, Publisher) VALUES
('B1001', 'F. Scott Fitzgerald', 'Charles Scribner''s Sons');

INSERT INTO MOVIES (MID, Director, Studio) VALUES
('M2001', 'Christopher Nolan', 'Warner Bros');

-- Insert user preferences
INSERT INTO USER_PREFERENCES (UserID, MediaID, Rating, Status) VALUES
(1, 'B1001', 5, 2),
(2, 'M2001', 4, 2);
