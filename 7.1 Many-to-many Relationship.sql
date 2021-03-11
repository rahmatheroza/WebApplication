CREATE DATABASE Learning DEFAULT CHARACTER SET utf8 ;

USE Learning;   (Command line only)

CREATE TABLE Account (
    account_id  INTEGER NOT NULL AUTO_INCREMENT,
    email       VARCHAR(128) UNIQUE,
    name        VARCHAR(128),
    PRIMARY KEY(account_id)
) ENGINE=InnoDB CHARACTER SET=utf8;

CREATE TABLE Course (
    course_id     INTEGER NOT NULL AUTO_INCREMENT,
    title         VARCHAR(128) UNIQUE,
    PRIMARY KEY(course_id)
) ENGINE=InnoDB CHARACTER SET=utf8;

CREATE TABLE Member (
    account_id    INTEGER,
    course_id     INTEGER,
    role          INTEGER,

    CONSTRAINT FOREIGN KEY (account_id) REFERENCES Account (account_id)
      ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (course_id) REFERENCES Course (course_id)
       ON DELETE CASCADE ON UPDATE CASCADE,

    PRIMARY KEY (account_id, course_id)
) ENGINE=InnoDB CHARACTER SET=utf8;

INSERT INTO Account (name, email) VALUES ('Jane', 'jane@tsugi.org');
INSERT INTO Account (name, email) VALUES ('Ed', 'ed@tsugi.org');
INSERT INTO Account (name, email) VALUES ('Sue', 'sue@tsugi.org');

INSERT INTO Course (title) VALUES ('Python');
INSERT INTO Course (title) VALUES ('SQL');
INSERT INTO Course (title) VALUES ('PHP');

INSERT INTO Member (account_id, course_id, role) VALUES (1, 1, 1);
INSERT INTO Member (account_id, course_id, role) VALUES (2, 1, 0);
INSERT INTO Member (account_id, course_id, role) VALUES (3, 1, 0);

INSERT INTO Member (account_id, course_id, role) VALUES (1, 2, 0);
INSERT INTO Member (account_id, course_id, role) VALUES (2, 2, 1);

INSERT INTO Member (account_id, course_id, role) VALUES (2, 3, 1);
INSERT INTO Member (account_id, course_id, role) VALUES (3, 3, 0);

SELECT Account.name, Member.role, Course.title
  FROM Account JOIN Member JOIN Course
  ON Member.account_id = Account.account_id
    AND Member.course_id = Course.course_id
  ORDER BY Course.title, Member.role DESC, Account.name
