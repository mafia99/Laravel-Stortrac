
<div class="row">
    <div class="col-md-8" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Invoice ID: {!! $asset['invoiceNumber'] !!}</h3>

            </div>
            <div class="panel-body text-left">  
                <table class="table">
                    <thead>
                        <tr>
                            <th>Job ID</th>
                            <th>Job Lead</th>
                            <th>Completion Date</th>
                            <th>Type of Job</th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{!! ($asset['jobs'][0]['jobId'])?$asset['jobs'][0]['jobId']:'--'; !!}</td>
                            <td>{!! ($asset['jobs'][0]['jobLead'])?$asset['jobs'][0]['jobLead']:'--'; !!}</td>
                            <td>{!! ($asset['jobs'][0]['completedOn'])?$asset['jobs'][0]['completedOn']:'--'; !!}</td>
                            <td>{!! ($asset['jobs'][0]['customFields']['20e6c28ace6d4c0b8b3d76e0beceffd9'])?$asset['jobs'][0]['customFields']['20e6c28ace6d4c0b8b3d76e0beceffd9']:'--'; !!}</td>

                        </tr>

                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Billing Address</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {!! isset($customer['billingLocation'])?$customer['billingLocation']['streetName'].' '.$customer['billingLocation']['locality'].', '.$customer['billingLocation']['region'].' '.$customer['billingLocation']['postcode']:'--' !!} </td>
                            <td> 
                                Phone: {!! isset($customer['phone'])?$customer['phone']:'--' !!} <br />
                                Email: {!! isset($customer['email'])?$customer['email']:'--' !!}
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
                {!! ($asset['jobs'][0]['customFields']['d29f845758eb46e292c7eca74c8a666c'])?$asset['jobs'][0]['customFields']['d29f845758eb46e292c7eca74c8a666c']:'--'; !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 color-table " >
        <!--        <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Recent Maintenance</h3>
        
                    </div>
                    <div class="panel-body text-left">  </div>
                </div>-->
        <table class="table text-left">
            <thead>
                <tr>
                    <th style="width:20%">Line Item</th>
                    <th style="width:45%">Description</th>
                    <th style="width:5%" class="text-center">Qty</th>
                    <th style="width:15%">Unit Price</th>
                    <th style="width:5%" class="text-center">Tax</th>
                    <th style="width:20%">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asset['jobs'][0]['lineItems'] as $ass)
                    @if($ass['itemType'] == 'Task')
                        <tr>
                            <td>{!! ($ass['name'])?$ass['name']:'--'; !!}</td>
                            <td>{!! ($ass['description'])?$ass['description']:'--'; !!}</td>
                            <td class="text-center">{!! ($ass['quantity'])?$ass['quantity']:'--'; !!}</td>
                            <td>${!! ($ass['cost'])?number_format($ass['cost'],2):'0.00'; !!}</td>
                            <td class="text-center">--</td>
                            <td>${!! ($ass['price'])?number_format($ass['price'],2):'0.00'; !!}</td>
                        </tr>
                        <tr class='bg-info'><td colspan="6">{!! ($ass['note'])?$ass['note']:'--'; !!}</td></tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
 
</div>
<div class="row">
    <div class="col-md-12 color-table " >
        <!--        <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Recent Maintenance</h3>
        
                    </div>
                    <div class="panel-body text-left">  </div>
                </div>-->
        <table class="table text-left">
            <thead>
                <tr>
                    <th style="width:20%">Labor</th>
                    <th style="width:15%">Hours</th>
                    <th style="width:30%">Price</th>
                    <th style="width:15%" class="text-center">Tax</th>
                    <th style="width:20%">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asset['jobs'][0]['lineItems'] as $ass)
                    @if($ass['itemType'] == 'Labor')
                        <tr>
                            <td>{!! ($ass['name'])?$ass['name']:'--'; !!}</td>
                            
                            <td>{!! ($ass['quantity'])?$ass['quantity']:'--'; !!}</td>
                            <td>${!! ($ass['cost'])?number_format($ass['cost'],2):'0.00'; !!} {!! ($ass['description'])?$ass['description']:'--'; !!}</td>
                            <td class="text-center">--</td>
                            <td>${!! ($ass['price'])?number_format($ass['price']*$ass['quantity'],2):'0.00'; !!}</td>
                        </tr>
                        
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
 
</div>
<div class="row">
    <div class="col-md-6 pull-right">
        <div class="panel panel-default">
            <div class="panel-body" style="padding: 0">
                <span style="display: inline-block; padding: 5px 5px 9px -1px;">
                    Net Item: $ {!! number_format($asset['totals']['netAmount'],2) !!}
                </span>
                <span style="display: inline-block; padding: 5px 5px 9px;">
                    Net Labor: $ {!! number_format($asset['totals']['netLaborAmount'],2) !!}
                </span>
                <span style="display: inline-block; padding: 5px 5px 9px;">
                    Tax: $ {!! number_format($asset['totals']['totalTax'],2) !!}
                </span>
                <span class="btn btn-primary" style="display: inline">
                    Total: $ {!! number_format($asset['totals']['totalAmount'],2) !!}
                </span>
            </div>
        </div>
    </div>
</div>