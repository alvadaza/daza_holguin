

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <img src="https://res.cloudinary.com/dl7kjajkv/image/upload/v1689885429/image/logo_xf0uq3.png" class="logo" alt="logo">
                    
        <ul id="sidemenu">
            <li><a href="#header" onclick="closemenu()">Inicio</a></li>
            <li><a href="#abaut" onclick="closemenu()">Acerca de</a></li>
            <li><a href="#services" onclick="closemenu()">Servicios</a></li>
            <li><a href="#portafolio" onclick="closemenu()">Portafolio</a></li>
            <li><a href="#contact" onclick="closemenu()">Contacto</a></li>
            <i class="fa-solid fa fa-times" onclick="closemenu()"></i>
        </ul>
        <i class="fa-solid fa fa-bars" onclick="openmenu()"></i>         
    </nav>
    <header id="header">
        <div class="container">
            
            <div class="header-text">
       
                <p>Ing. Sistemas/ Programador</p>
                <h1>Hola soy <span>Alvaro</span><br>Daza de Bogotá Colombia</h1>
         
    
            </div>
        </div>
    </header>
    <section id="abaut">
        <div class="container">
            <div class="row">
                <div class="abaut-col-1">
                    <img src="https://res.cloudinary.com/dl7kjajkv/image/upload/v1689885429/image/alvaro_sklhbm.png" alt="perfil">
                </div>
                <div class="abaut-col-2">
                    <h1 class="sub-title">Acerca de mí</h1>
                    <p>Estudiante de ingeniería en sistemas, con profundo interés en ser desarrollador Frontend, carrera en la cual he afianzado mis conocimientos, habilidades y destrezas adquiridas desde lo empírico como técnico, mi experiencia como profesional y desenvolverme en el mundo de la tecnología y el desarrollo de programas en Frontend Developer en lenguajes de programación como HTML, CSS y Python desarrollando las capacidades aprendidas en la universidad San José y Platzi.Trabajo desde hace 21 años en la compañía Domesa de Colombia, empresa donde he adquirido mucha experiencia a través de las responsabilidades y la formación integral que la empresa me ha ofrecido.
                    </p>
                    <div class="tab-title">
                        <p class="tab-links active-link" onclick="opentab(event, 'skills')">Habilidades</p>
                        <p class="tab-links" onclick="opentab(event, 'experience')">Experiencia</p>
                        <p class="tab-links" onclick="opentab(event, 'education')">Educación</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>Desarrollador</span><br/>Diseño de pajinas web/Aplicación</li>
                            <li><span>Web Development</span><br/>Programador en Html, Css y JavaScrip</li>
                            <li><span>Ingeniero de sitemas</span><br/>Trabajo para esta fundación en soporte técnico en punto
                                y en línea, mantenimiento y programación de computadores,
                                impresoras, actualización de software.</li>
                            <li><span>Entrenador Deportivo</span><br/>desde la parte deportiva, ayudas a las
                                familias y estudio para los adultos que desean finalizar su
                                bachillerato.</li>
                                <li><span>Líder - Motorizado</span><br/>Realizo mi trabajo para Seguros Bolívar,
                                    las funciones que desempeño enrutar diligencias cada día de
                                    pasaportes, tarjetas de crédito y correspondencia, Archivo,
                                    Sistemas.</li>
                                    <li><span>Optimización del servicio</span><br/>Manejo de Excel avanzado, SQL básico, Word office, aplicativo entorno Web y correo.</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>ABRIL 2001 HASTA LA FECHA (21años) - Domesa de Colombia</span><br>Durante este tiempo he podido aprender de todas las labores que se realizan dentro del proceso logístico, servicio al cliente y liderazgo de grupo, lo cual me ha permitido tener por encargo el manejo de personal, durante 3 años con la empresa de seguros Bolívar, entregando informes, verificando el desarrollo de actividades, en las rutas, contestación de correos y atención al cliente de Seguros Bolívar en sus requerimientos, todo este proceso lo he realizado en base a la confianza y la responsabilidad empírica, disfrutando del aprendizaje diario que me ha motivado a continuar mis estudios profesionales.</li>
                            <li><span>INICIO 2018 A LA ACTUALIDAD - FUNDACION FUNDAMOR</span><br>Trabajo para esta fundación en soporte técnico en punto y en línea, mantenimiento y programación de computadores, impresoras, actualización de software.</li>
                            <li><span></span><br></li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2023</span><br/>FUNDACION UNIVERSITARIA SAN JOSE <br>INGERIERIA DE SISTEMAS 9 SEMESTRE - 2023</li>
                            <li><span>2023</span><br/>PLATZI <br>HTML Y CSS A PROFUNDIDAD</li>
                            <li><span>2022</span><br/>PLATZI <br>DESARROLLO DE PROGRAMAS EN FRONTEND DEVELOPER </li>
                            <li><span>1993</span><br/>COLEGIO TOMAS RUEDA VARGAS <br>BACHILLERATO ACADEMICO- énfasis Mecanica industrial</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <h1 class="sub-title">Mis Servicios</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa fa-css3"></i>
                    <h2>Diseño web</h2>
                    <p>Diseñador web me gusta la creación de los contenidos multimedia de un sitio web y soy responsable, a su vez, de la calidad técnica del mismo. Me ocupo de la puesta en marcha de páginas web de empresas, boletines de noticias, plataformas de comercio electrónico, campañas de marketing online, entre otros.</p>
                    <a href="https://hireline.io/co/enciclopedia-de-perfiles-ti/perfil-de-desarrollador-web" target="_blank" rel="noopener">Aprende más</a>
                </div>
                <div>
                    <i class="fa-solid fa fa-windows"></i>
                    <h2>Tecnico en sistemas</h2>
                    <p>Soy técnico de sistemas soy responsable de instalar y configurar equipos (hardware y software), ya sean informáticos o de telecomunicaciones, e integrarlos en un sistema de redes. Me encarga de la instalación del sistema completo, con todos sus componentes (ordenadores, periféricos, servidores, etc.).</p>
                    <a href="https://encolombia.com/educacion-cultura/educacion/carreras-tecnicas-y-tecnologicas/tecnico-en-sistemas/" target="_blank" rel="noopener">Aprende más</a>
                </div>
                <div>
                    <i class="fa fa-heartbeat"></i>
                    <h2>Entrenador deportivo</h2>
                    <p>Soy entrenador deportivo en futsal ayudo a los niños entre 6 y 15 años a desarrollar todo su potencial. Soy responsables de entrenar a los atletas en el deporte mediante el análisis de sus actuaciones, la instrucción en las habilidades pertinentes y al proporcionar estímulos.</p>
                    <a href="https://olympics.com/athlete365/es/entorno/cualidades-de-un-gran-entrenador-deportivo/" target="_blank" rel="noopener">Aprende más</a>
                </div>
            </div>
        </div>
    </section>
    <section id="portafolio">
        <div class="container">
            <h1 class="sub-title">Mi trabajo</h1>
            <div class="work-list">
                <div class="work">
                    <img src="./svg/undraw_design_tools_-42-tf.svg" alt="iamgen1">
                    <div class="layer">
                        <h3>Lider-Motorizado</h3>
                        <p>Durante este tiempo he podido aprender de todas las labores que se realizan dentro del proceso logístico, servicio al cliente y liderazgo de grupo, lo cual me ha permitido tener por encargo el manejo de personal, durante 3 años con la empresa de seguros Bolívar,entregando informes, verificando el desarrollo de actividades, en las rutas, contestación de correos y atención al cliente de Seguros Bolívar en sus requerimientos.</p>
                        <a href="#">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
                <div class="work">
                    <img src="./svg/undraw_programming_re_kg9v.svg" alt="iamgen2">
                    <div class="layer">
                        <h3>Seguridad en Sistemas Informaticos</h3>
                        <p>La gran cantidad de amenazas cibernéticas y la escasez de profesionales con las habilidades suficientes, así como los salarios competitivos y las descripciones de trabajo interesantes, son algunas de las razones por las que elegir realizar la ingenieria de sistema en la fundación universitaria San Jose.</p>
                        <a href="#">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
                <div class="work">
                    <img src="./svg/undraw_static_website_re_x70h.svg" alt="iamgen3">
                    <div class="layer">
                        <h3>HTML Y CSS</h3>
                        <p>Aplico lo aprendido durante 2 años en Platzi como programador en lenguajes como HTML; CSS y JavaScrip, desarrollando varias proyectos a lo largo de este tiempo</p>
                        <a href="#">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
            </div>
            <a href="https://www.linkedin.com/in/alvaro-daza-bb1747140/" target="_blank" rel="noopener" class="btn">Ver más</a>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contáctame</h1>
                    <p><i class="fa-solid fa fa-paper-plane"></i>alvarodaza48@gmail.com</p>
                    <p><i class="fa-solid fa fa-phone"></i>3133574711</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <a href="#" download class="btn btn2">Descargar currículum</a>
                </div>
                <div class="contact-rigth">
                    <form method="post">
                        <input type="text" name="name" placeholder="Tu nombre" required/>
                        <input type="email" name="email placeholder="Tu numero telefonico " required/>
                        <textarea name="Massage" rows="6" placeholder="Tu correo electronico"></textarea>
                        <button type="submit" class="btn btn2">Enviar</button>
                    </form>
                
                    <?php include("correo.php"); ?>
                    
             
                    
                </div>
            </div>
        </div>
        <div class="copyringht">
            <p>copyright @ alvaro.daza <i class="fa-solid fa fa-heart"></i> Holguin</p>
        </div>
    </section>
</body>
<script>
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(event, tabname) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for (tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
        var sidemeu = document.getElementById("sidemenu");

        function openmenu() {
            sidemeu.style.right = "0";
        }
        
        function closemenu() {
            sidemeu.style.right = "-200px";
        }
        
</script>

</html>