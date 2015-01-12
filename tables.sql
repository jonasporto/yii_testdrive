CREATE SEQUENCE employee_id_seq;

CREATE TABLE Employee (
    id INTEGER PRIMARY KEY default nextval('employee_id_seq'),
    departmentId SMALLINT REFERENCES Department(id),
    firstName VARCHAR(20) NOT NULL,
    lastName VARCHAR(40) NOT NULL,
    email VARCHAR(60) NOT NULL,
    ext SMALLINT,
    hireDate TIMESTAMP WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    leaveDate TIMESTAMP WITHOUT TIME ZONE)

CREATE SEQUENCE department_id_seq;

CREATE TABLE Department (
    id SMALLINT PRIMARY KEY default nextval('employee_id_seq'),
    name VARCHAR(40),
    UNIQUE (name),
    UNIQUE(id)
);
