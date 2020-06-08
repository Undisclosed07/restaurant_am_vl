#
# Table structure for table 'tx_restaurantamvl_domain_model_menu'
#
CREATE TABLE tx_restaurantamvl_domain_model_menu (

	name varchar(255) DEFAULT '' NOT NULL,
	price double(11,2) DEFAULT '0.00' NOT NULL,
	description text,
	service int(11) DEFAULT '0' NOT NULL,
	available smallint(5) unsigned DEFAULT '0' NOT NULL,
	discount double(11,2) DEFAULT '0.00' NOT NULL,
	entries int(11) unsigned DEFAULT '0' NOT NULL,
	main_dishes int(11) unsigned DEFAULT '0' NOT NULL,
	cheeses int(11) unsigned DEFAULT '0' NOT NULL,
	desserts int(11) unsigned DEFAULT '0' NOT NULL,
	drinks int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_restaurantamvl_domain_model_dish'
#
CREATE TABLE tx_restaurantamvl_domain_model_dish (

	name varchar(255) DEFAULT '' NOT NULL,
	description text,
	photo int(11) unsigned NOT NULL default '0',
	type int(11) DEFAULT '0' NOT NULL,
	price double(11,2) DEFAULT '0.00' NOT NULL,
	discount double(11,2) DEFAULT '0.00' NOT NULL,
	allergens smallint(5) unsigned DEFAULT '0' NOT NULL,
	frozens smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_restaurantamvl_domain_model_drink'
#
CREATE TABLE tx_restaurantamvl_domain_model_drink (

	name varchar(255) DEFAULT '' NOT NULL,
	price double(11,2) DEFAULT '0.00' NOT NULL,
	description text,
	alcoholized smallint(5) unsigned DEFAULT '0' NOT NULL,
	volume varchar(255) DEFAULT '' NOT NULL,
	category int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_restaurantamvl_domain_model_category'
#
CREATE TABLE tx_restaurantamvl_domain_model_category (

	name varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_restaurantamvl_domain_model_suggestion'
#
CREATE TABLE tx_restaurantamvl_domain_model_suggestion (

	start datetime DEFAULT NULL,
	end datetime DEFAULT NULL,
	dishes int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_restaurantamvl_menu_dish_mm'
#
CREATE TABLE tx_restaurantamvl_menu_dish_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_restaurantamvl_menu_maindishes_dish_mm'
#
CREATE TABLE tx_restaurantamvl_menu_maindishes_dish_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_restaurantamvl_menu_cheeses_dish_mm'
#
CREATE TABLE tx_restaurantamvl_menu_cheeses_dish_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_restaurantamvl_menu_desserts_dish_mm'
#
CREATE TABLE tx_restaurantamvl_menu_desserts_dish_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_restaurantamvl_menu_drink_mm'
#
CREATE TABLE tx_restaurantamvl_menu_drink_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_restaurantamvl_suggestion_dish_mm'
#
CREATE TABLE tx_restaurantamvl_suggestion_dish_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
