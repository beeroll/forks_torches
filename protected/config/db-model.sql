# Продукт
DROP TABLE IF EXISTS product;
CREATE TABLE product (
  prd_id BIGINT UNSIGNED   NOT NULL AUTO_INCREMENT,
  prd_name VARCHAR(1024)   NOT NULL,
  prd_weight SMALLINT UNSIGNED NOT NULL,
  cty_id INT UNSIGNED      NOT NULL,
  prd_price  DECIMAL(10, 2)    NOT NULL,
  PRIMARY KEY (prd_id)
)
  DEFAULT CHARSET = utf8;


# Индекс на имя продукта
CREATE INDEX product_index ON product (prd_name);


# Город
DROP TABLE IF EXISTS city;
CREATE TABLE city (
  cty_id   INT UNSIGNED NOT NULL AUTO_INCREMENT,
  cty_name VARCHAR(255) NOT NULL UNIQUE,
  PRIMARY KEY (cty_id)
)
  DEFAULT CHARSET = utf8;
