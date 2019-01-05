@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
                <b-card
                title="Title">
                @if($errors->any())
                <b-alert variant="danger" show>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach

                    </ul>
                </b-alert>
                @else
                    <b-alert variant="success" show>Ingrese sus datos</b-alert>
                @endif
                 <b-form class="form-horizontal" method="POST" action="{{ route('register')}}">
                     {{ csrf_field() }}
                     <b-form-group id="InputGroupnombre"
                                    label="Nombre:"
                                    label-for="name"
                                    description="Ejem: Diego">
                        <b-form-input id="name"
                                    type="text"
                                    name="name"
                                    required
                                    value="{{old('name')}}"
                                    autofocus
                                    placeholder="Nombre">
                        </b-form-input>
                    </b-form-group>
                     <b-form-group id="exampleInputGroup1"
                                    label="Correo:"
                                    label-for="email"
                                    description="Tu correo esta seguro">
                        <b-form-input id="email"
                                    type="email"
                                    name="email"
                                    required
                                    value="{{old('email')}}"
                                    autofocus
                                    placeholder="Correo">
                        </b-form-input>
                    </b-form-group>
                    <b-form-group id="exampleInputGroup1"
                                    label="Contraseña:"
                                    label-for="password"
                                    description="Clave">
                        <b-form-input id="password"
                                    type="password"
                                    name="password"
                                    required
                                    value="{{old('password')}}"
                                    autofocus
                                    placeholder="Ingrese clave aqui">
                        </b-form-input>
                    </b-form-group>
                    <b-form-group id="InputGroupRepetirclave"
                                    label="Repetir contraseña:"
                                    label-for="repassword"
                                    description="La clave debe ser igual al campo superior">
                        <b-form-input id="password_confirmation"
                                    type="password"
                                    name="password_confirmation"
                                    required
                                    value="{{old('password_confirmation')}}"
                                    autofocus
                                    placeholder="Confirmar contrase;a">
                        </b-form-input>
                    </b-form-group>

                    <b-button
                            type="submit"
                            variant="primary">
                        Confirmar registro
                    </b-button>
                    <b-button href="route('login')" variant="link">
                        ¿Ya te has registrado?
                    </b-button>

                 </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>

@endsection
