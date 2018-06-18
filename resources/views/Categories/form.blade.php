@if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md-9">         
                {!! Form::label('name', 'Name') !!}  
                <div class="form-group">                
                    {!! Form::text('name',NULL, ['class'=>'form-control', 'id'=>'name',
                    'placeholder'=>'Category Name']) !!}                                    
                </div>
        </div>
   </div>

<div class="row">
        <div class="col-md-9">         
                {!! Form::label('description', 'Description') !!}  
                <div class="form-group">                
                    {!! Form::text('description',NULL, ['class'=>'form-control', 'id'=>'description',
                    'placeholder'=>'Category Description']) !!}                            
                </div>
        </div>
</div>  

    <div class="form-group">                
        {!! Form::submit(isset($model)?'Update':'Save', ['class'=>'btn btn-success']) !!}                
        {{--  <input type="submit" value="Create" class="btn btn-default" />  --}}
    </div>

 