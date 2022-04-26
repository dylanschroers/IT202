CREATE TABLE IF NOT EXISTS `Transactions` (
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `account_src` INT,
    `account_dest` INT,
    `balance_change` DECIMAL(20,2),
    `transaction_type` varchar(100),
    `memo` VARCHAR(100),
    `expected_total` decimal(20,2),
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (`account_src`) REFERENCES Accounts(`id`),
    FOREIGN KEY (`account_dest`) REFERENCES Accounts(`id`)

)