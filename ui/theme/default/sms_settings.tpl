{extends file="$layouts_admin"}



{block name="content"}

    <div class="mx-auto" style="max-width: 600px; width: 100%">
        <div class="panel">
            <div class="panel-hdr">
                <h2>{$_L['Settings']}</h2>
            </div>

            <div class="panel-container">
                <div class="panel-content">

                    <form id="spForm" method="post" action="">

                        <div class="mb-3">
                            <label for="sms_api_handler">{$_L['API Handler']}</label>
                            <select class="form-select" id="sms_api_handler" name="sms_api_handler">
                                <option value="Nexmo" {if $config['sms_api_handler'] eq 'Nexmo'}selected{/if}>Nexmo</option>
                                <option value="Twilio" {if $config['sms_api_handler'] eq 'Twilio'}selected{/if}>Twilio</option>

                                <option value="Routesms" {if $config['sms_api_handler'] eq 'Routesms'}selected{/if}>Routesms</option>
                                <option value="Infobip" {if $config['sms_api_handler'] eq 'Infobip'}selected{/if}>Infobip</option>
                                <option value="SMSCountry" {if $config['sms_api_handler'] eq 'SMSCountry'}selected{/if}>SMSCountry</option>

                                <option value="Alanood" {if $config['sms_api_handler'] eq 'Alanood'}selected{/if}>Alanood [UAE]</option>

                                <option value="Textlocal_in" {if $config['sms_api_handler'] eq 'Textlocal_in'}selected{/if}>Textlocal India</option>

                                <option value="Msg91" {if $config['sms_api_handler'] eq 'Msg91'}selected{/if}>Msg91</option>

                                <option value="Msg91Local" {if $config['sms_api_handler'] eq 'Msg91Local'}selected{/if}>Msg91 Local</option>

                                <option value="adn_bd" {if $config['sms_api_handler'] eq 'adn_bd'}selected{/if}>ADN(BD)</option>

                                <option value="Custom" {if $config['sms_api_handler'] eq 'Custom'}selected{/if}>{$_L['Custom']}</option>
                            </select>
                        </div>


                        <div class="mb-3" id="block_sms_sender_name">
                            <label for="sms_sender_name">{$_L['Sender ID']}</label>
                            <input class="form-control" id="sms_sender_name" name="sms_sender_name" value="{$config['sms_sender_name']}">
                        </div>


                        <div class="mb-3" id="block_sms_req_url">
                            <label for="sms_req_url">{$_L['HTTP API URL']}</label>
                            <input class="form-control" id="sms_req_url" name="sms_req_url" value="{$config['sms_req_url']}">
                        </div>

                        <div class="mb-3" id="block_sms_request_method">
                            <label for="sms_request_method">{$_L['HTTP Request Method']}</label>

                            <select class="form-select" id="sms_request_method" name="sms_request_method">
                                <option value="GET" {if $config['sms_request_method'] eq 'GET'}selected{/if}>GET</option>
                                <option value="POST" {if $config['sms_request_method'] eq 'POST'}selected{/if}>POST</option>
                            </select>
                        </div>

                        <div class="mb-3" id="block_sms_http_params">
                            <label for="sms_http_params">{$_L['HTTP Parameters']}</label>
                            <textarea class="form-control" name="sms_http_params" id="sms_http_params" rows="4">{$config['sms_http_params']}</textarea>
                            <span>You can use this format {literal} to=={{to}},from=={{from}},message=={{message}}{/literal} as placeholder.</span>
                        </div>

                        <div class="mb-3" id="block_sms_auth_username">
                            <label for="sms_auth_username" id="labelUsername">SID</label>
                            <input class="form-control" id="sms_auth_username" name="sms_auth_username" value="{$config['sms_auth_username']}">
                        </div>

                        <div class="mb-3" id="block_sms_auth_password">
                            <label for="sms_auth_password" id="labelPassword">{$_L['Token']}</label>
                            <input class="form-control" id="sms_auth_password" name="sms_auth_password" value="{$config['sms_auth_password']}">
                        </div>


                        <div class="mb-3">
                            <button type="submit" id="saveSmsCredentials" class="btn btn-primary">{$_L['Save']}</button>
                        </div>



                    </form>

                </div>
            </div>

        </div>
    </div>

