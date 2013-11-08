CREATE DATABASE temp;

SELECT * FROM Food;
SELECT * FROM Food WHERE Price > 100;
SELECT * FROM Food WHERE Name = '偉家乾麵';

SELECT * FROM Food WHERE Price < 100 And Price > 60;
SELECT * FROM Food WHERE Price BETWEEN 60 AND 100;

SELECT * FROM Food WHERE Price IN (90,100,120);

SELECT * FROM Food WHERE Name Like '%雞%';

SELECT * FROM Food ORDER BY Price DESC;

SELECT * FROM Food ORDER BY Price DESC LIMIT 5;
SELECT * FROM Food ORDER BY Price DESC LIMIT 3, 5;

SELECT COUNT(FoodID) AS '種類數量', 
AVG(Price) AS '平均價錢', 
MAX(Price) AS '最高價錢', 
MIN(Price) AS '最低價錢',
SUM(Price) '總價錢' 
FROM Food;



SELECT * FROM Food, Store WHERE Food.Store = Store.StoreID;
SELECT * FROM Food JOIN Store ON Food.Store = Store.StoreID;

SELECT * FROM Food LEFT JOIN Store ON Food.Store = Store.StoreID;
SELECT * FROM Food RIGHT JOIN Store ON Food.Store = Store.StoreID;

SELECT * FROM Food LEFT JOIN Store ON Food.Store = Store.StoreID
UNION
SELECT * FROM Food RIGHT JOIN Store ON Food.Store = Store.StoreID;




INSERT INTO Food (Name, Price) VALUES ('牛排', 200);

UPDATE Food SET Price = Price*1.1 WHERE Name Like '%麵%';  

UPDATE Food SET Price = 80, Store = 98 WHERE Name Like '%麵%';

DELETE FROM Food WHERE Name = '牛排';
