<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('stocksDetails'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="view" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto  back-btn-col" >
                    <a class="back-btn btn " href="{{ url()->previous() }}" >
                        <i class="material-icons">arrow_back</i>                                
                         
                    </a>
                </div>
                <div class="col col-md-auto  " >
                    <div class=" h5 font-weight-bold text-primary" >
                        {{ __('stocksDetails') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div  class="" >
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid " >
                    <?php Html::display_page_errors($errors); ?>
                    <div  class=" page-content" >
                        <?php
                            $counter = 0;
                            if($data){
                            $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                            $counter++;
                        ?>
                        <div id="page-main-content" class=" px-3 mb-3">
                            <div class="page-data">
                                <!--PageComponentStart-->
                                <div class="mb-3 row row gutter-lg">
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">{{ __('id') }}</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['id'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">{{ __('productId') }}</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['product_id'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">{{ __('particular') }}</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['particular'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">{{ __('regDate') }}</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['reg_date'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">{{ __('stockIn') }}</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['stock_in'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">{{ __('stockOut') }}</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['stock_out'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">{{ __('stockBalance') }}</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['stock_balance'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">{{ __('docNo') }}</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['doc_no'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">{{ __('userId') }}</small>
                                                    <div class="fw-bold">
                                                        <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("users/view/$data[user_id]?subpage=1") ?>">
                                                        <i class="material-icons">visibility</i> <?php echo "Users Detail" ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-12 col-md-4">
                                    <div class="bg-light mb-3 card-1 p-2 border rounded">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <small class="text-muted">{{ __('companyId') }}</small>
                                                <div class="fw-bold">
                                                    <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("companies/view/$data[company_id]?subpage=1") ?>">
                                                    <i class="material-icons">visibility</i> <?php echo "Companies Detail" ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-md-4">
                                <div class="bg-light mb-3 card-1 p-2 border rounded">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <small class="text-muted">{{ __('amountIn') }}</small>
                                            <div class="fw-bold">
                                                <?php echo  $data['amount_in'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-md-4">
                                <div class="bg-light mb-3 card-1 p-2 border rounded">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <small class="text-muted">{{ __('amountOut') }}</small>
                                            <div class="fw-bold">
                                                <?php echo  $data['amount_out'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-md-4">
                                <div class="bg-light mb-3 card-1 p-2 border rounded">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <small class="text-muted">{{ __('ledgerId') }}</small>
                                            <div class="fw-bold">
                                                <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("ledgers/view/$data[ledger_id]?subpage=1") ?>">
                                                <i class="material-icons">visibility</i> <?php echo "Ledgers Detail" ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--PageComponentEnd-->
                    <div class="d-flex gap-1 justify-content-start">
                        <a class="btn btn-sm btn-success has-tooltip "   title="{{ __('edit') }}" href="<?php print_link("stocks/edit/$rec_id"); ?>" >
                        <i class="material-icons">edit</i> {{ __('edit') }}
                    </a>
                    <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" data-prompt-msg="{{ __('promptDeleteRecord') }}" data-display-style="modal" title="{{ __('delete') }}" href="<?php print_link("stocks/delete/$rec_id?redirect=stocks"); ?>" >
                    <i class="material-icons">delete_sweep</i> {{ __('delete') }}
                </a>
            </div>
        </div>
    </div>
    <?php
        }
        else{
    ?>
    <!-- Empty Record Message -->
    <div class="text-muted p-3">
        <i class="material-icons">block</i> {{ __('noRecordFound') }}
    </div>
    <?php
        }
    ?>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection
<!-- Page custom css -->
@section('pagecss')
<style>

</style>
@endsection
<!-- Page custom js -->
@section('pagejs')
<script>
    <!--pageautofill-->
$(document).ready(function(){
	// custom javascript | jquery codes
});

</script>
@endsection
