function admin_focus(i,ii){
   var theForm1 = document.getElementById(i);
   var theForm2 = document.getElementById(ii);
   if(theForm1.value){
      theForm2.focus();
   }else{
      theForm1.focus();
   }
}

function pss_shownHide_1(i,ii){
   var theDiv = document.getElementById(i);
   if(ii=="open"){
      theDiv.style.display = "block";
   }else{
      theDiv.style.display = "none";
   }
}

function pss_shownHide_2(i){
   var theDiv = document.getElementById(i);
   theDiv.style.display = "block";
}

function pss_deleteAll(url){
   var total = 0;
   var allList = del_form.del_list.length;
   for(var i=0;i<=allList-1;i++){
      if(eval('del_form.del_list['+i+'].checked')==true){
         total += 1;
      }
   }
   if(total>0){
      pss_deleteAll_ok(url);
   }
}

function pss_deleteAll_ok(url){
   var konfirmasi = confirm("Are you sure you want to delete this ?!\n\nIf you want to continue please click the following\n\"Ok\" button, or \"Cancel\" button to abort\n\n** This operation cannot be undone! **");
   if(konfirmasi){
      del_form.submit();
   }else{
      var total = 0;
      var allList = del_form.del_list.length;
      for(var i=0;i<=allList-1;i++){
         del_form.del_list[i].checked = false;
      }
   }
}

function polling_list_1(i,ii,iii,iv){
   var theFormat = document.getElementById(i);
   var parseFormat = theFormat.value-0;
   var theDiv = document.getElementById(ii);
   var theLoop = "";
   var theStar = "";
   var theValue = iv.split("x|x|x");
   if(parseInt(parseFormat)!=theFormat.value-0 || theFormat.value<iii){
      theFormat.value = iii;
   }else{
      theFormat.value = theFormat.value;
   }
   theLoop += "<table border='0' cellpadding='5' cellspacing='0' width='100%' class='tbl_4'>";
   for(a=1;a<=theFormat.value;a++){
      var theValueX = theValue[a-1];
      if(theValueX){
         theValueX = theValue[a-1];
      }else{
         theValueX = "";
      }
      if(a==1){
         theStar = "*";
      }else{
         theStar = "";
      }
      theLoop += "<tr>";
      theLoop += "<td width='20%' valign='top' class='tbl_2 tbl_3 padding_1' align='right'>"+theStar+"Poll #"+a+"</td>";
      theLoop += "<td width='5%'  valign='top' class='tbl_2 tbl_3 padding_1' align='center'>:</td>";
      theLoop += "<td width='75%' valign='top' class='tbl_2 tbl_3 padding_1' align='left'>";
      theLoop += "<input type='text' id='pollx"+a+"' value='"+theValueX+"' size='25'>";
      theLoop += "</td>";
      theLoop += "</tr>";
   }
   theLoop += "</table>";
   theDiv.innerHTML = theLoop;
}

function polling_textarea(i,ii){
   var theFormat = document.getElementById(i);
   var theTarget = document.getElementById(ii);
   var theLoop = "";
   for(a=1;a<=theFormat.value;a++){
      theLoop += document.getElementById('pollx'+a).value+"x|x|x";
   }
   theTarget.value = theLoop;
}

function polling_disable(i,ii,iii,iv){
   var theFormat = document.getElementById(i);
   var theReset = document.getElementById(iii);
   document.getElementById('poll_val').value = document.getElementById('format').value;
   if(ii=="1"){
      theFormat.disabled = true;
   }else{
      theFormat.disabled = false;
   }
   theReset.style.display = iv;
}

function ShowHideDiv(i,ii,iii){
   var exp = new Array();
   var pos = i-1;
   exp1 = ii.split("|");
   exp2 = iii.split("|");
   for(a=0;a<=150;a++){
      if(exp1[a]){
         document.getElementById(exp1[a]).style.display = "none";
      }
   }
   for(b=0;b<=150;b++){
      if(exp2[b]){
         document.getElementById(exp2[b]).className = "cursor_1";
      }
   }
   if(iii){
      document.getElementById(exp2[pos]).className = "bold";
   }
   document.getElementById(exp1[pos]).style.display = "block";
}


