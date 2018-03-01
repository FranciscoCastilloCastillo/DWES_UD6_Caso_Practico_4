<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DWES</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <header>
      <h2>DESARROLLO WEB ENTORNO SERVIDOR - Caso Práctico 4 - Unidad 6</h2>
    </header>
    <article>
      <fieldset>
        <form action="calculos.php" method="POST">
          <legend><h2>Escribe los datos de matrícula y de las calificaciones del alumno (0-10)</h2></legend>
          <legend>Nombre:</legend>
          <input type="text" id="nombre" name="nombre" required></br>
          <legend>Apellidos:</legend>
          <input type="text" id="apellidos" name="apellidos" required></br>
          <legend>Curso:</legend>
          <select name="curso">
            <option value="1º">Primero</option>
            <option value="2º">Segundo</option>
          </select></br>
          <legend>Ciclo:</legend>
          <select name="ciclo">
            <option value="DAW">DAW</option>
            <option value="DAM">DAM</option>
          </select></br>
          <fieldset>
            <legend><h4>Calificaciones</h4></legend>
            <legend>Calificación Programación:</legend>
            <input type="number" id="prog" name="prog" required></br>
            <legend>Calificación Entornos de Desarrollo:</legend>
            <input type="number" id="ed" name="ed" required></br>
            <legend>Calificación Lenguajes y Marcas:</legend>
            <input type="number" id="lm" name="lm" required></br>
            <legend>Calificación Bases de Datos:</legend>
            <input type="number" id="bbdd" name="bbdd" required></br>
          </fieldset></br>
          <input type="submit" value="Obtener datos">
        </form>
      </fieldset>
    </article>
    <footer>
      <h5>Alumno: Francisco Manuel Castillo Castillo</h5>
      <h5>Asignatura: Desarrollo Web Entorno Servidor</h5>
    </footer>
  </body>
</html>
