CREATE TABLE IF NOT EXISTS Bills_History(
    -- this will be like the bank project transactions table (pairs of transactions)
    id int AUTO_INCREMENT PRIMARY KEY ,
    src int,
    dest int,
    diff int,
    reason varchar(15) not null COMMENT 'The type of transaction that occurred',
    memo varchar(240) default null COMMENT  'Any extra details to attach to the transaction',
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (src) REFERENCES Accounts(id),
    FOREIGN KEY(dest) REFERENCES Accounts(id),
    constraint ZeroTransferNotAllowed CHECK(diff != 0)
)