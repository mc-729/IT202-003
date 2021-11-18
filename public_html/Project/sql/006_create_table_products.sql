CREATE TABLE IF NOT EXISTS `Products` (
`id`                        int auto_increment not null,
`name`                      varchar(30) UNIQUE,
`description`               text,
`category`
`stock`                     int DEFAULT  0,
`created`                   timestamp default current_timestamp,
`modified`                  timestamp default current_timestamp on update current_timestamp,
`unit_price`
`visibility`
)