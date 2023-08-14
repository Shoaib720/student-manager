CREATE DATABASE student_mgmt

USE student_mgmt

CREATE TABLE student (
  ID INT NOT NULL,
  NAME VARCHAR(60) NOT NULL AUTO_INCREMENT,
  DEPARTMENT VARCHAR(60) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO student (NAME, DEPARTMENT) VALUES
  ('Shoaib Shaikh', 'DevOps'),
  ('Alkaif Khan', 'DevOps'),
  ('Abdur Rehman', 'Javascript'),
  ('Hasim Pathan', 'Designing'),
  ('Sonali Kailuke', 'Testing'),
  ('Naeema Halim', 'Security'),
  ('Rizwan Sayyed', 'Kubernetes'),
  ('Irfan Sayyed', 'Security'),
  ('Aaftab Shaikh', 'Testing'),
  ('Abhishek Sonawane', 'DevOps'),
  ('Suvankar Biswas', 'Java'),
  ('Sachin Patil', 'Flutter'),
  ('Zubeda Halim', 'DotNet');