
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="salesforce-community" content="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>">
	<meta name="salesforce-mode" content="<?php echo getenv('SALESFORCE_MODE');?>-callback">
	<meta name="salesforce-save-access-token" content="true">
	<meta name="salesforce-allowed-domains" content="<?php echo getenv('SALESFORCE_HEROKUAPP_URL');?>">
  <script type="text/javascript">
    window.localStorage.setItem('id_token', 'abcdefdasds');
  </script>
	<script src="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=javascript_widget" async defer></script>
</head>
<body></body>
</html>
