{extends file="$layouts_admin"}

{block name="content"}

    <div class="row">
        <div class="panel">
            <div class="panel-body">

                <h3>New Delivery Challan</h3>

                <div class="hr-line-dashed"></div>

                <form>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>{$_L['Customer']}</label>
                                <select class="form-select">
                                    <option>None</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Number #</label>
                                <input class="form-control" value="DC-000{predictNextRow('delivery_notes')}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label>Reference</label>
                                <input class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Date</label>
                                <input class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive m-t">

                                <table class="table table-bordered invoice-table" id="invoice_items">
                                    <thead>
                                    <tr>

                                        <th width="30%">{$_L['Item Name']}</th>
                                        <th>Height</th>
                                        <th>Width</th>
                                        <th>{if $config['show_quantity_as'] eq ''}{$_L['Qty']}{else}{$config['show_quantity_as']}{/if}</th>
                                        <th>{$_L['Price']}</th>



                                        <th>{$_L['Total']}</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <textarea class="form-control item_name" name="desc[]" rows="3"></textarea>
                                            <input type="hidden" name="item_code[]" value=""></td>
                                        <td><input type="text" class="form-control qty" value="" name="height[]"></td>
                                        <td><input type="text" class="form-control qty" value="" name="width[]"></td>
                                        <td><input type="text" class="form-control qty" value="" name="qty[]"></td>
                                        <td><input type="text" class="form-control item_price" name="amount[]" value="">
                                        </td>


                                        <td class="ltotal"><input type="text" class="form-control lvtotal" readonly=""
                                                                  value=""></td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>



                            <button type="button" class="btn btn-primary" id="blank-add"><i
                                        class="fal fa-plus"></i> {$_L['Add blank Line']}</button>
                            <button type="button" class="btn btn-primary" id="item-add"><i
                                        class="fal fa-search"></i> {$_L['Add Product OR Service']}</button>
                            <button type="button" class="btn btn-danger" id="item-remove"><i
                                        class="fal fa-minus-circle"></i> {$_L['Delete']}</button>

                            <div class="hr-line-dashed"></div>

                            <table class="table invoice-total">

                                <tbody>



                                <tr>
                                    <td><strong>{$_L['TOTAL']} :</strong></td>
                                    <td id="total" class="amount">0.00
                                    </td>
                                </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

{/block}

{block name=script}

    <script>

    </script>


{/block}
