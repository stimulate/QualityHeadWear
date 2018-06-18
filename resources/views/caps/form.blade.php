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
                    'placeholder'=>'Cap Name']) !!}                                    
                </div>
        </div>
   </div>

<div class="row">
    <div class="col-md-9">         
            {!! Form::label('image', 'Image') !!}  
            <div class="form-group"> 
             <input type="file" name="image" id="image" />
            </div>
    </div>
</div>

<div class="row">
    <div class="col-md-9">         
            {!! Form::label('price', 'Price') !!}  
            <div class="form-group">                
                {!! Form::text('price',NULL, ['class'=>'form-control', 'id'=>'price',
                'placeholder'=>'Cap Price']) !!}                              
            </div>
    </div>
</div>

<div class="row">
        <div class="col-md-9">         
                {!! Form::label('description', 'Description') !!}  
                <div class="form-group">                
                    {!! Form::text('description',NULL, ['class'=>'form-control', 'id'=>'description',
                    'placeholder'=>'Cap Description']) !!}                            
                </div>
        </div>
</div>  

    <div class="row">
        <div class="col-md-9">         
                {!! Form::label('category_id', 'Category') !!}  
                <div class="form-group">                          
                    {!! Form::select('category_id', $cags, ['class'=>'form-control']) !!}                                                              
                </div> 
        </div>
</div>

<div class="row">
            <div class="col-md-9">         
                    {!! Form::label('supplier_id', 'Supplier') !!}  
                    <div class="form-group">                          
                     {!! Form::select('supplier_id', $sups,  ['class'=>'form-control']) !!}                                                          
                    </div>
            </div>
        </div>

    <div class="form-group">                
        {!! Form::submit(isset($model)?'Update':'Save', ['class'=>'btn btn-success']) !!}                
        {{--  <input type="submit" value="Create" class="btn btn-default" />  --}}
    </div>

 