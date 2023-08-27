-- Create Table Blog
CREATE TABLE posts (
    id INT PRIMARY KEY,
    userId INT,
    title VARCHAR(255),
    body TEXT
);

-- Create Table Comments
CREATE TABLE comments (
    id INT PRIMARY KEY,
    postId INT,
    name VARCHAR(255),
    email VARCHAR(255),
    body TEXT
);
