@extends('layouts.modal')

@section('content')


<div class="row">
    <div class="col-md-12" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Assets</h3>

            </div>
            <div class="panel-body text-left">  
                <table class="table">
                    <thead>
                        <tr>
                            <th>Asset Name</th>
                            <th>Description</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Serial No.</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{!! ($asset['name'])?$asset['name']:'--'; !!}</td>
                            <td>{!! ($asset['description'])?$asset['description']:'--'; !!}</td>
                            <td>{!! ($asset['make'])?$asset['make']:'--'; !!}</td>
                            <td>{!! ($asset['model'])?$asset['model']:'--'; !!}</td>
                            <td>{!! ($asset['serialNumber'])?$asset['serialNumber']:'--'; !!}</td>
                        </tr>
                        
                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date Placed in Service</th>
                            <th>Current Condition</th>
                            <th>Manufacturer</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> -- </td>
                            <td>{!! ($asset['maintenanceNotes'])?$asset['maintenanceNotes']:'--' !!}</td>
                            <td>{!! ($asset['manufacturer'])?$asset['manufacturer']:'--'; !!}</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
