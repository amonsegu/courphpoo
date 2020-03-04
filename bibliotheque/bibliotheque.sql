CREATE DATABASE bibliotheque DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE bibliotheque;

CREATE TABLE abonne (
  id INT NOT NULL AUTO_INCREMENT,
  prenom VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO abonne (prenom) VALUES
('Guillaume'),
('Benoit'),
('Chloe'),
('Laura');


CREATE TABLE livre (
  id INT NOT NULL AUTO_INCREMENT,
  auteur VARCHAR(100) NOT NULL,
  titre VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO livre (auteur, titre) VALUES
('GUY DE MAUPASSANT', 'Une vie'),
('GUY DE MAUPASSANT', 'Bel-Ami '),
('HONORE DE BALZAC', 'Le père Goriot'),
('ALPHONSE DAUDET', 'Le Petit chose'),
('ALEXANDRE DUMAS', 'La Reine Margot'),
('ALEXANDRE DUMAS', 'Les Trois Mousquetaires');

CREATE TABLE emprunt (
  id INT NOT NULL AUTO_INCREMENT,
  id_livre INT DEFAULT NULL,
  id_abonne INT DEFAULT NULL,
  date_sortie DATE NOT NULL,
  date_rendu DATE DEFAULT NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_emprunt_livre FOREIGN KEY (id_livre) REFERENCES livre(id),
  CONSTRAINT fk_emprunt_abonne FOREIGN KEY (id_abonne) REFERENCES abonne(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO emprunt (id_livre, id_abonne, date_sortie, date_rendu) VALUES
(1, 1, '2014-12-17', '2014-12-18'),
(2, 2, '2014-12-18', '2014-12-20'),
(1, 3, '2014-12-19', '2014-12-22'),
(2, 4, '2014-12-19', '2014-12-22'),
(5, 1, '2014-12-19', '2014-12-28'),
(6, 2, '2015-03-20', '2015-03-26'),
(6, 3, '2015-06-13', NULL),
(1, 2, '2015-06-15', NULL);

