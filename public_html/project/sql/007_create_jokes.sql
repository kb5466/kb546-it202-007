CREATE TABLE CA_jokes(
    `id` INT NOT NULL AUTO_INCREMENT,
    `body` TEXT,
    `category` VARCHAR(255), 
    `rating` TINYINT,
    `created`    timestamp default current_timestamp,
    `modified`   timestamp default current_timestamp on update current_timestamp,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`api_id`) REFERENCES jokes(`id`)
)