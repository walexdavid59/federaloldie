@extends('admin.layout')


@section('content')


       
        <section class="col-lg-12 connectedSortable">

          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Edit Winners</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <div class="row" style="display:inline">
               <div class="row col-lg-8" style="display:block">
                                
                                                @if(Session::has('success'))
                                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                                                @endif
                                
                                            <form enctype="multipart/form-data" action ="{{ url('update_winners') }}" method="POST">
                                                {{ csrf_field() }}
                                                 <input type="hidden" name="hdid" value="{{ $editwin->id }}" >
                                                <div class="form-group col-lg-4" style="display:block;">
                                                    <label for="name">Beneficiary Name</label>
                                                    <input type="text" name="name" value="{{ $editwin->name }}" class="form-control">

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
                                                    <button class ="btn btn-success" type="submit">Edit </button>			
                                                </div>
                                
                                                
                                            </form>	
                                        </div>
                                        </div>
            </div>
          </div>
          <!-- /.box -->

        </section>
        

  
      @endsection