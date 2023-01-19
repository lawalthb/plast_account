<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewLedgers'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
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
                        {{ __('addNewLedgers') }}
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
                <div class="col-md-9 comp-grid " >
                    <?php Html::display_page_errors($errors); ?>
                    <div  class="card-1 border rounded page-content" >
                        <!--[form-start]-->
                        <form id="ledgers-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="{{ route('ledgers.store') }}" method="post">
                            @csrf
                            <div>
                                <input id="ctrl-company_id" data-field="company_id"  value="<?php echo get_value('company_id', auth()->user()->company_id) ?>" type="hidden" placeholder="{{ __('enterCompanyId') }}" list="company_id_list"  required="" name="company_id"  class="form-control " />
                                <datalist id="company_id_list">
                                <?php 
                                    $options = $comp_model->company_id_option_list() ?? [];
                                    foreach($options as $option){
                                    $value = $option->value;
                                    $label = $option->label ?? $value;
                                ?>
                                <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                <?php
                                    }
                                ?>
                                </datalist>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="sub_account_group_id">{{ __('subAccountGroup') }} <span class="text-danger">*</span></label>
                                        <div id="ctrl-sub_account_group_id-holder" class=" "> 
                                            <select required=""  id="ctrl-sub_account_group_id" data-field="sub_account_group_id" name="sub_account_group_id"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                            <option value="">{{ __('selectAValue') }}</option>
                                            <?php 
                                                $options = $comp_model->sales_ledger_id_option_list() ?? [];
                                                foreach($options as $option){
                                                $value = $option->value;
                                                $label = $option->label ?? $value;
                                                $selected = Html::get_field_selected('sub_account_group_id', $value, "");
                                            ?>
                                            <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                            <?php echo $label; ?>
                                            </option>
                                            <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="ledger_name">{{ __('ledgerName') }} <span class="text-danger">*</span></label>
                                        <div id="ctrl-ledger_name-holder" class=" "> 
                                            <input id="ctrl-ledger_name" data-field="ledger_name"  value="<?php echo get_value('ledger_name') ?>" type="text" placeholder="{{ __('enterLedgerName') }}"  required="" name="ledger_name"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="marketer_id">{{ __('marketer') }} <span class="text-danger">*</span></label>
                                        <div id="ctrl-marketer_id-holder" class=" "> 
                                            <select required=""  id="ctrl-marketer_id" data-field="marketer_id" name="marketer_id"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                            <option value="">{{ __('selectAValue') }}</option>
                                            <?php 
                                                $options = $comp_model->marketer_id_option_list() ?? [];
                                                foreach($options as $option){
                                                $value = $option->value;
                                                $label = $option->label ?? $value;
                                                $selected = Html::get_field_selected('marketer_id', $value, "");
                                            ?>
                                            <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                            <?php echo $label; ?>
                                            </option>
                                            <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="address">{{ __('address') }} </label>
                                        <div id="ctrl-address-holder" class=" "> 
                                            <textarea placeholder="{{ __('enterAddress') }}" id="ctrl-address" data-field="address"  rows="2" name="address" class=" form-control"><?php echo get_value('address') ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="email">{{ __('email') }} </label>
                                        <div id="ctrl-email-holder" class=" "> 
                                            <input id="ctrl-email" data-field="email"  value="<?php echo get_value('email') ?>" type="email" placeholder="{{ __('enterEmail') }}"  name="email"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="phone">{{ __('phone') }} </label>
                                        <div id="ctrl-phone-holder" class=" "> 
                                            <input id="ctrl-phone" data-field="phone"  value="<?php echo get_value('phone') ?>" type="text" placeholder="{{ __('enterPhone') }}"  name="phone"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="contact_person">{{ __('contactPersonName') }} </label>
                                        <div id="ctrl-contact_person-holder" class=" "> 
                                            <input id="ctrl-contact_person" data-field="contact_person"  value="<?php echo get_value('contact_person') ?>" type="text" placeholder="{{ __('enterContactPersonName') }}"  name="contact_person"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="is_active">{{ __('isActive') }} <span class="text-danger">*</span></label>
                                        <div id="ctrl-is_active-holder" class=" "> 
                                            <?php
                                                $options = Menu::is_active();
                                                if(!empty($options)){
                                                foreach($options as $option){
                                                $value = $option['value'];
                                                $label = $option['label'];
                                                //check if current option is checked option
                                                $checked = Html::get_field_checked('is_active', $value, "Yes");
                                            ?>
                                            <label class="form-check form-check-inline">
                                            <input class="form-check-input" <?php echo $checked ?>  value="<?php echo $value ?>" type="radio" required=""   name="is_active" />
                                            <span class="form-check-label"><?php echo $label ?></span>
                                            </label>
                                            <?php
                                                }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <input id="ctrl-user_id" data-field="user_id"  value="<?php echo get_value('user_id', auth()->user()->id) ?>" type="hidden" placeholder="{{ __('enterUserId') }}" list="user_id_list"  required="" name="user_id"  class="form-control " />
                                <datalist id="user_id_list">
                                <?php 
                                    $options = $comp_model->user_id_option_list() ?? [];
                                    foreach($options as $option){
                                    $value = $option->value;
                                    $label = $option->label ?? $value;
                                ?>
                                <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                <?php
                                    }
                                ?>
                                </datalist>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="credit_amount">{{ __('creditAmount') }} <span class="text-danger">*</span></label>
                                        <div id="ctrl-credit_amount-holder" class=" "> 
                                            <input id="ctrl-credit_amount" data-field="credit_amount"  value="<?php echo get_value('credit_amount', "0.00") ?>" type="number" placeholder="{{ __('enterCreditAmount') }}" step="0.1"  required="" name="credit_amount"  class="form-control " />
                                        </div>
                                        <small class="form-text">Amount company is owning ledger</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="debit_amount">{{ __('debitAmount') }} <span class="text-danger">*</span></label>
                                        <div id="ctrl-debit_amount-holder" class=" "> 
                                            <input id="ctrl-debit_amount" data-field="debit_amount"  value="<?php echo get_value('debit_amount', "0.00") ?>" type="number" placeholder="{{ __('enterDebitAmount') }}" step="0.1"  required="" name="debit_amount"  class="form-control " />
                                        </div>
                                        <small class="form-text">Amount ledger is owning company</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-button-start]-->
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <button class="btn btn-primary" type="submit">
                                {{ __('submit') }}
                                <i class="material-icons">send</i>
                                </button>
                            </div>
                            <!--[form-button-end]-->
                        </form>
                        <!--[form-end]-->
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
    
$(document).ready(function(){
	// custom javascript | jquery codes
});

</script>
@endsection
