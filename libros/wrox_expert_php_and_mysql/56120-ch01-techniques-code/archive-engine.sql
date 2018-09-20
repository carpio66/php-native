CREATE TABLE example (
  pk INT UNSIGNED NOT NULL AUTO_INCREMENT,
  col2 VARCHAR(10) NOT NULL,
  PRIMARY KEY(pk)
) ENGINE=ARCHIVE DEFAULT CHARSET latin1;

INSERT INTO example (col2) VALUES ('a'),('b'),('c');

UPDATE example SET col2='x' WHERE pk=1;

DELETE FROM example  WHERE pk=1;
