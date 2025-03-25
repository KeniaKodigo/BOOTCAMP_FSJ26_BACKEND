-- consulta sql para crear tablas (DDL)

CREATE TABLE roles(
	id_role int primary key auto_increment,
    role varchar(20) NOT NULL
);

CREATE TABLE employees(
	id_employee int primary key auto_increment,
    name varchar(50) NOT NULL,
    phone varchar(12) NOT NULL,
    email varchar(25) NOT NULL,
    password varchar(8) NOT NULL,
    salary double NOT NULL,
    id_role int,
    foreign key (id_role) references roles(id_role) on delete cascade
);

CREATE TABLE tasks(
	id_task int primary key auto_increment,
    title varchar(50) NOT NULL,
    description text NOT NULL,
    date_task date NOT NULL,
    status varchar(20) NOT NULL CHECK (status IN ('pendiente', 'en proceso', 'completada')),
    id_employee int,
    foreign key (id_employee) references employees(id_employee) on delete cascade
);


-- inserccion de datos
-- INSERT INTO roles(role) VALUES ('administrador'); 
-- INSERT INTO roles(role) VALUES ('empleado'); 

-- SELECT * FROM roles;

-- INSERT INTO employees(name, phone, email, password, salary, id_role) 
-- VALUES ('sara chacon','68904523','sara20@gmail.com','12345',500.82,1);

-- INSERT INTO employees(name, phone, email, password, salary, id_role) 
-- VALUES ('kevin reyes','76452312','kevin@prueba.com','12345',360,3);

-- INSERT INTO tasks(title, description, date_task, status, id_employee)
-- VALUES ('Maquetar landing page','maquetar el sitio como esta en figma','2025-3-25','pendiente',2);


