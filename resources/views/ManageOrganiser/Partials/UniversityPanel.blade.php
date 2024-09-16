<div class="panel panel-success event">
    <div class="panel-heading" data-style="background-color: {{{$university->bg_color}}};background-image: url({{{$university->bg_image_url}}}); background-size: cover;">

        <ul class="event-meta">
            <li class="event-title">
University            </li>
            <li class="event-organiser">
                By <a href='{{route('showOrganiserDashboard', ['organiser_id' => $university->organiser->id])}}'>{{{$university->organiser->name}}}</a>
            </li>
        </ul>

    </div>

    <div class="panel-body">
        <ul class="nav nav-section nav-justified mt5 mb5">
            <li>
                <div class="section">
                    <h4 class="nm">{{$university->name}}</h4>
                    <p class="nm text-muted">University</p>
                </div>
            </li>

            <li>
                <div class="section">
                    <h4 class="nm">{{$university->attendance_limit}}</h4>
                    <p class="nm text-muted">University Limit</p>
                </div>
            </li>


        </ul>
        <ul class="nav nav-section nav-justified mt5 mb5">
        <li>
            <div class="section">
                <h4 class="nm">{{$university->stud_domain}}</h4>
                <p class="nm text-muted">Student Domain</p>
            </div>
        </li>
            <li>
            <div class="section">
                <h4 class="nm">{{$university->staff_domain}}</h4>
                <p class="nm text-muted">Staff Domain</p>
            </div>
        </li>
        </ul>

    </div>
    <div class="panel-footer">
        <ul class="nav nav-section nav-justified">
            <li>
                <a href="#" data-modal-id="editUniversity"
                   data-href="{{route('showUpdateUniversity', ['university_id' => $university->id])}}"
                   class=" loadModal">      <i class="ico-edit"></i>   @lang("basic.edit") University</a>


            </li>

        </ul>
    </div>
</div>
