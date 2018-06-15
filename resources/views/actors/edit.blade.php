<form action="" method="post">
 
    {{ csrf_field() }}
 
    <div class="form-group">
        <label for="full_name_input">Full name:</label><br>
        <input class="form-control" type="text" name="full_name" value="{{ $actor->full_name }}" id="full_name_input">
    </div>
{1}
    <div class="form-group">
        <label for="year_of_birth_input">Year of birth:</label><br>
        <input class="form-control" type="text" name="year_of_birth" value="{{ $actor->year_of_birth }}" id="year_of_birth_input">
    </div>
{1}
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="save">
    </div>
{1}
</form>