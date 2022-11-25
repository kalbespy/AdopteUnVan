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
(1, 'Tente de toit', false, false, false, false, false, 2, 1.9, 'assets/images/rooftent.jpg', 'https://naitup.com/', 'https://www.decathlon.fr/browse/c0-tous-les-sports/c1-camping-bivouac/c3-tente-de-toit/_/N-vzl837', 'link3', "Le moyen le plus simple et le moins cher pour partir à l'aventure!"),
(2, 'Combi VW', false, false, false, false, false, 3, 3, 'assets/images/combi.jpg', 'https://www.wikicampers.fr/annonces-location-camping-car?typeVehicule%5B0%5D=6 ', 'https://www.goboony.fr/location-de-camping-car ', 'link3', "Synonyme de liberté et de voyage, le combi fait rêver les collectionneurs nostalgiques."),
(3, 'Van sans aménagement', false, false, false, false, false, 3, 2.5, 'assets/images/simplevan.jpg', 'https://www.leboncoin.fr/recherche?category=2&text=Van ', 'https://www.routard.com/forums/t/conseils-achat-fourgon-non-amenage-petit-budget/162892 ', 'link3', "Pour ceux qui n'ont pas besoin de beaucoup de confort."),
(4, 'Van aménagé', false, false, true, true, true, 3, 3, 'assets/images/campervan.jpg', 'https://www.glenanconceptcars.com/ ', 'https://www.blacksheep-van.com/van-amenage/?gclid=CjwKCAiAyfybBhBKEiwAgtB7flThMRCM8zNESwAczON_N7uzQHD_A3mEDi2OqUNXFV56_saCpt3_BBoCOhEQAvD_BwE ', 'link3', "Le bon compromis entre la voiture et le camping-car."),
(5, 'Fourgon aménagé', true, true, true, true, true, 5, 3.7, 'assets/images/fourgon.jped', 'https://www.campereve.fr/fourgons_index.php
', 'https://www.campereve.fr/fourgons_index.php
', 'link3', "Personnalisez le à votre goût."),
(6, 'Camping car', true, true, true, true, true, 5, 6.5, 'assets/images/camping_car.jpg', 'https://www.wikicampers.fr/annonces-location-camping-car?geoname=&geonameid=&startDate=&endDate=&typeVehicule%5B%5D=1&budget=0.00-3000.00&length=1200.00&gearbox=', 'https://www.marchi-mobile.com/palazzo-superior/ ', 'link3', "Pour voyager tout confort."),
(7, 'Baroudeur', false, false, false, true, true, 3, 1.9, 'assets/images/adventurer.jpg', 'https://www.vanlifemag.fr/tag/baroudeur', 'https://www.blacksheep-van.com/van-amenage/ford-copa-burstner/', 'link3', "Pour explorer les zones géographiques reculées."),
(8, 'Bus aménagé', true, true, true, true, true, 10, 1.9, 'assets/images/tourbus.jpg', 'https://www.europe-camions.com/autobus-amenage/1-29-v667/autobus-amenage-occasion.html', 'https://autoline24.fr/-/bus-habitables--c1636 ', 'link3', "Pour ceux qui ont vraiment besoin d'espace. ");

SELECT * FROM van;
