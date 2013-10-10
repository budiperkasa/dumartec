function prod_spec(i){
   document.getElementById('spec1').className = 'spec_2';
   document.getElementById('spec2').className = 'spec_2';
   document.getElementById('spec3').className = 'spec_2';
   document.getElementById(i).className = 'spec_3';
   document.getElementById('spec1x').className = 'spec_6';
   document.getElementById('spec2x').className = 'spec_6';
   document.getElementById('spec3x').className = 'spec_6';
   document.getElementById(i+'x').className = 'spec_5';
}

function pss_search_form(i,ii){
   var theForm = document.getElementById(ii);
   if(!theForm.value){
      if(i==2){
         theForm.className = 'search_2';
      }else{
         theForm.className = 'search_1';
      }
   }else{
      theForm.className = 'search_2';
   }
}

function pss_submit_form(i){
   document.getElementById(i).submit;
}