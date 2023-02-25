<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Album example · Bootstrap v5.0</title>

        <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('styles.css')}}"> --}}

    

<style>
      /* .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .social-icons {
	      display: flex;
	      gap: 1.5rem;
      }

      .social-icons span {
	      border-radius: 50%;
	      width: 3rem;
	      height: 3rem;

	      display: flex;
	      align-items: center;
	      justify-content: center;
      }

      .social-icons span i {
        color: #fff;
        font-size: 1.2rem;
      }

      .facebook {
        background-color: #3b5998;
      }

      .twitter {
        background-color: #00acee;
      }

      .youtube {
        background-color: #c4302b;
      }

      .pinterest {
        background-color: #c8232c;
      }

      .instagram {
        background: linear-gradient(
          #405de6,
          #833ab4,
          #c13584,
          #e1306c,
          #fd1d1d,
          #f56040,
          #fcaf45
        );
      }

      .footer {
        background-color: var(--primary-color);
      }

      .container-footer {
        display: flex;
        flex-direction: column;
        gap: 4rem;
        padding: 3rem;
      }

      .menu-footer {
        display: grid;
        grid-template-columns: repeat(3, 1fr) 30rem;
        gap: 3rem;
        justify-items: center;
      }

      .title-footer {
        font-weight: 600;
        font-size: 10px;
        text-transform: uppercase;
      }


      /* .newsletter{
        display:inline-block;
        flex-direction: column;
        float: right;
        width: 200px;
        height: 256px;
        
      } 
      .contact-info,
      .information,
      .my-account,
      .newsletter
       {
        display:inline-block;
        flex-direction: column;
        margin-left: 
        gap: 2rem;
        width: 200px;
        height: 256px;
      }

      .contact-info ul,
      .information ul,
      .my-account ul {
        display: inline-block;
        flex-direction: column;
        gap: 1rem;
      }

      .contact-info ul li,
      .information ul li,
      .my-account ul li {
        list-style: none;
        color: #fff;
        font-size: 10px;
        font-weight: 300;
      }

      .information ul li a,
      .my-account ul li a {
        text-decoration: none;
        color: #fff;
        font-weight: 300;
      }

      .information ul li a:hover,
      .my-account ul li a:hover {
        color: var(--dark-color);
      }

      .social-icons {
       width: 200px; 
        display: flex;
        gap: 1.5rem;
      }
      .content p {
        font-size: 10px;
        color: #fff;
        font-weight: 300;
      }

      .content input {
        outline: none;
        background: none;
        border: none;
        border-bottom: 2px solid #d2b495;
        cursor: pointer;
        padding: 0.5rem 0 1.2rem;
        color: var(--dark-color);
        display: block;
        margin-bottom: 3rem;
        margin-top: 2rem;
        width: 100%;
        font-family: inherit;
      }

      .content input::-webkit-input-placeholder {
        color: #eee;
      }

      .content button {
        border: none;
        background-color: #000;
        color: #fff;
        text-transform: uppercase;
        padding: 1rem 3rem;
        border-radius: 2rem;
        font-size: 10px;
        font-family: inherit;
        cursor: pointer;
        font-weight: 600;
      }

      .content button:hover {
        background-color: var(--background-color);
        color: var(--primary-color);
      }

      .copyright {
        display: flex;
        justify-content: space-between;
        padding-top: 2rem;

        border-top: 1px solid #d2b495;
      }

      .copyright p {
        font-weight: 400;
        font-size: 10px;
      }
      .container_py-5{
        background: rgb(175, 106, 16);
      } */
      :root {
      /* --primary-color: #c7a17a; */
      --background-color: #f9f5f0;
      --dark-color: #151515;
      }

        .footer {
        background-color:#777777;
        /* height: 420px; */

        }

        .container-footer {
          display: flex;
          flex-direction: column;
          gap: 1.5rem;
          padding: 1rem;
          margin-bottom: -24px;
        }

        .menu-footer {
          display: grid;
          grid-template-columns: repeat(3, 1fr) 20rem;
          gap: 1.9rem;
          justify-items: center;
        }

        .title-footer {
          font-weight: 600;
          font-size: 1rem;
          text-transform: uppercase;
        }

        .contact-info,
        .information,
        .my-account,
        .newsletter {
          display: flex;
          flex-direction: column;
          gap: 1rem;
        }

        .contact-info ul,
        .information ul,
        .my-account ul {
          display: flex;
          flex-direction: column;
          gap: 1rem;
        }

        .contact-info ul li,
        .information ul li,
        .my-account ul li {
          list-style: none;
          color: #fff;
          font-size: 1rem;
          font-weight: 300;
          margin-left: -33px;
        }

        .information ul li a,
        .my-account ul li a {
          text-decoration: none;
          color: #fff;
          font-weight: 300;
        }

        .information ul li a:hover,
        .my-account ul li a:hover {
          color: var(--dark-color);
        }

        .social-icons {
          display: flex;
          gap: .5rem;
        }

        .social-icons span {
          border-radius: 50%;
          width: 1.5rem;
          height: 1.5rem;

          display: flex;
          align-items: center;
          justify-content: center;
        }

        .social-icons span i {
          color: #fff;
          font-size: 1rem;
        }

        .facebook {
          background-color: #3b5998;
        }

        .twitter {
          background-color: #00acee;
        }

        .youtube {
          background-color: #c4302b;
        }

        .pinterest {
          background-color: #c8232c;
        }

        .instagram {
          background: linear-gradient(
            #405de6,
            #833ab4,
            #c13584,
            #e1306c,
            #fd1d1d,
            #f56040,
            #fcaf45
          );
        }

        .content p {
          font-size: 1rem;
          color: #fff;
          font-weight: 300;
        }

        .content input {
          outline: none;
          background: none;
          border: none;
          border-bottom: 2px solid #d2b495;
          cursor: pointer;
          padding: 0.5rem 1rem;
          color: var(--dark-color);
          display: block;
          margin-bottom: 1.5rem;
          margin-top: 1.5rem;
          width: 100%;
          font-family: inherit;
        }

        .content input::-webkit-input-placeholder {
          color: #eee;
        }

        .content button {
          border: none;
          background-color: #000;
          color: #fff;
          text-transform: uppercase;
          padding: .5rem 2rem;
          border-radius: 2rem;
          font-size: 1rem;
          font-family: inherit;
          cursor: pointer;
          font-weight: 500;
        }

        .content button:hover {
          background-color: var(--background-color);
          color: var(--primary-color);
        }

        .copyright {
          display: flex;
          justify-content: space-between;
          padding-top: 1.5rem;

          border-top: 1px solid #d2b495;
        }

        .img{
          width: 234px;
          height: 25px; 
        }
        .img2{
          width: 1300px;
          height: 500px; 
          margin-left: -330px;
        }

        .copyright p {
          font-weight: 600;
          font-size: 1rem;
        }

        .img_pro{
          height: 100px;
          width: 200px;
        }

        .card1{
          text-align: center;
        }
        .col1{
          box-shadow: 10px 10px 5px rgb(105, 170, 243);
          height: 150px;
          width: 250px;
          margin-top: 30px;
        }
        .col5{
          box-shadow: 10px 10px 5px rgb(105, 170, 243);
          height: 150px;
          width: 250px;
        }
        .col2{
          box-shadow: 10px 10px 5px rgb(105, 170, 243);
          height: 150px;
          width: 250px;
          margin-left: 250px;
        }
        .col3{
          box-shadow: 10px 10px 5px rgb(105, 170, 243);
          height: 150px;
          width: 250px;
        }

        .card-text{
          font-size: .8rem;
        }
        .container1{
          margin-left: 470px;
        }

