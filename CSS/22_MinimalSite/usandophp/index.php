
<?php include('header.php'); ?>
<main>
    <div class="container">
        <h1>Bienvenido a la Página Principal inicio</h1>
        <p>Contenido de la página principal inicio</p>
    </div>
    <h1>Explora Nuestros Productos</h1>
<p>Descubre nuestra variedad de productos diseñados para satisfacer tus necesidades. ¡Compra hoy mismo y recibe el mejor servicio!</p>
<div class="filters">
    <h3>Filtrar por</h3>
    <form>
        <label for="category">Categoría:</label>
        <select id="category" name="category">
            <option value="electronics">Electrónica</option>
            <option value="fashion">Moda</option>
            <option value="home">Hogar</option>
        </select>

        <label for="price">Rango de Precio:</label>
        <input type="range" id="price" name="price" min="0" max="5000" step="100">

        <button type="submit">Filtrar</button>
    </form>
</div>

</main>
<?php include('footer.php'); ?>