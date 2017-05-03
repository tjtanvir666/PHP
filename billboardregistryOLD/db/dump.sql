CREATE DATABASE screenDB;
USE screenDB;

CREATE TABLE ScreenSet(
ref_id VARCHAR(255) NOT NULL, 
company_id INT,
name VARCHAR(255) NOT NULL, 
display_name VARCHAR(255) NOT NULL,
district ENUM('London Brough of Lambeth','Birmingham','Klang','Kuala Langat','Sepang','Tangerang','Petaling','Kuala Kangsar','Kuala Selangor','Larut dan Matang','Hilr Perak','Johor Bahru','Maur','Batang Padang','Kota Bharu','Kota Kinabalu','Kampar','Kuantan','Melaka Tengah','Kulim','Kluang','Cameron Highlands','Kemaman','Kota Setar','Seremban','Kuala Terengganu','Kinta','Gombak','Penampang','Kuching','Kulaijaya'), 
postal VARCHAR(255) NOT NULL, 
media_operator VARCHAR(255) NOT NULL,
type ENUM('DIGITAL', 'DIGITAL-NETWORK', 'STATIC', 'DIGITAL NETWORK'),
category ENUM('OUTDOOR', 'INDOOR'), 
manufacturer VARCHAR(255) NOT NULL, 
player_software VARCHAR(255) NOT NULL, 
country ENUM('Malaysia','Singapore','Thailand','Indonesia','Philippines','United Kingdom'), 
state ENUM('Kedah','Negeri Sembilan','Banten','East Java','Selangor','Kuala Lampur','Terengganu','Kelantan','Sabah','Sarawak','Putrajaya','Johor','Perak','Pahang','Riau','Aceh','West Java','Bali','South Sulawesi'),
groupp ENUM('DRIVE','SHOP','WORK','OFFICE','WAIT','TRAVEL'),
market_seq SET('PMEB', 'BUSINESS-OWNER', 'TRAVEL-INTENDERS', 'SHOPPERS', 'TOURIST', 'FAMILIES', 'STUDENTS', 'COLLEGE', 'COMMUTERS', 'FOOD-LOVERS', 'GROCERY-BUYERS', 'HOME-BUYERS', 'GADGET-INTENDERS', 'AUTO-INTENDERS'),
PRIMARY KEY (ref_id)
);

ALTER TABLE ScreenSet ADD CONSTRAINT fk_comp_id FOREIGN KEY (company_id) REFERENCES Company(company_id);


CREATE TABLE Screen(
id INT(255) PRIMARY KEY auto_increment,
available_screen ENUM('YES', 'NO'),
no_of_screens INT(10),	
direction_facing ENUM('NORTH','SOUTH','EAST','WEST'),
format_s ENUM('SMALL', 'LARGE', 'MEDIUM', 'EXTRA-LARGE'),
lon DOUBLE,
lat DOUBLE,
ref_id VARCHAR(255)
);

ALTER TABLE Screen ADD CONSTRAINT fk_ref_id FOREIGN KEY (ref_id) REFERENCES ScreenSet(ref_id);

CREATE TABLE Panel(
panel_id INT(255) PRIMARY KEY auto_increment,
no_of_panel INT(10),
panel_h DOUBLE,
panel_w DOUBLE,
panel_age INT(10),
panel_led VARCHAR(255),
available_hrs DOUBLE,
panel_combination ENUM('how', 'to'),
panel_available ENUM('YES','NO'),
res_h INT(255),
res_w INT(255),
id INT(255)
);

ALTER TABLE Panel ADD CONSTRAINT fk_id FOREIGN KEY(id) REFERENCES Screen(id);

CREATE TABLE Operations(
id INT(255) PRIMARY KEY auto_increment,
ref_id VARCHAR(255),
description TEXT,
exclusion TEXT,
lead_time INT(100),
content_approval ENUM('YES','NO')
);

ALTER TABLE Operations ADD CONSTRAINT fk_ref_id_op FOREIGN KEY(ref_id) REFERENCES Screen(ref_id);

CREATE TABLE Support(
ref_id VARCHAR(255),
audio ENUM('YES','NO'),
video SET('mp4','avi','mov','mpg','mwv','vob','flv','swf'),
image SET('jpg','jpeg','png','tif','gif')
);

ALTER TABLE Support ADD CONSTRAINT fk_ref_id_sp FOREIGN KEY(ref_id) REFERENCES Screen(ref_id);

CREATE TABLE screen_time(
lisitng_id INT(255) PRIMARY KEY auto_increment,
ref_id VARCHAR(255),
start_time TIME,
end_time TIME,
duration ENUM('5', '10', '15', '30', '60'),
no_of_loops INT(100),
no_client INT(10),
days_available SET('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'),
local_curr ENUM('Rm', 'SingD', 'Bhat', 'Rp', 'Pounds', 'Peso'),
local_rate DOUBLE,
USD_rate DOUBLE
);

ALTER TABLE screen_time ADD CONSTRAINT fk_ref_id_st FOREIGN KEY(ref_id) REFERENCES ScreenSet(ref_id);

CREATE TABLE Company(
company_id INT(255) PRIMARY KEY auto_increment, 
company_name VARCHAR(255),
business_registration_number VARCHAR(255),
registered_date  DATE,
email VARCHAR(255),
phone VARCHAR(255),
fax VARCHAR(255), 
website VARCHAR(255),
business_type ENUM('INDOOR','OUTDOOR'),
country VARCHAR(255),
city VARCHAR(255),
state VARCHAR(255),
street VARCHAR(255),
postal_code INT
);


CREATE TABLE update_requests_company(
id INT PRIMARY KEY auto_increment,
company_id INT, 
resolved_status BOOLEAN,
value_changes JSON
);

ALTER TABLE update_requests_company ADD CONSTRAINT fk_company_id FOREIGN KEY(company_id) REFERENCES Comapny(company_id);


CREATE TABLE update_requests_company(
id INT PRIMARY KEY auto_increment,
company_id INT, 
resolved_status BOOLEAN,
value_changes JSON
);

ALTER TABLE update_requests_company ADD CONSTRAINT fk_company_id FOREIGN KEY(company_id) REFERENCES Comapny(company_id);


CREATE TABLE users(
email VARCHAR(255),
role  VARCHAR(255),
company_id INT,
passwords VARCHAR(255),
first_name VARCHAR(255),
last_name VARCHAR(255),
description TEXT,
statuses BOOLEAN
);

ALTER TABLE users ADD PRIMARY KEY(email, role);
ALTER TABLE users ADD CONSTRAINT fk_company_id FOREIGN KEY(company_id) REFERENCES Comapny(company_id);


CREATE TABLE update_requests_users(
id INT PRIMARY KEY auto_increment,
email VARCHAR(255),
resolved_status BOOLEAN,
value_changes JSON
);

ALTER TABLE update_requests_users ADD CONSTRAINT fk_email FOREIGN KEY(email) REFERENCES users(email);


CREATE TABLE rights(
rights VARCHAR(255),
role  VARCHAR(255)
);

ALTER TABLE rights ADD CONSTRAINT fk_role FOREIGN KEY(role) REFERENCES users(role);


CREATE TABLE acct_management(
token VARCHAR(255) PRIMARY KEY,
email VARCHAR(255),
end_date DATETIME,
purpose TEXT
);

ALTER TABLE acct_management ADD CONSTRAINT fk_email FOREIGN KEY(email) REFERENCES users(email);









