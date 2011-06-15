CREATE TABLE `admins` (
  `AID` 		INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `username` 	VARCHAR(255) NOT NULL ,
  `password`  	VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`AID`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE TABLE `survey` (
  `SID`			INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `image` 		VARCHAR(255) NOT NULL ,
  `title`  		VARCHAR(255) NOT NULL ,
  `greeting`  	TEXT NOT NULL ,
  PRIMARY KEY (`SID`),
  UNIQUE INDEX `title_UNIQUE` (`title` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE TABLE `questions` (
  `QID`		INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `title`	TEXT NOT NULL ,
  `SID`		INT NOT NULL ,
  PRIMARY KEY (`QID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE TABLE `answers` (
  `AID` 	INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `text` 	TEXT NOT NULL ,
  `QID`  	INT NOT NULL ,
  `UID`  	INT NOT NULL ,
  PRIMARY KEY (`AID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE TABLE `users` (
  `UID` 	INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nama` 	VARCHAR(255) NOT NULL ,
  `kota`  	VARCHAR(255) NOT NULL ,
  `email`  	VARCHAR(255) NOT NULL ,
  `tlp`  	VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`UID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

INSERT INTO  `admins` (
`AID` ,
`username` ,
`password`
)
VALUES (
NULL ,  'admin',  'nimda'
);