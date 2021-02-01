<div id="template-screen">

    <div id="template-screen-header">
        
        <h3>Select a Template To Create New Form</h3>
    
    </div>

    <div id="list-of-templates">
    
        <ul style="">

            <li>
                
                <p>
                
                    <strong>Contact Form #1</strong>
                
                </p>

                <a href="" data-formid="1">

                    <img src="<?php echo smuzform_url( "/exts/templates/imgs/contact-form-1.png" ) ?>"  />

                </a>
                
            </li>

            <li>
                
                <p>
                
                    <strong>Survey Form #1</strong>
                
                </p>

                <a href="" data-formid="2">

                    <img src="<?php echo smuzform_url( "/exts/templates/imgs/survey-form-1.png" ) ?>"  />

                </a>
                
            </li>

            <li>
                
                <p>
                
                    <strong>Question Form #1</strong>
                
                </p>

                <a href="" data-formid="3">

                    <img src="<?php echo smuzform_url( "/exts/templates/imgs/question-form-1.png" ) ?>"  />

                </a>
                
            </li>

            <li>
                
                <p>
                
                    <strong>Feedback Form #1</strong>
                
                </p>

                <a href="" data-formid="4">

                    <img src="<?php echo smuzform_url( "/exts/templates/imgs/feedback-form-1.png" ) ?>" />

                </a>
                
            </li>
            
        </ul>
    
    </div>
    
    <div id="template-screen-footer">
        
        <h3>or Create a blank form</h3>
        
        <input id="wp_smf_add_new_button" class="wp_smf_add_new_button button button-primary" type="button" value="Add New" onclick="window.location = '<?php echo admin_url('admin.php?page=smuz-forms&new_post=1') ?>'">
    
    </div>

</div>
<style>

#list-of-templates ul {
	display: flex;
  	flex-direction: row;
  	flex-wrap: wrap;
}

#list-of-templates ul li{
	
	margin-left: 25px;
	
}

#list-of-templates ul li img{
	width: 300px;
	height: auto;
    box-shadow:  2px 1px 7px 3px #88888880;
    border: 1px solid #000;
}
#list-of-templates ul li p strong {
    font-size: 16px;
}

#template-screen-header {
    box-shadow:  2px 1px 7px 3px #88888880;
    width: 90%;
}

#template-screen-header h3 { 
    font-size: 24px;
    text-align: center;
    padding: 25px;
    
}

#template-screen-footer {
   text-align: center;   
   width: 90%;
}

#template-screen-footer h3 { 
    font-size: 24px;
    padding: 15px;
}

</style>

<script>

    $ = jQuery;

    $(document).ready( function() {

        $("#list-of-templates ul li a").click( function(e) {
            e.preventDefault();
            
            var id = $(this).data("formid");

            var url = ajaxurl + "?action=smuzcreatetemplate&id=" + parseInt( id );

            var redirectUrl = "<?php echo admin_url( 'admin.php?page=smuz-forms' ) ?>";

            $.getJSON( url, function( resp ) {

                window.location = redirectUrl + "&form_id=" + parseInt( resp.formId );

            } );
            

        } )
    } );
</script>