 <div class="panel panel-post-item" style="align-items: center">

        <h3 align="center">Add New Photo</h3>
        <br>
        {!! Form::open(array('action' => 'ProfileController@addPt','files'=>true)) !!}
            <b>Select a Photo to Uplaod: </b>
            <input type="file" class="form-group" id="photo" name="photo" style="left: 200px;">
            <br>
            <input type="submit" class="btn btn-danger" style="padding:10px; float: right;" value="Add">
        {!! Form::close() !!}
</div>

