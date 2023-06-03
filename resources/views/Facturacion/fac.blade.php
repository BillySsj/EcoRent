@extends('layouts.app')


@section('content')
    @foreach ($productos as $rosa)
        @if ($rosa->id == $item)
            @foreach ($descripcion as $des)
                @if (Auth::user()->id == $des->users_id)

                    <form action="{{ route('crear.factura') }}" method="POST">
                        @csrf
                        <div class="grupo">
                            <label for="">Nombre</label>
                            <input type="text" name="users_id" value="{{Auth::user()->name}}">
                            @error('nombre')
                                <small>{{ $message }}</small>
                            @enderror

                        </div>
                        <div class="grupo">
                            <label for="">Direccion</label>
                            <input type="text" name="direccion" value="{{$des->direccion}}">
                        </div>
                        <div class="grupo">
                            <label for="">Telefono</label>
                            <input type="text" name="telefono" value="{{$des->telefono}}">
                        </div>
                        <div class="grupo">
                            <label for="">Nit</label>
                            <input type="text" name="nit" value="{{$des->nit}}">
                        </div>
                        <div class="grupo">
                            <label for="">Correo:</label>
                            <input type="text" name="correo" value="{{Auth::user()->email}}">
                        </div>
                        <div class="grupo">
                            <label for="">Producto:</label>
                            <input type="text" name="nombre_producto" value="{{$rosa->nombre}}">
                        </div>
                        <img style="width: 100px; margin:auto" src="/img/{{$rosa->img}}" alt="">
                        <div class="grupo">
                            <label for="">Tipo:</label>
                            <input type="text" name="tipo" value="{{$rosa->tipo}}">
                        </div>
                        <div class="grupo">
                            <label for="">Precio:</label>
                            <input type="text" name='precio' value="{{$rosa->precio}}">
                        </div>
                        <div class="grupo">
                            <label for="">Descripcion:</label>
                            <input type="text" name='descripcion' value="{{$rosa->descripcion}}">
                        </div>
                        <div class="grupo">
                            <label for="">Venta-Alquiler</label>
                            <input type="text" name='venta_alquiler' value="{{$rosa->venta_arquiler}}">
                        </div>
                        <div class="grupo">
                            <label for="">Tipo de pago:</label>
                            <input type="text" name='tipo_pago' value="Pago contra entrega">
                        </div>

                        <button type="submit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Subir</button>
                    </form>


                    <style>
                        .subir {
                            padding: 5px 10px;
                            background: #84f53e;
                            color: #fff;
                            border: 0px solid #fff;
                            cursor: pointer;
                        }

                        .subir:hover {
                            color: #fff;
                            background: #426b00;
                        }

                        form {
                            width: 400px;
                            margin: auto;
                            display: grid;
                            padding: 30px;
                            box-shadow: 0 0 16px 0 rgba(0, 0, 0, 0.326);
                            border-radius: 10px;
                            background: white;

                        }

                        .grupo {
                            margin-bottom: 10px;
                        }

                        input {
                            border: none;
                            background: transparent;
                            border-bottom: 1px solid gray;
                            outline: none;
                            width: 100%;
                            font-size: 18px;
                            color: rgb(0, 255, 47);
                        }

                        label {
                            font-size: 15px;
                            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
                        }



                        @media screen and (max-width:500px){

form{
    width: 300px;
}

}





                        button {
                            position: relative;
                            display: inline-block;
                            padding: 20px 40px;
                            margin: 40px 0;
                            background: transparent;
                            color: #4ae664;
                            text-decoration: none;
                            text-transform: uppercase;
                            transition: 0.5s;
                            letter-spacing: 4px;
                            overflow: hidden;
                            border: none;
                        }

                        button:hover {
                            background: #4ae664;
                            color: #050801;
                            box-shadow: 0 0 6px 0 rgb(0, 0, .6);
                        }

                        button span {
                            position: absolute;

                        }

                        button span:nth-child(1) {
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 2px;
                            background: linear-gradient(90deg, transparent, #4ae664);
                            animation: animate1 1s linear infinite;

                        }

                        @keyframes animate1 {
                            0% {
                                left: -100%;

                            }

                            50%,
                            100% {
                                left: 100%;

                            }
                        }

                        button span:nth-child(2) {
                            top: -100%;
                            right: 0;
                            width: 2px;
                            height: 100%;
                            background: linear-gradient(180deg, transparent, #4ae664);
                            animation: animate2 1s linear infinite;
                            animation-delay: 0.25s;

                        }

                        @keyframes animate2 {
                            0% {
                                top: -100%;

                            }

                            50%,
                            100% {
                                top: 100%;

                            }
                        }

                        button span:nth-child(3) {
                            bottom: 0;
                            right: 0;
                            width: 100%;
                            height: 2px;
                            background: linear-gradient(270deg, transparent, #4ae664);
                            animation: animate3 1s linear infinite;
                            animation-delay: 0.50s;
                        }

                        @keyframes animate3 {
                            0% {
                                right: -100%;

                            }

                            50%,
                            100% {
                                right: 100%;

                            }
                        }

                        button span:nth-child(4) {
                            bottom: -100%;
                            left: 0;
                            width: 2px;
                            height: 100%;
                            background: linear-gradient(360deg, transparent, #4ae664);
                            animation: animate4 1s linear infinite;
                            animation-delay: 0.75s;

                        }

                        @keyframes animate4 {
                            0% {
                                bottom: -100%;

                            }

                            50%,
                            100% {
                                bottom: 100%;

                            }
                        }
                    </style>
                @endif
            @endforeach
        @endif
    @endforeach
@endsection
