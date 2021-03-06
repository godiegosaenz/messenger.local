@extends('layouts.app')

@section('content')
<b-container>
   <b-row align-h="center">
       <b-col cols="8">
           <b-card header="featured"
               header-tag="header"
               footer="Card Footer"
               footer-tag="footer"
               title="Title">
               <b-alert variant="success" show>Success Alert</b-alert>
                <b-form class="form-horizontal" method="POST" action="{{ route('login')}}">
                    {{ csrf_field() }}
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
                                   description="Tu correo estara segura">
                       <b-form-input id="password"
                                   type="password"
                                   name="password"
                                   required
                                   value="{{old('password')}}"
                                   autofocus
                                   placeholder="Ingrese clave aqui">
                       </b-form-input>
                   </b-form-group>
                   <b-form-group>
                       <b-form-checkbox {{ old('remember') ? 'checked="true"' : ''}}
                                       id="remember"
                                       name="remember"
                                       checked>
                       Recordar sesion
                       </b-form-checkbox>
                   </b-form-group>
                   <b-button
                           type="submit"
                           variant="primary">
                       Ingresar
                   </b-button>
                   <b-button variant="link">
                       ¿Olvidaste tu contraseña?
                   </b-button>

                </b-form>
           </b-card>
       </b-col>
   </b-row>
</b-container>
@endsection
