<?php

    $nameFile = $_FILES['uploadedfile']['name'];
    $typeFile = $_FILES['uploadedfile']['type'];
    $tmpfile = $_FILES['uploadedfile']['tmp_name'];

    $c_put_object = curl_init();
    $headers = array("opc-multipart:true");
    curl_setopt($c_put_object, CURLOPT_URL, 'https://objectstorage.ap-sydney-1.oraclecloud.com/p/x8kq8_D3Zys7NLnXFb_31ENmRvDGvvsG_LNTFZ_bbp9be5AKsBq_Fbqmdcx_LlQ9/n/sdaoudywxnsw/b/uts_auliya/o/'. $nameFile);
    curl_setopt($c_put_object, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($c_put_object, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($c_put_object, CURLOPT_RETURNTRANSFER, TRUE);

    $output = curl_exec($c_put_object);

    $data = json_decode($output);

    $postfields = array(
        'uploadedfile' => file_get_contents($tmpfile)
    );

    $c_put_file = curl_init();
    curl_setopt($c_put_file, CURLOPT_URL, 'https://objectstorage.ap-sydney-1.oraclecloud.com/p/x8kq8_D3Zys7NLnXFb_31ENmRvDGvvsG_LNTFZ_bbp9be5AKsBq_Fbqmdcx_LlQ9/n/sdaoudywxnsw/b/uts_auliya/u/'. $nameFile . '/id/' . $data->uploadId . "/1");
    curl_setopt($c_put_file, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($c_put_file, CURLOPT_POST, 1);
    curl_setopt($c_put_file, CURLOPT_POSTFIELDS, file_get_contents($tmpfile));
    curl_setopt($c_put_file, CURLOPT_HTTPHEADER, array('Content-Type: ' . $typeFile));
    curl_setopt($c_put_file, CURLOPT_RETURNTRANSFER, TRUE);

    $put_out = curl_exec($c_put_file);

    $c_post = curl_init();
    curl_setopt($c_post, CURLOPT_URL, 'https://objectstorage.ap-sydney-1.oraclecloud.com/p/x8kq8_D3Zys7NLnXFb_31ENmRvDGvvsG_LNTFZ_bbp9be5AKsBq_Fbqmdcx_LlQ9/n/sdaoudywxnsw/b/uts_auliya/u/' . $nameFile . '/id/' . $data->uploadId . "/");
    curl_setopt($c_post, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($c_post, CURLOPT_POST, 1);

    $post_out = curl_exec($c_post);

// CURL

$gambar = "https://objectstorage.ap-sydney-1.oraclecloud.com/p/x8kq8_D3Zys7NLnXFb_31ENmRvDGvvsG_LNTFZ_bbp9be5AKsBq_Fbqmdcx_LlQ9/n/sdaoudywxnsw/b/uts_auliya/o/".$nameFile;

if(ISSET($gambar)){
	header('location: ad.php');

}
//	$target_path="uploads/";
//	$path = "https://objectstorage.ap-sydney-1.oraclecloud.com/p/x8kq8_D3Zys7NLnXFb_31ENmRvDGvvsG_LNTFZ_bbp9be5AKsBq_Fbqmdcx_LlQ9/n/sdaoudywxnsw/b/uts_auliya/o/"
//	$target_path=$target_path.basename($_FILES['uploadedfile']['name']);

//	if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
//		header('location: ad.php');
//		echo "Upload ".basename($_FILES['uploadedfile']['name'])."Berhasil, Pengirman 3 hari";
//	}

//	else {
//		echo "Terjadi Kesalahan, mohon lakukan dengan benar";
//		header('location: formUpload.php?proses=Gagal');
//	}


?>
