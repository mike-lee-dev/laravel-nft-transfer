@extends('layout.dashboard')

@section('page-css')

@endsection

@section('content')
    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">送り履歴</h4>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                                    <thead>
                                    <tr>
                                        <th class="wd-20p">ID</th>
                                        <th class="wd-20p">送り口座ID</th>
                                        <th class="wd-15p">受取り口座ID</th>
                                        <th class="wd-20p">移送量</th>
                                        <th class="wd-20p">移送時間</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($history_data as $data)
                                        <tr id="{{$data->id}}">
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->sender}}</td>
                                            <td>{{$data->receiver}}</td>
                                            <td>{{$data->amount}}</td>
                                            <td>{{$data->time}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- table-wrapper -->
                    </div>
                    <!-- section-wrapper -->

                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-js')
    <script>
        $('document').ready(function () {

        });
    </script>
@endsection
