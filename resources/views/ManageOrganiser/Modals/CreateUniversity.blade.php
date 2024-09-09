<div role="dialog"  class="modal fade" style="display: none;">


    {!! Form::open(array('url' => route('postCreateUniversity'), 'class' => 'ajax gf')) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">
                    <i class="ico-calendar"></i>
                    Create University</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('name', "Name", array('class'=>'control-label required')) !!}
                            {!!  Form::text('name', old('name'),array('class'=>'form-control','placeholder'=>"جامعه الملك سعود") )  !!}
                        </div>
     <div class="form-group">
                            {!! Form::label('domain', "Domain", array('class'=>'control-label required')) !!}
                            {!!  Form::text('domain', old('domain'),array('class'=>'form-control','placeholder'=>"ksu.edu.sa") )  !!}
                        </div>

                        @if($organiser_id)
                            {!! Form::hidden('organiser_id', $organiser_id) !!}
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="uploadProgress"></span>
                {!! Form::button("Cancel", ['class'=>"btn modal-close btn-danger",'data-dismiss'=>'modal']) !!}
                {!! Form::submit('Create', ['class'=>"btn btn-success"]) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
