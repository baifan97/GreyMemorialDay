<?php
/**
 * 在指定日期将网站变成黑白来缅怀逝去的生命。
 * @package GreyMemorialDay
 * @author WhiteFan
 * @version 1.1.0
 * @link https://www.baifan97.cn/
 */
/* 激活插件方法 */
class GreyMemorialDay_Plugin implements Typecho_Plugin_Interface
{
    public static function activate(){
        Typecho_Plugin::factory('Widget_Archive')->header = array('GreyMemorialDay_Plugin', 'submit');
        return _t('插件已启用');
    }
     
    /* 禁用插件方法 */
    public static function deactivate(){
        return _t('插件已禁用');
    }
     
    /* 插件配置方法 */
    public static function config(Typecho_Widget_Helper_Form $form){


	    $date= new Typecho_Widget_Helper_Form_Element_Textarea('word', NULL,
		'04-04
12-13', _t('纪念日日期'), _t('填入形如12-13日期，一行一个'));
	    $form->addInput($date);

	    $color = new Typecho_Widget_Helper_Form_Element_Text('word2', NULL, NULL, _t('theme-color'),
		    _t('填入十六进制颜色值，不用带#'));
	    $form->addInput($color);

    }
     
    /* 个人用户的配置方法 */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
     
    /* 插件实现方法 */
    public static function submit(){
       $CustomDate=Typecho_Widget::widget('Widget_Options')->plugin('GreyMemorialDay')->word;
       $HexColor=Typecho_Widget::widget('Widget_Options')->plugin('GreyMemorialDay')->word2;
	    if ( strstr( $CustomDate, date( 'm-d', time() ) ) ):?>

		    <meta name="theme-color" content="757575">
		    <style type="text/css">
			    <!--
			    html {
				    filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
				    -webkit-filter: grayscale(100%);
			    }

			    -->
		    </style>
		    <?php change_meta() ?>

	    <?php elseif ( ! empty( $HexColor ) ): ?>
		    <meta name="theme-color" content="<?= $HexColor; ?>">
		    <?php change_meta($HexColor) ?>
	    <?php endif; ?>
	    <?php



    }

}
function change_meta($hex_color='757575') {
	?>
	<script>
        var meta = document.getElementsByTagName('meta');
        meta["theme-color"].setAttribute('content', '<?="#".$hex_color?>');
	</script>
	<?
}
