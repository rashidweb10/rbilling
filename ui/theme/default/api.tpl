{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">
        <div class="col-lg-12">

            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">
                        <label for="exampleInputEmail1">{$_L['Application URL']}:</label>
                        <input type="text" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="{$api_url}">
                    </div>

                </div>


            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>{$_L['Add API Access']}</h2>

                </div>

                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <form class="form-horizontal" method="post" id="tform" role="form" action="{$_url}settings/api_post/">



                            <div class="mb-3">
                                <label for="label" class="col-sm-2 control-label">{$_L['Label']}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="label" name="label">
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" id="submit" class="btn btn-primary"> {$_L['Submit']}</button>
                                </div>
                            </div>
                        </form>
                    </div>




                </div>
            </div>
        </div>



    </div>

    <div class="row">


        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h5>{$_L['API Access']}</h5>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <table class="table table-bordered sys_table">
                            <thead>
                            <tr>
                                <th width="20%">{$_L['Label']}</th>
                                <th width="60%">{$_L['API Key']}</th>
                                <th>{$_L['Manage']}</th>

                            </tr>
                            </thead>
                            <tbody>

                            {foreach $d as $ds}
                                <tr>
                                    <td> {$ds['label']} </td>
                                    <td>
                                        <div class="mb-3">
                                            <input class="form-control input-sm" type="text" onClick="this.setSelectionRange(0, this.value.length)" value="{$ds['apikey']}">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{$_url}settings/api_regen/{$ds['id']}/" class="btn btn-success"><i class="fal fa-refresh"></i> {$_L['Re Generate Key']}</a>
                                            <a href="{$_url}settings/api_delete/{$ds['id']}/" class="btn btn-danger"><i class="fal fa-trash-alt"></i> {$_L['Delete']}</a>
                                        </div>
                                    </td>
                                </tr>

                                {if !empty($invoice)}
                                    <tr>
                                        <td colspan="3">
                                            <div class="mb-2">
                                                <h4>{__('Examples')}</h4>
                                                <div class="mb-2">
                                                    <strong>{__('Retrieve an Invoice')}</strong>
                                                </div>
                                                <div class="mb-2">
                                                    GET: <a href="{BASE_URL}api/v3/{$ds['apikey']}/invoice/{$invoice->id}" target="_blank"><code>{BASE_URL}api/v3/{$ds['apikey']}/invoice/{$invoice->id}</code></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {/if}

                                {foreachelse}
                                <tr>

                                    <td colspan="3">{$_L['No results found']} </td>

                                </tr>
                            {/foreach}

                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>

    </div>

    <input type="hidden" id="_lan_no_results_found" value="{$_L['No results found']}">
{/block}
