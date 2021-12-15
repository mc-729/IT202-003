CREATE TABLE IF NOT EXISTS `OrderItems` (
    `id` INT AUTO_INCREMENT PRIMARY  KEY,
    `order_id` INT,
    `product_id`INT,
    `quantity`INT,
    `unit_price` DECIMAL(6,2),
)