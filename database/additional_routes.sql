-- Additional Routes for Dimple Star Transport
-- This file contains new routes with varied pricing to complement existing routes

-- Insert additional routes with different pricing tiers
INSERT INTO `routes` VALUES ('55', 'Manila', 'San Jose', '5:30am', '350', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('56', 'Manila', 'San Jose', '7:30am', '350', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('57', 'Manila', 'San Jose', '2:30pm', '350', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('58', 'Manila', 'San Jose', '6:30pm', '350', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('59', 'Manila', 'San Jose', '5:30am', '250', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('60', 'Manila', 'San Jose', '7:30am', '250', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('61', 'Manila', 'San Jose', '2:30pm', '250', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('62', 'Manila', 'San Jose', '6:30pm', '250', 'Ordinary', 'None');

-- Premium routes with higher pricing
INSERT INTO `routes` VALUES ('63', 'Makati', 'San Jose', '6:00am', '400', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('64', 'Makati', 'San Jose', '8:00am', '400', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('65', 'Makati', 'San Jose', '3:00pm', '400', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('66', 'Makati', 'San Jose', '7:00pm', '400', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('67', 'Makati', 'San Jose', '6:00am', '280', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('68', 'Makati', 'San Jose', '8:00am', '280', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('69', 'Makati', 'San Jose', '3:00pm', '280', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('70', 'Makati', 'San Jose', '7:00pm', '280', 'Ordinary', 'None');

-- Budget routes with lower pricing
INSERT INTO `routes` VALUES ('71', 'Caloocan', 'San Jose', '4:00am', '180', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('72', 'Caloocan', 'San Jose', '6:00am', '180', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('73', 'Caloocan', 'San Jose', '1:00pm', '180', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('74', 'Caloocan', 'San Jose', '5:00pm', '180', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('75', 'Caloocan', 'San Jose', '4:00am', '280', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('76', 'Caloocan', 'San Jose', '6:00am', '280', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('77', 'Caloocan', 'San Jose', '1:00pm', '280', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('78', 'Caloocan', 'San Jose', '5:00pm', '280', 'Air Conditioned', 'None');

-- Mid-range routes
INSERT INTO `routes` VALUES ('79', 'Quezon City', 'San Jose', '5:00am', '320', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('80', 'Quezon City', 'San Jose', '7:00am', '320', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('81', 'Quezon City', 'San Jose', '2:00pm', '320', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('82', 'Quezon City', 'San Jose', '6:00pm', '320', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('83', 'Quezon City', 'San Jose', '5:00am', '220', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('84', 'Quezon City', 'San Jose', '7:00am', '220', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('85', 'Quezon City', 'San Jose', '2:00pm', '220', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('86', 'Quezon City', 'San Jose', '6:00pm', '220', 'Ordinary', 'None');

-- Premium express routes
INSERT INTO `routes` VALUES ('87', 'BGC Taguig', 'San Jose', '6:30am', '450', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('88', 'BGC Taguig', 'San Jose', '8:30am', '450', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('89', 'BGC Taguig', 'San Jose', '3:30pm', '450', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('90', 'BGC Taguig', 'San Jose', '7:30pm', '450', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('91', 'BGC Taguig', 'San Jose', '6:30am', '320', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('92', 'BGC Taguig', 'San Jose', '8:30am', '320', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('93', 'BGC Taguig', 'San Jose', '3:30pm', '320', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('94', 'BGC Taguig', 'San Jose', '7:30pm', '320', 'Ordinary', 'None');

-- Late night routes
INSERT INTO `routes` VALUES ('95', 'Pasig', 'San Jose', '11:00pm', '380', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('96', 'Pasig', 'San Jose', '12:00am', '380', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('97', 'Pasig', 'San Jose', '11:00pm', '260', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('98', 'Pasig', 'San Jose', '12:00am', '260', 'Ordinary', 'None');

-- Early morning routes
INSERT INTO `routes` VALUES ('99', 'Marikina', 'San Jose', '3:30am', '290', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('100', 'Marikina', 'San Jose', '5:30am', '290', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('101', 'Marikina', 'San Jose', '3:30am', '190', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('102', 'Marikina', 'San Jose', '5:30am', '190', 'Ordinary', 'None');

-- Weekend special routes
INSERT INTO `routes` VALUES ('103', 'Cubao', 'San Jose', '9:30am', '330', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('104', 'Cubao', 'San Jose', '11:30am', '330', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('105', 'Cubao', 'San Jose', '4:30pm', '330', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('106', 'Cubao', 'San Jose', '9:30am', '230', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('107', 'Cubao', 'San Jose', '11:30am', '230', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('108', 'Cubao', 'San Jose', '4:30pm', '230', 'Ordinary', 'None');

-- Express routes with premium pricing
INSERT INTO `routes` VALUES ('109', 'Ortigas', 'San Jose', '7:15am', '420', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('110', 'Ortigas', 'San Jose', '9:15am', '420', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('111', 'Ortigas', 'San Jose', '4:15pm', '420', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('112', 'Ortigas', 'San Jose', '7:15am', '290', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('113', 'Ortigas', 'San Jose', '9:15am', '290', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('114', 'Ortigas', 'San Jose', '4:15pm', '290', 'Ordinary', 'None');

-- Budget-friendly routes
INSERT INTO `routes` VALUES ('115', 'Valenzuela', 'San Jose', '4:30am', '160', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('116', 'Valenzuela', 'San Jose', '6:30am', '160', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('117', 'Valenzuela', 'San Jose', '1:30pm', '160', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('118', 'Valenzuela', 'San Jose', '5:30pm', '160', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('119', 'Valenzuela', 'San Jose', '4:30am', '260', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('120', 'Valenzuela', 'San Jose', '6:30am', '260', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('121', 'Valenzuela', 'San Jose', '1:30pm', '260', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('122', 'Valenzuela', 'San Jose', '5:30pm', '260', 'Air Conditioned', 'None');

-- Mid-day routes
INSERT INTO `routes` VALUES ('123', 'Mandaluyong', 'San Jose', '10:00am', '310', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('124', 'Mandaluyong', 'San Jose', '12:00pm', '310', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('125', 'Mandaluyong', 'San Jose', '5:00pm', '310', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('126', 'Mandaluyong', 'San Jose', '10:00am', '210', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('127', 'Mandaluyong', 'San Jose', '12:00pm', '210', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('128', 'Mandaluyong', 'San Jose', '5:00pm', '210', 'Ordinary', 'None');

-- Evening routes
INSERT INTO `routes` VALUES ('129', 'San Juan', 'San Jose', '8:00pm', '340', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('130', 'San Juan', 'San Jose', '10:00pm', '340', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('131', 'San Juan', 'San Jose', '8:00pm', '240', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('132', 'San Juan', 'San Jose', '10:00pm', '240', 'Ordinary', 'None');

-- Early afternoon routes
INSERT INTO `routes` VALUES ('133', 'Malabon', 'San Jose', '12:30pm', '270', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('134', 'Malabon', 'San Jose', '2:30pm', '270', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('135', 'Malabon', 'San Jose', '6:30pm', '270', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('136', 'Malabon', 'San Jose', '12:30pm', '170', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('137', 'Malabon', 'San Jose', '2:30pm', '170', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('138', 'Malabon', 'San Jose', '6:30pm', '170', 'Ordinary', 'None');

-- Late afternoon routes
INSERT INTO `routes` VALUES ('139', 'Navotas', 'San Jose', '3:45pm', '285', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('140', 'Navotas', 'San Jose', '5:45pm', '285', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('141', 'Navotas', 'San Jose', '8:45pm', '285', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('142', 'Navotas', 'San Jose', '3:45pm', '185', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('143', 'Navotas', 'San Jose', '5:45pm', '185', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('144', 'Navotas', 'San Jose', '8:45pm', '185', 'Ordinary', 'None');

-- Night routes
INSERT INTO `routes` VALUES ('145', 'Las Piñas', 'San Jose', '9:00pm', '360', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('146', 'Las Piñas', 'San Jose', '11:00pm', '360', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('147', 'Las Piñas', 'San Jose', '9:00pm', '260', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('148', 'Las Piñas', 'San Jose', '11:00pm', '260', 'Ordinary', 'None');

-- Early morning premium routes
INSERT INTO `routes` VALUES ('149', 'Parañaque', 'San Jose', '4:15am', '390', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('150', 'Parañaque', 'San Jose', '6:15am', '390', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('151', 'Parañaque', 'San Jose', '4:15am', '290', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('152', 'Parañaque', 'San Jose', '6:15am', '290', 'Ordinary', 'None');

-- Mid-morning routes
INSERT INTO `routes` VALUES ('153', 'Muntinlupa', 'San Jose', '8:45am', '295', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('154', 'Muntinlupa', 'San Jose', '10:45am', '295', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('155', 'Muntinlupa', 'San Jose', '4:45pm', '295', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('156', 'Muntinlupa', 'San Jose', '8:45am', '195', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('157', 'Muntinlupa', 'San Jose', '10:45am', '195', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('158', 'Muntinlupa', 'San Jose', '4:45pm', '195', 'Ordinary', 'None');

-- Afternoon routes
INSERT INTO `routes` VALUES ('159', 'Taguig', 'San Jose', '1:15pm', '305', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('160', 'Taguig', 'San Jose', '3:15pm', '305', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('161', 'Taguig', 'San Jose', '7:15pm', '305', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('162', 'Taguig', 'San Jose', '1:15pm', '205', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('163', 'Taguig', 'San Jose', '3:15pm', '205', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('164', 'Taguig', 'San Jose', '7:15pm', '205', 'Ordinary', 'None');

-- Evening premium routes
INSERT INTO `routes` VALUES ('165', 'Pateros', 'San Jose', '7:30pm', '370', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('166', 'Pateros', 'San Jose', '9:30pm', '370', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('167', 'Pateros', 'San Jose', '7:30pm', '270', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('168', 'Pateros', 'San Jose', '9:30pm', '270', 'Ordinary', 'None');

-- Late night budget routes
INSERT INTO `routes` VALUES ('169', 'Sta. Rosa', 'San Jose', '10:30pm', '240', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('170', 'Sta. Rosa', 'San Jose', '12:30am', '240', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('171', 'Sta. Rosa', 'San Jose', '10:30pm', '340', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('172', 'Sta. Rosa', 'San Jose', '12:30am', '340', 'Air Conditioned', 'None');

-- Early morning budget routes
INSERT INTO `routes` VALUES ('173', 'Biñan', 'San Jose', '3:45am', '200', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('174', 'Biñan', 'San Jose', '5:45am', '200', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('175', 'Biñan', 'San Jose', '3:45am', '300', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('176', 'Biñan', 'San Jose', '5:45am', '300', 'Air Conditioned', 'None');

-- Mid-day premium routes
INSERT INTO `routes` VALUES ('177', 'San Pedro', 'San Jose', '11:15am', '380', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('178', 'San Pedro', 'San Jose', '1:15pm', '380', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('179', 'San Pedro', 'San Jose', '5:15pm', '380', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('180', 'San Pedro', 'San Jose', '11:15am', '280', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('181', 'San Pedro', 'San Jose', '1:15pm', '280', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('182', 'San Pedro', 'San Jose', '5:15pm', '280', 'Ordinary', 'None');

-- Afternoon budget routes
INSERT INTO `routes` VALUES ('183', 'Cabuyao', 'San Jose', '2:00pm', '190', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('184', 'Cabuyao', 'San Jose', '4:00pm', '190', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('185', 'Cabuyao', 'San Jose', '8:00pm', '190', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('186', 'Cabuyao', 'San Jose', '2:00pm', '290', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('187', 'Cabuyao', 'San Jose', '4:00pm', '290', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('188', 'Cabuyao', 'San Jose', '8:00pm', '290', 'Air Conditioned', 'None');

-- Evening mid-range routes
INSERT INTO `routes` VALUES ('189', 'Calamba', 'San Jose', '6:45pm', '315', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('190', 'Calamba', 'San Jose', '8:45pm', '315', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('191', 'Calamba', 'San Jose', '6:45pm', '215', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('192', 'Calamba', 'San Jose', '8:45pm', '215', 'Ordinary', 'None');

-- Night premium routes
INSERT INTO `routes` VALUES ('193', 'Los Baños', 'San Jose', '9:15pm', '410', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('194', 'Los Baños', 'San Jose', '11:15pm', '410', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('195', 'Los Baños', 'San Jose', '9:15pm', '310', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('196', 'Los Baños', 'San Jose', '11:15pm', '310', 'Ordinary', 'None');

-- Early morning premium routes
INSERT INTO `routes` VALUES ('197', 'Bay', 'San Jose', '4:00am', '430', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('198', 'Bay', 'San Jose', '6:00am', '430', 'Air Conditioned', 'None');
INSERT INTO `routes` VALUES ('199', 'Bay', 'San Jose', '4:00am', '330', 'Ordinary', 'None');
INSERT INTO `routes` VALUES ('200', 'Bay', 'San Jose', '6:00am', '330', 'Ordinary', 'None');

-- Summary of new pricing tiers:
-- Budget Routes: ₱160-₱200 (Ordinary), ₱260-₱300 (Air Conditioned)
-- Standard Routes: ₱210-₱250 (Ordinary), ₱310-₱350 (Air Conditioned)  
-- Mid-Range Routes: ₱260-₱290 (Ordinary), ₱360-₱390 (Air Conditioned)
-- Premium Routes: ₱310-₱330 (Ordinary), ₱410-₱450 (Air Conditioned)
