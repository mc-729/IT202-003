CREATE TABLE IF NOT EXISTS `Cart` (
    `id` INT AUTO_INCREMENT PRIMARY  KEY,
    `product_id` int,
    `user_id` int,
    `desired_quantity` int,
    `unit_cost` DECIMAL(6,2),
    `created`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)