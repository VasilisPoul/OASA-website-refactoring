-- MySQL Script generated by MySQL Workbench
-- Sun Jan  5 15:34:33 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema oasa
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `oasa` ;

-- -----------------------------------------------------
-- Schema oasa
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `oasa` DEFAULT CHARACTER SET utf8 ;
USE `oasa` ;

-- -----------------------------------------------------
-- Table `oasa`.`user_category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oasa`.`user_category` ;

CREATE TABLE IF NOT EXISTS `oasa`.`user_category` (
  `iduser_category` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iduser_category`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) ,
  UNIQUE INDEX `idcategory_UNIQUE` (`iduser_category` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `oasa`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oasa`.`user` ;

CREATE TABLE IF NOT EXISTS `oasa`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL DEFAULT NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `dob` DATE NOT NULL,
  `phone` VARCHAR(13) NOT NULL,
  `password` VARCHAR(256) NULL DEFAULT NULL,
  `iduser_category` INT NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `iduser_UNIQUE` (`iduser` ASC) ,
  INDEX `fk_user_user_category1_idx` (`iduser_category` ASC) ,
  CONSTRAINT `fk_user_user_category1`
    FOREIGN KEY (`iduser_category`)
    REFERENCES `oasa`.`user_category` (`iduser_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `oasa`.`ticket_category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oasa`.`ticket_category` ;

CREATE TABLE IF NOT EXISTS `oasa`.`ticket_category` (
  `idticket_category` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `price` DECIMAL(4,2) NOT NULL,
  `iduser_category` INT NOT NULL,
  PRIMARY KEY (`idticket_category`),
  UNIQUE INDEX `idticket_category_UNIQUE` (`idticket_category` ASC) ,
  INDEX `fk_ticket_category_user_category1_idx` (`iduser_category` ASC) ,
  CONSTRAINT `fk_ticket_category_user_category1`
    FOREIGN KEY (`iduser_category`)
    REFERENCES `oasa`.`user_category` (`iduser_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `oasa`.`ticket`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oasa`.`ticket` ;

CREATE TABLE IF NOT EXISTS `oasa`.`ticket` (
  `idticket` INT NOT NULL AUTO_INCREMENT,
  `date` DATE NOT NULL,
  `iduser` INT NULL DEFAULT NULL,
  `idticket_category` INT NOT NULL,
  `expired` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`idticket`),
  UNIQUE INDEX `idticket_UNIQUE` (`idticket` ASC) ,
  INDEX `fk_ticket_ticket_category1_idx` (`idticket_category` ASC) ,
  INDEX `fk_ticket_user1` (`iduser` ASC) ,
  CONSTRAINT `fk_ticket_user1`
    FOREIGN KEY (`iduser`)
    REFERENCES `oasa`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ticket_ticket_category1`
    FOREIGN KEY (`idticket_category`)
    REFERENCES `oasa`.`ticket_category` (`idticket_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `oasa`.`transport`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oasa`.`transport` ;

CREATE TABLE IF NOT EXISTS `oasa`.`transport` (
  `idtransport` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtransport`),
  UNIQUE INDEX `idtransport_UNIQUE` (`idtransport` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `oasa`.`line_status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oasa`.`line_status` ;

CREATE TABLE IF NOT EXISTS `oasa`.`line_status` (
  `idline_status` INT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idline_status`),
  UNIQUE INDEX `idline_status_UNIQUE` (`idline_status` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `oasa`.`colour`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oasa`.`colour` ;

CREATE TABLE IF NOT EXISTS `oasa`.`colour` (
  `idcolour` INT NOT NULL AUTO_INCREMENT,
  `colour` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcolour`),
  UNIQUE INDEX `idcolour_UNIQUE` (`idcolour` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `oasa`.`line`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oasa`.`line` ;

CREATE TABLE IF NOT EXISTS `oasa`.`line` (
  `idline` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `idtransport` INT NOT NULL,
  `idline_status` INT NOT NULL,
  `idcolour` INT NOT NULL,
  PRIMARY KEY (`idline`),
  UNIQUE INDEX `idline_UNIQUE` (`idline` ASC) ,
  INDEX `fk_line_transport1_idx` (`idtransport` ASC) ,
  INDEX `fk_line_line_status1_idx` (`idline_status` ASC) ,
  INDEX `fk_line_colour1_idx` (`idcolour` ASC) ,
  CONSTRAINT `fk_line_transport1`
    FOREIGN KEY (`idtransport`)
    REFERENCES `oasa`.`transport` (`idtransport`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_line_line_status1`
    FOREIGN KEY (`idline_status`)
    REFERENCES `oasa`.`line_status` (`idline_status`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_line_colour1`
    FOREIGN KEY (`idcolour`)
    REFERENCES `oasa`.`colour` (`idcolour`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `oasa`.`area`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oasa`.`area` ;

CREATE TABLE IF NOT EXISTS `oasa`.`area` (
  `idarea` INT NOT NULL AUTO_INCREMENT,
  `area` VARCHAR(45) NOT NULL,
  `city` VARCHAR(45) NOT NULL,
  `postal_code` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`idarea`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `oasa`.`station`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oasa`.`station` ;

CREATE TABLE IF NOT EXISTS `oasa`.`station` (
  `idstation` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `latitude` DECIMAL(9,6) NOT NULL,
  `longitude` DECIMAL(9,6) NOT NULL,
  `disability_access` INT NULL DEFAULT NULL,
  `idarea` INT NOT NULL,
  PRIMARY KEY (`idstation`),
  UNIQUE INDEX `idstation_UNIQUE` (`idstation` ASC) ,
  INDEX `fk_station_area1_idx` (`idarea` ASC) ,
  CONSTRAINT `fk_station_area1`
    FOREIGN KEY (`idarea`)
    REFERENCES `oasa`.`area` (`idarea`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `oasa`.`line_has_station`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oasa`.`line_has_station` ;

CREATE TABLE IF NOT EXISTS `oasa`.`line_has_station` (
  `idline` INT NOT NULL,
  `idstation` INT NOT NULL,
  PRIMARY KEY (`idline`, `idstation`),
  INDEX `fk_line_has_station_station1_idx` (`idstation` ASC) ,
  INDEX `fk_line_has_station_line1_idx` (`idline` ASC) ,
  CONSTRAINT `fk_line_has_station_line1`
    FOREIGN KEY (`idline`)
    REFERENCES `oasa`.`line` (`idline`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_line_has_station_station1`
    FOREIGN KEY (`idstation`)
    REFERENCES `oasa`.`station` (`idstation`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `oasa`.`card`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oasa`.`card` ;

CREATE TABLE IF NOT EXISTS `oasa`.`card` (
  `idcard` INT NOT NULL AUTO_INCREMENT,
  `idticket_category` INT NOT NULL,
  `iduser` INT NOT NULL,
  `date` DATE NOT NULL,
  `pin` VARCHAR(45) NOT NULL,
  `expired` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`idcard`),
  INDEX `fk_card_ticket_category1_idx` (`idticket_category` ASC) ,
  INDEX `fk_card_user1_idx` (`iduser` ASC) ,
  CONSTRAINT `fk_card_ticket_category1`
    FOREIGN KEY (`idticket_category`)
    REFERENCES `oasa`.`ticket_category` (`idticket_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_card_user1`
    FOREIGN KEY (`iduser`)
    REFERENCES `oasa`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
