  <script type="text/javascript">
    jQuery(document).ready(function($){
      //if($('#socialshareprivacy').length > 0){
        $('#socialshareprivacy').socialSharePrivacy({
          services : {
            facebook : {
              'perma_option' : 'on'
            }, 
            twitter : {
              'status' : 'on'
            },
            gplus : {
            }
          },
          "css_path"  : "../../core/backend/admin/modules/share_buttons/socialshareprivacy/socialshareprivacy.css",
          "lang_path" : "../../core/backend/admin/modules/share_buttons/socialshareprivacy/lang/",
          "language"  : "de"
        });
      //}
    });
  </script>
<div id="socialshareprivacy"></div>