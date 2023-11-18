@section('group_category') 
<div class="card tab-pane fade" id="group-tab-pane" role="tabpanel" aria-labelledby="group-tab" tabindex="-1">
    <h5 class="card-header">Расписание для групп</h5>
    <div class="card-body">
        <form method="get" action="{{route('groups_schedule')}}">
            @csrf
            <div class="row">
                <label for="group_faculty" class="form-label">Выберите институт/факультет</label>
                <select class="form-select mb-3" name="faculty" id="group_faculty">
                    <option disabled="" selected="">Выберите институт/факультет</option>
                    @foreach($faculties as $faculty)
                        @if($faculty_id != 0 && $faculty_id == $faculty['id'])
                            <option selected value="{{$faculty['id']}}" >{{$faculty['nameFaculty']}}</option>
                        @else <option value="{{$faculty['id']}}" >{{$faculty['nameFaculty']}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="row">
                <label for="course-dropdown" class="form-label">Выберите курс</label>
                <select class="form-select mb-3" name="course" id="course-dropdown">
                    <option disabled="" selected="">Выберите курс</option>
                    @if(isset($courses))
                        @foreach($courses as $course)
                            @if($courseName != 0 && $courseName == $course['course'])
                                <option selected value="{{$course['course']}}" >{{$course['course']}}</option>
                            @else <option value="{{$course['course']}}" >{{$course['course']}}</option>
                            @endif
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="row">
                <label for="group-dropdown" class="form-label">Выберите группу</label>
                <select class="form-select mb-3" name="group" id="group-dropdown">
                    <option disabled="" selected="">Выберите группу</option>
                    @foreach($groups as $group)
                        @if($group_id != 0 && $group_id == $group['id'])
                            <option selected value="{{$group['id']}}" >{{$group['nameGroup']}}</option>
                        @else <option value="{{$group['id']}}" >{{$group['nameGroup']}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="row">
                <input type="submit" class="btn btn-primary" name="show" value="Показать">
            </div>
        </form>
    </div>
</div>
@show
