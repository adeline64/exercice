SELECT 'idCommande','DateCommande','idTable', 'idService' 
FROM "commandes" 
WHERE idTable = 10 OR idTable = 6 
AND idService = 1