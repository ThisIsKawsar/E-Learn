@extends('admin.admin')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
<div class="content-body" style="min-height: 788px;">
			<div class="container-fluid">
			<div class="row">

                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Course </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

       <form method="post" action="{{ route('course.store') }}" enctype="multipart/form-data">
        	@csrf
            
           
                <div class="form-group">
                <label class="info-title">	short_title </label>
         <input type="text" name="short_title" class="form-control input-default "  >
            @error('short_title')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
         <div class="form-group">
            <label class="info-title">short_description</label>
         <textarea class="form-control" name='short_description' rows="4" id="comment"></textarea>
       
          @error('short_description')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
        
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                 <span class="input-group-text">small_img</span>
                </div>
                <div class="custom-file">
        <input type="file" name="small_img" class="custom-file-input" id="image">
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>


            <div class="form-group">
               <img id="showImage" src="{{(!empty($course->small_img))?url('upload/images/'.$course->small_img):url('upload//no_image.jpg')}}" class="img-fluid rounded-circle" alt="" style="width: 100px; height: 100px;">
            </div>

       <div class="form-group">
                <label class="info-title">	long_title </label>
         <input type="text" name="long_title" class="form-control input-default "  >
            @error('long_title')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
        
              <div class="form-group">
            <label class="info-title">long_description</label>
         <textarea class="form-control" name='long_description' rows="4" id="comment"></textarea>
       
          @error('long_description')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
      <div class="form-group">
                <label class="info-title">total_duration</label>
         <input type="text" name="total_duration" class="form-control input-default "  >
            @error('total_duration')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
             <div class="form-group">
                <label class="info-title">total_lecture</label>
         <input type="text" name="total_lecture" class="form-control input-default "  >
            @error('total_lecture')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
             <div class="form-group">
                <label class="info-title">	total_student </label>
         <input type="text" name="total_student" class="form-control input-default "  >
            @error('total_student')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
        <div class="form-group">
            <label class="info-title">skill_all</label>
         <textarea class="form-control" name='skill_all' rows="4" id="comment"></textarea>
       
          @error('skill_all')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
<div class="form-group">
                <label class="info-title">	video_url </label>
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

    <script type="text/javascript">
	 $(document).ready(function(){
	 	$('#image').change(function(e){
	 		var reader = new FileReader();
	 		reader.onload = function(e){
	 			$('#showImage').attr('src',e.target.result);
	 		}
	 		reader.readAsDataURL(e.target.files['0']);
	 	});
	 });   
</script>     
@endsection