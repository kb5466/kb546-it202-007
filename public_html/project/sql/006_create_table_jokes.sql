CREATE TABLE table_jokes(
    `id` INT NOT NULL AUTO_INCREMENT,
    `api_id`    INT,
    `body`  TEXT,
    `category`  VARCHAR,
    `rating`    TINYINT,
    PRIMARY KEY (`id`)
)