DROP TABLE IF EXISTS example_memory;
CREATE TABLE example_memory(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  c  VARCHAR(100) NOT NULL)
ENGINE=Memory;

