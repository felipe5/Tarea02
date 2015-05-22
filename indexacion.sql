CREATE INDEX departments_index USING BTREE ON departments(dept_no, dept_name);
CREATE INDEX dept_emp_index USING BTREE ON dept_emp(emp_no, dept_no, from_date, to_date);
CREATE INDEX dept_manager_index USING BTREE ON dept_manager(dept_no, emp_no, from_date, to_date);
CREATE INDEX employees_index USING BTREE ON employees(emp_no, birth_date, first_name, last_name, gender, hire_date);
CREATE INDEX salaries_index USING BTREE ON salaries(emp_no, salary, from_date, to_date);
CREATE INDEX titles_index USING BTREE ON titles(emp_no, title, from_date, to_date);