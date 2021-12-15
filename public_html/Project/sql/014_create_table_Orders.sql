CREATE TABLE IF NOT EXISTS `Orders` (
    `id` INT AUTO_INCREMENT PRIMARY  KEY,
    `user_id` int,
    `created`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `total_price` DECIMAL(6,2),
    `address` VARCHAR(50) NOT NULL,
    `payment_method` VARCHAR(100) NOT NULL,
)