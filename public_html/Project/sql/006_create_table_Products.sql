CREATE TABLE IF NOT EXISTS `Products` (
    `id` int AUTO_INCREMENT PRIMARY  KEY,
    `name` varchar(20) UNIQUE,
    `description` TEXT,
    `category` 
    `stock` INT DEFAULT 0,
    `created`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `unit_price`
    `visibility`
)