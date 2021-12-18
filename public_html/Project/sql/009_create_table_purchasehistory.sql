CREATE TABLE IF NOT EXISTS PurchaseHistory(
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) UNIQUE,
    stock int,
    user_id int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (name) REFERENCES Producuts(name)
)