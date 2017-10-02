/*TABLE FOR SALES (first page)*/

CREATE TABLE Sales (
ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, Salesperson VARCHAR(255), Sales_Date VARCHAR(255),
Customer_name VARCHAR(255), Address VARCHAR(255), 
Phone BIGINT, POC_name VARCHAR(255), 
POC_title VARCHAR(255), POC_phone VARCHAR(255), 
POC_email VARCHAR(255), Call_type VARCHAR(255), 
POC_reseller_name VARCHAR(255), POC_reseller_org VARCHAR(255),
POC_reseller_phone INT, POC_reseller_email VARCHAR(255), 
POC_reseller_fee INT, Opportunities VARCHAR(255),
Bandwidth_req VARCHAR(255), IP_ammount INT,
Bandwidth_current VARCHAR(255), Current_provider VARCHAR(255),
Current_monthly_charge INT, Current_technology VARCHAR(255), 
TowerCoverage VARCHAR(255), Notes VARCHAR(255)
);


/*PLOTTING FORM (second page)*/

CREATE TABLE Plotting (
ID INT NOT NULL, FOREIGN KEY (ID) REFERENCES Sales(ID),
Existing_infrastructure VARCHAR(255), 
Survey VARCHAR(255), TX_radio VARCHAR(255),
RX_radio VARCHAR(255), Existing_sector VARCHAR(255),
Throughput VARCHAR(255), RSSI VARCHAR(255),
Parts_list TEXT, Notes VARCHAR(255),
Dist_install_labor VARCHAR(255), CPE_install_labor VARCHAR(255)
);


/*ONSITE FORM (third and fourth page)*/

CREATE TABLE Onsite (
ID INT NOT NULL, FOREIGN KEY (ID) REFERENCES Sales(ID), 
Survery_date VARCHAR(255), Survery_time INT, Survery_POC VARCHAR(255),
Surveyor_name VARCHAR(255), 
Dist_visibility VARCHAR(255),
Dist_1 VARCHAR(255), Dist_1_direction VARCHAR(255),
Dist_2 VARCHAR(255), Dist_2_direction VARCHAR(255),
Dist_3 VARCHAR(255), Dist_3_direction VARCHAR(255),
Radio_mount VARCHAR(255), Other_comm_equip VARCHAR(255), PRS VARCHAR(255),
Roof_acess VARCHAR(255), Building_penetration VARCHAR(255),
Cable_path VARCHAR(255), Demarc_location VARCHAR(255),
CPE_mount VARCHAR(255), Building_type VARCHAR(255),
Picture_checks VARCHAR(255), Num_of_installers INT,
Installation_checks TEXT, Notes TEXT
);


/*CUSTOMER DETAILS (fifth page)*/

CREATE TABLE Customer (
ID INT NOT NULL, FOREIGN KEY (ID) REFERENCES Sales(ID),
POC_alt1_name VARCHAR(255), POC_alt1_title VARCHAR(255), POC_alt1_phone BIGINT, POC_alt1_email VARCHAR(255),
POC_alt2_name VARCHAR(255), POC_alt2_title VARCHAR(255), POC_alt2_phone BIGINT, POC_alt2_email VARCHAR(255),
POC_alt3_name VARCHAR(255), POC_alt3_title VARCHAR(255), POC_alt3_phone BIGINT, POC_alt3_email VARCHAR(255),
POC_alt4_name VARCHAR(255), POC_alt4_title VARCHAR(255), POC_alt4_phone BIGINT, POC_alt4_email VARCHAR(255),
Customer_notes TEXT,
Building_ownership VARCHAR(255), Multitenant VARCHAR(255),
Property_name VARCHAR(255), Building_owners VARCHAR(255),
Property_mng_co VARCHAR(255),
POC1_Building_name VARCHAR(255), POC1_Building_phone BIGINT, POC1_Building_email VARCHAR(255),
POC2_Building_name VARCHAR(255), POC2_Building_phone BIGINT, POC2_Building_email VARCHAR(255),
Notes TEXT
);


/*INSTRUCTIONS INSTRUCTIONS (sixth page)*/

CREATE TABLE Installation (
ID INT NOT NULL, FOREIGN KEY (ID) REFERENCES Sales(ID),
Install_due VARCHAR(255), Install_date VARCHAR(255), Install_time VARCHAR(255),
Installers_needed VARCHAR(255), IPs_needed VARCHAR(255), Bandwidth VARCHAR(255),
Customer_pIP_range VARCHAR(255), VLAN VARCHAR(255),
pIP_Gateway VARCHAR(255), pIP_subnet VARCHAR(255),
CPE_prIP VARCHAR(255), Access_point_IP VARCHAR(255),
AP_subnet VARCHAR(255), AP_gateway VARCHAR(255),
Customer_technical_POC_name VARCHAR(255), Customer_technical_POC_phone BIGINT, Customer_technical_POC_email VARCHAR(255),
Special VARCHAR(255), Additional_instructions VARCHAR(255)
);


/*DISTRIBUTION SITE INSTALL (seventh page)*/

CREATE TABLE Distribution (
ID INT NOT NULL, FOREIGN KEY (ID) REFERENCES Sales(ID),
Dist_date VARCHAR(255), Dist_name VARCHAR(255),
Technician1_name VARCHAR(255), Technician1_start INT, Technician1_stop INT, Technician1_hours INT, 
Technician2_name VARCHAR(255), Technician2_start INT, Technician2_stop INT, Technician2_hours INT, 
Technician3_name VARCHAR(255), Technician3_start INT, Technician3_stop INT, Technician3_hours INT, 
Technician4_name VARCHAR(255), Technician4_start INT, Technician4_stop INT, Technician4_hours INT, 
Technician5_name VARCHAR(255), Technician5_start INT, Technician5_stop INT, Technician5_hours INT, 
Dist_radio_config_checks VARCHAR(255), Dist_install_checks VARCHAR(255), Max_capacity_dist VARCHAR(255),
Notes VARCHAR(255)
);


/*CPE SITE INSTALL (eighth page)*/

CREATE TABLE Distribution (
ID INT NOT NULL, FOREIGN KEY (ID) REFERENCES Sales(ID),
CPE_date VARCHAR(255), CPE_name VARCHAR(255),
Technician1_name VARCHAR(255), Technician1_start INT, Technician1_stop INT, Technician1_hours INT, 
Technician2_name VARCHAR(255), Technician2_start INT, Technician2_stop INT, Technician2_hours INT, 
Technician3_name VARCHAR(255), Technician3_start INT, Technician3_stop INT, Technician3_hours INT, 
Technician4_name VARCHAR(255), Technician4_start INT, Technician4_stop INT, Technician4_hours INT, 
Technician5_name VARCHAR(255), Technician5_start INT, Technician5_stop INT, Technician5_hours INT, 
CPE_radio_config_checks VARCHAR(255), CPE_install_checks VARCHAR(255), Max_capacity_circ VARCHAR(255),
Notes VARCHAR(255)
);


/*POST INSTALL (ninth page)*/
 
CREATE TABLE Post (
ID INT NOT NULL, FOREIGN KEY (ID) REFERENCES Sales(ID),
Customer_pIP_range VARCHAR(255), Default_gate VARCHAR(255), Subnet VARCHAR(255),
Engineering_post_checks VARCHAR(255), Operation_post_checks VARCHAR(255),
Accounting_post_checks VARCHAR(255), Sales_post_checks VARCHAR(255),
);
