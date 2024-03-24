@extends('layouts.app')



@section('content')
    <header>

        <div class="sectoin">
         <section id="amonos2" class="textos-header">
            <div class="textos">
               <h1>Ofrecer Servicios</h1>
            <p>La mejor forma de dar a conocer tus servicios de auditoria y administrativos.</p>
                <a href="{{route('adquirir.servicio')}}"><button class="roman">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Registrarse</button>
                </a>

            </div>

        </section>
        <section class="textos-header2">
            <div class="textos">
               <h1>Encuentra personas expertas en tus temas de interes</h1>
            <p>Personas altamente capacitadas estan en EcoRent! </p>
                <a href="{{route('ver.servicios')}}"><button class="roman" >
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Contratar</button></a>
            </div>

        </section>
        </div>
       <h1 class="titulo">Buscar y ofrecer servicios ahora es muy sensillo</h1>

    </header>


    <style>
        header {
            margin-top: -30px;
            background: #2980b9;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #2231d6, #3b76dc, #ffffff89);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #10649f6b, #2475a75b, #ffffff89), url(https://media.licdn.com/dms/image/C4E12AQGh3wY_BI92kQ/article-cover_image-shrink_600_2000/0/1558464035732?e=2147483647&v=beta&t=S5LAFmipaUKjfZ8Yu98uRTBmcGrYzmIhATvzGgZa8EI);
            width: 100%;
            height: 550px;
            background-size: cover;
            background-attachment: fixed;
            position: relative;
            display: block;
        }
        .textos-header{
            width: 50%;
            height: 550px;
            background: #2e22d65f;
            text-align: center
        }
        .textos-header2{
            width: 50%;
            height: 550px;
            background: rgba(149, 151, 6, 0.356);
            text-align: center;
        }
        .textos-header h1{
            color: white;
            text-align: center;
            margin-top: 200px;
        }
        .textos-header p{
            color: white;
            text-align: center;
            font-size: 18px;
        }
        .textos{
            width: 90%;
            margin: auto;
            margin-top: 200px;
            color: white;
        }
        .textos p{
            font-size: 21px;
        }
        .sectoin{
            display: flex;
        }
        .titulo{
            text-align: center;
            margin-top: -480px;
            font-size: 40px;
            color: white;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
        .btn{
            width: 250px;
            background: white;
            border-radius: 10px;
            color: rgb(0, 4, 128);
            font-size: 20px;
        }
        .btn:hover{
            background: #bed204;
            color: white;
        }

        @media screen and (max-width:500px){

            header{
                margin-top: -115px;
                background: #2980b9;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #2231d6, #3b76dc, #ffffff89);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #10649f6b, #2475a75b, #ffffff89), url(https://www.redcross.org/content/dam/redcross/about-us/news/2022/13200-279.jpg.transform/1288/q70/feature/image.jpeg);
            height: 800px;

            }
            .textos-header{

            height: 800px;
            background: #2e22d682;

        }
        .textos-header2{

            height: 800px;
            background: rgba(149, 151, 6, 0.514);

        }
        .textos-header p{
            font-size: 15px;
        }
        .textos-header2 p{
            font-size: 15px;
        }
        .titulo{

            margin-top: -700px;
            font-size: 25px;
        }
        .roman{
            width: 150px;
            padding: 5px;
            font-size: 15px;
        }
        }




        button{
         position: relative;
         display: inline-block;
         padding: 20px 40px;
         margin: 40px 0;
         background: transparent;
         color: #ffffff;
         text-decoration: none;
         text-transform: uppercase;
         transition: 0.5s;
         letter-spacing: 4px;
         overflow: hidden;
         border: none;
         font-weight: 900;
        }
        button:hover {
         background: #ffffff;
         color: #050801;
         box-shadow: 0 0 6px 0 rgb(255, 255, 255);
        }
        button span {
         position: absolute;

        }
        button span:nth-child(1){
         top: 0;
         left: 0;
         width: 100%;
         height: 2px;
         background: linear-gradient(90deg,transparent,#ffffff);
         animation: animate1 1s linear infinite;

        }
        @keyframes animate1 {
         0%{
             left: -100%;

         }
         50%,100% {
               left: 100%;

         }
        }
        button span:nth-child(2){
         top: -100%;
         right: 0;
         width: 2px;
         height: 100%;
         background: linear-gradient(180deg,transparent,#ffffff);
         animation: animate2 1s linear infinite;
         animation-delay: 0.25s;

        }
        @keyframes animate2 {
         0%{
             top: -100%;

         }
         50%,100% {
             top: 100%;

         }
        }
        button span:nth-child(3){
         bottom: 0;
         right: 0;
         width: 100%;
         height: 2px;
         background: linear-gradient(270deg,transparent,#ffffff);
         animation: animate3 1s linear infinite;
         animation-delay: 0.50s;
        }
        @keyframes animate3{
         0%{
             right: -100%;

         }
         50%,100%{
             right: 100%;

         }
        }
        button span:nth-child(4){
         bottom: -100%;
         left: 0;
         width: 2px;
         height: 100%;
         background: linear-gradient(360deg,transparent,#ffffff);
         animation: animate4 1s linear infinite;
         animation-delay: 0.75s;

        }
        @keyframes animate4{
         0%{
             bottom: -100%;

         }
         50%,100%{
             bottom: 100%;

         }
        }




    </style>
@endsection
