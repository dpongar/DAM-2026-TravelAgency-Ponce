<style>
    body {
        background-image: url('../images/africa2.jpg');
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
        background-size: cover;
    }
    header{
        margin: auto;
        padding: 10px;
    }
    .logo-africa{
        display: flex;
        height: 270px;
        margin: 10px;
        justify-content: center;
        align-content: center;
    }

    h2, p, a {
        margin: 10px;
    }
    ul {
        list-style-type: none;
        font-size: 20px;
        margin: 20px auto;
        padding: 15px 30px;
        background-color: rgba(255, 160, 122, 0.8);
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 10px;
        font-weight: bold;

    }
    ul li a {
        display: block;
        color: black;
        padding: 14px 16px;
        text-decoration: none;

    }

    ul li a:hover {
        background-color: lightcoral;
        border-radius: 10px;
    }

    .presentacion{
        display: flex;
        text-align: center;
        font-size: 22px;
        background-color: rgba(255, 160, 122, 0.8);
        padding: 10px;
        margin: auto;
        margin-top: 20px;
        margin-bottom: 20px;
        justify-content: center;
        justify-items: center;
        width: 50%;
        border-radius: 10px;
    }
    .presentacion img{
        width: 300px;
        height: auto;
    }
    .texto{
        margin: auto;
        padding: 10px;
    }

    .destacados {
        padding: 60px ;
        background-color: rgba(255, 160, 122, 0.5);
    }

    .destacados h2 {
        text-align: center;
        font-size: 80px;
        margin-bottom: 40px;
    }

    .grid-viajes {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .card-viaje {
        background: white;
        border-radius: 18px;
        overflow: hidden;
    }

    .card-viaje:hover {
        cursor: pointer;
    }

    .card-viaje img {
        width: 100%;
        height: 210px;
        object-fit: cover;
    }

    .info-viaje {
        padding: 20px;
        text-align: center;
    }

    .info-viaje h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .descripcion {
        font-size: 20px;
        color: grey;
        margin-bottom: 10px;
    }

    .fecha {
        font-size: 20px;
        color: grey;
    }

    .precio {
        font-size: 30px;
        font-weight: bold;
        color: green;
        margin-top: 10px;
    }
    .footer {
        margin-top: 80px;
        background: linear-gradient(135deg, lightsalmon, lightcoral);
        padding: 50px 20px;
        border-top-left-radius: 25px;
        border-top-right-radius: 25px;
    }

    .footer-contenido {
        max-width: 1200px;
        margin: auto;
        text-align: center;
    }

    .footer-titulo {
        font-size: 42px;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .footer-links {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
        margin-bottom: 30px;
    }

    .footer-links a {
        font-size: 24px;
        font-weight: bold;
        color: black;
        text-decoration: none;
        padding: 12px 20px;
        border-radius: 12px;
        background-color: rgba(255, 255, 255, 0.6);
    }

    .footer-links a:hover {
        background-color: white;
        transform: translateY(-5px);
    }

    .footer-copy {
        font-size: 20px;
        color: black;
    }


    .pagina-legal {
        max-width: 900px;
        margin: 60px auto;
        background-color: rgba(255, 160, 122, 0.8);
        padding: 40px;
        border-radius: 20px;
    }

    .pagina-legal h1 {
        font-size: 48px;
        text-align: center;
        margin-bottom: 30px;
    }

    .pagina-legal p {
        font-size: 24px;
        margin-bottom: 25px;
        text-align: justify;
    }

    .btn-volver-home {
        margin-top: 30px;
        padding: 14px 30px;
        background-color: lightblue;
        color: black;
        text-decoration: none;
        font-size: 22px;
        font-weight: bold;
        border-radius: 12px;
    }




    .botones {
        display: flex;
        justify-content: center;
        gap: 10px;
        font-weight: bold;
    }

    .modificar button{
        background-color: lightgreen;
    }
    .eliminar button{
        background-color: red;
    }
    .insertar button{
        background-color: yellow;
    }

    .contenedor-formulario {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px;
        background-color: rgba(255, 160, 122, 0.7);
        width: 70%;
        margin: 40px auto;
        border-radius: 18px;
    }

    .contenedor-formulario h2 {
        font-size: 40px;
        color: black;
        text-align: center;
    }

    .form-viajes {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .form-viajes label {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .input-texto, .input-fecha, .input-numero {
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        font-size: 18px;
        background-color: white;
    }

    textarea.input-texto {
        resize: vertical;
        min-height: 100px;
    }

    .campo-doble-m {
        display: flex;
        gap: 20px;
        width: 100%;
    }

    .botones-form {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
    }

    .btn-guardar {
        background-color: green;
        color: white;
        padding: 15px 30px;
        border-radius: 10px;
        font-weight: bold;
        font-size: 18px;
        cursor: pointer;
    }

    .btn-cancelar {
        background-color: red;
        color: white;
        padding: 15px 30px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
    }

    .btn-guardar:hover, .btn-cancelar:hover {
        transform: translateY(-3px);
    }

    .form-insertar{
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .form-insertar label{
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 5px;
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        font-size: 28px;
    }
    .contenedor-insertar{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px;
        background-color: rgba(255, 160, 122, 0.7);
        width: 70%;
        margin: 40px auto;
        border-radius: 18px;
    }
    .contenedor-insertar h1{
        font-size: 40px;
        color: black;
        text-align: center;

    }
    .campo-doble-i{
        display: flex;
        gap: 20px;
        width: 100%;
    }
    .botones-form-i{
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
    }

    .destacado{
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        font-size: 18px;
        background-color: white;
    }

    select{
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        font-size: 18px;
        background-color: white;
    }
    .wrapper{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px;
        background-color: lightsalmon;
        width: 40%;
        margin: 40px auto;
        border-radius: 18px;
    }
    .home{
        display: flex;
        justify-content: center;
        font-size: 21px;
        font-weight: bold;
        color: black;
    }
    .politica, .privacidad, .legal{
        margin: 20px;
        background-color: lightcoral;
        padding: 20px;
        border-radius: 10px
    }

    .contenedor-viaje {
        max-width: 900px;
        margin: 40px auto;
        padding: 20px;
        background-color: lightsalmon;
        border-radius: 15px;
        color: black;
    }

    .contenedor-viaje h1 {
        font-size: 50px;
        color: black;
        margin-bottom: 15px;
        text-align: center;
    }

    .contenedor-viaje img {
        display: block;
        width: 100%;
        max-width: 800px;
        height: 400px;
        object-fit: cover;
        border-radius: 10px;
        margin: 20px auto;
    }

    .contenedor-viaje p {
        font-size: 22px;
        color: black;
        margin: 12px;
    }

    .destacado-detalles {
        color: black;
        background-color: yellow;
        padding: 10px;
        border-radius: 10px;
        font-weight: bold;
    }

    .btn-volver {
        display: inline-block;
        padding: 10px 25px;
        margin-top: 20px;
        background-color: lightblue;
        color: black;
        text-decoration: none;
        border-radius: 8px;
    }

    .btn-volver:hover {
        background-color: lightskyblue;
    }

    .contenedor-viaje .datos-viaje {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin: 15px auto;
    }

    .menu-nav {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .nav-buscador {
        margin-left: auto;
    }

    .form-nav-busqueda {
        display: flex;
        gap: 6px;
        align-items: center;
        margin: 20px auto;
        padding: 20px;
    }

    .form-nav-busqueda input, .form-nav-busqueda select {
        padding: 5px 8px;
        border-radius: 6px;
        font-size: 0.85rem;
    }

    .form-nav-busqueda button {
        padding: 5px 10px;
        border: none;
        border-radius: 6px;
        background: #2c6e49;
        color: white;
        cursor: pointer;
    }
    .lista-viajes {
        max-width: 1100px;
        margin: 0 auto 50px auto;
        padding: 0 20px;
    }

    .item-viaje {
        display: flex;
        gap: 20px;
        align-items: center;
        background: white;
        border-radius: 15px;
        padding: 15px;
        margin-bottom: 25px;
    }

    .item-viaje:hover {
        transform: translateY(-4px);
    }

    .item-viaje img {
        width: 180px;
        height: 120px;
        object-fit: cover;
        border-radius: 12px;
    }

    .item-viaje .info {
        flex: 1;
    }

    .item-viaje .info h3 {
        margin: 0 0 8px 0;
        font-size: 25px;
    }

    .item-viaje .info p {
        margin: 4px 0;
        color: black;
        font-size: 15px;
    }

    .item-viaje .precio {
        font-size: 15px;
        font-weight: bold;
        color: black;
        margin-top: 8px;
    }

    .item-viaje .tipo {
        display: inline-block;
        margin-top: 6px;
        padding: 4px 10px;
        background: lightgrey;
        border-radius: 10px;
        font-size: 17px;
        color: black;
    }



</style>
