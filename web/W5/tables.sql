CREATE TABLE note_user (
  id SERIAL,
  username VARCHAR(255),
  password VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE note (
  id SERIAL,
  userId INT NOT NULL,
  content TEXT,
  PRIMARY KEY (id),
  FOREIGN KEY (userId) REFERENCES note_user (id)
);