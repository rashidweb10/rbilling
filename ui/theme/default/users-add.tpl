{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>{$_L['Add New User']}</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="{$_url}settings/users-post">
                            <div class="mb-3">
                                <label for="username">{$_L['Username']} ({$_L['Email']})</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>

                            <div class="mb-3">
                                <label for="fullname">{$_L['Full Name']}</label>
                                <input type="text" class="form-control" id="fullname" name="fullname">
                            </div>

                            <div class="mb-3">
                                <label for="phone">{$_L['Phone']}</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>

                            <div class="mb-3">
                                <label for="phone">{$_L['Alternative Email']}</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>

                            <div class="mb-3">
                                <label for="phone">{$_L['Mobile Phone']}</label>
                                <input type="text" class="form-control" id="mobile_phone" name="mobile_phone">
                            </div>

                            <div class="mb-3">
                                {*<label for="user_type">{$_L['User']} {$_L['Type']}</label>*}
                                {*<select name="user_type" id="user_type" class="form-control">*}
                                {*<option value="Admin">{$_L['Full Administrator']}</option>*}
                                {*<option value="Employee">{$_L['Employee']}</option>*}

                                {*</select>*}
                                {*<span class="help-block">{$_L['user_type_help']}</span>*}

                                <label>{$_L['User']} {$_L['Type']}</label>

                                <div class="i-checks"><label> <input type="radio" value="Admin" name="user_type" checked> <i></i> {$_L['Full Administrator']} </label></div>

                                {foreach $roles as $role}
                                    <div class="i-checks"><label> <input type="radio" value="{$role['id']}" name="user_type"> <i></i> {$role['rname']} </label></div>
                                {/foreach}



                            </div>




                            <div class="mb-3">
                                <label for="password">{$_L['Password']}</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="mb-3">
                                <label for="cpassword">{$_L['Confirm Password']}</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword">
                            </div>


                            {*                        <div class="hr-line-dashed"></div>*}

                            {*                        <div class="mb-3">*}
                            {*                            <label>{$_L['Job title']}</label>*}
                            {*                            <input class="form-control" name="job_title" {if $employee} value="{$employee->job_title}" {/if}>*}
                            {*                        </div>*}

                            {*                        <div class="mb-3">*}
                            {*                            <label>{$_L['Address']}</label>*}
                            {*                            <input class="form-control" name="address" {if $employee} value="{$employee->address_line_1}" {/if}>*}
                            {*                        </div>*}

                            {*                        <div class="mb-3">*}
                            {*                            <label>{$_L['City']}</label>*}
                            {*                            <input class="form-control" name="city" {if $employee} value="{$employee->city}" {/if}>*}
                            {*                        </div>*}

                            {*                        <div class="row">*}
                            {*                            <div class="col-md-6">*}
                            {*                                <div class="mb-3">*}
                            {*                                    <label>{$_L['State Region']}</label>*}
                            {*                                    <input class="form-control" name="state" {if $employee} value="{$employee->state}" {/if}>*}
                            {*                                </div>*}
                            {*                            </div>*}
                            {*                            <div class="col-md-6">*}
                            {*                                <div class="mb-3">*}
                            {*                                    <label>{$_L['ZIP Postal Code']}</label>*}
                            {*                                    <input class="form-control" name="zip" {if $employee} value="{$employee->zip}" {/if}>*}
                            {*                                </div>*}
                            {*                            </div>*}
                            {*                        </div>*}

                            {*                        <div class="mb-3">*}
                            {*                            <label>{$_L['Country']}</label>*}
                            {*                            <select class="form-select" name="country">*}
                            {*                                {if $employee}*}
                            {*                                    {Countries::all($employee->country)}*}
                            {*                                {else}*}
                            {*                                    {Countries::all($config['country'])}*}
                            {*                                {/if}*}
                            {*                            </select>*}
                            {*                        </div>*}

                            {*                        <div class="mb-3">*}
                            {*                            <label>{$_L['Date Joined']}</label>*}
                            {*                            <input class="form-control" name="date_hired" datepicker*}
                            {*                                   data-date-format="yyyy-mm-dd" data-auto-close="true"  {if $employee} value="{$employee->date_hired}" {else} value="{date('Y-m-d')}" {/if}>*}
                            {*                        </div>*}

                            {*                        <div class="mb-3">*}
                            {*                            <label>{$_L['Pay frequency']}</label>*}
                            {*                            <select class="form-select" name="pay_frequency">*}
                            {*                                <option value="Monthly" {if $employee && $employee->pay_frequency == 'Monthly'} selected{/if}>{$_L['Monthly']}</option>*}
                            {*                                <option value="Hourly" {if $employee && $employee->pay_frequency == 'Hourly'} selected{/if}>{$_L['Hourly']}</option>*}
                            {*                            </select>*}
                            {*                        </div>*}


                            {*                        <div class="mb-3">*}
                            {*                            <label>{$_L['Amount']}</label>*}
                            {*                            <input class="form-control amount" name="amount" {if $employee} value="{$employee->amount}" {/if}>*}
                            {*                        </div>*}


                            {*                        <div class="mb-3">*}
                            {*                            <label>{$_L['Summary']}</label>*}
                            {*                            <textarea class="form-control" rows="10" name="summary">{if $employee}{$employee->summary}{/if}</textarea>*}
                            {*                        </div>*}

                            {*                        <div class="mb-3">*}
                            {*                            <label>{$_L['Facebook Profile']}</label>*}
                            {*                            <input class="form-control" type="text" name="facebook" {if $employee} value="{$employee->facebook}" {/if}>*}
                            {*                        </div>*}

                            {*                        <div class="mb-3">*}
                            {*                            <label>{$_L['Linkedin Profile']}</label>*}
                            {*                            <input class="form-control" type="text" name="linkedin" {if $employee} value="{$employee->linkedin}" {/if}>*}
                            {*                        </div>*}

                            {*                        <div class="mb-3">*}
                            {*                            <label>{$_L['Twitter']}</label>*}
                            {*                            <input class="form-control" type="text" name="twitter" {if $employee} value="{$employee->linkedin}" {/if}>*}
                            {*                        </div>*}


                            <button type="submit" class="btn btn-primary">{$_L['Submit']}</button>
                            {$_L['Or']} <a href="{$_url}settings/users">{$_L['Cancel']}</a>
                        </form>
                    </div>



                </div>
            </div>



        </div>

{*        <div class="col-md-6">*}
{*            <div class="panel">*}
{*                <div class="panel-body">*}
{*                    <h3>{$_L['Departments']}</h3>*}
{*                    <div class="hr-line-dashed"></div>*}

{*                    {foreach $departments as $department}*}

{*                        <div class="checkbox" style="margin-bottom: 20px;">*}
{*                            <div class="i-checks"><label> <input name="sales_edit" class="ib_checkbox" type="checkbox" value="yes"> <span style="margin-left: 15px;">{$department->dname}</span></label></div>*}
{*                        </div>*}

{*                    {/foreach}*}


{*                </div>*}
{*            </div>*}
{*        </div>*}



    </div>



{/block}
