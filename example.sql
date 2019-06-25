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




