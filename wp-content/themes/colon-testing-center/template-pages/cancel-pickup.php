<?php /* Template Name: cancel-pickup */ ?>

<?php 
  get_header();
?>
<?php
$cancel_first = get_field('cancel_pickup_first_section');
?>
    <div class="first-section-cancel">
        <div class="container">
            <div class="component-content">
            <?php echo $cancel_first['cancel_pickup_first_section_heading']; ?>
            <?php echo $cancel_first['cancel_pickup_first_section_text1']; ?>
            </div>
            <div data-sc-field-key="4816B84CA89C43CEA84AAFF6A47D6A83" class="paddingbelow col-md-6 col-sm-6 col-12">
                <input id="fxb_3063127b-9820-427d-8639-d07111b06e4b_Fields_Index_39ab50c7-e7c3-40c7-89b0-67be8995e7ae"
                    name="fxb.3063127b-9820-427d-8639-d07111b06e4b.Fields.Index" type="hidden"
                    value="39ab50c7-e7c3-40c7-89b0-67be8995e7ae"><input
                    id="fxb_3063127b-9820-427d-8639-d07111b06e4b_Fields_39ab50c7-e7c3-40c7-89b0-67be8995e7ae__ItemId"
                    name="fxb.3063127b-9820-427d-8639-d07111b06e4b.Fields[39ab50c7-e7c3-40c7-89b0-67be8995e7ae].ItemId"
                    type="hidden" value="39ab50c7-e7c3-40c7-89b0-67be8995e7ae"><label
                    for="fxb_3063127b-9820-427d-8639-d07111b06e4b_Fields_39ab50c7-e7c3-40c7-89b0-67be8995e7ae__Value"
                    class=""> <?php echo $cancel_first['cancel_pickup_first_section_text2']; ?></label>
                <input id="fxb_3063127b-9820-427d-8639-d07111b06e4b_Fields_39ab50c7-e7c3-40c7-89b0-67be8995e7ae__Value"
                    name="fxb.3063127b-9820-427d-8639-d07111b06e4b.Fields[39ab50c7-e7c3-40c7-89b0-67be8995e7ae].Value"
                    class="" type="text" value="" maxlength="255" placeholder="" data-sc-tracking="True"
                    data-sc-field-name="PickupRequestNumber" data-sc-field-key="0CA2145D2F484C468EB865D8CFC54431"
                    fdprocessedid="irn09f">
                <span class="field-validation-valid"
                    data-valmsg-for="fxb.3063127b-9820-427d-8639-d07111b06e4b.Fields[39ab50c7-e7c3-40c7-89b0-67be8995e7ae].Value"
                    data-valmsg-replace="true"></span>
            </div>
            <input value="Submit" type="submit" class="btncontactsubmit"
                name="fxb.3063127b-9820-427d-8639-d07111b06e4b.3daa7f8d-d484-41c2-b95a-3b5afbf8b137"
                data-sc-field-key="546A907D53484F88BACEFC9D03ACAA77">
        </div>
        <div class="second-section-cancel">
            <div class="container">
                <div class="component-content">
                    <div class="ups-info-cancel" style="text-align: center;">
                        <img alt="" width="50" class="upsLogo" src=" <?php echo $cancel_first['cancel_pickup_first_section_image']; ?>" style="width: 50px;">
                        <div class="appVersion-cancel"> <?php echo $cancel_first['cancel_pickup_first_section_image_text']; ?></div>
                    </div>
                </div>

            </div>
        </div>
    
    </div>

    <?php
get_footer();
?>