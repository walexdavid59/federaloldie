@extends('admin.layout')


@section('content')


       
        <section class="col-lg-12 connectedSortable">
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">List Grant</h3>

            </div>
           
            <div class="box-body">
               <div class="row" style="display:inline">
 <div class="table-stats order-table ov-h" style="overflow: auto;height:700px;">
                                    <table id="example" class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th>Amount</th>
                                                <th>Return</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($lists as $grantlist)
                                                <tr>
                                                <td>  <span class="name">{{ $loop->iteration }}</span> </td>
                                                <td>  <span class="name">{{ $grantlist->amount}}</span> </td>
                                                <td>  <span class="name">{{ $grantlist->cashout}}</span> </td>
                                                 <td>  
                                                <a href="{{ URL::to('edit_grant/' . $grantlist->id . '/edit') }}" class="" style="float: left;"><span class="glyphicon glyphicon-pencil"></span></p></a> &nbsp;&nbsp;&nbsp;&nbsp;
                                                        
                                               <a href = 'delete-grant/{{ $grantlist->id }}' style="float: left;margin-left:5px;"> <span class="glyphicon glyphicon-trash"></span></a>
                                                </td> 
                                                </tr>
                                                  @endforeach

                                        </tbody>  
                                       
                                    </table>
                                </div> 

                                 
                                        </div>
            </div>
          </div>
          <!-- /.box -->

        </section>
        

  
      @endsection