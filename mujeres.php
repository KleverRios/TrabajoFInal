<!DOCTYPE html>
<html lang="ES">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no,
    maximum-scale=1, minimum-sacle=1">
    <title>EAZY-E SPORTS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="estiloscatalogo.css">

</head>

<body class="contenedor">
    <header class="header">
        <div class="cab1"></div>
        <div class="cab2">
            <div class="logo1">
                <p>Eazy-E<br>Sports</p>
            </div>
            <div>
                <from id="busqueda">
                    <input type="text" id="txtBuscar" name="nombre" placeholder="BUSCAR PRODUCTO">
                    <button type="submit" id="btn" name="Enviar"><i class="fa-solid fa-magnifying-glass"></i></button>
                </from>
            </div>

            <div class="login"><a href="index.php">INGRESA/REGISTRARTE</a></div>
            <div class="megusta">
                <a href="#"><i class="fa-regular fa-heart"></i></a>
            </div>
            <div class="carro">
                <a href="Marca.php"><i class="fa-solid fa-cart-shopping"></i> S/.00</a>
            </div>

        </div>
        <div class="menuPrincipal">
            <ul class="nava">
                <li><a href="tarea.php">Inicio</a></li>
                <li><a href="Marca.php">Marca</a></li>
                <li><a href="Hombres.php">Hombres</a></li>
                <li><a href="Mujeres.php">Mujeres</a></li>
                <li><a href="Niños.php">Niños</a></li>
                <li><a href="Nosotros.php">Nosotros</a></li>
                <li><a href="Emprende.html">Emprende con eazy esports</a></li>
            </ul>
        </div>
    </header>

    <section class="contenido">
        <div class="mostrador" id="mostrador">
            <div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor">
                        <img src="imagenes/puma1.jpg" alt="">
                        <p class="descripcion"> Puma Runner V3</p>
                        <span class="precio">500</span><br>

                    </div>
                </div>

                <div class="item" onclick="cargar(this)">
                    <div class="contenedor">
                        <img src="imagenes/puma2.jpg" alt="">
                        <p class="descripcion"> Puma REINVENT WNS</p>
                        <span class="precio">700</span><br>


                    </div>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor">
                        <img src="imagenes/adidas1.jpg" alt="">
                        <p class="descripcion"> Adidas Streetcheck</p>
                        <span class="precio">436</span><br>


                    </div>
                </div>

            </div>
            <div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor">
                        <img src="imagenes/adidas2.jpg" alt="">
                        <p class="descripcion"> AdidasAdvantage Urbano</p>
                        <span class="precio">850</span><br>

                    </div>
                </div>

                <div class="item" onclick="cargar(this)">
                    <div class="contenedor">
                        <img src="imagenes/cat1.jpg" alt="">
                        <p class="descripcion">Caterpillar INTRUDER</p>
                        <span class="precio">900</span><br>


                    </div>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor">
                        <img src="imagenes/cat2.jpg" alt="">
                        <p class="descripcion"> Caterpillar A1</p>
                        <span class="precio">230</span><br>


                    </div>
                </div>

            </div>
        </div>

        <div class="seleccion" id="seleccion">
            <div class="cerrar" onclick="cerrar()">
                &#x2715
            </div>

            <div class="info">
                <img src="img/adidas1.jpg" alt="" id="img">
                <h2 id="modelo">MODELO 1</h2>
                <p id="descripcion">DESCRIPCION</p>
                <span class="precio" id="precio">500</span>
                <div class="fila">
                    <div class="size">
                        <label for="">TALLA</label>
                        <select name="" id="">
                            <option value="">36</option>
                            <option value="">37</option>
                            <option value="">38</option>
                            <option value="">39</option>
                            <option value="">40</option>
                        </select>
                        <input class="boton" type="submit" name="compra" value="COMPRAR" onclick="listo()">
                        

                    </div>
                </div>


            </div>
        </div>
    </section>



    <footer class="footer">
        <div class="piePadre1">
            <div class="pie1">
                <div class="log">
                    <p>Eazy-E<br>Sports</p>
                </div>
                <h2>SOMOS TUS ALIADOS PARA EL EXITO</h2>
                <p> Av. República, La Victoria 15033</p>
                <p>Telefono: 963214785</p>
                <p>email: eazy-esports@gmail.com</p>
            </div>
            <div class="pie2">
                <h1>NUESTRAS MARCAS</h1>
                <a href="ADIDAS.html">ADIDAS</a>
                <a href="CAT.html">CAT</a>
                <a href="NIKE.html">NIKE</a>
                <a href="PUMA.html">PUMA</a>
                <a href="FILA.html">FILA</a>
            </div>
            <div class="pie3">
                <h1>ENCUENTRANOS EN</h1>
                <a href="https://www.facebook.com/people/Eazy-E-Sports/100091901793928/?mibextid=ZbWKwL"
                    target="_blank">
                    <p>FACEBOOK</p>
                </a>
                <a href="#">INSTAGRAM</a>
                <a href="#">TIKTOK</a>
                <a href="https://chat.whatsapp.com/G1SlpAXc00kG11lEMoSlqV" target="_blank">
                    <p>WHATSAPP</p>
                </a>
            </div>
            <div class="pie4">
                <h1>ENLACES DE INTERES</h1>
                <a href="index.php">REGISTRARTE</a>
                <a href="#">TÉRMINOS Y CONDICIONES</a>
                <a href="#">POLITICAS DE PRIVACIDAD</a>
                <a href="Emprende.php">CONTACTANOS</a>
                <a href="#">NOVEDADES</a>
            </div>
        </div>

        <div class="piePadre2">
            <div class="pie5">
                <p>2023 CREATED BY EAZY-E SPORTS</p>
            </div>
            <div class="pie6">
                <img src="imagenes/pagos1.png" alt="p6" width="255" height="22">
            </div>
        </div>
    </footer>

    <script src="funciones.js"></script>
</body>

</html>
