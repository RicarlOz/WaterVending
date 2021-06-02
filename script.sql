DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
    UserID int NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(255) NOT NULL,
    Apellidos VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Contraseña VARCHAR(255) NOT NULL,
    Telefono VARCHAR(255) NOT NULL,
    Estado VARCHAR(255) NOT NULL,
    Municipio VARCHAR(255) NOT NULL,
    Colonia VARCHAR(255) NOT NULL,
    Calle VARCHAR(255) NOT NULL,
    CP VARCHAR(5) NOT NULL,
    Numero_Exterior int NOT NULL,
    Numero_Interior int,
    PRIMARY KEY (UserID)
);
DROP TABLE IF EXISTS Machines;
CREATE TABLE Machines (
    MachineID int NOT NULL AUTO_INCREMENT,
    Alias VARCHAR(100) NOT NULL,
    FechaAlta DATE NOT NULL,
    Estatus VARCHAR(10) NOT NULL,
    Marca VARCHAR(100) NOT NULL,
    Modelo VARCHAR(100) NOT NULL,
    Producto VARCHAR(50) NOT NULL,
    SensorIncluido BOOLEAN NOT NULL,
    Estado VARCHAR(255) NOT NULL,
    Municipio VARCHAR(255) NOT NULL,
    Colonia VARCHAR(255) NOT NULL,
    Calle VARCHAR(255) NOT NULL,
    UserID int NOT NULL,
    PRIMARY KEY (MachineID)
);
DROP TABLE IF EXISTS MachineEarnings;
CREATE TABLE MachineEarnings (
    Ganancias int NOT NULL,
    MachineID int NOT NULL
);
INSERT INTO Users (
        Nombre,
        Apellidos,
        Email,
        Contraseña,
        Telefono,
        Estado,
        Municipio,
        Colonia,
        Calle,
        Numero_Exterior,
        Numero_Interior,
        CP
    )
VALUES (
        'Fulano',
        'Martinez',
        'fulano@gmail.com',
        '1234',
        '123-456-7890',
        'Nuevo Leon',
        'Monterrey',
        'La Florida',
        'San Vicente',
        '123',
        '',
        '12345'
    );
INSERT INTO Users (
        Nombre,
        Apellidos,
        Email,
        Contraseña,
        Telefono,
        Estado,
        Municipio,
        Colonia,
        Calle,
        Numero_Exterior,
        Numero_Interior,
        CP
    )
VALUES (
        'Perengano',
        'Ramirez',
        'perengano@gmail.com',
        '1234',
        '123-456-7890',
        'Nuevo Leon',
        'Monterrey',
        'La Florida',
        'San Vicente',
        '123',
        '',
        '12345'
    );
INSERT INTO Machines (
        Alias,
        FechaAlta,
        Estatus,
        Marca,
        Modelo,
        Producto,
        SensorIncluido,
        Estado,
        Municipio,
        Colonia,
        Calle,
        UserID
    )
VALUES (
        "Maquina1",
        "2021/05/05",
        "Activo",
        "M&R",
        "12345",
        "Agua",
        TRUE,
        'Nuevo Leon',
        'Monterrey',
        'La Florida',
        'San Vicente',
        1
    );
INSERT INTO Machines (
        Alias,
        FechaAlta,
        Estatus,
        Marca,
        Modelo,
        Producto,
        SensorIncluido,
        Estado,
        Municipio,
        Colonia,
        Calle,
        UserID
    )
VALUES (
        "Maquina2",
        "2021/05/25",
        "Inactivo",
        "M&R",
        "12345",
        "Cloro",
        TRUE,
        'Nuevo Leon',
        'Monterrey',
        'Distrito Tec',
        'San Patricio',
        1
    );
INSERT INTO Machines (
        Alias,
        FechaAlta,
        Estatus,
        Marca,
        Modelo,
        Producto,
        SensorIncluido,
        Estado,
        Municipio,
        Colonia,
        Calle,
        UserID
    )
VALUES (
        "SuperMachine",
        "2021/01/03",
        "Activo",
        "Dispensers A.C.",
        "12345",
        "Fabuloso",
        TRUE,
        'Coahuila',
        'Torreon',
        'La Cortina',
        'San Juan de Sabinas',
        2
    );
INSERT INTO MachineEarnings
VALUES (500, 1);
INSERT INTO MachineEarnings
VALUES (250, 2);
INSERT INTO MachineEarnings
VALUES (0, 3);