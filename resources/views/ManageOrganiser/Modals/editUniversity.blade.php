<div role="dialog"  class="modal fade" style="display: none;">


    {!! Form::open(array('url' => route('postUpdateUniversity',[$university->id]), 'class' => 'ajax gf')) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">
                    <i class="ico-calendar"></i>
                    Update University</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('name', "Name", array('class'=>'control-label required')) !!}
                            {!!  Form::text('name', old('name',$university->name),array('class'=>'form-control','placeholder'=>"جامعه الملك سعود") )  !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('staff_domain', "Staff Domain", array('class'=>'control-label ')) !!}
                            {!!  Form::text('staff_domain', old('staff_domain',$university->staff_domain),array('class'=>'form-control','placeholder'=>"ksu.edu.sa.staff") )  !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('stud_domain', "Student Domain", array('class'=>'control-label ')) !!}
                            {!!  Form::text('stud_domain', old('stud_domain',$university->stud_domain),array('class'=>'form-control','placeholder'=>"ksu.edu.sa.student") )  !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('attendance_limit', "Attendance Limit", array('class'=>'control-label required')) !!}
                            {!!  Form::number('attendance_limit', old('attendance_limit'),array('class'=>'form-control','placeholder'=>"500") )  !!}
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="uploadProgress"></span>
                {!! Form::button("Cancel", ['class'=>"btn modal-close btn-danger",'data-dismiss'=>'modal']) !!}
                {!! Form::submit('Update', ['class'=>"btn btn-success"]) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
