DROP TABLE IF EXISTS transaction_test;
CREATE TABLE transaction_test(
  id   INT UNSIGNED NOT NULL AUTO_INCREMENT,
  val  VARCHAR(20) NOT NULL,
  created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET latin1;

