DROP DATABASE IF EXISTS adopt_a_van;
CREATE DATABASE adopt_a_van;
USE adopt_a_van;

DROP TABLE IF EXISTS van;
CREATE TABLE van (
id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
type VARCHAR(20),
shower bool,
kitchen bool,
toilet bool,
solar_panel bool,
water_reserve bool,
seats int,
size float,
image VARCHAR(255),
lien1 VARCHAR(255),
lien2 VARCHAR(255),
lien3 VARCHAR(255),
description TEXT(1000)
);

INSERT INTO van VALUES
(1, 'roof_tent', false, false, false, false, false, 2, 1.9, 'assets/images/rooftent.jpg', 'link1', 'link2', 'link3', "Le moyen le plus simple et le moins cher pour partir à l'aventure!"),
(2, 'combi', false, false, false, false, false, 3, 3, 'assets/images/combi.jpg', 'link1', 'link2', 'link3', "Synonyme de liberté et de voyage, le combi fait rêver les collectionneurs nostalgiques."),
(3, 'simple_van', false, false, false, false, false, 3, 2.5, 'assets/images/simplevan.jpg', 'link1', 'link2', 'link3', "Pour ceux qui n'ont pas besoin de beaucoup de confort."),
(4, 'camper_van', false, false, true, true, true, 3, 3, 'assets/images/campervan.jpg', 'link1', 'link2', 'link3', "Le bon compromis entre la voiture et le camping-car."),
(5, 'fourgon', true, true, true, true, true, 5, 3.7, 'assets/images/fourgon.jped', 'link1', 'link2', 'link3', "Personnalisez le à votre goût."),
(6, 'camping_car', true, true, true, true, true, 5, 6.5, 'assets/images/camping_car.jpg', 'link1', 'link2', 'link3', "Pour voyager tout comfort."),
(7, 'adventurer', false, false, false, true, true, 3, 1.9, 'assets/images/adventurer.jpg', 'link1', 'link2', 'link3', "Pour explorer les zones géographiques reculées."),
(8, 'tour_bus', true, true, true, true, true, 10, 1.9, 'assets/images/tourbus.jpg', 'link1', 'link2', 'link3', "Pour ceux qui ont vraiment besoin d'espace. ");

SELECT * FROM van;