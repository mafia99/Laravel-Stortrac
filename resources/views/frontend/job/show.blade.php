@extends('layouts.modal')

@section('content')
<div class="row">
    <div class="col-md-8" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Job Detail</h3>

            </div>
            <div class="panel-body text-left">  
                <table class="table">
                    <thead>
                        <tr>
                            <th>Job ID</th>
                            <th>Date Created</th>
                            <th>Scheduled Date</th>
                            <th>Type of Job</th>
                            <th>Billable</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{!! ($job['jobId'])?$job['jobId']:'--'; !!}</td>
                            <td></td>
                            <td></td>
                            <td>{!! ($job['customFields']['20e6c28ace6d4c0b8b3d76e0beceffd9'])?$job['customFields']['20e6c28ace6d4c0b8b3d76e0beceffd9']:'--'; !!}</td>
                            <td>{!! ($job['customFields']['c3191f67454b4a3ca81b643cfe6718ba'])?$job['customFields']['c3191f67454b4a3ca81b643cfe6718ba']:'--'; !!}</td>
                        </tr>

                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Dispatch Status</th>
                            <th>Waiting for Parts</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {!! isset($customer['billingLocation'])?$customer['billingLocation']['streetName'].' '.$customer['billingLocation']['locality'].', '.$customer['billingLocation']['region'].' '.$customer['billingLocation']['postcode']:'--' !!} </td>
                            <td> 
                                {!! isset($job['customFields']['718d9f4f47214b9caaa178a0d9880c1f'])?$job['customFields']['718d9f4f47214b9caaa178a0d9880c1f']:'--' !!} 

                            </td>

                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Job / Service Request</h3>

            </div>
            <div class="panel-body text-left"> 
                {!! ($job['customFields']['d29f845758eb46e292c7eca74c8a666c'])?$job['customFields']['d29f845758eb46e292c7eca74c8a666c']:'--'; !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12  " >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tasks</h3>

            </div>
            <div class="panel-body text-left"> 
                <table class="table text-left">
                    <thead>
                        <tr>
                            <th style="width:15%">Name</th>
                            <th style="width:30%">Description</th>

                            <th style="width:35%">Notes</th>

                            <th style="width:20%">Attachments</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($job['tasks'] as $ass)

                        <tr>
                            <td>{!! ($ass['task']['name'])?$ass['task']['name']:'--'; !!}</td>
                            <td>{!! ($ass['task']['description'])?$ass['task']['description']:'--'; !!}</td>

                            <td>{!! ($ass['note'])?$ass['note']:'--'; !!}</td>
                            <td>
                                @foreach ($ass['attachments'] as $att)
                                {!! $att['name'] !!} <br />
                                @endforeach
                            </td>

                        </tr>


                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
<div class="row">
    <div class="col-md-12" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Time & Labor</h3>

            </div>
            <div class="panel-body text-left">  
                <table class="table text-left">
                    <thead>
                        <tr>
                            <th style="width:20%">Crew Member</th>
                            <th style="width:20%">Worked Hours</th>
                            <th style="width:20%">Travel Hours</th>
                            <th style="width:20%">Chargeable Hours</th>
                            <th style="width:20%">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($job['labor'] as $lab)

                        <tr>
                            <td></td>
                            <td>{!! ($lab['quantity'])?number_format($lab['quantity']/60,2):'--'; !!}</td>
                            <td>0</td>

                            <td>{!! ($lab['quantity'])?number_format($lab['quantity']/60,2):'--'; !!}</td>
                            <td>
                               ${!! ($lab['unitPrice'])?number_format($lab['unitPrice']*($lab['quantity']/60),2):'--'; !!}
                            </td>

                        </tr>


                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>

@endsection