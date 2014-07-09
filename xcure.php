<?php
/**
 * Plugin Name: Name Of The Plugin
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Protect your site against suspicious requests.
 * Version: 1.0
 * Author: Jimmy Andrade
 * Author URI: http://developer.jimmyandrade.com/
 * License: GPL2
 */

defined( 'ABSPATH' ) or die( 'Access denied' );

class XCure {
	
	public static function redirect( $to = '' ) {
		wp_redirect( home_url( $to ) );
		exit;
	}
	
	public static function emulate_forbidden( $msg = '' ) {
		header( 'HTTP/1.0 403 Forbidden' );
		echo $msg;
		exit;
	}
	
	public static function template_redirect() {
		$forbidden_get_parameters = array(
				'388' => null,
				'action' => array( 'upload' ),
				'asset' => array( 'com_content' ),
				'baca' => null,
				'c' => array( 'import' ),
				'cid' => array( '20' ),
				'clone' => null,
				'cmd' => array( 'wget' ),
				'cw' => array( 'biq' ),
				'e_name' => array( 'jform_articletext' ),
				'fieldid' => null,
				'file' => array( 'imgmanager' ),
				'filetype' => array( 'csv' ),
				'folder' => null,
				'j' => array( '43' ),
				'method' => array( 'form' ),
				'name' => array( 'a', 'testing.php', 'c99.php', 'm-a.php' ),
				'option' => array( 'com_fabrik', 'com_jce', 'com_media' ),
				'plugin' => array( 'imgmanager' ),
				'r' => array( 'parseInt', 'substr', 'for', 'length' ),
				'rf' => null,
				'rk' => array( '0' ),
				'rs' => array( '_PNG4RFMKhZV9qt96YhXGnTUzsM-' ),
				'stat' => array( 'sites.commerce.legacy.addcart', 'sites.commerce.legacy.visit' ),
				'tableid' => array( '1' ),
				'task' => array( 'plugin' ),
				't4924n' => array( '1' ),
				't8768n' => array( '1' ),
				't8926n' => array( '1' ),
				'tmpl' => array( 'component' ),
				'token' => array( 'up' ),
				'version' => array( '1576' ),
				'view' => array( 'images', 'import', 'registration', 'wrapper' ),
		);
		
		foreach ( $_GET as $key => $value ) {
			if ( array_key_exists( $key, $forbidden_get_parameters ) ) {
				if ( is_null( $forbidden_get_parameters[$key] ) || in_array( $value, $forbidden_get_parameters[$key] ) ) {
					static::emulate_forbidden( __( 'Access denied.', 'xcure' ) );
				}
			}
		}
		
		$forbidden_url_paths = array(
				'/components/',
				'/public_html/',
				'.google-analytics.com/',
				'/admin/fckeditor/editor/filemanager/browser/default/connectors/',
				'/administrator/components/com_acymailing/inc/openflash/php-ofc-library/',
				'/administrator/components/com_civicrm/civicrm/packages/OpenFlashchart/php-ofc-library/',
				'/administrator/components/com_jinc/classes/graphics/php-ofc-library/',
				'/administrator/components/com_jnews/includes/openflashchart/php-ofc-library/',
				'/administrator/components/com_jnewsletter/includes/openflashchart/php-ofc-library/',
				'/administrator/components/com_maianmedia/utilities/charts/php-ofc-library/',
				'/administrator/components/com_redmystic/chart/ofc-library/',
				'/admission/components/com_community/',
				'/admission/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/admission/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/admission/',
				'/ajax/apps/',
				'/amanah2010/components/com_community/',
				'/amanah2010/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/amanah2010/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/amanah2010/',
				'/app/form/field/unique/',
				'/app/form/submit/mTyOFd',
				'/app/form/submit/ZBuASB',
				'/blog/components/com_community/',
				'/blog/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/blog/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/bpfq/xll/jbk/',
				'/br/images/',
				'/bundles/quickyformapp/css/',
				'/cbzuq/ielkq/tgwe/',
				'/checksite/custom-error-page-test',
				'/component/content/category//images/stories/',
				'/component/content/category/images/stories/',
				'/components/com_acymailing/inc/openflash/php-ofc-library/',
				'/components/com_civicrm/civicrm/packages/OpenFlashChart/php-ofc-library/',
				'/components/com_civicrm/civicrm/packages/OpenFlashChart/tmp-upload-images/',
				'/components/com_community/',
				'/components/com_jinc/classes/graphics/php-ofc-library/',
				'/components/com_jinc/classes/graphics/tmp-upload-images/',
				'/components/com_jnews/includes/openflashchart/php-ofc-library/',
				'/components/com_jnews/includes/openflashchart/tmp-upload-images/',
				'/components/com_jnewsletter/includes/openflashchart/php-ofc-library/',
				'/components/com_jnewsletter/includes/openflashchart/tmp-upload-images/',
				'/components/com_maian15/charts/php-ofc-library/',
				'/components/com_maianmedia/utilities/charts/php-ofc-library/',
				'/components/com_maianmedia/utilities/charts/',
				'/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/components/com_redmystic/chart/ofc-library/',
				'/com_jnews/includes/openflashchart/php-ofc-library/',
				'/com_jnews/includes/openflashchart/tmp-upload-images/',
				'/content/components/com_community/',
				'/content/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/content/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/content/images/',
				'/crx/potht/lzgxx/',
				'/data/WHlmap/data/',
				'/dfatm/pkhz/athx/',
				'/editor/editor/filemanager/browser/default/connectors/',
				'/editors/tinymce/jscripts/tiny_mce/plugins/tinybrowser/',
				'/esmam/components/com_community/',
				'/esmam/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/esmam/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/esmam/',
				'/ev/jettt/naan/',
				'/ev/nexb/jlswh/wpc/ufhcyv/',
				'/Fckeditor/editor/filemanager/browser/default/connectors/',
				'/Fckeditor/editor/filemanager/connectors/',
				'/FCKeditor/editor/filemanager/connectors/',
				'/forum/components/com_community/',
				'/forum/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/forum/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/fsqfu/jdvh/uhqp/',
				'/flash/',
				'/highslide/graphics/',
				'/home/administrator/components/com_acymailing/inc/openflash/php-ofc-library/',
				'/home/components/com_community/',
				'/home/components/com_jnews/includes/openflashchart/php-ofc-library/',
				'/home/images/',
				'/index.php/component/users/',
				'/index.php/using-joomla/extensions/components/users-component/registration-form',
				'/idthndocjol/ophxeb/',
				'/joomla/components/com_community/',
				'/joomla/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/joomla/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/joomla/',
				'/jrvvm/ybib/ftyg/gvht/ptxm/ljnxe/',
				'/loja/administrator/components/com_acymailing/inc/openflash/php-ofc-library/',
				'/loja/components/com_community/',
				'/loja/components/com_jnews/includes/openflashchart/php-ofc-library/',
				'/loja/images/',
				'/main/components/com_community/',
				'/main/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/main/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/main/',
				'/manage/fckeditor/editor/filemanager/browser/default/connectors/',
				'/mcaserrarias/components/com_community/',
				'/mcaserrarias/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/mcaserrarias/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/news_fansub/components/com_community/',
				'/news_fansub/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/news_fansub/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/NKHF/components/com_community/',
				'/NKHF/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/NKHF/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/NKHF/',
				'/oeae/RNDCHR,3,15',
				'/plan/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/plan/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/plugins/content/',
				'/plugins/editors/tinymce/jscripts/tiny_mce/plugins/tinybrowser/',
				'/portal/components/com_community/',
				'/portal/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/portal/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/qirzmu/hmwvy/qfqxo/tzgb/whcsp/',
				'/qraf/ofb/unco/',
				'/question/components/com_community/',
				'/question/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/question/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/rancho/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/rancho/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/st/administrator/components/com_acymailing/inc/openflash/php-ofc-library/',
				'/st/components/com_community/',
				'/st/components/com_jnews/includes/openflashchart/php-ofc-library/',
				'/stories/food/',
				'/talk/components/com_community/',
				'/talk/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/talk/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/test/',
				'/test/custom-error-page-test',
				'/text/javascript',
				'/tmp/',
				'/tzlac/lngu/ouvz/',
				'/tzlac/ygrgz/kdiom/odu/dfqb/',
				'/ufpmg/sjypyl/mjl/mhbitx/hoiey/',
				'/undefined',
				'/user/',
				'/uwbmwykg/pajktmbkeseepe/lxhbaake/',
				'/v3/components/com_community/',
				'/v3/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/v3/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/v6/components/com_community/',
				'/v6/components/com_oziogallery/imagin/scripts_ralcr/filesystem/',
				'/v6/components/com_oziogallery2/imagin/scripts_ralcr/filesystem/',
				'/vqqjq/absrj/',
				'/webadmin/fckeditor/editor/filemanager/browser/default/connectors/',
				'/website/images/',
				'/wjxolpp/yrwayu/yby/mgbho/duzd/',
				'/wp-content/a',
				'/wp-content/plugins/autoresponder/',
				'/ygcvloh/pas/dsa/',
				'/_m/images/',
		);
		
		$request_uri = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		
		foreach ( $forbidden_url_paths as $path ) {
			$test = strpos( $request_uri, $path );
			if ( false !== $test ) {
				static::emulate_forbidden( __( 'Access denied.', 'xcure' ) );
			}
		}
		
		$forbidden_url_files = array(
				'____HISTORY.txt',
				/* 0-3 */
				'0day.php',
				'0d4y.php',
				'3xp.php',
				/* A */
				'ahgjgheqca.html',
				'ammap.swf',
				'animacao.swf',
				'arhy.php',
				/* B */
				'barner.gif',
				'bouncer.php',
				'btbi.htm',
				/* C */
				'cei.html',
				'componentz.zip',
				'config.inc.php',
				'configuration.bak',
				'configuration.php.bak',
				'configuration.php.save',
				'configuration.php~',
				'Contato.asp',
				'contato.aspx',
				'contato.htm',
				'contato.html',
				'contato.php',
				'cvgujcngiunuc.htm',
				/* D */
				'dark.php',
				'data_world.xml',
				'dbot.php',
				'Default.asp',
				'dxiibr.html',
				/* E */
				'ec.txt',
				'explore.gif',
				'explore.php',
				/* F */
				'fold.gif',
				'food.php',
				'food.php.phpgif',
				'footer.php',
				'fqb.htm',
				'fu.gif',
				'function.exif-read-data',
				/* G */
				'ganteng.gif',
				'ga.js',
				'gifnxnlfqjpioyxo.html',
				'google.jpg',
				'gpi.htm',
				'gs.gif',
				'gs.php',
				'gs.php.gif',
				'guys.php',
				/* H */
				'help.gif',
				/* I */
				'i.php',
				'icon0.php',
				'id.phtml',
				'img.caption',
				'include.inc.php',
				'index.php 20 safe_mode',
				'index.swf',
				'iptaup.html',
				/* J */
				/* K */
				'kediri.gif',
				'kediri.php.phpgif',
				'KiMciL.php',
				'knlfmoxed.php',
				/* L */
				'link.php',
				'lobex21.php',
				'log.phtml',
				'lol.php',
				'luna.php',
				/* M */
				'm.txt',
				'media-uploads.php',
				'menu.php',
				'menu.swf',
				'mjuf.htm',
				/* N */
				'N3r0.php',
				'nyet.gif',
				'nyet.txt',
				/* O */
				'ofc_upload_image.php',
				'Opa7.php',
				'oqzq.htm',
				/* P */
				'pageinfo.php',
				'petx.php',
				'php.class.php',
				'php exploit.php',
				'Popover requires tooltip.js',
				'principal.swf',
				/* Q */
				'qxam.htm',
				/* R */
				'racrew.php',
				'rapika.php',
				'router.php',
				/* S */
				'sekip.gif',
				'sono.gif',
				'sono.php',
				'spinner.gif',
				'stats.php',
				'sdt.htm',
				/* T */
				'tempe.gif',
				'test.html',
				'thumb_editor.php',
				'tmplist.php',
				'tri.htm',
				'tszdo.html',
				'thksa.html',
				/* U */
				'ucdleb.html',
				'upload.php',
				'upgrade.php',
				'ul.menutop',
				'uploadtest.html',
				'urls.TXT',
				/* V */
				'vito.php',
				/* W */
				'wp-conf.php',
				'writeToFile.php',
				'wos.html',
				/* X */
				'xnight.gif',
				'xxu.php',
				'xxx.php',
				/* Z */
				'zoneh.php',
				'zosc.html',
		);
		
		foreach ( $forbidden_url_files as $file ) {
			$test = strpos( $request_uri, $file );
			if ( false !== $test ) {
				static::emulate_forbidden( __( 'Access denied.', 'xcure' ) );
			}
		}
		
		$wp_safe_redirects = array(
				'/admin.php' => '/wp-admin/index.php',
				'/admin/' => '/wp-admin/',
				'/admin/login.php' => '/wp-login.php',
				'/administrator' => '/wp-admin/',
				'/administrator/' => '/wp-admin/',
				'/administrator/index.php' => '/wp-admin/index.php',
				'/adminstrator/index.php' => '/wp-admin/index.php',
				'/blog/wp-login.php' => '/wp-login.php',
				'/index/administrator/index.php' => '/wp-admin/index.php',
				'/wp' => '/',
				'/wp/' => '/',
				'/wp-admin/undefined' => '/wp-admin/',
				'/wp-admi]' => '/wp-admin/',
				'/wp/wp-admin' => '/wp-admin/',
				'/wp/wp-admin/' => '/wp-admin/',
				'/map.xml' => '/sitemapindex.xml',
				'/map/' => '/sitemap/',
				'/wp/sitemap' => '/sitemap/',
				'/wp/sitemapindex.xml' => '/sitemapindex.xml',
		);
		
		foreach ( $wp_safe_redirects as $key => $value ) {
			$test = strpos( $request_uri, $key );
			if ( false !== $test ) {
				static::redirect( $value );
			}
		}
		
	}
	
}

add_action( 'template_redirect', array( 'XCure', 'template_redirect' ) );