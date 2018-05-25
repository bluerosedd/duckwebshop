-- SELECT PRODUCTS
-- Query = "CALL proc_get_all_products";

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_get_all_products`()
  BEGIN
    SELECT * From products;
  END$$
DELIMITER ;

-- SELECT USERS
-- Query = "CALL proc_get_all_users";

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_get_all_users`()
  BEGIN
    SELECT * From users;
  END$$
DELIMITER ;

-- SELECT COMPANY
-- Query = "CALL proc_get_all_company";

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_get_all_company`()
  BEGIN
    SELECT * From company;
  END$$
DELIMITER ;



