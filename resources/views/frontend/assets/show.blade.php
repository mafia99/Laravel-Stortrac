

<div class="row">
    <div class="col-md-8" >
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
                            <td> {!! isset($asset['customFields']['01a89cd3ae214e50a58fd237f6cac5d7'])?$asset['customFields']['01a89cd3ae214e50a58fd237f6cac5d7']:'--' !!} </td>
                            <td>{!! isset($asset['customFields']['ab64557441204cc695a63b07aeb39637'])?$asset['customFields']['ab64557441204cc695a63b07aeb39637']:'--' !!}</td>
                            <td>{!! ($asset['manufacturer'])?$asset['manufacturer']:'--'; !!}</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Attachment</h3>

            </div>
            <div class="panel-body text-left" style="padding: 0;"> 
                @if (count($asset['attachments']) > 0)
                <img src="https://api.fieldaware.net/asset/{{$asset['uuid']}}/attachment/{{$asset['attachments'][0]['uuid']}}?api_key=dadd0475434941d1b1a6b5400d5fa870" style="width: 100%;" />
                @endif
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-8" >
        <div class="panel panel-default jobs-panel">
            <div class="panel-heading">
                <h3 class="panel-title">Recent Maintenance</h3>

            </div>
            <div class="panel-body text-left">  
                <table class="table">
                    <thead>
                        <tr>
                            <th>State</th>
                            <th>ID</th>
                            <th>When</th>
                            <th>Job Lead</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Invoice <i class="fa fa-check-circle"></i></td>
                            <td>J1729</td>
                            <td>12/06/16 9:17AM</td>
                            <td>Jason Smith</td>
                            <td>05-Cubsesmart L.P. 05-17</td>
                        </tr>
                        <tr>
                            <td>Invoice <i class="fa fa-check-circle"></i></td>
                            <td>J1951</td>
                            <td>01/02/17 9:32AM</td>
                            <td>Matt Knize</td>
                            <td>05-Cubsesmart L.P. 05-17</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Maintenance Notes</h3>

            </div>
            <div class="panel-body text-left"> {!! ($asset['maintenanceNotes'])?$asset['maintenanceNotes']:'--' !!} </div>
        </div>
    </div>
</div>

