<html>
<head>
    <meta http-equiv="refresh" content="<?= $this->session->flashdata('seconds_redirect');?>;url=<?= $this->session->set_flashdata('url_redirect')?>" />
</head>
<body>

    <?= $this->session->flashdata('message_id');?>

</body>
</html>
