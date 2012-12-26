<?php
//error_reporting(15);
include_once("libs/libs-sysconfig.php");
$aboutus = new ABOUTUS;
class ABOUTUS{
    function ABOUTUS(){
        global $db,$cms_cfg,$tpl,$main;
        //show page
        $this->ws_tpl_file = "templates/ws-aboutus-tpl.html";
        $this->ws_load_tp($this->ws_tpl_file);
        $this->ws_seo=($cms_cfg["ws_module"]["ws_seo"])?1:0;
        $this->aboutus_list();
        //page view record --ph_type,ph_type_id,m_id
        $main->pageview_history("au",$_REQUEST["au_id"],$_SESSION[$cms_cfg['sess_cookie_name']]['MEMBER_ID']);
        $tpl->printToScreen();
    }
    //載入對應的樣板
    function ws_load_tp($ws_tpl_file){
        global $tpl,$cms_cfg,$db,$ws_array,$TPLMSG,$main;
        $tpl = new TemplatePower( $cms_cfg['base_all_tpl'] );
        $tpl->assignInclude( "HEADER", $cms_cfg['base_header_tpl']); //頭檔title,meta,js,css
        $tpl->assignInclude( "LEFT", $cms_cfg['base_left_normal_tpl']); //左方一般表單
        $tpl->assignInclude( "MAIN", $ws_tpl_file); //主功能顯示區
        $tpl->assignInclude( "AD_H", "templates/ws-fn-ad-h-tpl.html"); //橫式廣告模板
        $tpl->assignInclude( "AD_V", "templates/ws-fn-ad-v-tpl.html"); //直式廣告模板
        $tpl->prepare();
        $tpl->assignGlobal( "TAG_MAIN_FUNC" , $TPLMSG["ABOUT_US"]);
        $tpl->assignGlobal( "TAG_LAYER" , $TPLMSG["ABOUT_US"]);
        $tpl->assignGlobal( "TAG_CATE_TITLE", $ws_array["left"]["aboutus"]);//左方menu title
        $tpl->assignGlobal( "TAG_ABOUTUS_CURRENT" , "class='current'"); //上方menu current
        $tpl->assignGlobal( "TAG_MAIN" , $ws_array["main"]["aboutus"]); //此頁面對應的flash及圖檔名稱
        $tpl->assignGlobal( "TAG_MAIN_CLASS" , "main-aboutus"); //主要顯示區域的css設定
        //$main->header_footer("aboutus");
        $main->google_code(); //google analystics code , google sitemap code
        $main->login_zone();
        if($cms_cfg["ws_module"]["ws_left_main_au"]==0){
            $main->left_fix_cate_list();
        }
    }
    //前台關於我們--列表================================================================
    function aboutus_list(){
        global $db,$tpl,$cms_cfg,$TPLMSG,$main;
        //前台關於我們列表
        $sql="select * from ".$cms_cfg['tb_prefix']."_aboutus  where au_status='1' order by au_sort ".$cms_cfg['sort_pos'].",au_modifydate desc";
        $selectrs = $db->query($sql);
        $rsnum    = $db->numRows($selectrs);
        if(empty($_REQUEST["au_id"]) && empty($_REQUEST["f"])){
           $sel_top_record=true;
        }
        while ( $row = $db->fetch_array($selectrs,1) ) {
            $i++;
            if($cms_cfg["ws_module"]["ws_left_main_au"]==1){
                if($this->ws_seo==1 ){
                    $cate_link=$cms_cfg["base_root"]."aboutus/".$row["au_seo_filename"].".html";
                    $ext="htm";
                }else{
                    $cate_link=$cms_cfg["base_root"]."aboutus.php?au_id=".$row["au_id"];
                    $ext="php";
                }
                $tpl->newBlock( "LEFT_CATE_LIST" );
                $tpl->assign( array( "VALUE_CATE_NAME" => $row["au_subject"],
                                     "VALUE_CATE_LINK"  => ($i==1)?$cms_cfg["base_root"]."aboutus.".$ext:$cate_link,
                ));
            }
            if(($i==1 && $sel_top_record) || ($_REQUEST["au_id"]==$row["au_id"]) || ($this->ws_seo && ($_REQUEST["f"]==$row["au_seo_filename"]))){
                 $tpl->assign("TAG_CURRENT_CLASS", "class=\"current\"");
                if($this->ws_seo){
                    $meta_array=array("meta_title"=>$row["au_seo_title"],
                                      "meta_keyword"=>$row["au_seo_keyword"],
                                      "meta_description"=>$row["au_seo_description"],
                                      "seo_h1"=>(trim($row["au_seo_h1"])=="")?$row["au_subject"]:$row["au_seo_h1"],
                    );
                    $main->header_footer($meta_array);
                }else{
                    $main->header_footer("aboutus",$TPLMSG["ABOUT_US"]);
                }
                //$tpl->assignGlobal( "TAG_SUB_FUNC"  , "--&nbsp;&nbsp;".$row["au_subject"]);
                $row["au_content"]=preg_replace("/src=\"([^>]+)upload_files/","src=\"".$cms_cfg["file_root"]."upload_files",$row["au_content"]);
                //$row["au_content"]=preg_replace("/..\/upload_files/",$cms_cfg["file_root"]."upload_files",$row["au_content"]);
                $tpl->assignGlobal( "TAG_LAYER" , $row["au_subject"]);
                $tpl->assignGlobal( "VALUE_AU_CONTENT" , $row["au_content"]);
            }
        }
    }
}
?>