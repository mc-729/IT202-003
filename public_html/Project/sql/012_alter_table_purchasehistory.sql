ALTER TABLE PurchaseHistory ADD COLUMN unit_cost int 
default 0
COMMENT 'Single item cost at time of purchase';