</style>

    
  </head>
  <body>
    
    @include('/header.index');

<main>

  <section class="py-5 content-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <img class="img2" src="img/banner.jpg" alt="">
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container1">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col1">
          <div class="card1 shadow-sm">
            
            <button> <a href="http://"> <img class="img_pro" src="img/instalacion.jpg" alt=""> </a></button>
            
            <div class="card-body">
              <p class="card-text">INSTALACIÓN</p>
            </div>
          </div>
        </div>
        <div class="col3">
          <div class="card1 shadow-sm">
            <button> <a href="http://"> <img class="img_pro" src="img/entrega_a_pisos_posteriores.jpg" alt=""> </a></button>
            <div class="card-body">
              <p class="card-text">ENTREGA A PISOS POSTERIORES</p>
            </div>
          </div>
        </div>
        <div class="col3">
          <div class="card1 shadow-sm">
            <button> <a href="http://"> <img class="img_pro" src="img/desempaque.jpg" alt=""> </a></button>
            <div class="card-body">
              <p class="card-text">DESEMPAQUE</p>
            </div>
          </div>
        </div>
        <div class="col1">
          <div class="card1 shadow-sm">
            <button> <a href="http://"> <img class="img_pro" src="img/entrega_personalizada.jpg" alt=""> </a></button>
            <div class="card-body">
              <p class="card-text">ENTREGA PERSONALIZADA</p>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="card1 shadow-sm">
            <button> <a href="http://"> <img class="img_pro" src="img/garantias_extendidas.jpg" alt=""> </a></button>
            <div class="card-body">
              <p class="card-text">GARANTÍAS EXTENDIDAS</p>
            </div>
          </div>
        </div>
        <div class="col5">
          <div class="card1 shadow-sm">
            <button> <a href="http://"> <img class="img_pro" src="img/mantenimiento_preventivo.jpg" alt=""> </a></button>
            <div class="card-body">
              <p class="card-text">MANTENIMIENTO PREVENTIVO</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

@include('/footer.footer');


    

      
  </body>
</html>