import { Router } from 'express';
import { libro } from './librosController.js';

export const router = Router()

router.get('/libro', libro.getAll);
router.post('/añadir-libro', libro.add);
router.delete('/eliminar-libro-id', libro.deleteId);
router.delete('/eliminar-libro-ISBN', libro.deleteISBN);
router.put('/editar-libro', libro.update);
router.get('/libro', libro.getOne);