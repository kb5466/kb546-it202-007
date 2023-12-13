CREATE TABLE jokes (
    `id` INT NOT NULL AUTO_INCREMENT,
    `api_id` INT,
    `body` TEXT,
    `category` VARCHAR(255), 
    `rating` TINYINT,
    PRIMARY KEY (`id`)
);
