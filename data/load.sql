-- Insert sample data into USER
INSERT INTO USER_INFO (FName, LName, Username, Email, Pass) VALUES
('Alice', 'Smith', 'AliceS', 'alice.smith@example.com', 'pass123'),
('Bob', 'Johnson', 'BobJ', 'bob.johnson@example.com', 'password456');

-- Insert sample data into MEDIA (Books and Movies)
INSERT INTO `media` (`ID`, `Title`, `Genre`, `ImageName`, `Description`) VALUES
('B1001', 'The Great Gatsby', 'Fiction', 'B1001.jpg', 'A novel set in the Jazz Age...'),
('B1002', 'Pride and Prejudice', 'Romance', 'B1002.jpg', 'Pride and Prejudice is the second novel by English author Jane Austen, published in 1813. A novel of manners, it follows the character development of Elizabeth Bennet, the protagonist of the book, who learns about the repercussions of hasty judgments and comes to appreciate the difference between su'),
('B1003', 'Romeo and Juliet', 'Romance', 'B1003.jpg', 'Romeo and Juliet is a tragedy written by William Shakespeare early in his career about the romance between two Italian youths from feuding families. '),
('B1004', 'Sense and Sensibility', 'Romance', 'B1004.jpg', 'Sense and Sensibility tells the story of the impoverished Dashwood family, focusing on the sisters Elinor and Marianne, personifications of good sense (common sense) and sensibility (emotionality), respectively.'),
('B1005', 'Jane Eyre', 'Fiction', 'B1005.jpg', 'Charlotte Brontë tells the story of orphaned Jane Eyre, who grows up in the home of her heartless aunt, enduring loneliness and cruelty. This troubled childhood strengthens Jane\'s natural independence and spirit - which prove necessary when she finds employment as a governess to the young ward of By'),
('M2001', 'Inception', 'Action', 'M2001.jpg', 'A thief who steals corporate secrets...'),
('M2002', 'The Matrix', 'Action', 'M2002.jpg', 'When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.');

-- Insert specific book and movie details
INSERT INTO BOOKS (ISBN, Author, Publisher) VALUES
('B1001', 'F. Scott Fitzgerald', 'Charles Scribne'),
('B1002', 'Jane Austen', 'T. Egerton, Whi'),
('B1003', 'William Shakespeare', 'Simon & Schuste'),
('B1004', 'Jane Austen', 'Thomas Egerton'),
('B1005', 'Charlotte Brontë', 'Smith, Elder & ');

INSERT INTO MOVIES (MID, Director, Studio) VALUES
('M2001', 'Christopher Nol', 'Warner Bros'),
('M2002', 'Wachowski', 'Warner Bros');

-- Insert user preferences
INSERT INTO USER_PREFERENCES (UserID, MediaID, Rating, CompletionStatus) VALUES
(1, 'B1001', 5, 2),
(2, 'M2001', 4, 2);
