CREATE TABLE `users`
    (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `email` VARCHAR(100) NOT NULL ,
        `pswd` VARCHAR(100) NOT NULL ,
        `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;