{/block}

{block name="script"}




    <script>



        $(function () {




            var $block_sms_req_url = $("#block_sms_req_url");
            var $block_sms_request_method = $("#block_sms_request_method");

            var $block_sms_sender_name = $("#block_sms_sender_name");

            var $block_sms_auth_username = $("#block_sms_auth_username");
            var $block_sms_auth_password = $("#block_sms_auth_password");

            var $block_sms_http_params = $("#block_sms_http_params");

            var $label_username = $('#labelUsername');
            var $label_password = $('#labelPassword');



            function customParams(status) {



                if(status === 'show'){

                    $block_sms_sender_name.hide();
                    $block_sms_auth_username.hide();
                    $block_sms_auth_password.hide();



                    $block_sms_req_url.show();
                    $block_sms_request_method.show();
                    $block_sms_http_params.show();

                }
                else{

                    $block_sms_sender_name.show();
                    $block_sms_auth_username.show();
                    $block_sms_auth_password.show();

                    $block_sms_req_url.hide();
                    $block_sms_request_method.hide();
                    $block_sms_http_params.hide();

                }

            }


            {if ($config['sms_api_handler']) neq 'Custom'}
            customParams('hide');
            {else}
            customParams('show');
            {/if}

            var $save = $("#saveSmsCredentials");

            $save.on('click', function (e) {
                e.preventDefault();

                $save.prop('disabled',true);

                $.post(base_url + 'sms/init/save-sms-credentials/', $('#spForm').serialize()).done(function (data) {

                    toastr.success(data);
                    $save.prop('disabled',false);


                });

            });

            var $sms_api_handler = $("#sms_api_handler");

            function prepareDriver() {
                var $sms_api_handler_val = $sms_api_handler.val();

                switch ($sms_api_handler_val) {
                    case 'Nexmo':

                        customParams('hide');

                        $label_username.html("API Key");
                        $label_password.html("API Secret");


                        break;


                    case 'Twilio':

                        customParams('hide');

                        $label_username.html("SID");
                        $label_password.html("Token");

                        break;

                    case 'Routesms':

                        customParams('hide');
                        $block_sms_req_url.show();

                        $label_username.html("Username");
                        $label_password.html("Password");

                        break;

                    case 'Alanood':

                        customParams('hide');
                        $block_sms_req_url.show();

                        $label_username.html("Username");
                        $label_password.html("Password");

                        break;


                    case 'Msg91':
                    case 'Msg91Local':


                        customParams('hide');

                        $label_username.html("Template ID");
                        $label_password.html("Authkey");

                        break;



                    case 'Textlocal_in':

                        customParams('hide');
                     //   $block_sms_req_url.show();

                        $label_username.html("Username");
                        $label_password.html("Hash / Password");

                        break;

                    case 'Custom':

                        $label_username.html("Username");
                        $label_password.html("Password");

                        customParams('show');



                        break;


                    case 'Infobip':

                        customParams('hide');

                        $label_username.html("Username");
                        $label_password.html("Password");
                        $block_sms_req_url.show();

                        break;

                        case 'SMSCountry':
                            customParams('hide');

                            $label_username.html("Auth Key");
                            $label_password.html("Auth Token");

                            break;

                    case 'adn_bd':

                        customParams('hide');
                        $label_username.html("API Key");
                        $label_password.html("API Secret");

                        break;



                }
            }

            prepareDriver();

            $sms_api_handler.on('change',function () {

                prepareDriver();


            });



        })
    </script>

{/block}
