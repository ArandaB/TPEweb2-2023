<div class="contenedor-flex">
    <div class="contenedor-pelicula">
        <div>
            <img class="imagen-pelicula" src="{$peli->url_img}" alt="">
        </div>
        <div class="info-peliculas">
            <form method="post" action="modificar/{$peli->id}" enctype="multipart/form-data">
                <label>Nombre de la Pelicula:</label><input value="{$peli->name}" type="text" name="name" required>
                <label>Categoria de la pelicula:</label><select name="categorie">
                    <option value="action">Accion</option>
                    <option value="adventure">Aventura</option>
                    <option value="drama">Drama</option>
                </select>
                <label>Año de lanzamiento:</label><input value="{$peli->release_date}" type="text" name="release_date" required>
                <label>Descripcion:</label><input id="input-categorie" value="{$peli->description}" type="text" name="description" required>
                <input type="submit">
                </form>
        </div>  

    </div>

</div>    