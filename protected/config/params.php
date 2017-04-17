<?php
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://");
	$host = 'https://' . $_SERVER['SERVER_NAME'];
	$host_no_ssl = 'http://' . $_SERVER['SERVER_NAME'];
	$REQUEST_URI = explode('/', $_SERVER['REQUEST_URI']);
	$root = $REQUEST_URI[1];
// this contains the application parameters that can be maintained via GUI
	return array(
		//host URL
		'host_url' => $_SERVER['SERVER_NAME'], //'localhost',
		// this is used in error pages
		'adminEmail' => 'ellah.fadhilah93@gmail.com',
		// number of posts displayed per page
		'postsPerPage' => 10,
		// maximum number of comments that can be displayed in recent comments portlet
		'recentCommentCount' => 10,
		// maximum number of tags that can be displayed in tag cloud portlet
		'tagCloudCount' => 20,
		// whether post comments need to be approved before published
		'commentNeedApproval' => TRUE,
		// the copyright information displayed in the footer section
		'copyrightInfo' => 'IZEMA',
		'title' => 'Smartphone',
		'hostUrl' => $host,
		'brands' => array('Apple', 'Samsung', 'Sony', 'Asus', 'Nokia', 'Lenovo', 'Xiaomi')
		// Fpx Configuration
		/*'fpx_config' => array(
			// Communication to plugin FPX
			'communication' => array(
				'adapter' => 'socket',
				'params' => array(
					'server' => '127.0.0.1',
					'port' => '6000',
					'timeOut' => '60'
				)
			),
			// Seller ID provide by FPX
			'fpx_seller_id' => 'SE00002365',
			// Seller Bank provide by FPX
			'fpx_seller_bank' => '01',
			// FPX transact URL
			'fpx_transact_url' => 'https://uat.mepsfpx.com.my/FPXMain/sellerB2CMesgRecv_v2.jsp'
		),*/
	);
