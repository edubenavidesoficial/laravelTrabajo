USE veterinaria;

CREATE TABLE duenos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    direccion VARCHAR(255),
    telefono VARCHAR(15),
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE mascotas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    especie VARCHAR(50),
    raza VARCHAR(50),
    edad INT,
    dueno_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (dueno_id) REFERENCES duenos(id)
);

-- Insertando datos en la tabla duenos
INSERT INTO duenos (nombre, direccion, telefono, email)
VALUES
('Juan Pérez', 'Calle Falsa 123, Ciudad', '555-1234', 'juan.perez@example.com'),
('María Gómez', 'Avenida Siempre Viva 456, Ciudad', '555-5678', 'maria.gomez@example.com'),
('Carlos Sánchez', 'Boulevard de los Sueños 789, Ciudad', '555-8765', 'carlos.sanchez@example.com');

-- Insertando datos en la tabla mascotas
INSERT INTO mascotas (nombre, especie, raza, edad, dueno_id)
VALUES
('Firulais', 'Perro', 'Labrador', 3, 1),
('Mishi', 'Gato', 'Siames', 2, 2),
('Bobby', 'Perro', 'Bulldog', 5, 3),
('Luna', 'Gato', 'Persa', 4, 1),
('Rocky', 'Perro', 'Pastor Alemán', 6, 2);
