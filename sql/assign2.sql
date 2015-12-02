drop table if exists Job;
drop table if exists Application;
drop table if exists Employer;
create table if not exists Employer(
	Employer_id int not null AUTO_INCREMENT,
	Employer_name varchar(40) not null,
	Employer_industry varchar(40) check(Employer_industry in ('Education','Government','Information','Technology','Manufacturing','Mining','Retail')),
	Employer_description varchar(200),
	constraint UniqueName Unique(Employer_name),
	primary key(Employer_id)
);
create table Job(
    Job_id int not null AUTO_INCREMENT primary key,
	Job_title varchar(40) not null,
	Job_location varchar(40) not null,
	Job_description varchar(40),
	Job_salary decimal(10,2) not null,
	Job_type int default 1,
	start_date date, 
	end_date date, 
	Employer_id int,
	foreign key (Employer_id) references Employer(Employer_id) on delete cascade,
	constraint dateConstraint check (end_date > start_date)
);

create table Application(
   Job_id int not null,
   Job_title varchar(40) not null,
   Employer_id int not null,
   User_id int not null,
   Letter varchar(1000) not null,
   Apply_date date not null,
   primary key(Job_id, User_id),
   foreign key (User_id) references user(user_id) on delete cascade,
   foreign key (Job_id) references Job(Job_id) on delete cascade,
   foreign key (Employer_id) references Employer(Employer_id) on delete cascade
);