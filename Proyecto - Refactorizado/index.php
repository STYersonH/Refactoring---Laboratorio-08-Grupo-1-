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

                    <label for="distribucionDocente" class="form__container__label">Cargar Distribución Docente de Tutorias </label><br>
                    <input id="distribucionDocente" type="file" accept=".csv" class="form__container__input" name="distribucionDocente" required>
                </div>
                
                <div class="form__container">
                    <label for="alumnosMatriculados" class="form__container__label">Cargar Alumnos Matriculados del semestre actual</label><br>
                    <input id="alumnosMatriculados" type="file" accept=".csv" class="form__container__input" name="alumnosMatriculados" required>

                </div>

                <div class="form__container">
                    <label for="docentesSemestreActual" class="form__container__label">Cargar Docentes del semestre actual</label><br>
                    <input id="docentesSemestreActual" type="file" accept=".csv" class="form__container__input" name="docentesSemestreActual" required>

                </div>

                <input type="submit" class="form__submit" value="►  Enviar">

            </form>
        </div>
    </main>
    
</body>
</html>