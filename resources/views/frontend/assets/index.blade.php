@extends('layouts.app')

@section('content')
<div class="container white-panel">
    <div class="row">
        <div class="col-md-12 pagecrumb">
            <h3 class="panel-title pull-left">05-Cubesmart L.P <label>05-026 Schaumburg</label></h3>
            <div class="pull-right"><img src="{{ asset('images/StorTracLogo1.png')}}" /></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 move-center" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Assets</h3>

                </div>

                <div class="panel-body" style="height: 500px;overflow-y: auto;">  
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Asset Name</th>
                                <th>Model No.</th>
                                <th>Serial No.</th>
                                <th>Area</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assets as $asset)
                            <tr>
                                <td>{!! $asset[1] !!}</td>
                                <td>{!! $asset[2] !!}</td>
                                <td>{!! $asset[3] !!}</td>
                                <td>{!! $asset[5] !!}</td>
                                <td>
                                    <a href="{{ url('/assets/'.$asset[0]) }}" class="my-modal" data-target="#theModal" data-toggle="modal">
                                        <span class="fa-stack fa-lg width-1em">
                                            <i class="fa fa-square-o fa-stack-2x"></i>
                                            <i class="fa fa-search fa-stack-1x"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade text-center" id="theModal">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>
<script>
    $(".my-modal").click(function () {
        // get needed html
        var url = $(this).attr('href');
        $.get(url, function (result) {
            // append response to body
            $('.modal-content').append(result);
            // open modal
            //$('#myModal2').modal(/* options object here*/);

        });
    });
</script>
@endsection
