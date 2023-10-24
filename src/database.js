import mysqlConnection from 'mysql2/promise';

const properties = {
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'rest-api'
};

export const pool = mysqlConnection.createPool(properties);

const libro = {
    nombre: "Harry Potter y la Piedra filosofal",
    autor: "J.K. Rowling",
    categoria: "Fantasía",
    año_publicacion: 1997,
    ISBN: "978-0-7475-3269-6"
};

