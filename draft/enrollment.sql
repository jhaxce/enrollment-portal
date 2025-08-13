-- CREATE DATABASE IF NOT EXISTS enrollment;

-- USE enrollment;

CREATE TABLE IF NOT EXISTS admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS stud_accounts (
  student_id VARCHAR(9) PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  course_abbr VARCHAR(10) NOT NULL,
  year_level VARCHAR(10),
  create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS stud_profile (
  student_id VARCHAR(9) PRIMARY KEY,
  FOREIGN KEY (student_id) REFERENCES stud_accounts (student_id),
  first_name VARCHAR(50),
  middle_name VARCHAR(50),
  last_name VARCHAR(50),
  birth_date_day VARCHAR(2),
  birth_date_month VARCHAR(2),
  birth_date_year VARCHAR(4),
  gender VARCHAR(10),
  religion VARCHAR(50),
  blood_type VARCHAR(5),
  nationality VARCHAR(50),
  national_id VARCHAR(50)
  -- create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS stud_parents (
  student_id VARCHAR(9) PRIMARY KEY,
  FOREIGN KEY (student_id) REFERENCES stud_accounts (student_id),
  father VARCHAR(50),
  mother VARCHAR(50),
  guardian VARCHAR(50)
  -- create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS stud_contacts (
  student_id varchar(9) PRIMARY KEY,
  FOREIGN KEY (student_id) REFERENCES stud_accounts (student_id),
  email VARCHAR(50),
  mobile_number VARCHAR(12)
  -- create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS stud_addresses (
  student_id VARCHAR(9) PRIMARY KEY,
  FOREIGN KEY (student_id) REFERENCES stud_accounts (student_id),
  permanent_province VARCHAR(50),
  permanent_municipality VARCHAR(50),
  permanent_barangay VARCHAR(50),
  permanent_street VARCHAR(50),
  temporary_province VARCHAR(50),
  temporary_municipality VARCHAR(50),
  temporary_barangay VARCHAR(50),
  temporary_street VARCHAR(50)
  -- create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS stud_settings (
  student_id VARCHAR(9) PRIMARY KEY,
  FOREIGN KEY (student_id) REFERENCES stud_accounts (student_id),
  dark_mode TINYINT(1) DEFAULT 0,
  profile_picture LONGBLOB
  -- create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS colleges (
  college_id INT AUTO_INCREMENT PRIMARY KEY,
  college_abbr VARCHAR(10) NOT NULL,
  college_name VARCHAR(100) NOT NULL,  
  college_org_abbr VARCHAR(10) NOT NULL,
  college_org_name VARCHAR(100) NOT NULL
  -- create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO colleges (college_id, college_abbr, college_name, college_org_abbr, college_org_name) VALUES
(1, 'COA', 'College of Agriculture', 'Unk', 'Unk'),
(2, 'CBAA', 'College of Business Administration and Accountancy', 'Unk', 'Unk'),
(3, 'COE', 'College of Education', 'Unk', 'Unk'),
(4, 'COE', 'College of Engineering', 'Unk', 'Unk'),
(5, 'COF', 'College of Fisheries', 'Unk', 'Unk'),
(6, 'CNSM', 'College of Natural Sciences and Mathematics', 'OMANNS', 'Organization of Mathematics and Natural Sciences Students'),
(7, 'CSSH', 'College of Social Sciences and Humanities', 'Unk', 'Unk');

CREATE TABLE IF NOT EXISTS departments (
  department_id INT AUTO_INCREMENT PRIMARY KEY,
  department_abbr VARCHAR(10) NOT NULL,
  department_name VARCHAR(100) NOT NULL,
  course_abbr VARCHAR(10) NOT NULL,
  course_name VARCHAR(100) NOT NULL,
  college_id INT  NOT NULL,
  -- create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (college_id) REFERENCES colleges (college_id)
);

INSERT INTO departments (department_id, department_abbr, department_name, course_abbr, course_name, college_id) VALUES
(1, 'JITS', 'Junior Information Technology Society', 'BS IT', 'Bachelor of Science in Information Technology', 6),
(2, 'NASSA', 'Natural Sciences Students Association', 'BS Bio', 'Bachelor of Science in Biology', 6),
(3, 'SMS', 'Society of Mathematics Students', 'BS Math', 'Bachelor of Science in Mathematics', 6);

CREATE TABLE IF NOT EXISTS organizations (
  organization_id INT AUTO_INCREMENT PRIMARY KEY,
  organization_abbr VARCHAR(10) NOT NULL,
  organization_name VARCHAR(100) NOT NULL,
  organization_type ENUM('College', 'Department', 'Other') NOT NULL,
  college_id INT,
  department_id INT,
  FOREIGN KEY (college_id) REFERENCES colleges (college_id),
  FOREIGN KEY (department_id) REFERENCES departments (department_id)
);

INSERT INTO organizations (organization_id, organization_abbr, organization_name, organization_type, college_id, department_id) VALUES
(1, 'SSC', 'Supreme Student Council', 'Other', NULL, NULL),
(2, 'BAGWIS', 'Bagwis', 'Other', NULL, NULL),
(3, 'PESO', 'Physical Education Students Organization', 'Other', NULL, NULL),
(4, 'CNSM', 'Organization of Mathematics and Natural Sciences Students', 'College', 6, NULL),
(5, 'JITS', 'Junior Information Technology Society', 'Department', 6, 1),
(6, 'NASSA', 'Natural Sciences Students Association', 'Department', 6, 2),
(7, 'SMS', 'Society of Mathematics Students', 'Department', 6, 3);

CREATE TABLE IF NOT EXISTS acad_years (
  year_id INT AUTO_INCREMENT PRIMARY KEY,
  year_start INT NOT NULL,
  year_end INT NOT NULL
);

INSERT INTO acad_years (year_id, year_start, year_end) VALUES
(1, 2022, 2023);

CREATE TABLE IF NOT EXISTS acad_terms (
  term_id INT AUTO_INCREMENT PRIMARY KEY,
  term_name VARCHAR(20) NOT NULL,
  year_id INT  NOT NULL,
  term_start_date DATE NOT NULL,
  term_end_date DATE NOT NULL,
  FOREIGN KEY (year_id) REFERENCES acad_years (year_id)
);

INSERT INTO acad_terms (term_id, term_name, year_id, term_start_date, term_end_date) VALUES
(1, '1st Term', 1, '2022-09-12', '2023-01-27'),
(2, '2nd Term', 1, '2023-02-20', '2023-06-26');

CREATE TABLE IF NOT EXISTS organization_fees (
  organization_fee_id INT AUTO_INCREMENT PRIMARY KEY,
  organization_id INT  NOT NULL,
  year_id INT NOT NULL,
  term_id INT NOT NULL,
  payment_method VARCHAR(50),
  amount DECIMAL(10, 2) NOT NULL,
  due_date DATE,
  fee_type ENUM('Freshman', 'Non-Freshman', 'Insurance', 'General') NOT NULL,
  create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (organization_id) REFERENCES organizations (organization_id),
  FOREIGN KEY (year_id) REFERENCES acad_years (year_id),
  FOREIGN KEY (term_id) REFERENCES acad_terms (term_id)
);

INSERT INTO organization_fees (organization_fee_id, organization_id, year_id, term_id, amount, due_date, fee_type) VALUES
(1, 1, 1, 2, 100, '2023-02-10', 'General'),
(2, 2, 1, 2, 80, '2023-02-10', 'General'),
(3, 3, 1, 2, 80, '2023-02-10', 'General'),
(4, 4, 1, 2, 1200, '2023-02-10', 'General'),
(5, 5, 1, 2, 890, '2023-02-10', 'General'),
(6, 6, 1, 2, 650, '2023-02-10', 'General'),
(7, 7, 1, 2, 640, '2023-02-10', 'General'),
(8, 4, 1, 2, 100, '2023-02-10', 'Insurance');

CREATE TABLE IF NOT EXISTS stud_penalty (
  penalty_id INT AUTO_INCREMENT PRIMARY KEY,
  student_id VARCHAR(9) NOT NULL,
  organization_id INT NOT NULL,
  penalty_from ENUM('College', 'Department') NOT NULL,
  penalty_amount DECIMAL(10, 2) NOT NULL,
  payment_status ENUM('Not Paid', 'On Review', 'Paid') NOT NULL,
  payment_method VARCHAR(50),
  reference_number VARCHAR(50),
  receipt LONGBLOB,
  due_date DATE,
  FOREIGN KEY (student_id) REFERENCES stud_accounts (student_id),
  create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO stud_penalty (penalty_id, student_id, organization_id, penalty_from, penalty_amount, payment_status, payment_method, reference_number, receipt, due_date) VALUES
(1, '2021-0146', 6, 'College', 400, 'Not Paid', NULL, NULL, NULL, '2023-02-10'),
(2, '2021-0146', 6, 'Department', 200, 'Not Paid', NULL, NULL, NULL, '2023-02-10');

CREATE TABLE IF NOT EXISTS stud_payment (
  payment_status_id INT AUTO_INCREMENT PRIMARY KEY,
  organization_fee_id INT NOT NULL,
  student_id VARCHAR(9) NOT NULL,
  payment_status ENUM('Not Paid', 'On Review', 'Paid') NOT NULL,
  payment_method VARCHAR(50),
  reference_number VARCHAR(50),
  receipt LONGBLOB,
  due_date DATE,
  FOREIGN KEY (organization_fee_id) REFERENCES organization_fees (organization_fee_id),
  FOREIGN KEY (student_id) REFERENCES stud_accounts (student_id),
  create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO stud_payment (payment_status_id, organization_fee_id, student_id, payment_status, payment_method, reference_number, receipt, due_date) VALUES
(1, 1, '2021-0146', 'Not Paid', NULL, NULL, NULL, '2023-02-10'),
(2, 2, '2021-0146', 'Not Paid', NULL, NULL, NULL, '2023-02-10'),
(3, 3, '2021-0146', 'Not Paid', NULL, NULL, NULL, '2023-02-10'),
(4, 4, '2021-0146', 'Not Paid', NULL, NULL, NULL, '2023-02-10'),
(5, 5, '2021-0146', 'Not Paid', NULL, NULL, NULL, '2023-02-10');