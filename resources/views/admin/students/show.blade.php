@extends('admin.layout')

@section('admin-left-menu')
    <li class="mt">
        <a href="/admin/dashboard">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sub-menu">
        <a class="active" href="javascript:;" >
            <i class="fa fa-book"></i>
            <span>Accounts</span>
        </a>

        <ul class="sub">
            <li class="active"><a href="/students">Manage Students</a></li>
            <li><a  href="/teachers">Manage Teachers</a></li>
        </ul>
    </li>

    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-tasks"></i>
            <span>Newsboard</span>
        </a>

        <ul class="sub">
            <li><a  href="/news">Manage News</a></li>
        </ul>
    </li>

    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-tasks"></i>
            <span>Gallery</span>
        </a>
        <ul class="sub">
            <li><a  href="/photo">Manage Photos</a></li>
        </ul>
    </li>

    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-tasks"></i>
            <span>Subjects</span>
        </a>
        <ul class="sub">
            <li><a  href="/subjects">Manage Subjects</a></li>
        </ul>
    </li>

    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-th"></i>
            <span>Sessions</span>
        </a>

        <ul class="sub">
            <li><a  href="/session">Manage Sessions</a></li>
        </ul>
    </li>
@endsection

@section('admin-main-content')
    <h3><i class="fa fa-angle-right"></i> Student's Detail</h3>

    <!-- INLINE FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-12">
            @if ($student)
                <div class="col-lg-10 col-lg-offset-1  col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 mb">
                    <!-- WHITE PANEL - TOP USER -->
                    <div class="white-panel pn" style="height: 25em">
                        <div class="white-header">
                            <h5>{{$student->student_reg}}</h5>
                        </div>
                        <p><img src="{{asset('/student_photo/'.$student->profile_pix)}}" class="img-circle" width="80"></p>
                        <p><b>{{$student->name}}</b></p>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="small mt">GENDER</p>
                                <p>{{$student->gender}}</p>
                            </div>
                            <div class="col-md-3">
                                <p class="small mt">CLASS</p>
                                <p>{{$student->studentClass->name}} {{$student->classType->name}}</p>
                            </div>
                            <div class="col-md-3">
                                <p class="small mt">DATE OF BIRTH</p>
                                <p>{{$student->dob}}</p>
                            </div>
                            <div class="col-md-3">
                                <p class="small mt">PHONE</p>
                                <p>{{$student->phone}}</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /col-md-4 -->
            @endif
        </div><!-- /col-lg-12 -->
    </div><!-- /row -->
@endsection