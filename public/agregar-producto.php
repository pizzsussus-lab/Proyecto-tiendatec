<html>
    <head>
        <title>Concencionario Pagassus - Agregar producto</title>
    </head>
    <body>
        <header>
            <h1>Bienvenido al concencionario de Pagassus</h1>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="productos.php">Catalogo</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </header>

        <main>
            <section>
               <h2>Agrgar Nuevo Producto </h2>
               <form action="#" method="POST">
                    <label for="nombre">Nombre del producto:</label>
                    <input type="text" name="nombre" id="nombre" required>
                    <br>
                    <label for="categoria">Categoria:</label>
                    <input type="text" name="categoria" id="categoria" required>
                    <br>
                    <label for="precio">Precio:</label>
                    <input type="number" name="precio" id="precio" step="0.01" min="0" required>
                    <br>
                    <label for="stock">stock:</label>
                    <input type="number" name="stock" id="stock" min="0" required>

                    <button type="submit">Agregar Producto</button>

               </form> 
            </section>
        </main>
        <footer>
            <p>&copy; 2026 Concencionario Pagassus. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>