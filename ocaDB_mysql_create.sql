CREATE TABLE `Events` (
	`eventID` INT NOT NULL AUTO_INCREMENT,
	`Name` varchar(50) NOT NULL,
	PRIMARY KEY (`eventID`)
);

CREATE TABLE `evalAudience` (
	`eventID` INT NOT NULL,
	`dateCreated` DATETIME NOT NULL,
	`firstName` varchar(50) NOT NULL,
	`lastName` varchar(50) NOT NULL,
	`lastName` varchar(50) NOT NULL,
	`evalID` INT NOT NULL AUTO_INCREMENT,
	`guestID` INT NOT NULL,
	PRIMARY KEY (`evalID`)
);

CREATE TABLE `guests` (
	`guestID` INT NOT NULL AUTO_INCREMENT,
	`firstName` varchar(50) NOT NULL,
	`lastName` varchar(50) NOT NULL,
	`email` varchar(50),
	`mobile` varchar(50),
	`school` varchar(50),
	`course` varchar(50),
	`age` INT(3),
	PRIMARY KEY (`guestID`)
);

CREATE TABLE `evalArtist` (
	`evalID` INT NOT NULL AUTO_INCREMENT,
	`eventID` INT NOT NULL,
	`userID` INT NOT NULL,
	PRIMARY KEY (`evalID`)
);

CREATE TABLE `users` (
	`catID` INT NOT NULL,
	`schoolID` INT NOT NULL UNIQUE,
	`username` varchar(35) NOT NULL UNIQUE,
	`firstName` varchar(50) NOT NULL,
	`lastName` varchar(50) NOT NULL,
	`email` varchar(50) NOT NULL,
	`password` varchar(70) NOT NULL,
	`mobile` INT(11) NOT NULL,
	`birthDate` DATETIME NOT NULL,
	`facebook` varchar(100),
	`joinDate` DATETIME NOT NULL,
	`modifyDate` DATETIME NOT NULL,
	`isArtist` BOOLEAN NOT NULL,
	`userID` BOOLEAN NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`userID`)
);

CREATE TABLE `userCat` (
	`catID` INT NOT NULL AUTO_INCREMENT,
	`Description` varchar(20) NOT NULL,
	PRIMARY KEY (`catID`)
);

CREATE TABLE `subCat` (
	`subCatID` INT NOT NULL AUTO_INCREMENT,
	`Description` varchar(30) NOT NULL,
	`trainer` INT NOT NULL,
	`groupID` INT NOT NULL,
	PRIMARY KEY (`subCatID`)
);

CREATE TABLE `artistGroups` (
	`groupID` INT NOT NULL AUTO_INCREMENT,
	`Name` varchar(10) NOT NULL,
	`Description` varchar(50) NOT NULL,
	PRIMARY KEY (`groupID`)
);

CREATE TABLE `artistDetails` (
	`userID` INT NOT NULL,
	`groupID` INT NOT NULL,
	`landline` INT NOT NULL,
	`address` varchar(50) NOT NULL,
	`onProbation` BOOLEAN NOT NULL,
	`clearedMT` BOOLEAN NOT NULL,
	`modifyDate` DATETIME NOT NULL
);

CREATE TABLE `eParticipants` (
	`eventID` INT NOT NULL,
	`userID` INT NOT NULL,
	`Designation` varchar(50) NOT NULL,
	`dateAdded` DATETIME NOT NULL,
	`dateModified` DATETIME NOT NULL,
	`addedBy` INT NOT NULL
);

CREATE TABLE `evalPostProd` (
	`evalID` INT NOT NULL,
	`dateModified` DATETIME NOT NULL,
	`userID` INT NOT NULL,
	`eventID` INT NOT NULL
);

CREATE TABLE `eventAttendance` (
	`eventID` INT NOT NULL,
	`userID` INT NOT NULL,
	`isPresent` BOOLEAN NOT NULL
);

ALTER TABLE `evalAudience` ADD CONSTRAINT `evalAudience_fk0` FOREIGN KEY (`eventID`) REFERENCES `Events`(`eventID`);

ALTER TABLE `evalAudience` ADD CONSTRAINT `evalAudience_fk1` FOREIGN KEY (`guestID`) REFERENCES `guests`(`guestID`);

ALTER TABLE `evalArtist` ADD CONSTRAINT `evalArtist_fk0` FOREIGN KEY (`eventID`) REFERENCES `Events`(`eventID`);

ALTER TABLE `evalArtist` ADD CONSTRAINT `evalArtist_fk1` FOREIGN KEY (`userID`) REFERENCES `Events`(`eventID`);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`catID`) REFERENCES `userCat`(`catID`);

ALTER TABLE `subCat` ADD CONSTRAINT `subCat_fk0` FOREIGN KEY (`trainer`) REFERENCES `users`(`userID`);

ALTER TABLE `subCat` ADD CONSTRAINT `subCat_fk1` FOREIGN KEY (`groupID`) REFERENCES `artistGroups`(`groupID`);

ALTER TABLE `artistDetails` ADD CONSTRAINT `artistDetails_fk0` FOREIGN KEY (`userID`) REFERENCES `users`(`userID`);

ALTER TABLE `artistDetails` ADD CONSTRAINT `artistDetails_fk1` FOREIGN KEY (`groupID`) REFERENCES `artistGroups`(`groupID`);

ALTER TABLE `eParticipants` ADD CONSTRAINT `eParticipants_fk0` FOREIGN KEY (`eventID`) REFERENCES `Events`(`eventID`);

ALTER TABLE `eParticipants` ADD CONSTRAINT `eParticipants_fk1` FOREIGN KEY (`userID`) REFERENCES `users`(`userID`);

ALTER TABLE `eParticipants` ADD CONSTRAINT `eParticipants_fk2` FOREIGN KEY (`addedBy`) REFERENCES `users`(`userID`);

ALTER TABLE `evalPostProd` ADD CONSTRAINT `evalPostProd_fk0` FOREIGN KEY (`userID`) REFERENCES `users`(`userID`);

ALTER TABLE `evalPostProd` ADD CONSTRAINT `evalPostProd_fk1` FOREIGN KEY (`eventID`) REFERENCES `Events`(`eventID`);

ALTER TABLE `eventAttendance` ADD CONSTRAINT `eventAttendance_fk0` FOREIGN KEY (`eventID`) REFERENCES `Events`(`eventID`);

ALTER TABLE `eventAttendance` ADD CONSTRAINT `eventAttendance_fk1` FOREIGN KEY (`userID`) REFERENCES `users`(`userID`);

