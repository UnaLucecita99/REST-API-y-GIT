import {pool} from './database.js';

class librosController{
    async getAll(req, res){
        const [result] = await pool.query('SELECT * FROM libros');
        res.json(result);
    }
    
    async add(req, res){
        const libros = req.body;
        const [result] = await pool.query(`INSERT INTO libros (nombre, autor, categoria, año_publicacion, isbn) VALUES (?,?,?,?,?)`[libro.nombre, libro.autor, libro.categoria, libro.año_publicacion, libro.isbn]);
        res.json({"Id insertado": result.insertId});
    }

    async delete(req,res){
        const libros = req.body;
        const [result] = await pool.query(`DELETE FROM libros WHERE id=(?)`, [libro.id]);
        res.json ({"Registros eliminados": result.affectedRows});
    }
    async update(req, res){
        const libros = req.body;
        const [result] = await pool.query (`UPDATE libros SET nombre=(?), autor=(?), categoria=(?), año_publicacion=(?), isbn=(?) WHERE id=(?)`, [libro.nombre, libro.autor, libro.categoria, libro.año_publicacion, libro.isbn]);
        res.json ({"Registros actualizados": result.changedRows});
    }
    async getOne(req, res) {
        try {
            const libro=req.body;
            const id_libro=parseInt(libro.id);
            const [result]= await pool.query('select * from libros where id=?'
             [id_libro]);
        //convierto el resultado en un json. Si existe el atributo id, entonces no sera nudo //en caso contrario, si lo será. Si no es nulo, retorno el resultado, sino, retorne //el mensaje de error.
        if (result[0]!=undefined){ 
            res.json(result);
        }else{
            res.json({"Error": "No se ha encontrado un libro con el id especificado"});
        }
        } catch(e){
        //statements 
        console.log(e);
        }
    }

}

export const libros = new librosController();


