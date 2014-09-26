
<!--Script de carregamento na página colocar logo abaixo no body-->
<script> 
  window . fbAsyncInit =  function ()  { 
    FB . init ({ 
      appId       :  '769030736495404' , 
      xfbml       :  true , 
      version     :  'v2.1' 
    }); 
  };

  ( function ( d , s , id ){ 
     var js , fjs = d . getElementsByTagName ( s )[ 0 ]; 
     if  ( d . getElementById ( id ))  { return ;} 
     js = d . createElement ( s ); js . id = id ; 
     js . src =  "//connect.facebook.net/en_US/sdk.js" ; 
     fjs . parentNode . insertBefore ( js , fjs ); 
   }( document ,  'script' ,  'facebook-jssdk' )); 
</script>

