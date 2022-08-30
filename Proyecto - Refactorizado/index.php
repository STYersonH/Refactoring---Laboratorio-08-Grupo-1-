<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>INGRESAR ARCHIVOS</title>
</head>
<body>
    <nav class="nav">
        <div class="nav__img nav__img--unsaac"></div>
        <div class="nav__text">
            <h2 class="nav__text__h1">UNIVERSIDAD NACIONAL DE SAN ANTONIO ABAD DEL CUSCO</h2><br>
            <h2 class="nav__text__h1">ESCUELA PROFESIONAL DE INGENIERIA INFORMATICA Y DE SISTEMAS</h2>
        </div>
        <div class="nav__img nav__img--info"></div>
    </nav>
    <main class="main">
        <div class="container">    
            <h1 class="container__h1">SUBIR EN FORMATO .CSV</h1>    
            <form action="formulario.php" class="form" method="POST" enctype="multipart/form-data">
                
                <div class="form__container">

                    <label for="distribucionDocente" class="form__container__label">Cargar Distribución Docente de Tutorias en 2021-2</label><br>
                    <input id="distribucionDocente" type="file" accept=".csv" class="form__container__input" name="distribucionDocente" required>
                </div>
                
                <div class="form__container">
                    <label for="alumnos2022_1" class="form__container__label">Cargar Alumnos 2022-1</label><br>
                    <input id="alumnos2022_1" type="file" accept=".csv" class="form__container__input" name="alumnos2022_1" required>

                </div>

                <div class="form__container">
                    <label for="docentes2022_1" class="form__container__label">Cargar Docentes 2022-1</label><br>
                    <input id="docentes2022_1" type="file" accept=".csv" class="form__container__input" name="docentes2022_1" required>

                </div>

                <!-- <div class="form__container">


                    <label for="mostrar_no_tutorados" class="form__label">
                        <input id="mostrar_no_tutorados" type="radio" name="mostrar" value="no_tutorados" class="form__radio" checked>
                        Mostrar alumnos que no seran tutorados en 2022-1</label>

                
                    <label for="mostrar_nuevos_alumnos" class="form__container__label">
                        <input id="mostrar_nuevos_alumnos" type="radio" name="mostrar" value="nuevos_alumnos" class="form__radio">
                        Mostrar nuevos alumnos para tutoria</label>

                </div> -->

                <input type="submit" class="form__submit" value="►  Enviar">

            </form>
        </div>
    </main>
    
</body>
</html>