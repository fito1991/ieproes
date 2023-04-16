<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('alumno') }}
            {{ Form::select('alumno_id', $alumnos, $nota->alumno_id, ['class' => 'form-control' . ($errors->has('alumno_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un alumno']) }}
            {!! $errors->first('alumno_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materia') }}
            {{ Form::select('materia_id', $materias, $nota->materia_id, ['class' => 'form-control' . ($errors->has('materia_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una materia']) }}
            {!! $errors->first('materia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota_1') }}
            {{ Form::text('nota_1', $nota->nota_1, ['class' => 'form-control' . ($errors->has('nota_1') ? ' is-invalid' : ''), 'placeholder' => 'Nota 1']) }}
            {!! $errors->first('nota_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota_2') }}
            {{ Form::text('nota_2', $nota->nota_2, ['class' => 'form-control' . ($errors->has('nota_2') ? ' is-invalid' : ''), 'placeholder' => 'Nota 2']) }}
            {!! $errors->first('nota_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota_3') }}
            {{ Form::text('nota_3', $nota->nota_3, ['class' => 'form-control' . ($errors->has('nota_3') ? ' is-invalid' : ''), 'placeholder' => 'Nota 3']) }}
            {!! $errors->first('nota_3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- <div class="form-group">
            {{ Form::label('promedio') }}
            {{ Form::text('promedio', $nota->promedio, ['class' => 'form-control' . ($errors->has('promedio') ? ' is-invalid' : ''), 'placeholder' => 'Promedio']) }}
            {!! $errors->first('promedio', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <!-- <div class="form-group">
            {{ Form::label('profesor_id') }}
            {{ Form::text('profesor_id', $nota->profesor_id, ['class' => 'form-control' . ($errors->has('profesor_id') ? ' is-invalid' : ''), 'placeholder' => 'Profesor Id']) }}
            {!! $errors->first('profesor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>