@extends('admin.layout')


@section('content')


       
        <section class="col-lg-12 connectedSortable">
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">List Orders</h3>

            </div>
           
            <div class="box-body">
               <div class="row" style="display:inline">
 <div class="table-stats order-table ov-h" style="overflow: auto;height:700px;">
                                    <table id="example" class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th>Name</th>
                                                <th>Deal</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Comment</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($lists as $orderlist)
                                                <tr>
                                                <td>  <span class="name">{{ $loop->iteration }}</span> </td>
                                                <td>  <span class="name">{{ $orderlist->name}}</span> </td>
                                                <td>  <span class="name">{{ $orderlist->deal}}</span> </td>
                                                <td>  <span class="name">{{ $orderlist->email}}</span> </td>
                                                <td>  <span class="name">{{ $orderlist->phone}}</span> </td>
                                                <td>  <span class="name">{{ $orderlist->message}}</span> </td>
                                                <td>  <span class="name">Pending</span> </td>

                                                <td>  
                                                <a href="{{ URL::to('edit_order/' . $orderlist->id . '/edit') }}" class="" style="float: left;"><span class="glyphicon glyphicon-pencil"></span></p></a> &nbsp;&nbsp;&nbsp;&nbsp;
                                                        
                                               <a href = 'delete-order/{{ $orderlist->id }}' style="float: left;margin-left:5px;"> <span class="glyphicon glyphicon-trash"></span></a>
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