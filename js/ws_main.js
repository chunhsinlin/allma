// JavaScript Document
//只能輸入數字跟刪除鍵
function CheckNum(e){
    var key = window.event ? e.keyCode : e.which;
	var keychar = String.fromCharCode(key);
	reg = /\d/;
	return reg.test(keychar);
}

// 開啟檔案管理視窗
function upload_window(action_file,return_id){   
    var new_width  = 720;
    var new_height = 500;
    //var scr_width  = screen.availWidth;
    //var scr_height = screen.availHeight;
    //var old_width  = scr_width - new_width;
    //var old_height = scr_height;
    //var space = 0 - window.screenLeft ;
    //window.resizeTo(old_width,old_height);
    //window.moveBy(space,0);
    window.open(action_file + '&return_id=' + return_id ,'','width='+new_width+',height='+new_height+',scrollbars=yes,status=yes');
}

function resize_opener(){
    var scr_width  = screen.availWidth;
    var scr_height = screen.availHeight;
    window.opener.resizeTo(scr_width,scr_height);
}

function ConfirmMSG(msg,url){
    var conf = confirm(msg);
    if(conf){
        location.href= url;
        return true;
    }else{
        return false;
    }
}
function MM_openBrWindow(theURL,winName,features) { //v2.0
    window.open(theURL,winName,features);
}
function popinquiry(txt){
    var url="cart.php?func=s_inquiry&p_id=" + txt;
    wo=window.open(url,"Inquiry","toolbar=no,top=200,left=400,width=600,height=420");
    wo.focus();
}
//加入我的最愛
function addBookmarkForBrowser(sTitle, sUrl) {
// Returns the version of Internet Explorer or a -1
// (indicating the use of another browser).
  var rv = -1; // Return value assumes failure.
  if(navigator.appName == 'Microsoft Internet Explorer') {
    var ua = navigator.userAgent;
    var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
    if (re.exec(ua) != null) rv = parseFloat( RegExp.$1 );
    if( rv > -1 ) {
      if ( rv >= 8.0 ) {
        //for ie8 
        if(window.external) {
            addBookmarkForBrowser = function(sTitle, sUrl) {
                window.external.AddToFavoritesBar(sUrl, sTitle);
            }
        }
      }else{
        //for ie7,6,5
        if(window.external) {
            addBookmarkForBrowser = function(sTitle, sUrl) {
                window.external.AddFavorite(sUrl, sTitle);
            }
        }
      }
    }
  }else{
      //for firefox
      if(window.sidebar && window.sidebar.addPanel) {
          addBookmarkForBrowser = function(sTitle, sUrl) {
              window.sidebar.addPanel(sTitle, sUrl, "");
          }
      }
  }
  return addBookmarkForBrowser(sTitle, sUrl);
}
/* 勾選詢價車時之檢查事項 */
function CheckProducts_eng(form) {  
    onchecked=0;
    if (form.total_box.value ==1 && form['p_id[]'].checked==true) {
        onchecked++;     
    } else if(form.total_box.value > 1) { 

        for (var i=0;i<form.total_box.value;i++) {
            var e = form['p_id[]'][i];
            if (e.checked==true) { 
                onchecked++;
            }   
        }
    }  
    if(onchecked==0) {
        alert("Please check the product!!")
        return false;
    }else{
        form.submit();
        return true;    
    }
}  
function CheckProducts_cht(form) {  
    onchecked=0;
    if (form.total_box.value ==1 && form['p_id[]'].checked==true) {
        onchecked++;     
    } else if(form.total_box.value > 1) { 
        for (var i=0;i<form.total_box.value;i++) {
            var e = form['p_id[]'][i];
            if (e.checked==true) { 
                onchecked++;
            }   
        }
    }  
    if(onchecked==0) {
        alert("請勾選產品!!")
        return false;
    }else{
        form.submit();
        return true;    
    }
}  
/* 詢價車&購物車 CONTINUE更新數量 */  
function cart_continue(obj,url) {
  obj.submit();
  location.href=url;
}
/* 詢價車&購物車 FINISH更新數量 */
function cart_finish(obj) {
  obj.submit();
  location.href='cart.php?func=c_finish';    
}