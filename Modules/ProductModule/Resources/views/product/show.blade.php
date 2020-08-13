@extends('commonmodule::layouts.master')

@section('content')
    <section class="content">
        <!-- Content Here -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('productmodule::product.products')}}</h3>
                        {{-- Add New --}}
                        <a href="{{url('/admin-panel/product/create')}}" type="button" class="btn btn-success pull-right"><i
                                class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{__('productmodule::product.addnew')}}</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="container">
                            <div class="col">

                                <img class="card-img-top"
                                     src="{{asset('images/products/thumb/'.$product->photo)}}" alt="">
                                <div class="card-body">

                                    <h4 class="card-title">{{ $product->title }}</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h3>@lang('productmodule::product.desc')</h3>
                            {!! $product->description !!}


                        </div>


                        <br>
                        <hr>

                        <table id="productAlbum" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th></th>
                                <th>{{__('productmodule::product.photo')}}</th>
                                <th>{{__('productmodule::product.delete')}}</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($product->product_photo as $item)
                                <tr>
                                    <td></td>
                                    <td><img src="{{asset('/images/products/'.$item->photo)}}" width="100"
                                             height="100"></td>
                                    <td>
                                        @role('superadmin')
                                        <form class="inline"
                                              action="{{url('/admin-panel/product-photo/delete/'.$item->id)}}"
                                              method="POST">
                                            {{ method_field('DELETE') }} {!! csrf_field() !!}
                                            <button title="Delete" type="submit"
                                                    onclick="return confirm('Are you sure, You want to delete Category?')"
                                                    type="button" class="btn btn-danger"><i class="fa fa-trash"
                                                                                            aria-hidden="true"></i>
                                            </button>
                                        </form>
                                        @endrole
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <form action="{{url('/admin-panel/product-photos')}}" method="POST" id="createform"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="photo">Upload New photo/s :</label>
                                    <div class="col-sm-4">
                                        <input data-validation="required" multiple="multiple" type="file"
                                               autocomplete="off" name="photos[]">
                                    </div>
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                </div>
                                <br>
                                <hr>
                                <div class="box-footer">
                                    <a href="" type="button"
                                       class="btn btn-default">{{__('productmodule::product.cancel')}} &nbsp; <i
                                            class="fa fa-remove" aria-hidden="true"></i> </a>

                                    <button type="submit"
                                            class="btn btn-primary pull-right">{{__('productmodule::product.submit')}} &nbsp;
                                        <i class="fa fa-save"></i></button>
                                </div>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
