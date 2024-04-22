CREATE TABLE Type (
    type_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    type_name VARCHAR(25)
);

CREATE TABLE Status (
    status_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    status_name VARCHAR(25)
);

CREATE TABLE Region (
    region_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    region_name VARCHAR(25)    
);

CREATE TABLE Held_Item (
    item_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(25)
);

CREATE TABLE Trainer (
    trainer_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    trainer_name VARCHAR(25)
);

CREATE TABLE Pokemon (
    p_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    p_name VARCHAR(25),

    status_id INT NOT NULL,
    type_id INT NOT NULL,
    item_id INT NOT NULL,
    trainer_id INT NOT NULL,
    region_id INT NOT NULL,

    CONSTRAINT status_status_id_fk
    FOREIGN KEY (status_id)
    REFERENCES Status (status_id),

    CONSTRAINT type_type_id_fk
    FOREIGN KEY (type_id)
    REFERENCES Type (type_id),

    CONSTRAINT held_item_item_id_fk
    FOREIGN KEY (item_id)
    REFERENCES Held_Item (item_id),

    CONSTRAINT trainer_trainer_id_fk
    FOREIGN KEY (trainer_id)
    REFERENCES Trainer (trainer_id),

    CONSTRAINT region_region_id_fk
    FOREIGN KEY (region_id)
    REFERENCES Region (region_id)
);

CREATE TABLE PokemonTypes (
    CONSTRAINT pokemontypes_pk PRIMARY KEY (p_id, type_id),

    p_id INT NOT NULL,
    type_id INT NOT NULL,

    FOREIGN KEY (p_id)
    REFERENCES Pokemon (p_id),
    
    FOREIGN KEY (type_id)
    REFERENCES Type (type_id)
);