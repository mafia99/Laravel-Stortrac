

<div class="row">
    <div class="col-md-12 move-center" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Assets</h3>

            </div>

            <div class="panel-body text-left" style="height: 500px;overflow-y: auto;">  
                <table class="table">
                    <thead>
                        <tr>
                            <th>Asset Name</th>
                            <th>Model No.</th>
                            <th>Serial No.</th>
                            <th>Condition</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assets as $asset)
                        <tr>
                            <td><a href="{{ url('/assets/'.$asset[0]) }}" class="my-modal" data-target="#detailModal" data-toggle="modal">{!! $asset[1] !!}</a></td>
                            <td>{!! $asset[2] !!}</td>
                            <td>{!! $asset[3] !!}</td>
                            <td>{!! $asset[9] !!}</td>
                            <td>
                                <a href="{{ url('/assets/'.$asset[0]) }}" class="my-modal" data-target="#detailModal" data-toggle="modal">
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

<script>
    $(".my-modal").click(function () {
        // get needed html
        
        $('#detailModal .modal-content').html('');
        $('.modal-backdrop').remove();
        var url = $(this).attr('href');
        $.get(url, function (result) {
            // append response to body
            
            $('#detailModal .modal-content').html(result);
            
        });
    });
</script>

