CREATE TABLE pages (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NULL,
    header VARCHAR(255) NULL,
    description VARCHAR(255) NULL,
    keywords VARCHAR(255) NULL,
    parent_id INT NULL,
    url VARCHAR(255) NULL,
    sort INT NULL,
    level INT NULL,
    content TEXT NULL
)