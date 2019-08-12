@extends('admin.layout')


@section('content')


       
        <section class="col-lg-12 connectedSortable">

          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Add Grants</h3>

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
                                
                                            <form enctype="multipart/form-data" action ="{{ url('create_grant') }}" method="POST">
                                                {{ csrf_field() }}
                                                
                                                <div class="form-group" >
                                                    <label for="name">Grant Amount</label>
                                                    <input type="text" name="amount" class="form-control">

                                                    <label for="name">Grant Cashout</label>
                                                    <input type="text" name="cashout" class="form-control">

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