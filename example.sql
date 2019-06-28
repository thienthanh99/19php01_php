--CAU 1
SELECT * FROM products
INNER JOIN categories 
ON products.categoryID = categories.categoryID 
WHERE categories.categoryName 
LIKE '%guitar%'
AND listPrice > 500

--CAU2
SELECT * FROM products
WHERE dateAdded LIKE '2014-07-__%'
AND listPrice > 300
ORDER BY listPrice DESC

--CAU3
SELECT * FROM products
INNER JOIN categories 
ON products.categoryID = categories.categoryID 
WHERE products.productName LIKE '%o%'
AND categories.categoryName= 'Basses'
ORDER BY products.productName DESC


--caau4
SELECT * FROM `products`
INNER JOIN orderitems ON orderitems.productID = products.productID
INNER JOIN orders ON orderitems.orderID = orders.orderID
INNER JOIN customers ON customers.customerID = orders.customerID
WHERE customers.emailAddress LIKE'%Gmail.%'

--cau5
SELECT * FROM `products` WHERE listPrice > 300 
AND dateAdded LIKE '2014%' ORDER BY listPrice DESC LIMIT 4

--cau6
SELECT DISTINCT city FROM `products` 
INNER JOIN orderitems ON orderitems.productID = products.productID
INNER JOIN orders ON orderitems.orderID = orders.orderID
INNER JOIN customers ON customers.customerID = orders.customerID
INNER JOIN addresses ON addresses.customerID = customers.customerID
WHERE products.productName = 'Yamaha FG700S



