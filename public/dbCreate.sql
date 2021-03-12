CREATE DATABASE jurassite;
USE jurassite;
CREATE TABLE site(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `longitude` VARCHAR(255) NOT NULL,
    `latitude` VARCHAR(255) NOT NULL,
    `manager` VARCHAR(255) NOT NULL,
    `phone` INT NOT NULL 
);
CREATE TABLE notes(
    `id` INT NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `content` TEXT NOT NULL,
    `date` DATE NOT NULL,
    CONSTRAINT fk_notes_site
    FOREIGN KEY(`id`) REFERENCES site(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);
CREATE TABLE dino(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `site_id` INT NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `type` TEXT NOT NULL,
    `x` INT NOT NULL,
    `y` INT NOT NULL,
    `z` VARCHAR(255) NOT NULL,
    `picture` TEXT NOT NULL,
    `conservation` VARCHAR(255) NOT NULL,
    CONSTRAINT fk_dino_site
    FOREIGN KEY(`site_id`) REFERENCES site(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);
CREATE TABLE list(
    `site_id` INT NOT NULL,
    `dino_id` INT NOT NULL,
    CONSTRAINT fk_list_site
    FOREIGN KEY(`site_id`) REFERENCES site(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    CONSTRAINT fk_list_dino
    FOREIGN KEY(`dino_id`) REFERENCES dino(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);
CREATE TABLE remarks(
    `id` INT NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `content` TEXT NOT NULL,
    CONSTRAINT fk_remarks_dino
    FOREIGN KEY(`id`) REFERENCES dino(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);
INSERT INTO `site` (`name`, `longitude`, `latitude`, `manager`, `phone`) VALUES ('Glanum', '43°4701"N', '4°5032"E', 'John Hammond', '0123456789'),('Ambrussum', '43°4308"N', '4°0848"E', 'Professeur Alan Grant', '0123456798');
INSERT INTO `dino` (`name`, `site_id`, `type`, `x`, `y`, `z`, `picture`, `conservation`) VALUES ('Abrosaurus', '1', 'Sauropodes(Camarasaurides), Herbivore', '620', '555', '6 metres', 'A REMPLIR', '90%'),('Velociraptor', '2', 'Theropodes(Saurischien), Carnivore', '785', '412', '12 metres', 'A REMPLIR', '100%'),('Echinodon', '1', 'Ornithopodes(Fabrosaurides), Vegetivore', '123', '456', '90 metres', 'A REMPLIR', '40%'),('Tyrannosaurus Rex', '2', 'Theropodes(Saurischien), Carnivore', '69', '69', '69 metres', 'A DEFINIR', '69%');
INSERT INTO `notes` (`id`, `title`, `content`, `date`) VALUES ('1', 'Decouverte Abrosaurus', 'On voit la tete !!', '2005/06/06'),('1', 'Decouverte Echinodon', 'On voit la patte !!', '2008/07/08'),('2', 'Decouverte Raptor', 'Il a la classe', '2002/08/07'),('2', 'Decouverte T-rex', 'Baleze', '2004/05/02');
INSERT INTO `list` (`site_id`, `dino_id`) VALUES ('1', '1'),('2', '2'),('1', '3'),('2', '4');
INSERT INTO `remarks` (`id`, `title`, `content`) VALUES ('1', 'Abrosaurus', 'Linda a mordu le dino'),('2', 'Raptor', 'Julien a fait un calin au raptor'),('3', 'Echinodon', 'Jc a fait un selfie avec Mr Nodon'),('4', 'T-rex', 'Randa a couché le King');