@extends('admin.admin')

@section('admin')

<div class="content-body" style="min-height: 788px;">
			<div class="container-fluid">
			<div class="row">

                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> create HomePage </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

       <form method="post" action="{{route('homepage.store')}}" enctype="multipart/form-data">
        	@csrf
            
           
                <div class="form-group">
                <label class="info-title"> home_title</label>
         <input type="text" name="home_title" class="form-control input-default "  >
            @error('home_title')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
                 <div class="form-group">
                <label class="info-title"> home_subtitle</label>
         <input type="text" name="home_subtitle" class="form-control input-default "  >
            @error('home_subtitle')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
         <div class="form-group">
            <label class="info-title">tech_description</label>
         <textarea class="form-control" name='tech_description' rows="4" id="comment"></textarea>
       
          @error('tech_description')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
                     <div class="form-group">
                <label class="info-title"> total_student</label>
         <input type="text" name="total_student" class="form-control input-default "  >
            @error('total_student')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
                     <div class="form-group">
                <label class="info-title"> total_course</label>
         <input type="text" name="total_course" class="form-control input-default "  >
            @error('total_course')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
                     <div class="form-group">
                <label class="info-title"> total_review</label>
         <input type="text" name="total_review" class="form-control input-default "  >
            @error('total_review')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
         <div class="form-group">
            <label class="info-title">video_description</label>
         <textarea class="form-control" name='video_description' rows="4" id="comment"></textarea>
       
          @error('video_description')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
                     <div class="form-group">
                <label class="info-title">video_url	</label>
         <input type="text" name="video_url" class="form-control input-default "  >
            @error('video_url')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
                    

        
 <input type="submit" class="btn btn-secondary" value="create">
            
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