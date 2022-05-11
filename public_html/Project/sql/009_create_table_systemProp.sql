CREATE TABLE IF NOT EXISTS `SysProp` (
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `account_number` varchar(12) unique,
    `apy` decimal(4,2),
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (`account_number`) REFERENCES Accounts(`account_number`),
    check (LENGTH(`account_number`) = 12)
)