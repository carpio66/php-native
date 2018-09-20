SELECT 'Tables', COUNT(*) AS cnt FROM INFORMATION_SCHEMA.TABLES 
WHERE TABLE_SCHEMA NOT IN ('INFORMATION_SCHEMA','MYSQL')
UNION SELECT 'Views', COUNT(*) AS cnt FROM INFORMATION_SCHEMA.VIEWS
UNION SELECT 'Procedures', COUNT(*) AS cnt FROM INFORMATION_SCHEMA.ROUTINES 
WHERE ROUTINE_TYPE = 'PROCEDURE'
UNION SELECT 'Functions', COUNT(*) AS cnt FROM INFORMATION_SCHEMA.ROUTINES 
WHERE ROUTINE_TYPE = 'FUNCTION'
UNION SELECT 'Events', COUNT(*) AS cnt FROM INFORMATION_SCHEMA.EVENTS
UNION SELECT 'Triggers', COUNT(*) AS cnt FROM INFORMATION_SCHEMA.TRIGGERS;

