CREATE TABLE department(
department_id INT PRIMARY KEY,
    department_name VARCHAR(40),
    school_id INT
);

CREATE TABLE instructor(
instructor_id INT PRIMARY KEY,
   fname VARCHAR(40),
    lname VARCHAR(40),
    address VARCHAR(80),
    date_of_birth DATE,
    gender VARCHAR(10),
    contact_no VARCHAR(20),
    gmail VARCHAR(50),
    department_id INT
);

CREATE TABLE department_head(
qualification VARCHAR(100),
    joining_date DATE,
    date_of_leaving DATE
);

CREATE TABLE dean(
annual_salary INT,
    joining_date DATE,
    date_of_leaving DATE
);

CREATE TABLE vc(
vc_id INT PRIMARY KEY,
    qualification VARCHAR(100),
    fname VARCHAR(20),
    lname VARCHAR(20),
    joining_date DATE,
    date_of_leaving DATE
);



CREATE TABLE school(
school_id INT PRIMARY KEY,
    school_name VARCHAR(50),
    vc_id INT
);

CREATE TABLE program(
program_id INT PRIMARY KEY,
    program_name VARCHAR(50),
    department_id INT
);

CREATE TABLE enrollment(
enrollment_id INT PRIMARY KEY,
    year DATE,
    enrollment_date DATE,
    student_id INT,
    program_id INT
);
CREATE TABLE semester(
semester_id INT PRIMARY KEY,
    year DATE,
    start_date DATE,
    end_date DATE
);
CREATE TABLE assesment(
assesment_no INT PRIMARY KEY,
    assesment_type VARCHAR(20),
    marks_distribution INT,
    total_marks_achievable INT,
    section_no INT,
    student_id INT,
    co_id INT,
    plo_id INT
);
