@extends('admin.admin')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
<div class="content-body" style="min-height: 788px;">
			<div class="container-fluid">
			<div class="row">

                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Footer </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

       <form method="post" action="{{ route('footer.store') }}" enctype="multipart/form-data">
        	@csrf
            
           
                <div class="form-group">
                <label class="info-title">	address</label>
         <input type="text" name="address" class="form-control input-default "  >
            @error('address')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
              <div class="form-group">
                <label class="info-title">		email</label>
         <input type="text" name="email" class="form-control input-default "  >
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
              <div class="form-group">
                <label class="info-title">phone</label>
         <input type="text" name="phone" class="form-control input-default "  >
            @error('phone')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
              <div class="form-group">
                <label class="info-title">facebook</label>
         <input type="text" name="facebook" class="form-control input-default "  >
            @error('facebook')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
              <div class="form-group">
                <label class="info-title">twiter</label>
         <input type="text" name="twiter" class="form-control input-default "  >
            @error('twiter')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
              <div class="form-group">
                <label class="info-title">instagram</label>
         <input type="text" name="instagram" class="form-control input-default "  >
            @error('instagram')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>  <div class="form-group">
                <label class="info-title">	footer_credit</label>
         <input type="text" name="footer_credit" class="form-control input-default "  >
            @error('footer_credit')
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