@extends('admin.layout')


@section('content')


       
        <section class="col-lg-12 connectedSortable">

          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Add Slider</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <div class="row" style="display:inline">
               <div class="row col-lg-8" style="display:block">
                                
                                                @if(Session::has('success'))
                                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                                                @endif
                                
                                            <form enctype="multipart/form-data" action ="{{ url('create_slider') }}" method="POST">
                                                {{ csrf_field() }}
                                                
            <div class="form-group col-lg-4">
                <label for="">Choose Image</label>
                 <input class="form-control" data-preview="#preview" name="slider" type="file" id="slider">
                     </div>
                                                
                                                <div class="form-group col-lg-12">			
                                                    <button class ="btn btn-success" type="submit">Save </button>			
                                                </div>
                                
                                                
                                            </form>	
                                        </div>
                                        </div>
            </div>
          </div>
          <!-- /.box -->

        </section>
        

  
      @endsection