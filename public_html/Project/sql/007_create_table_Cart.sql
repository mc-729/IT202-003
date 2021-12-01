CREATE TABLE IF NOT EXISTS `Cart` (
    `id` INT AUTO_INCREMENT PRIMARY  KEY,
    `product_id` ,
    `user_id` ,
    `desired_quantity` ,
    `unit_cost` ,
    `created`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `unit_price` , 
)