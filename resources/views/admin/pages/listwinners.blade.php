@extends('admin.layout')


@section('content')


       
        <section class="col-lg-12 connectedSortable">
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">List Winners</h3>

            </div>
           
            <div class="box-body">
               <div class="row" style="display:inline">
 <div class="table-stats order-table ov-h" style="overflow: auto;height:700px;">
                                    <table id="example" class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th>Beneficiary Name</th>
                                                <th>Gender</th>
                                                <th>Status</th>
                                                <th>Date_Created</th>
                                                <th>Edit/Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($list as $winnerlist)
                                                <tr>
                                                <td>  <span class="name">{{ $loop->iteration }}</span> </td>
                                                <td>  <span class="name">{{ $winnerlist->name}}</span> </td>
                                                <td>  <span class="name">{{ $winnerlist->gender}}</span> </td>
                                                <td>  <span class="name">
                                                   @if($winnerlist->status==1) 
                                                     {{ "Delivered" }}
                                                     @else
                                                     {{ "Unhold" }}
                                                   
                                                   @endif
                                                </span> </td>
                                                <td>  <span class="name">{{ $winnerlist->created_at}}</span> </td>
                                                 <td>  
                                                <a href="{{ URL::to('edit_winner/' . $winnerlist->id . '/edit') }}" class="btn btn-primary" style="float: left;">Edit</a> &nbsp;
                                                        <form  action="{{ url('deletewinner' , $winnerlist->id ) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button class="btn btn-danger" style="float: right;">Delete </button>
                                                        </form>     
                                                </td> 
                                            @endforeach

                                            
                                                </tr>

                                        </tbody>
                                        {{-- <tbody>
                                                @foreach($product as $productlist)
                                            <tr>
                                                <td class="serial">{{ $loop->iteration }}</td>
                                                <td class="avatar">
                                                    <div class="round-img">
                                                        <a href="#"><img class="rounded-circle" src="/storage/{{ $productlist->image}}" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>  <span class="name">{{ $productlist->slug}}</span> </td>
                                                <td>  <span class="name">{{ $productlist->code}}</span> </td>
                                                <td>  <span class="name">{{ $productlist->price}}</span> </td>
                                                <td>  <span class="name">{{ $productlist->description}}</span> </td>
                                                <td>  <span class="name">{{ $productlist->productstatus}}</span> </td>
                                                <td>  <span class="name">
                                                     @if($productlist->status=='0')
                                                         <b  style="color:#f00;"> {{'not yet activated'}} </b>
                                                         @else
                                                         <b  style="color:green;">{{ 'Activated'}} </b>
                                                         @endif</span> </td>
                                                <td>  <span class="name" >{{ $productlist->created_at}}</span> </td>
                                                <td>
                                                        <a href="{{ URL::to('edit_product/' . $productlist->id . '/edit') }}" class="btn btn-primary" style="float: left;">Edit</a> &nbsp;
                                                        <form action="{{ url('deleteproduct' , $productlist->id ) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button class="btn btn-danger" style="float: left;">Delete </button>
                                                        </form>
                                                     
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody> --}}
                                    </table>
                                </div> 

                                 
                                        </div>
            </div>
          </div>
          <!-- /.box -->

        </section>
        

  
      @endsection