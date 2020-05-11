
<div class="form-group">
   <label for="name">Name</label>
  {!! Form::text('name',null,[
  'class' => 'form-control'
  ]) !!}
  <label for="grade">grade</label>
  {!! Form::text('grade',null,[
  'class' => 'form-control'
  ]) !!}
  <label for="grade">Department</label>
                  {!! Form::text('department',null,[
                  'class' => 'form-control'
                  ]) !!}
   <label for="image">Image</label>
    {!! Form::file('image', [
    'class'=>'form-control'
    ]) !!}

  <label for="body">Information</label>
    {!! Form::text('body',null, [
    'class'=>'form-control'
    ]) !!}

  <label for="university">University</label>
                  {!! Form::text('university',null,[
                  'class' => 'form-control'
                  ]) !!}
  </div>
  <div class="form-group">
   <button class="btn btn-primary" type="submit">Add </button>
  </div>
