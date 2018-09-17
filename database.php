//This is the current format of our tables.
/* If you want to creates these tables. You must use sql editor inside
myphpadmin. Remember to erase all the comments line when you are in sql editor.
*/
CREATE TABLE crio1 (
    Reg_time    TIMESTAMP,
    brk ID      varchar(10) NOT NULL,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Ptotal      FLOAT(10,3) NOT NULL,
    Qsys        FLOAT(10,3) NOT NULL,
);
CREATE TABLE crio2 (
    Reg_time    TIMESTAMP,
    brk ID      varchar(10) NOT NULL,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Ptotal      FLOAT(10,3) NOT NULL,
    Qsys        FLOAT(10,3) NOT NULL,
);
CREATE TABLE sel700 (
    Reg_time    TIMESTAMP,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Ptotal      FLOAT(10,3) NOT NULL,
    Qsys        FLOAT(10,3) NOT NULL,
);
CREATE TABLE system_cmd (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Reg_time    TIMESTAMP,
    brk ID      varchar(10) NOT NULL,
    command     varchar(10) NOT NULL,
);
