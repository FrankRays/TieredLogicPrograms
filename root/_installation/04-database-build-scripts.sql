drop table student CASCADE constraints;
drop table faculty CASCADE constraints;
drop table course CASCADE constraints;
drop table modules CASCADE constraints;
drop table module_questions CASCADE constraints;
drop table question_subitems CASCADE constraints;
drop table assessment_results CASCADE constraints;

Create table student (
student_id int(6),
student_number int(9),
student_name varchar(50),
student_email varchar(100),
constraint student_pk primary key (student_id));

Create table faculty (
faculty_id int(6),
faculty_number int(9),
faculty_name varchar(50),
faculty_email varchar(100),
constraint faculty_pk primary key (faculty_id));

Create table course (
course_id int(6),
course_number varchar(9),
course_name varchar(100),
constraint course_pk primary key (course_id));

Create table module (
module_id int(6),
module_name varchar(100),
constraint module_pk primary key (module_name));

Create table module_question (
question_id int(6),
module_name varchar(100),
question_data varchar(200),
constraint mod_question_pk primary key (question_data),
constraint mod_question_fk foreign key (module_name) references module(module_name) on delete cascade);

Create table question_subitem (
subitem_id int(6),
question_data varchar(200),
subitem_data varchar(200),
subitem_line_num int(2),
constraint subitem_pk primary key (subitem_id),
constraint subitem_fk foreign key (question_data) references module_question(question_data) on delete cascade);

Create table assessment_results(
result_id int(9),
student_number int(9),
question_data varchar(200),
question_result int(1),
comments varchar(200),
constraint result_pk primary key (result_id),
constraint result_stu_fk foreign key (student_number) references student (student_number) on delete cascade,
constraint result_ques_fk foreign key (question_data) references module_question (question_data) on delete cascade);