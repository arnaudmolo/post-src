SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `11src2pj07_bdd` DEFAULT CHARACTER SET utf8 ;
USE `11src2pj07_bdd` ;

-- -----------------------------------------------------
-- Table `11src2pj07_bdd`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `11src2pj07_bdd`.`users` ;

CREATE  TABLE IF NOT EXISTS `11src2pj07_bdd`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(255) NOT NULL ,
  `first_name` VARCHAR(255) NOT NULL COMMENT '	' ,
  `last_name` VARCHAR(45) NOT NULL ,
  `location_user` VARCHAR(255) NOT NULL ,
  `born_user` DATE NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  `annee_entree` DATE NOT NULL ,
  `annee_sortie` DATE NOT NULL ,
  `date_inscription` DATE NOT NULL ,
  `last_connexion` DATE NOT NULL ,
  `role` VARCHAR(20) NULL ,
  `active` TINYINT(1)  NOT NULL ,
  `facebook` VARCHAR(255) NULL ,
  `twitter` VARCHAR(255) NULL ,
  `youtube` VARCHAR(255) NULL ,
  `doyoubuzz` VARCHAR(255) NULL ,
  `yupeek` VARCHAR(255) NULL ,
  `viadeo` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `11src2pj07_bdd`.`emplois`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `11src2pj07_bdd`.`emplois` ;

CREATE  TABLE IF NOT EXISTS `11src2pj07_bdd`.`emplois` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `entreprise` VARCHAR(255) NULL ,
  `fonction` VARCHAR(255) NULL ,
  `date_debut` DATE NULL ,
  `date_fin` DATE NULL ,
  `actuel` TINYINT(1)  NULL ,
  `user_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_emplois_users1` (`user_id` ASC) ,
  CONSTRAINT `fk_emplois_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `11src2pj07_bdd`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `11src2pj07_bdd`.`missions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `11src2pj07_bdd`.`missions` ;

CREATE  TABLE IF NOT EXISTS `11src2pj07_bdd`.`missions` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `intitule` VARCHAR(255) NULL ,
  `description` TEXT NULL ,
  `logo_client` TEXT NULL ,
  `emploi_id` INT NOT NULL ,
  `date` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_missions_emplois1` (`emploi_id` ASC) ,
  CONSTRAINT `fk_missions_emplois1`
    FOREIGN KEY (`emploi_id` )
    REFERENCES `11src2pj07_bdd`.`emplois` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `11src2pj07_bdd`.`annonces`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `11src2pj07_bdd`.`annonces` ;

CREATE  TABLE IF NOT EXISTS `11src2pj07_bdd`.`annonces` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titre` VARCHAR(255) NULL ,
  `type_recherche` VARCHAR(255) NULL ,
  `domaine` VARCHAR(255) NULL ,
  `localisation` VARCHAR(255) NULL ,
  `entreprise_annonce` VARCHAR(255) NULL ,
  `url_entreprise` VARCHAR(255) NULL ,
  `contenu` TEXT NULL ,
  `user_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_annonces_users1` (`user_id` ASC) ,
  CONSTRAINT `fk_annonces_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `11src2pj07_bdd`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `11src2pj07_bdd`.`metiers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `11src2pj07_bdd`.`metiers` ;

CREATE  TABLE IF NOT EXISTS `11src2pj07_bdd`.`metiers` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `contenu` TEXT NULL ,
  `date` DATE NULL ,
  `creation` TINYINT(1)  NULL ,
  `communication` TINYINT(1)  NULL ,
  `developpement` TINYINT(1)  NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `11src2pj07_bdd`.`formations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `11src2pj07_bdd`.`formations` ;

CREATE  TABLE IF NOT EXISTS `11src2pj07_bdd`.`formations` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(45) NULL ,
  `contenu` TEXT NULL ,
  `location` VARCHAR(255) NULL ,
  `niveau` VARCHAR(45) NULL ,
  `school_name` VARCHAR(255) NULL ,
  `school_url` VARCHAR(255) NULL ,
  `creation` DATE NULL ,
  `communication` TINYINT(1)  NULL ,
  `developpement` TINYINT(1)  NULL ,
  `creatif` TINYINT(1)  NULL ,
  `public` TINYINT(1)  NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `11src2pj07_bdd`.`formations_users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `11src2pj07_bdd`.`formations_users` ;

CREATE  TABLE IF NOT EXISTS `11src2pj07_bdd`.`formations_users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `formation_id` INT NOT NULL ,
  `user_id` INT NOT NULL ,
  `titre` VARCHAR(45) NULL ,
  `avi` TEXT NULL ,
  `date` DATE NULL ,
  `obtention` DATE NULL ,
  PRIMARY KEY (`id`, `formation_id`, `user_id`) ,
  INDEX `fk_formations_has_users_users1` (`user_id` ASC) ,
  INDEX `fk_formations_has_users_formations` (`formation_id` ASC) ,
  CONSTRAINT `fk_formations_has_users_formations`
    FOREIGN KEY (`formation_id` )
    REFERENCES `11src2pj07_bdd`.`formations` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_formations_has_users_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `11src2pj07_bdd`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `11src2pj07_bdd`.`metiers_users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `11src2pj07_bdd`.`metiers_users` ;

CREATE  TABLE IF NOT EXISTS `11src2pj07_bdd`.`metiers_users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user_id` INT NOT NULL ,
  `metier_id` INT NOT NULL ,
  `titre` VARCHAR(45) NULL ,
  `avi` TEXT NULL ,
  `date` DATE NULL ,
  PRIMARY KEY (`id`, `user_id`, `metier_id`) ,
  INDEX `fk_users_has_metiers_metiers1` (`metier_id` ASC) ,
  INDEX `fk_users_has_metiers_users1` (`user_id` ASC) ,
  CONSTRAINT `fk_users_has_metiers_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `11src2pj07_bdd`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_metiers_metiers1`
    FOREIGN KEY (`metier_id` )
    REFERENCES `11src2pj07_bdd`.`metiers` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `11src2pj07_bdd`.`formations_metiers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `11src2pj07_bdd`.`formations_metiers` ;

CREATE  TABLE IF NOT EXISTS `11src2pj07_bdd`.`formations_metiers` (
  `formation_id` INT NOT NULL ,
  `metier_id` INT NOT NULL ,
  PRIMARY KEY (`formation_id`, `metier_id`) ,
  INDEX `fk_formations_has_metiers_metiers1` (`metier_id` ASC) ,
  INDEX `fk_formations_has_metiers_formations1` (`formation_id` ASC) ,
  CONSTRAINT `fk_formations_has_metiers_formations1`
    FOREIGN KEY (`formation_id` )
    REFERENCES `11src2pj07_bdd`.`formations` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_formations_has_metiers_metiers1`
    FOREIGN KEY (`metier_id` )
    REFERENCES `11src2pj07_bdd`.`metiers` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
