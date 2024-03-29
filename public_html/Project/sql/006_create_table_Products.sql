CREATE TABLE IF NOT EXISTS `Products` (
    `id` INT AUTO_INCREMENT PRIMARY  KEY,
    `name` VARCHAR(30) UNIQUE,
    `description` TEXT,
    `category` VARCHAR(20),
    `stock` INT DEFAULT 0,
    `created`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `unit_price` DECIMAL(6,2),
    `visibility` TINYINT(1)
)