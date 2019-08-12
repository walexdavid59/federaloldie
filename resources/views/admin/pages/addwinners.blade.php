@extends('admin.layout')


@section('content')


       
        <section class="col-lg-12 connectedSortable">

          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Add Winners</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <div class="row" >
                         <div class="col-md-5 col-md-offset-4">
                                
                                                @if(Session::has('success'))
                                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                                                @endif
                                                @if(Session::has('fail'))
                                                <p class="alert alert-danger">{{ Session::get('fail') }}</p>

                                                @endif
                                
                                            <form enctype="multipart/form-data" action ="{{ url('create_winners') }}" method="POST">
                                                {{ csrf_field() }}
                                                
                                                <div class="form-group" >
                                                    <label for="name">Beneficiary Name</label>
                                                    <input type="text" name="name" class="form-control">

                                                    <label for="">Gender</label>
                                                    <select  required name="gender" class="form-control">
                                                            <option selected disabled value="">Select Gender</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                            </select>

                                                            <label for=""> Status</label>
                                                    <select  required name="status" class="form-control">
                                                            <option selected disabled value="">Select Gender</option>
                                                            <option value="1">Delivered</option>
                                                            <option value="0">On Hold</option>
                                                            </select>
                                                </div>
                                
                                                    {{-- <div class="form-group col-lg-4" style="display:block;">
                                                            <label for="name">Category Image</label>
                                                            <input class="form-control" data-preview="#preview" name="cateimage" type="file" id="cateimage">
                                                        </div> --}}
                                                
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