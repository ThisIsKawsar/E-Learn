@extends('admin.admin')

@section('admin')

<div class="content-body" style="min-height: 788px;">
			<div class="container-fluid">
			<div class="row">

                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit homepage </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

        <form method="post" action="{{ route('homepage.update',[$home->id]) }}" enctype="multipart/form-data">
        	@csrf
            {{ method_field('PUT') }}
                <div class="form-group">
                <label class="info-title"> home_title</label>
         <input type="text" name="home_title" class="form-control input-default "  value="{{$home->home_title}}" >
            @error('home_title')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
                 <div class="form-group">
                <label class="info-title"> home_subtitle</label>
         <input type="text" name="home_subtitle" class="form-control input-default " value="{{$home->home_subtitle}}" >
            @error('home_subtitle')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
         <div class="form-group">
            <label class="info-title">tech_description</label>
         <textarea class="form-control" name='tech_description' rows="4" id="comment"> {{$home->tech_description}}</textarea>
       
          @error('tech_description')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
                     <div class="form-group">
                <label class="info-title"> total_student	</label>
         <input type="text" name="total_student" class="form-control input-default "  value="{{$home->total_student}}" >
            @error('total_student')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
                     <div class="form-group">
                <label class="info-title"> total_course</label>
         <input type="text" name="total_course" class="form-control input-default "   value="{{$home->total_course}}">
            @error('total_course')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
                     <div class="form-group">
                <label class="info-title"> total_review</label>
         <input type="text" name="total_review" class="form-control input-default "   value="{{$home->total_review}}">
            @error('total_review')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
         <div class="form-group">
            <label class="info-title">video_description</label>
         <textarea class="form-control" name='video_description' rows="4" id="comment"> {{$home->video_description}}</textarea>
       
          @error('video_description')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
                     <div class="form-group">
                <label class="info-title">video_url	</label>
         <input type="text" name="video_url" class="form-control input-default "   value="{{$home->video_url}}">
            @error('video_url')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
                    


           <input type="submit" class="btn btn-secondary" value="Update">
            
        </form>
    </div>
                            </div>
                        </div>
					</div>


					  




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   
@endsection