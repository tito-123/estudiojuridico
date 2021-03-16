<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','autocomplete'=>'off','required autofocus']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control','autocomplete'=>'off','required autofocus']) !!}
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'Ci:') !!}
    {!! Form::text('ci', null, ['class' => 'form-control','autocomplete'=>'off','required autofocus']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control','autocomplete'=>'off','required autofocus']) !!}
</div>

<!-- Domicilio Field -->
<div class="form-group col-sm-6">

    {!! Form::label('domicilio', 'Domicilio:') !!}
    {!! Form::text('domicilio', null, ['class' => 'form-control','autocomplete'=>'off','required autofocus']) !!}

</div>
<!-- Domicilio Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('iduser', null, ['class' => 'form-control']) !!}
</div>

</br>
<div class="form-group col-sm-12">
  <h2 >  </br>  Datos Usuario </h2>
  </br>
  </div>
    
<!-- Name Field -->
<div class="form-group col-sm-6">
    
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','autocomplete'=>'off','required autofocus']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','autocomplete'=>'off','required autofocus']) !!}
</div>



<!-- Password Field -->

<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
 <div class="input-group mb-3">
                    <input type="password"
                           name="password"
                           class="form-control @error('password') is-invalid @enderror"
                           autocomplete="off" 
                           placeholder="Password" required autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
</div>

<div class="form-group col-sm-6">
     {!! Form::label('password', 'Confirm Password:') !!}
                <div class="input-group mb-3">
                    <input type="password"
                           name="password_confirmation"
                           class="form-control"
                           placeholder="Retype password" required autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                </div>

</div>
<!-- Iduser Field -->

