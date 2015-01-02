  <script type="text/javascript" src="../../core/libs/theme_engine/jquery/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="../../core/backend/admin/modules/share_buttons/socialshareprivacy/js/jquery.socialshareprivacy.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($){
      var divs = $("#socialshareprivacy div").length
      while (i < divs){
        if($('#socialshareprivacy').length > 0){
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
        }
        i++;
      }
    });
  </script>