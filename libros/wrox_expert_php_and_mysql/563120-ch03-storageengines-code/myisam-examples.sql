DROP TABLE IF EXISTS example_myisam_fixed;
CREATE TABLE example_myisam_fixed(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  c  CHAR(100) NOT NULL)
ENGINE=MyISAM;

DROP TABLE IF EXISTS example_myisam_dynamic;
CREATE TABLE example_myisam_dynamic(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  c  VARCHAR(100) NOT NULL)
ENGINE=MyISAM;

DROP TABLE IF EXISTS example_myisam_fixed2;
CREATE TABLE example_myisam_fixed2(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  c  VARCHAR(100) NOT NULL)
ENGINE=MyISAM ROW_FORMAT=FIXED;

SELECT table_name, engine,row_format
FROM INFORMATION_SCHEMA.TABLES
WHERE table_name LIKE 'example_myisam_%';

