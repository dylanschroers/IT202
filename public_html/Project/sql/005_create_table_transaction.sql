CREATE TABLE IF NOT EXISTS `Accounts` (
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `account_src` varchar(12),
    `account_dest` varchar(12),
    `balance_change` decimal(100,2),
    `transaction_type` varchar(100),
    `memo` VARCHAR(100),
    `expected_total` decimal(100,2),
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (`account_src`) REFERENCES Accounts(`account_number`),
    FOREIGN KEY (`account_dest`) REFERENCES Accounts(`account_number`)

)