CREATE TABLE IF NOT EXISTS `Ratings` (
    `id` INT AUTO_INCREMENT PRIMARY  KEY,
    `product_id`INT,
    `user_id`    INT,
    `rating` DECIMAL(2,1)
    CONSTRAINT check_rating CHECK (rating >= 0 AND rating <= 5),
    `comment` TEXT(255),
    `created`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)