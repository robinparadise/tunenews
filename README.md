# Tune News

Categories: Music, bands, concerts, festivals, and more.

Examen:
- (0pts) Crea la base de datos `tunenews` con una tabla `articles` con los siguientes campos:
    - id (int)
    - title (varchar)
    - category (varchar)
    - description (text)
    - image (varchar)
  - 🚨 En config.php, la funcion `populateData();` debe de ser descomentada para poder añadir datos a la base de datos, luego recuerda volver a comentarla.
  - En config.php debes de introducir tu usuario y contraseña de MySQL.

- (2pts) Crea un grid con cards de bootstrap en el index con los articulos de la tabla `articles`
  - Muestra el título, categoría y la imagen
  - Se valorará:
    - Intenta que el grid sea responsive
    - El grid podría tener 3 columnas en desktop, 2 en tablet y 1 en mobile
    - Usa componentes de bootstrap para el diseño
- (2pts) Muestra unas pestañas agrupando los articulos por categorias
  - Todos
  - Música
  - Conciertos
  - Festivales
  - Bandas
  - Otros
- (1pts) Crea la página del detalle de un articulo en el que muestres:
  - titulo + categoria
  - imagen
  - descripción
  - Usa componentes de bootstrap para el diseño
- (2.5pts) Crea una página `bookmarks.php` que muestre todos los articulos guardados (usa la sessión de PHP para guardarlos)
  - No deben de existir articulos repetidos
  - Los articulos se deben de poder añadir/eliminar desde la card y desde el detalle
  - Usa el mismo grid/card componente de la página principal
  - Crea componentes reutilizables de PHP para mostrar los articulos
  - [Opcional] alternativamente puedes usar la db para guardar los articulos guardados (No recomendado por el tiempo)
- (0.5pts) Crea un `Badge` en el Navbar que muestre el número de articulos guardados en la session.
  - El badge debe de ser visible en todas las páginas
  - El badge debe de actualizarse cuando se añade/elimina un articulo
  - El badge debe de ser un componente de bootstrap
  - [Opcional] El badge debe de ser rojo si el número de articulos guardados es mayor a 0 y grid si es 0
- (2pts) Imprime en pdf el detalle del articulo
  - La página de detalle debe de tener un botón para descargar el pdf
  - El pdf debe de tener el mismo contenido que el detalle del articulo
  - El pdf debe de tener el nombre del articulo como nombre del archivo
